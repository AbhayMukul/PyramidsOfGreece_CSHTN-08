<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../static/css/signup.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="topnav">
        <a class="active" href="home.html">Home</a>
        <a href="#aboutus">About Us</a>
        <a href="#contactus">Contact Us</a>
        <div class="dropdown">
            <button class="dropbtn">Domains
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="category.html">Frontend</a>
                <a href="categorybackend.html">Backend</a>
                <a href="catergoryconn.html">Connectivity</a>
            </div>
        </div>
        <a href="progress.html">Progress</a>
        <a href="login.html">Login</a>
    </div>
    <div class="signup_background">

        <div class="signup_container">
            <h1>SIGN UP</h1>
            <form name="signup" id="signup">
                <label>Username</label><br>
                <center><input type="text" placeholder="Enter your username" id="username" name="username"></center><br>
                <label>Email</label><br>
                <center><input type="text" placeholder="Enter your email" id="email" name="email"></center><br>
                <label>Mobile number</label><br>
                <center><input type="text" placeholder="Enter your phone" id="mobile" name="mobile"></center><br>
                <label>Password</label><br>
                <center><input type="password" placeholder="Enter password" id="password" name="password"></center><br>
                <label>Confirm Password</label><br>
                <center><input type="password" placeholder="Confirm Password" id="confirmpassword"
                        name="confirmpassword"></center><br>
                <center>
                    <p>Already have an account?<a href="login.html">Login</a></p>
                </center>
                <center><button type="button" onclick="newUpload()">Sign Up</button></center>
            </form>
        </div>
    </div>

    <script>
        function newUpload() {
            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;
            var username = document.getElementById("username").value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('mobile').value;

            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "http://ec2-3-109-123-120.ap-south-1.compute.amazonaws.com:5000/api/uploadUser", true);
            xhttp.setRequestHeader("Content-Type", "application/json");
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    // Response
                    var response = this.responseText;
                    console.log(response);
                }
            };
            var data = { username: username, password: password, email: email, phone: phone };
            xhttp.send(JSON.stringify(data));

            console.log("button pressed");

            var username = document.getElementById("username");
            var email = document.getElementById("email");
            var mobile = document.getElementById("mobile");
            var password = document.getElementById("password");
            var confirmpassword = document.getElementById("confirmpassword");

            if (username.value.trim() == "" && email.value.trim() == "" && mobile.value.trim() == "" && password.value.trim() == "" && confirmpassword.value.trim() == "") {
                alert("Error: No field should be empty");
                return false;
            }
            else {
                true;
            }


            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;

            if (password != confirmpassword) {

                alert("Error: Password doesnot matches");
                return false;
            }
            var username = document.getElementById("username").value;
            if (signup.username.value.length < 6) {
                alert("Error: Username must contain at least six characters!");
                signup.username.focus();
                return false;
            }


            var email = document.getElementById('email');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                alert('Please provide a valid email address');
                email.focus;
                return false;
            }
            var password = document.getElementById("password").value;
            if (signup.password.value.length < 6) {
                alert("Error: Password must contain at least six characters!");
                signup.password.focus();
                return false;
            }

            var y = document.signup.mobile.value;
            if (isNaN(y) || y.indexOf(" ") != -1) {
                alert("Error:Enter numeric value")
                return false;
            }
            if (y.length > 10) {
                alert("Error: Enter 10 characters");
                return false;
            }
        }
    </script>

</body>

</html>