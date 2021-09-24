var express = require('express');
var app = express();
const bodyParser = require('body-parser');
const path = require('path');
const crypto = require('crypto');
const bcrypt = require("bcryptjs")



require("./db/conn");
const Register = require("./models/register");

const Contactus = require('./models/contactus');
// For rendering css
app.use(express.static('static'))
app.use('/css', express.static(__dirname + 'static/css'))

app.use('/images', express.static(__dirname + 'static/images'))
app.use(bodyParser.json());

app.use(express.json());
app.use(express.urlencoded({ extended: false }));

app.get('/login', function (req, res) {
    res.sendFile(__dirname + '/views/login.html');
})
app.get('/', function (req, res) {
    res.sendFile(__dirname + '/views/home.html');
})
app.get('/signup', function (req, res) {
    res.sendFile(__dirname + '/views/signup.html');
})



app.get('/contact', function (req, res) {
    res.sendFile(__dirname + '/views/home.html');
})
app.get('/progress', function (req, res) {
    res.sendFile(__dirname + '/views/progress.html');
})
app.get('/contact', function (req, res) {
    res.sendFile(__dirname + '/views/home.html');
})
app.get('/frontend', function (req, res) {
    res.sendFile(__dirname + '/views/frontend.html');
})
app.get('/category', function (req, res) {
    res.sendFile(__dirname + '/views/category.html');
})
app.get('/categorybackend', function (req, res) {
    res.sendFile(__dirname + '/views/categorybackend.html');
})
app.get('/categoryconn', function (req, res) {
    res.sendFile(__dirname + '/views/categoryconn.html');
})

app.post('/signup', async (req, res) => {
    try {
      
        const password = req.body.password;
        const cpassword = req.body.confirmpassword;
       
        if (password === cpassword) {
           
            const registeruser = new Register({
                username: req.body.username,
                email: req.body.email,
                mobile: req.body.mobile,
                password: password,
                confirmpassword: cpassword
            })

            const registered = await registeruser.save();
            console.log("user registered")
            res.status(201).sendFile(__dirname + '/views/login.html');


        }
        else {
            console.log("password")
            res.send("password doesnt matches");
        }
    } catch (error) {
        res.status(400).send(error);
    }
})


app.post('/login', async (req, res) => {
    try {
        const email = req.body.email;
        const password = req.body.password;
        const useremail = await Register.findOne({ email: email });
    

        if (useremail.password ==password) {
            res.status(201).sendFile(__dirname + '/views/home.html');

        } else {
            res.send("invalid details")
        }
    } 
    catch (error) {
        res.status(400).send(error);

    }
})



app.post('/contact', async (req, res) => {
    try {
        console.log("enter data")
         const contactus = new Contactus({
                firstname: req.body.firstname,
                lastname: req.body.lastname,
                email: req.body.email,
                subject:req.body.subject
                
            });
            console.log("data saved")
            const contact = await contactus.save();
            console.log("user registered")
            res.status(201).sendFile(__dirname + '/views/home.html');


        }
       
     catch (error) {
        res.status(400).send(error);
    }
})
app.listen(100, () => {
    console.log("server is working at http://localhost:100/");
})