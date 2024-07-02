<?php
  session_start();
  include('../db/dbconn.php');

  // 세션정보를 가져온다.
  if (!isset($_SESSION['userid'])) {
    http_response_code(401); // 401 Unauthorized 상태 코드 반환
    echo json_encode(array("message" => "로그인이 필요합니다."));
    exit();
  }

  //세션정보를 가져온다.
  $userid = $_SESSION['userid'];
  $username = $_SESSION['username'];

  $no = $_GET['no'];

  $sql = "SELECT * FROM shop_data WHERE no = '$no'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    http_response_code(404); // 404 Not Found 상태 코드 반환
    echo json_encode(array("message" => "No data found for no: $no"));
    exit();
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


  $sql = "INSERT INTO shop_temp(no_data, name, parent, count, price, img, comment, ss_id, datetime) VALUES('$no', '$name', '$parent', '$count', '$price', '$img', '$comment', '$ss_id', '$datetime')";



  if (mysqli_query($conn, $sql)) {
    // 삽입이 성공하면 JSON 응답 반환
    echo json_encode(array("message" => "Success"));
  } else {
    // 에러가 발생하면 JSON 응답 반환
    http_response_code(500); // 500 Internal Server Error 상태 코드 반환
    echo json_encode(array("message" => "에러: " . $sql . "<br>" . mysqli_error($conn)));
  }
  
  mysqli_close($conn);
?>