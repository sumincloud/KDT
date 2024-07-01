<?php
  include('../db/dbconn.php');

  $mb_id = trim($_POST['id']);
  $mb_name = trim($_POST['name']);
  $mb_password = trim($_POST['pass']);
  $mb_email = trim($_POST['email']);
  $mb_address = trim($_POST['address']);
  $mb_phone = trim($_POST['phone']);

  date_default_timezone_set('Asia/Seoul');
  $datetime = date('Y-m-d H:i:s', time());


  /* 해시 패스워드 암호화 */
  $hash_password = PASSWORD_HASH($mb_password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO members(mb_id, mb_name, mb_password, mb_email, mb_address, mb_phone, datetime) VALUES('$mb_id','$mb_name', '$hash_password', '$mb_email', '$mb_address', '$mb_phone','$datetime')";

  // 쿼리 실행 및 오류 확인
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.replace('../login.php');</script>";
  } else {
    echo "회원가입 오류: " . $sql . "<br>" . mysqli_error($conn);
  }

  
  // 연결 종료
  mysqli_close($conn);




?>