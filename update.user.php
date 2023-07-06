<?php

require_once('connect.php');

$id = $_POST['id'];
$createdAt = $_POST['createdAt'];
$imageUrl = $_POST['imageUrl'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$userAddress = $_POST['userAddress'];
$email = $_POST['email'];
$userPassword = $_POST['userPassword'];

// $id = 2;
// $createdAt = "Test";
// $imageUrl = "Test";
// $firstName = "Test";
// $lastName = "Test";
// $phoneNumber = "Test";
// $userAddress = "Test";
// $email = "Test";
// $userPassword = "Test";

$u = "SELECT email FROM users WHERE email = '$email'";
$result = $connect->query($u);

$sql = "UPDATE users SET id='$id', createdAt='$createdAt', imageUrl='$imageUrl', firstName='$firstName', lastName='$lastName', phoneNumber='$phoneNumber', userAddress='$userAddress', email='$email', userPassword='$userPassword' WHERE email='$email'";
$result = $connect->query($sql);

$data = array("message" => "User updated Successfully", "status" => true);
echo json_encode($data);

?>