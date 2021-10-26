<?php
    $server='127.0.0.1';
    $dbusername='root';
    $dbpassword='gunshipbattle1211';
    $database='DesiCook';
    $con=new mysqli($server,$dbusername,$dbpassword,$database);
    if($con->connect_error)
    {
    die("Connection Failed-: ".$con->connect_error);
    }
?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="framework/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    </HEAD>
    <BODY>
        <?php
            include "nav.php";
        ?>