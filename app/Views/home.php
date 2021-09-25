<?php  $path = "http://localhost/PyramidsOfGreece_CSHTN-08/public"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/static/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/static/css/home.css">

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
      <div class="hero-image">
              <img src="<?php echo $path; ?>/static/images/home.jpg" alt="learning" width=100% height=80%>
              <div class="hero-text">
                  <h1 style="font-size:70px;">E-TEACHER</h1>
                  <h2 style="font-size:25px;">EXPLORE YOUR KNOWLEDGE</h2>
                  
              </div>
          </div>
          <br><br><br><br><br>
        
      <div>
        
              <center>
                  <h2 style="font-size:50px; margin-top: 15px; color:#5cb4d1;" id="aboutus">About Us</h2>
              </center>
              <center>
                  <div class="row2" id="rcorner">
                      <div class="column2 left2">
                          <img src="<?php echo $path; ?>/static/images/images-2.jpg" alt="e leranin icob" class="center">
                      </div>
                      <div class="column2 right2">
                          <p style="font-size:9px; color:white;">Hello it's me</p>
                          <p align="justify">With E-Teacher, we aim to provide students a platorm to practice questions
                            related to coding in various sections such as frontend, backend and connectivity. As a particular
                            student attempts a question the implementation would be checked and the result would be displayed in 
                            the progress.
                          </p>
                      </div>
                  </div>
              </center>
          </div>

      
        <br><br><br><br><br><br>
        <div class="card-header">
          <h2 style="font-size:50px; color:#5cb4d1;">Domains we offer!!</h2>
  
        </div>
        <div class="card">
        <div class="card-text">
           <a href="category.html" style="color: blue;"><h2 id= "fe">Frontend</h2></a>
              </div>
        <div class="card-text">
            <a href="categorybackend.html" style="color: blue;"><h2 id="be">Backend</h2></a>
                      </div>
        <div class="card-text">
            <a href="catergoryconn.html"style="color: blue;"><h2 id="ce">Connectivity</h2></a>
                              </div>
                            </div>
                              
        
                              <br><br><br><br><br><br><br>
                              <div class="container" id="contactus">
                                <div style="text-align:center">
                                    <h2 style="font-size:50px; color:#5cb4d1;">Get In Touch!</h2>
                                    <p style="font-size: 25px;">Call us on <strong>+91 1234567890</strong> or leave us a message:
                                    </p>
                                </div>
                               
                                <div class="row">
                                    <div class="column">
                                        <img src="<?php echo $path; ?>/static/images/imagecont.png" style="width:90%; height: 70%; margin-left: 25px; margin-top: 30px;">
                                    </div>
                                    <div class="column">
                                        <form action="/contact" method="POST">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" name="firstname" placeholder="Your first name..." required>
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" name="lastname" placeholder="Your last name..." required>
                                            <label for="email">Email:</label><br>
                                            <input type="email" id="email" name="email" placeholder="Your email..." required><br>
                                            <label for="subject">Subject</label>
                                            <textarea id="subject" name="subject" placeholder="Write a message..." style="height:120px"
                                                required></textarea>
                                                <center><button type="submit">Submit</button></center><br>
                                        </form>
                                    </div>
                        
                                </div>
                            </div>
                        
           <footer id="footer">
        <div class="copyright">
            <p>© All rights reserved | E-Teacher</p></div>
      
      </body>
      </html>