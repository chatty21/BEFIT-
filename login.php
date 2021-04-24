<?php
 $con = mysqli_connect('localhost','root');
 
 if($con){
	 echo "Connection Successfull";
 } else{
     echo "No Connection";
 }	 
?>