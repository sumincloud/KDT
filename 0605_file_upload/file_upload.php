<?php

if($_POST['action'] == 'upload'){
  print_r($_FILES['myfile']);
  echo "<br><br>";
  echo $_FILES['myfile']['name'];
  echo "<br><br>";
  echo $_FILES['myfile']['type'];
  echo "<br><br>";
  echo $_FILES['myfile']['size'];
  echo "<br><br>";
  echo $_FILES['myfile']['tmp_name'];
  echo "<br><br>";
  echo $_FILES['myfile']['error'];
  echo "<br><br>";

  //파일 업로드 되는 기능
  $uploaded_file_name_tmp = $_FILES['myfile']['tmp_name'];
  $uploaded_file_name = $_FILES['myfile']['name'];
  $upload_folder = 'upload/';

  move_uploaded_file($uploaded_file_name_tmp, $upload_folder . $uploaded_file_name);

  echo "<p>".$uploaded_file_name."을(를) 업로드 완료하였습니다.</p>";
}



?>

<form name="" action="" method="post" enctype="multipart/form-data">
  파일업로드 : <input type="file" name="myfile">
  <p>
    <input type="submit" name="action" value="upload">
  </p>

  <?php
    $img =  $_FILES['myfile']['name'];
    $upload_folder = 'upload/';

    echo "<img src='./upload/$img ' alt='이미지'>"
  ?>


</form>