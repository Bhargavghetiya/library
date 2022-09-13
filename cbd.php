<?php
$username="root";
$password="";
$server="localhost";
$db ="form";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?> <script> alert("conected"); </script> <?php
     }else{
    ?> <script> alert("not conected"); </script> <?php 
} 
?>

