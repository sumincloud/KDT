<?php
  include('./dbconn.php');

  $mb_id = trim($_POST['mb_id']);
  $mb_password = trim($_POST['mb_password']);
  $mb_name = trim($_POST['mb_name']);

  date_default_timezone_set('Asia/Seoul');

  $mb_datetime = date('Y-m-d H:i:s', time());

  echo $mb_id . '<br>';
  echo $mb_password . '<br>';
  echo $mb_name . '<br>';
  echo $mb_datetime . '<br>';

  /* 해시 패스워드 암호화 */
  $hash_password = PASSWORD_HASH($mb_password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO gmarket_member(mb_id, mb_password, mb_name, mb_datetime) VALUES('$mb_id', '$hash_password', '$mb_name','$mb_datetime')";

  // 쿼리 실행 및 오류 확인
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.replace('./login.php');</script>";
  } else {
    echo "회원가입 오류: " . $sql . "<br>" . mysqli_error($conn);
  }

  
  // 연결 종료
  mysqli_close($conn);




?>