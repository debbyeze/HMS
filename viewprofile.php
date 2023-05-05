<?php
include 'config.php';


$patid = $_POST['view-patid'];

$sql = "SELECT * FROM patientinfo WHERE patientid = '$patid'
";

$viewresult = $conn -> query($sql);
$row = mysqli_fetch_array($viewresult);

if($row){
 $row['fullname'];
 $row['nationid'];
 $row['patientid'];
 $row['gender'];
 $row['marital'];
 $row['email'];
 $row['bloodtype'];
 $row['height'];
 $row['patweight'];
 $row['bloodpressure'];
 $row['mobile'];
 $row['genotype'];
 $row['dob'];
 $row['country'];
 $row['city'];
 $row['street'];

};

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="doctor.css?v=<?php echo time();?>" />
    <title>patient Bio data</title>
</head>
<body>
<!-- header -->
    <header>
      <h2 class="h5 p-1">Dora hospital</h2>
    </header>
    <main class="container-fluid">
    <div id="back-arrow">
    <img src="images/icons8-arrow-pointing-left-24.png" alt="" height="20px">
    </div>
    <div class="patientProfile container">
          <ul class="list-unstyled">
          <?php
            echo'<li>Name:<span id="viewPatName">'.$row['fullname'] . '</span></li>';
            echo '<li>National ID:<span id="viewPatNatId">'. $row['nationid'] . '</span></li>';
            echo'<li>Patient ID:<span id="viewPatId">' . $row['patientid'] . '</span></li>';
            echo '<li>Gender:<span id="viewPatGender">' . $row['gender'] . '</span></li>';
            echo'<li>Mobile:<span id="viewPatMobile">' . $row['mobile']; . '</span></li>';
            echo'<li>Email:<span id="viewPatEmail">' . $row['email']; . '</span></li>';
            echo'<li>Marital Status:<span id="viewPatMarital">' . $row['marital'];. '</span></li>';
           echo' <li>Address<span id="viewPatAdd">' . $row['street']; . ','. $row['city'];. '</span></li>';
            echo'<li>Date of Birth:<span id="viewPatDob">' .$row['dob']; . '</span></li>';
             echo'<li>Occupation:<span id="viewPatOccu"></span></li>
            <li>LGA:<span id="viewPatLga"></span></li>
            <li>State Of Origin:<span id="viewPatState"></span></li>
            <li>Country:<span id="viewPatCountry"></span></li>';
            echo'<li>Blood Group:<span id="viewPatBloodG"></span></li>
            <li>Genotype:<span id="viewPatGeno">' .$row['genotype']; . '</span></li>';
            echo'<li>HIV Status:<span id="viewPatHiv"></span></li>
            <li>Next Of Kin:<span id="viewPatNkin"></span></li>
            <li>Next of kin phone Contact:<span id="viewPatNkinPho"></span></li>
            <li>Next of Kin Relationship:<span id="viewPatNkinRel"></span></li>
            <li>Patient Recordings:<span id="viewPatRec"></span></li>
            <li>Patient Treatment History:<span id="viewPatTreaHis"></span></li>
            <li>Patient Diagonsis History:<span id="viewPatDiagHis"></span></li>
            <li>Death?:<span id="viewPatDeath"></span></li>';
            ?>
          </ul>
        </div> 
      <script src="index.js"></script>
       <script src="fileTwo.js"></script>
</body>
</html>