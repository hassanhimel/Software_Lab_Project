<?php
      include('database/connection.php');
      $query=mysqli_query($conn,"select * from category");
      while ($row=mysqli_fetch_array($query)) {        
    
    ?>
      <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?> </option>
      
    <?php } ?>
      </select>
  </div>

  
  <input type="submit" name="submit" class="btn btn-primary" value="Update">
</form>

<script>
  
function validateform(){
  var x = document.forms['categoryform']['title'].value;
  var y = document.forms['categoryform']['description'].value;
  var z = document.forms['categoryform']['date'].value;
  var w= document.forms['categoryform']['category'].value;
  if (x=="") {
    alert('Title must be filled out!');
    return false;
  }
  if (y=="") {
    alert('Description must be filled out!');
    return false;
  }
  
   
}

</script>
	
</div>
<?php
include('include/footer.php');

?>

<?php 
include('database/connection.php');

include('database/connection.php');
if (isset($_POST['submit'])) {
  
  $id=$_POST['id'];
  $title=$_POST['title'];
       $description=$_POST['description'];
           $date=$_POST['date'];
               $thumbnail=$_FILES['thumbnail']['name'];
               $tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
                   $category=$_POST['category'];
              move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

             $sql=mysqli_query($conn,"update news set title='$title',description='$description',date='$date',thumbnail='$thumbnail',category='$category' where id='$id' ");

    if (sql) {
      echo "<script> alert('news updated') </script> "; 
     

    echo "<script>window.location='http://localhost/newsportal/news.php';</script>"; 

      
    }else{
      echo "News Not Update";
    }

}

?>