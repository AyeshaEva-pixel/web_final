<?php



$servername = "localhost";
$username = "root";
$password = "";
$db = "newdb";


$con = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT `dname`, `Designation` FROM `doctor_t`";
$exe = mysqli_query($con, $sql);





?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor's List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="doctorList.css">
  </head>
  <body class="m-2">

      <header class="">
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
                            <a class="nav-link" href="#skill">Doctor</a>
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
    <br>
  
     <!-- doctor List -->
     <div class="container mt-5 psy d-flex justify-content-center">
      <h1>doctors</h1>
      <img src="images/bg/8.png" style="height: 60px;" alt="">
     </div>

    <div class=" row  mt-5">
        <div class="card col-lg-4 col-md-4 col-12 mb-4 m-2" style="max-width: 490px;">
            <div class="row g-0">
              <div class="col-md-4 img mt-5">
                <img src="images/doctorList/doctor demo.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Dr. Emon Mahmud</h5>
                  <p class="card-text">MBBS, MCPS, MPHIL (Psychiatry), MMEd, Fellow Child Psychiatry (Pakistan), MACP (USA), FRCP (UK)</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <div class="container d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-success">Booking</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- here -->


          <!-- mail php -->

    <?php 
    while ($row = mysqli_fetch_array($exe)) {

     ?>
          <div class=" card col-lg-4 col-md-4 col-12 mb-4 m-2" style="max-width: 490px;">
            <div class="row g-0">
              <div class="col-md-4 img mt-5">
                <img src="images/doctorList/doctor demo.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row ['dname'] ?></h5>
                  <p class="card-text"><?php echo $row ['Designation']   ?></p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <div class="container d-flex justify-content-end">
                    <a href="booking.html" class=" nav-link">
                    <button type="button" class="btn btn-outline-success">Booking</button>

                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
           } 
          ?>
<!-- main php end-->

<!-- demo start -->


          <div class="card col-lg-4 col-md-4 col-12 mb-4 m-2" style="max-width: 490px;">
            <div class="row g-0">
              <div class="col-md-4 img mt-5">
                <img src="images/doctorList/doctor demo.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">s a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <div class="container d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-success">Booking</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-12 mb-4 m-2" style="max-width: 490px;">
            <div class="row g-0">
              <div class="col-md-4 img mt-5">
                <img src="images/doctorList/doctor demo.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">s a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <div class="container d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-success">Booking</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-12 mb-4 m-2" style="max-width: 490px;">
            <div class="row g-0">
              <div class="col-md-4 img mt-5">
                <img src="images/doctorList/doctor demo.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">s a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <div class="container d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-success">Booking</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-12 mb-4 m-2" style="max-width: 490px;">
            <div class="row g-0">
              <div class="col-md-4 img mt-5">
                <img src="images/doctorList/doctor demo.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">s a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <div class="container d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-success">Booking</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
<!-- above -->


<!-- ddemo end -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>