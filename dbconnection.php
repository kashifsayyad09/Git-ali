<?php
   $con= mysqli_connect("localhost","root","","Estock");

   if($con== false){
    die("Connection Error:".mysqli_connect_error());
   }
?>
