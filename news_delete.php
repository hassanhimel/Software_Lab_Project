<?php

include('database/connection.php');
$id=$_GET['del'];
 $query = mysqli_query($conn,"delete from news where id='$id'");
 if (query) {
 	echo "<script> alert('Newsw Deleted') </script> "; 
 	echo "<script>window.location='http://localhost/newsportal/news.php';</script>";
 }else{
 	echo "Please Try Again";
 }?>