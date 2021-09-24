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

app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
});

var db = mysql.createConnection({
    host: "database-3.cxaqyyfsqya9.ap-south-1.rds.amazonaws.com",
    user: "admin",
    password: "admin1234",
    database: "E_Learning"
});

db.connect((err) => {
    if (err) {
        console.log(err);
    }
    else {
        console.log("database conected");
    }
})

app.get('/api/get', (req, res) => {
    let sql = `SELECT * FROM LOGIN_DETAILS;
                `;

    db.query(sql, (err, result) => {
        if (err) {
            console.log(err);
        }
        res.send(result);
    })
})

app.post('/api/uploadUser', (req, res) => {

    let sqlCheckAccountFree = ` SELECT EXISTS
                (SELECT * FROM LOGIN_DETAILS 
                    where username = '${req.body.username}') 
                AS EXIST; 
                `;

    db.query(sqlCheckAccountFree, (err, result) => {
        if (err) {
            console.log(err);
        } else {
            // res.send(result);
            var exists = JSON.parse(JSON.stringify(result[0]));

            if (parseInt(exists.EXIST) == 0) {
                // user doesnt exist
                let sql_LoginDetails = ` INSERT INTO LOGIN_DETAILS
                                         VALUES ('${req.body.username}','${req.body.password}');
                                         `;

                let sql_UserDetails = ` INSERT INTO USER_DETAILS
                                         VALUES ('${req.body.username}','${req.body.email}','${req.body.phone}')
                                         `;

                db.query(sql_LoginDetails, (err, result) => {
                    if (err) {
                        console.log(err);
                    } else {
                        db.query(sql_UserDetails, (err, result) => {
                            if (err) {
                                console.log(err);
                            } else {
                                res.send("uploaded");
                            }
                        })
                    }
                })
            } else if (parseInt(exists.EXIST) == 1) {
                // username taken
                res.send("username not free")
            }
        }
    })
})

app.get('/api/login/:username&:password', (req, res) => {
    let sql = `SELECT password FROM LOGIN_DETAILS
                WHERE username = '${req.params.username}';
                `;

    console.log(req.params.username,req.params.password);

    db.query(sql, (err, result) => {
        if (err) {
            console.log(err);
        } else {
            var JSONString = JSON.parse(JSON.stringify(result[0]));

            if (req.params.password == JSONString.password) {
                res.send("logged-in");
            } else {
                res.send("wrong password");
            }
        }
    })
})
