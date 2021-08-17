<div style="margin-left:17%; width: 80%; ">
   <ul class ="breadcrumb">
       <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item active"><a href="news.php">News</a></li>
      <li class="breadcrumb-item active">Add News</li>
    </ul>
  </div>

<div style ="width: 70% ; margin-left: 25%;">

<form action="AddNews.php" method="post" enctype="multipart/form-data" name="categoryform"onsubmit="return validateform() ">
		<h1>Add News</h1>
		<hr>

    <div class="form-group">
    <label for="email"> Title: </label>
    <input type="text" name="title" class="form-control" id="email">
    </div>

    <div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" name="description" id="comment"></textarea>
   </div>

  <div class="form-group">
    <label for="email"> Date: </label>
    <input type="date" name="date" class="form-control" id="email">
  </div>
  
  
<div class="form-group">
    <label for="email"> Thumbnail: </label>
    <input type="file" name="thumbnail" class="form-control img-thumbnail" id="email">
  </div>

   <!-- Choose Category -->

   <div class="form-group">
    <label for="email"> Category: </label>
    <select class="form-control" name="category"> 

    <?php
      include('database/connection.php');
      $query=mysqli_query($conn,"select * from category");
      while ($row=mysqli_fetch_array($query)) {        
    
    ?>
      <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?> </option>
      
    <?php } ?>

    </select>
</div>



</div>