<?php
  session_start();
  include('../db/dbconn.php');


  //세션정보를 가져온다.
  $userid = $_SESSION['userid'];
  //$userid = 'admin';
  $username = $_SESSION['username'];

  $no = $_GET['no'];

  $sql = "SELECT * FROM shop_data WHERE no = '$no'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    die("No data found for no: $no");
  }

  $name = $row['name'];
  $parent = $row['parent'];
  $price = $row['price'];
  $img = $row['img'];
  $comment = $row['comment'];
  $ss_id = $_SESSION['userid'];

  date_default_timezone_set('Asia/Seoul');
  $datetime = date('Y-m-d H:i:s', time());

  $count = '1';


  $sql = "INSERT INTO shop_temp(name, parent, count, price, img, comment, ss_id, datetime) VALUES('$name', '$parent', '$count', '$price', '$img', '$comment', '$ss_id', '$datetime')";



  if (mysqli_query($conn, $sql)) {
    // 삽입이 성공하면 이전 페이지로 리다이렉트 한다.
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
  } else {
    // 에러가 발생하면 에러 메시지를 출력한다.
    echo "에러: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>