var express = require('express');
var mysql = require('mysql');
var cors = require('cors');
var bodyparser = require('body-parser');
const e = require('express');
var app = express();

app.use(cors());
app.use(bodyparser.json());
app.listen('5000', () => {
    console.log('server running at port 5000');
});

var db = mysql.createConnection({
    host: "database-3.cxaqyyfsqya9.ap-south-1.rds.amazonaws.com",
    user: "admin",
    password: "admin1234",
    database: "E_Learning"
});

function isEmpty(obj) {
    for (var key in obj) {
        if (obj.hasOwnProperty(key))
            return false;
    }
    return true;
}

// check db connection
db.connect((err) => {
    if (err) {
        console.log(err);
    }
    else {
        console.log("database conected");
    }
})

app.get('/api', (req, res) => {
    res.send("API working")
})

app.get('/api/get', (req, res) => {
    let sql = `SELECT * FROM QUESTION_DEATILS;
                `;

    db.query(sql, (err, result) => {
        if (err) {
            console.log(err);
        }
        res.send(result);
    })
})

app.get('/api/getUserProgress', (req, res) => {
    let sql = `SELECT * FROM USER_PROGRESS
                WHERE username = ${req.body.username};
                `;

    db.query(sql, (err, result) => {
        if (err) {
            console.log(err);
        }
        else {
            res.send(result);
        }
    })

})

app.post('/api/uploadUser' , (req,res) => {
    
    let sqlCheckAccountFree = ` SELECT EXISTS
                (SELECT * FROM LOGIN_DETAILS 
                    where username = '${req.body.username}') 
                AS EXIST; 
                `; 

    db.query(sqlCheckAccountFree,(err,result) => {
        if(err) {
            console.log(err);
        }else{
            // res.send(result);
            var exists = JSON.parse(JSON.stringify(result[0]));

            if(parseInt(exists.EXIST) == 0){
                // user doesnt exist
                let sql_LoginDetails = ` INSERT INTO LOGIN_DETAILS
                                         VALUES ('${req.body.username}','${req.body.password}');
                                         `; 

                let sql_UserDetails = ` INSERT INTO USER_DETAILS
                                         VALUES ('${req.body.username}','${req.body.email}','${req.body.phone}')
                                         `;
    
                db.query(sql_LoginDetails,(err,result) => {
                    if(err){
                        console.log(err);
                    }else{
                        db.query(sql_UserDetails,(err,result) => {
                            if(err){
                                console.log(err);
                            }else{
                                res.send("uploaded");
                            }
                        })
                    }
                })
            }else if (parseInt(exists.EXIST) == 1){
                // username taken
                res.send("username not free")
            }
        }
    })
} )
