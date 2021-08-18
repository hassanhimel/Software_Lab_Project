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