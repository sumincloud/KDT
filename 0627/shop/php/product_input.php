<?php
  include('../db/dbconn.php');

  $cate = trim($_POST['cate']);
  $name = trim($_POST['name']);
  $file = $_FILES['myfile']['name'];
  $parent = trim($_POST['parent']);
  $price = trim($_POST['price']);
  $comment = trim($_POST['comment']);
  $memo = trim($_POST['memo']);

  date_default_timezone_set('Asia/Seoul');
  $datetime = date('Y-m-d H:i:s', time());

  // 파일 업로드 주소
  $folder = '../images/shop/';
  $file_root = $folder . basename($file);

  // tmp파일
  $file_tmp = $_FILES['myfile']['tmp_name'];


  echo $cate . '<br>';
  echo $name . '<br>';
  echo $file_root . '<br>';
  echo $parent . '<br>';
  echo $price . '<br>';
  echo $comment . '<br>';
  echo $memo . '<br>';
  echo $datetime . '<br>';


  $sql = "INSERT INTO shop_data(cate, img, name, parent, price, comment, memo, datetime) VALUES('$cate', '$file_root', '$name', '$parent', '$price', '$comment', '$memo', '$datetime')";

  // 쿼리 실행 및 오류 확인
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('상품등록이 완료되었습니다.');</script>";
    //tmp 파일 이동시키기
    move_uploaded_file($file_tmp, $folder . $file);

    echo "<script>location.replace('../product_mg.php');</script>";
    exit;
  } else {
    echo "상품등록 실패 : " . mysqli_error($conn);
    mysqli_close($conn);
  }


?>

