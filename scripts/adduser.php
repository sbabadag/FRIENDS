<?php
include_once 'scripts/form-u184.php';
//$Name =   "dsafsdffse";
//$Email = "olmayu";
$Sex  = "ERKEK";
$Reg_date = "1974-06-08";
$id = 1;


if(isset($_POST['Onayla']))
{    addUser($Name,$Sex,$Email,$Reg_date);}

//header("Location: /scripts/form-u375.php");
function addUser($sName,$sSex,$sEmail,$sReg_date)
{
    $servername = "sql101.ihostfull.com";
    $username = "uoolo_22897231";
    $password = "Seloken9292es.";
    $dbname = "uoolo_22897231_sbabadag";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
       if ($conn->connect_error) {        die("Connection failed: " . $conn->connect_error);    }
       $sql = "INSERT INTO users (name,sex,email,reg_date) VALUES ('$sName','$sSex','$sEmail','$sReg_date')";
       $id =   mysqli_insert_id($conn);
       if ($conn->query($sql) === TRUE) {        echo "New record created successfully";    } else {        echo "Hata: " . $sql . "<br>" . $conn->error;    }
       $conn->close();
}
?>