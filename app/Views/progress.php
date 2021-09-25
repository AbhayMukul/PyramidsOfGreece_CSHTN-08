<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress</title>
    <link rel="stylesheet" type="text/css" href="../static/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../static/css/progress.css">

</head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['NO OF QUESTIONS ATTEMPTED', 50],
          ['TOTAL NO OF QUESTIONS ATTEMPTED CORRECTLY',50]
        ]);

      

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
      google.charts.setOnLoadCallback(drawBackgroundColor);

function drawBackgroundColor() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        ]);

var options = {
  hAxis: {
    title: 'Total number of questions attempted'
  },
  vAxis: {
    title: 'Total number of questions attempted correctly'
  },
  backgroundColor: '#b8e9fa'
};

var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
chart.draw(data, options);
}

google.charts.setOnLoadCallback(frontend);

function frontend() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        ]);

var options = {
  hAxis: {
    title: 'Total number of questions attempted'
  },
  vAxis: {
    title: 'Total number of questions attempted correctly'
  },
  backgroundColor: '#b8e9fa'
};

var chart = new google.visualization.LineChart(document.getElementById('chart1_div'));
chart.draw(data, options);
}

google.charts.setOnLoadCallback(frontend);

function frontend() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        ]);

var options = {
  hAxis: {
    title: 'Total number of questions attempted'
  },
  vAxis: {
    title: 'Total number of questions attempted correctly'
  },
  backgroundColor: '#b8e9fa'
};

var chart = new google.visualization.LineChart(document.getElementById('chart1_div'));
chart.draw(data, options);
}
google.charts.setOnLoadCallback(backend);

function backend() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        ]);

var options = {
  hAxis: {
    title: 'Total number of questions attempted'
  },
  vAxis: {
    title: 'Total number of questions attempted correctly'
  },
  backgroundColor: '#b8e9fa'
};

var chart = new google.visualization.LineChart(document.getElementById('chart2_div'));
chart.draw(data, options);
}
google.charts.setOnLoadCallback(connectivity);

function connectivity() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        ]);

var options = {
  hAxis: {
    title: 'Total number of questions attempted'
  },
  vAxis: {
    title: 'Total number of questions attempted correctly'
  },
  backgroundColor: '#b8e9fa'
};

var chart = new google.visualization.LineChart(document.getElementById('chart3_div'));
chart.draw(data, options);
}
google.charts.setOnLoadCallback(records);
      function records() {
        var data = google.visualization.arrayToDataTable([
          ['Domains', 'Percentage of questions attempted correctly'],
          ['Frontend', 45],
          ['Backend',35],
          ['Connecticity',20]
        ]);
        var options = {
         
          is3D: true,
        };
      

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
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
        <div class="container">
            <div class="card">
                <div class="card-text">
                      <h2 id= "te">Total number of questions attempted</h2>
                      <h2 id= "tec">Total number of questions attempted correctly</h2>
                      <div id="chart_div" style="width: 350px; height: 300px;"></div>
                      </div>
           
        </div>
        <br><br><br><br><br><br>
       
        <div class="card1">
        <div class="card-text1">
              <h2 id= "fe">Frontend</h2>
              <h2 id= "fe1">Total number of questions attempted</h2>
              <h2 id= "fe2">Total number of questions attempted correctly</h2>
              <div id="chart1_div" style="width: 330px; height: 270px;"></div>
              </div>
        <div class="card-text1">
                      <h2 id="be">Backend</h2>
                      <h2 id= "fe1">Total number of questions attempted</h2>
                      <h2 id= "fe2">Total number of questions attempted correctly</h2>
                      <div id="chart2_div" style="width: 330px; height: 270px;"></div>
                      </div>
        <div class="card-text1">
                              <h2 id="ce">Connectivity</h2>
                              <h2 id= "fe1">Total number of questions attempted</h2>
                              <h2 id= "fe2">Total number of questions attempted correctly</h2>
                              <div id="chart3_div" style="width: 330px; height: 270px;"></div>
                              </div>
                            </div>
                            <label>Your progress with respective to each domain</label>
                            <br><br><br><br>
                            
        <div id="piechart_3d" style="width: 900px; height: 500px;"> 

        </div>


        </div>
       
</body>
</html>