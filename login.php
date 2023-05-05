<?php
session_start();
include 'config.php';

if(isset($_REQUEST['login']))
{
// $user = $_REQUEST['username'];
$pass = $_REQUEST['pass'];
$user = $_REQUEST['username'];
$res = "SELECT * FROM staffinfo WHERE userid = '$user'AND userpassword = '$pass' AND profession='nurse'";

$resdoc = "SELECT * FROM staffinfo WHERE userid='$user' AND userpassword='$pass'  AND profession='doctor'";

$result = $conn -> query($res);
$resultNurse=mysqli_fetch_array($result);

$resultDoc = $conn -> query($resdoc);
$resultDoctor=mysqli_fetch_array($resultDoc);

if($resultNurse)
{
	
	$_SESSION["loginsuccess"]=$resultNurse['userid'];
    
	header("location:nurse.php");

}elseif($resultDoctor)
{
    $_SESSION["logindrsuccess"]=$resultDoctor['userid'];

	header("location:doctor.php");
}else	
{
	header("location:index.php?err=1");
	
};



};

?>