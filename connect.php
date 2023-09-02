<?php
$fullname = $_POST['fullName'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$subject = $_POST['subject1'];
$message = $_POST['message1'];

//database connection
$conn = mysqli_connect('localhost','root','','test112') or die("connection failed");
$sql = "INSERT INTO contact_form(fullname, phonenumber, email, subject1, message1) VALUES ('{$fullname}','{$phonenumber}',
'{$email}','{$subject1}','{$message1}')";
$result = mysqli_query($conn, $sql) or die("Query Failed");
    
?>