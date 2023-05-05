<?php
include 'config.php';



if(isset($_POST["rec-submit"])){
    $recDate = $_POST['rec-date'];
	$recName = $_POST['rec-patName'];
    $recPatientId = $_POST['rec-patId'];
	$recPatType = $_POST['rec-patType'];
    $recHeight = $_POST['rec-height'];
    $recWeight = $_POST['rec-weight'];
    $recBp = $_POST['rec-bp'];
    $recTem = $_POST['rec-tem'];
    $recSymp = $_POST['rec-symp'];
    $recStaff = $_POST["rec-staff"];

    $sql = "SELECT patientid FROM patientinfo WHERE patientid='$recPatientId'";
    $result = $conn -> query($sql);
    $resultRec=mysqli_fetch_array($result);

  

    if($resultRec){
      // database insert SQL code
	    $sql = "INSERT INTO  `nurse recording` (patientid, fullname, patientType, date, height, weight, bp, temperature, symptoms, `staff id`) VALUES ('$recPatientId', '$recName', '$recPatType','$recDate', '$recHeight', '$recWeight', '$recBp', '$recTem', '$recSymp', '$recStaff')";

      if($conn->query($sql) === TRUE){
     header("location:nurse.php?recadded");
       
     }else{
     echo "Error: " . $sql . "<br>" . $conn->error;
     }

     }else{
     echo "Error: " . $sql . "<br>" . $conn->error;
     echo "please register patient";
    };


  

  

};
	$conn->close();



?>