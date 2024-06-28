<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP파일 업로드</title>
  </head>
  <body>
<?php
  if ( $_POST[ 'action' ] == "Upload" ) {
    print_r( $_FILES[ 'myfile' ] );
    echo "<br><br>";
    echo $_FILES[ 'myfile' ][ 'name' ];
    echo "<br><br>";
    echo $_FILES[ 'myfile' ][ 'type' ];
    echo "<br><br>";
    echo $_FILES[ 'myfile' ][ 'size' ];
    echo "<br><br>";
    echo $_FILES[ 'myfile' ][ 'tmp_name' ];
    echo "<br><br>";
    echo $_FILES[ 'myfile' ][ 'error' ];

    $uploaded_file_name_tmp = $_FILES[ 'myfile' ][ 'tmp_name' ];
    $uploaded_file_name = $_FILES[ 'myfile' ][ 'name' ];
    $upload_folder = "uploads/";
    move_uploaded_file( $uploaded_file_name_tmp, $upload_folder . $uploaded_file_name );
    echo "<p>" . $uploaded_file_name . "을(를) 업로드하였습니다.</p>";
  }
?>
<form action="" method="post" enctype="multipart/form-data">
  <p><input type="file" name="myfile"></p>
  <p><input type="submit" name="action" value="Upload"></p>
  <p><input type="reset" value="다시올리기"></p>
  
  <?php 
    $img = $_FILES[ 'myfile' ][ 'name' ]; 
    //echo $img . "<br>";
    echo "<img src='./uploads/".htmlspecialchars($img)."'>";
  ?>
  
</form>
  </body>
</html>