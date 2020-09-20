<?php
$insert = false;
if(isset($_POST['name']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
// echo var_dump($con);
if(!$con)
{
    die ("Connection was not set due to-".mysqli_connect_error());
}
else{
   // echo "Connection successfull!";
}
$name  = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
$pnumber = $_POST['pnumber'];
$aadharno = $_POST['aadharno'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip_data`.`batch-1` ( `name`, `number`, `email`, `address`, `pnumber`, `aadhar_no`, `description`, `date`)  VALUES ('$name', '$number', '$email', '$address', '$pnumber', '$aadharno', '$desc', current_timestamp());";

//echo $sql;

if($con->query($sql)==TRUE)
{
    //echo "Successfully Inserted ";
    $insert = TRUE;
}
else{
    echo "ERROR:$sql $con->error_log";
}
//closing the connection to db
$con->close();
}
?>