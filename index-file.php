<?php 
require './include/header.php';
?>
<br><br><br><br><br><br><br>
<div class="container"><form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php 
require './include/footer.php';
?>
