<?php
include('database/connection.php');
$id=$_GET['del'];
 $query = mysqli_query($conn,"delete from category where id='$id'");




?>