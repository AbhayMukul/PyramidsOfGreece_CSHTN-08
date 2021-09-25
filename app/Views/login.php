<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../static/css/login.css">
    <script>
        function validateForm()
        {
            var username=document.getElementById("username");
       
            var password=document.getElementById("password");
           
            if(username.value.trim()=="" && password.value.trim()=="") {
                
                alert("Error: Username and Password should be entered");
                return false;	
            }
            else
            {
                true;
            }
            
        
            if(username.value.trim()=="") 
            {
                alert("Error: Username should not be empty");
                return false;	
            }
            else
            {
                true;
            }
           if(password.value.trim()==""){
          
            
                alert("Error: Password should not be empty");
                return false;	
            }
            else
            {
                true;
            }
           
        }
    </script>
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
    <div class="login_background">
        <div class="login_container">
            <h1>LOGIN</h1><br>
            <form method="POST"  onsubmit="return validateForm()">
                <label>Username</label><br>
                <center><input type="text" id ="username" placeholder="Enter your username"  name="username" ></center><br><br>
                <label>Password</label><br>
                <center><input type="password" id = "password" placeholder="Enter password" name="password"></center><br>
                <center>
                    <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
                </center>
                <center><button type="submit">Login</button></center>
            </form>
        </div>
    </div>
  
</body>

</html>