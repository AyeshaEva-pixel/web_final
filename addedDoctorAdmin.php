<?php



$servername = "localhost";
$username = "root";
$password = "";
$db = "newdb";


$con = mysqli_connect($servername, $username, $password, $db);



$sql = "SELECT * FROM `doctor_t`";

$exe = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="Admin.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctorList.html">Doctor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Notification</a>
                        </li>
                    </ul>
                </div>
    
            </div>
        </nav>
    </header>
    <br>

    <div class="container">
        <header>
            <h1>Admin Page</h1>
        </header>
        <section class="view-doctors">
            <h2>View Doctor Availability</h2>
            <table>
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Designation / Details</th>
                    </tr>
                </thead>
                <tbody>
        <?php  
        while ($row = mysqli_fetch_array($exe)) {
            ?>

                    <tr>
                        <td><?php echo $row ['dname'] ?> </td>
                        <td><?php echo $row['Designation'] ?></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </section>

       
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>