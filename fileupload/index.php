<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" onsubmit="return confirm('Continue to submit form?');" action="upload.php" enctype="multipart/form-data">
    <div>
      NOTE: Please use the naming convention in the following sample file with no spaces: March2019.pdf<br><br>
      <span>Upload a File:</span>
      <input type="file" name="uploadedFile" />
    </div>
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>