<?php
  include('./dbconn.php');

  $mb_id = trim($_POST['mb_id']);
  $mb_password = trim($_POST['mb_password']);

  echo $mb_id . '<br>';
  echo $mb_password . '<br>';

  //사용자가 입력한 값을 검색
  $sql = "select * from gmarket_member where mb_id='$mb_id'";
  $result = mysqli_query($conn, $sql);
  $mb = mysqli_fetch_assoc($result);

  if (!$mb) {
    echo "<script>alert('가입된 회원아이디가 아닙니다.')</script>";
    echo "<script>location.replace('./login.php');</script>";
    exit;
}


  // 입력한 비밀번호와 데이터베이스에 저장된 비밀번호를 확인한다.
  $hash_password = $mb['mb_password'];

  if (password_verify($mb_password, $hash_password)) {
    echo "<script>alert('로그인 성공')</script>";
    echo "<script>location.replace('./index.html');</script>";
    exit; // 종료
  }else{
    echo "<script>alert('비밀번호가 틀립니다.')</script>";
    echo "<script>location.replace('./login.php');</script>";
  }

  $_SESSION['ss_mb_id'] = $mb_id;
  $_SESSION['ss_mb_name'] = $mb_name;

  mysqli_close($conn);

?>