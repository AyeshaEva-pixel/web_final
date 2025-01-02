<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "newdb";


$con = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT * FROM `analysisdata` order by id desc limit 1 ";
$exe = mysqli_query($con, $sql);

$row = mysqli_fetch_array($exe);

$value = $row['value'];


?>

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: true, // change to true		
	title:{
		text: "Stress Level"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "bar",
		dataPoints: [
			{ label: "Stress level", y:<?php echo $row ['value'] ?>  },
        
			
		]
	}
	]
});
chart.render();

}
</script>

<style>
    .container {
    }
    .status{
        /* border: 2px solid ; */
        height: 250px;
    }
    .img{
        /* border: 2px solid green; */
        background-color: rgb(240, 244, 244);
        border-radius: 50px;
        
    }
    .img img{
        height: 70px;
    }
    h2{
        /* border: 2px solid green; */
    }
    .tbl{
        border: 2px dashed red;
        
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


    <!-- nav -->
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg fixed-top bg-body-secondary ">
            <div class="container">
                <a class="navbar-brand p-0 m-0" href="#">
                    <img src="images/Mental Health.png" style="width: 140px; height: 50px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="font-page.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctorList.php">Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Notification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                    </ul>
                </div>
    
            </div>
        </nav>
    </header>
    <br>

    <!-- nav -->

    <div class="container text-center mb-5 mt-4">
        <h1>Mood and stress Level</h1>
    </div>

    <br>

<div class="row container mt-3 status d-flex justify-content-between">
<div class="container img col-4 col-md-7 col-lg-4 col-sm-12 d-flex align-items-center justify-content-around">
<?php 
if($value<3 ){ ?>
    <h2 class="text-success">GOOD</h2>
    <img src="images/very good.png" class="rounded float-start bg-dark" alt="..." >
    

<?php }
?> 
<?php 
if($value==3 ){ ?>
    <h2 class="text-success">NEUTRAL</h2>
    <img src="images/neutral.png" class="rounded float-start bg-dark" alt="..." >
    

<?php }
?>
<?php 
if($value>3 ){ ?>
    <h2 class="text-success">HIGH</h2>
    <img src="images/bad.png" class="rounded float-start bg-dark" alt="..." >
    

<?php }
?>

</div>

<div id="chartContainer" class="container col-4 mb-2" style="height: 300px; width: 50%;">
 
</div>
</div>
<br> <br>
<div class="container mt-5 mt-md-5 mt-sm-5 tbl">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Level</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Very Low</td>
            
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Low</td>
            
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Neutral</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Moderate</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>High</td>
          </tr>
        </tbody>
      </table>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"> </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>