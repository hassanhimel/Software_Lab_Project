<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico"> 

    <title>Online News</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    
  </head>

  <body> 
  <div class="container">


<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <a class="text-muted" href="#"> <div id="google_translate_element"></div></a>
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="#">Online News</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">

    
     <form action="search.php" method="post">
   <div class="input-group sm-3">
   
    <input type="text" name="search" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-success" name="submit" type="submit">Go</button> 
    </div>
  </div>

</form>
    </div>
  </div>
</header>

<div class="nav-scroller py-1 mb-2">
        
        </nav>
      </div>

     <div class="card" style="width:100%; height:300px;" >
      <img class="card-img-top" src="https://content.thriveglobal.com/wp-content/uploads/2018/03/news-1.jpg" alt="Card image" height="200" >
      <div class="card-img-overlay">
        <h4 class="card-title">Online News</h4>
        <p class="card-text">This is a News portal.</p>
       
      </div>
    </div>
    <div class="row mb-2">

    <?php
    include('database/connection.php');
     $query1 =mysqli_query($conn,"select * from news order by id desc limit 1,2 ");
      while($row=mysqli_fetch_array($query1)){
         $category=$row['category'];
         $date=$row['date'];
         $title=$row['title'];
         $thumbnail=$row['thumbnail'];

      

    ?>
  </body>

</html>