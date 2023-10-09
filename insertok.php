<?php include "db.php";?>
<?php

$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$travellers = $_POST['travellers'];
$boarding = $_POST['boarding'];
$departure = $_POST['departure'];
$aadhar = $_POST['aadhar'];
$query=mysqli_query($conn,"INSERT INTO class(firstname,lastname,email,age,travellers,boarding,departure,aadhar) VALUES('$firstname','$lastname','$email','$age','$travellers','$boarding','$departure','$aadhar')");
?>