<?php
    var_dump($_FILES);
    $allowedExts = array("pdf", "doc", "docx");
    $extension = end(explode(".", $_FILES["file"]["name"]));
    
    if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/docx") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts))
    {
      if ($_FILES["file"]["error"] > 0)
      {
         echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
         echo "Error";
      }
      else
      {
        $path = "/var/www/html/Validationtest/resumes/";
        move_uploaded_file($_FILES["file"]["tmp_name"], $path.$_FILES['file']['name']);
        header('Location:invoice.php');
      }
  }
?>