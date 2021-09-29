<?php

include('database/connection.php');
$id=$_GET['del'];
 $query = mysqli_query($conn,"delete from subcategory where id='$id'");
 if (query) {
 	echo "<script> alert('Sub-category deleted successfully') </script> "; 
 	echo "<script>window.location='http://localhost/newsportal/categories.php';</script>";
 }else{
 	echo "Please Try Again";
 }
?>

