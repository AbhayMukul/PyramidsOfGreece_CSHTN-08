<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../static/css/category.css">

</head>
<script>
function med_rec_show_basic_info() {
  var x = document.getElementById("basic_info");
  if (x.style.display === "none") {
  x.style.display = "block";
  }
  else {
  x.style.display = "none";}
}

function med_rec_show_med_hist() {
  var x = document.getElementById("med_hist");
  if (x.style.display === "none") {
  x.style.display = "block";
  }
  else {
  x.style.display = "none";}
}
</script>
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
      
	  <div class="border1">
	    <div class="dashboard">
		<br>
		    <label style="font-size:100px;  background:#95daff; border:2px solid black">P1</label>
        <p style="margin-top:-100px; margin-left: 180px;"><img style="height:25px;" src="../static/images/location_img.png">Mumbai</p>
		    <p style="margin-left: 180px;"><img style="height:25px;" src="../static/images/dob_img.png" >18/12/20</p><br>
		    <p>Name:</p>
		    <p>Total number of questions attempted: </p>
		    <p>Total number of questions attempted correctly</p><br><br>
	    </div>
        </div>
        <div id="med_rec_appt_type" class="med_rec_appt_type">
            <button class="med_rec_show_basic_info" onclick="med_rec_show_basic_info()">Courses</button>
            <button class="med_rec_show_med_hist" onclick="med_rec_show_med_hist()">Questionaire</button>
        </div>
        <br><br><br>
        <div class="med_rec_wrapper" id="basic_info" style="display:none;">
          <div class="row">
            <div class="column3" style="background-color:#fff;">
              <h2>Courses</h2>
              <button class="btn">View Course</button>
             </div>
            </div>
               </div>
               <div class="med_rec_med_his_wrap" id="med_hist" style="display:none;">
                <div class="row">
                  <div class="column3" style="background-color:#fff;">
                    <h2>Question 1</h2>
                    <button class="btn">View Question</button>
                   
                  </div>
                  <div class="column4" style="background-color:#fff;">
                    <h2>Question 1</h2>
                    <button class="btn">View Question</button>
                 
                  </div>
                  <div class="column5" style="background-color:#fff;">
                      <h2>Question 1</h2>
                      <button class="btn">View Question</button>
                 </div>  
                 </div>
            
                </div>
            
          
               </body>
</html>