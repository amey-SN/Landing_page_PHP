<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Landing Page</title>
</head>
<body>
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
// else {
//     echo "name field can't be empty";
// }

?>
    <img class='bg' src="https://external-preview.redd.it/GOkP8onbuyjGmN9Rc8Que5mw21CdSw6OuXpAKUuE6-4.jpg?auto=webp&s=2bc0e522d1f2fa887333286d557466b2be00fa5e" alt="GOVT. COLLEGE OF ENGG.,JALGAON">
<div class="container">
   
    <h3 style="color:rgba(202, 202, 202, 0.966);">
    Welcome  to the landing page of
    </h3>
    <p id="heading" >Government College of engineering , Jalgaon</p>
    <p style="color:yellow; ">This page is hosted to gather the information of the travellies on the College Tour. </p>

    <?php

    if($insert == true)
    {   
            echo "<p id='submsg' >Congrats you have successfully registered for the trip and flying U.S.</p>";
    }
    ?>
    <p id="msg"></p>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter your Name here ..">
        <input type="text" name="number" placeholder="Enter your Contact No. here ..">
        <input type="text" name="email" placeholder="Enter your Email-Id here ..">

        <input type="text" name="address" placeholder="Enter your Address here ..">
        <input type="text" name="pnumber" placeholder="Enter your Parent Contact No. here ..">
        <input type="text" name="aadharno" placeholder="Enter your AADHAR No. here ..">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here.. "></textarea><br>
       <button id="submit"  type="submit" >Submit</button>
       <button id="reset" type="reset">Reset</button>
    </form>
    
</div>

</body>

<script src="index.js"></script>
</html>