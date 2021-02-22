<?php
session_start();
$con = mysqli_connect("localhost","root","","spacenet");

if(isset($_POST['insert_data'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $query = "INSERT INTO contact (fname,lname,email,message) VALUES ('$fname', '$lname', '$email', '$msg')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['status'] = "Successfully!";
        header("Location: contact.php");
    }
}


//include "dbconect.php";

//$fname = $_REQUEST['fname'];
//$lname = $_REQUEST['lname'];
//$email = $_REQUEST['email'];
//$msg = $_REQUEST['message'];

//Inserting date to table

//$query=mysqli_query($db_connect, "INSERT INTO contact(fname,lname,email,message) VALUES ('$fname', '$lname', '$email', '$msg')") or die(mysqli_error($db_connect));

//mysqli_close($db_connect);

//header("location:contact.php?note=success");