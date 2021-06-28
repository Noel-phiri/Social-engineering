<?php

include 'database.php'
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO 'user_login'('email','password')
VALUES ('$id','$email','$password','$phoneNo')";
if (mysqli_query($conn,$sql)){
    echo json_encode(array("statusCode"=>200));
}
else{
    echo json_encode(array("statusCode"=>201));
}
mysqil_close($conn);
?>