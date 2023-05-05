<?php
include 'config.php';

// get the post records
	if(isset($_POST["submit"])){
    $txtNationId = $_POST['txtNationId'];
	$txtFname = $_POST['txtFname'];
    $txtPatientId = $_POST['txtPatientId'];
	$txtEmail = $_POST['txtEmail'];
	$txtGender = $_POST['txtGender'];
	$txtMarital = $_POST['txtMarital'];
	$txtBlood = $_POST['txtBlood'];
    $txtHeight = $_POST['txtHeight'];
    $txtWeight = $_POST['txtWeight'];
    $txtBp = $_POST['txtBp'];
	$txtPhone = $_POST['txtPhone'];
    $txtGenotype = $_POST['txtGenotype'];
	$txtDob = $_POST['txtDob'];
	$txtCountry = $_POST['txtCountry'];
	$txtCity = $_POST['txtCity'];
	$txtStr = $_POST['txtStr'];
	$txtNation = $_POST['txtNation'];
    $txtPhoto = $_POST['txtPhoto'];
   


	// database insert SQL code
	$sql = "INSERT INTO  patientinfo (nationid, fullname, patientid, email, gender, marital, bloodtype, height, patweight, bloodpressure, mobile, genotype, dob, country, city, street, nation, photo) VALUES ('$txtNationId', '$txtFname', '$txtPatientId','$txtEmail', '$txtGender', '$txtMarital', '$txtBlood', '$txtHeight', '$txtWeight', '$txtBp', '$txtPhone', '$txtGenotype',  '$txtDob', '$txtCountry', '$txtCity', '$txtStr', '$txtNation', '$txtPhoto')";
};

if($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location:addpatient.php?added");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};


	$conn->close();

?>


