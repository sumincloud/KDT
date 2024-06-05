<?php
  include('./dbconn.php'); //db연결하기

  $id = $_POST['id'];
  //echo $id;
  $pwd = $_POST['pwd'];

  // SQL Injection 방지
  $id = mysqli_real_escape_string($conn, $id);
  $pwd = mysqli_real_escape_string($conn, $pwd);
  

  // 입력한 아이디를 가져옴
  $sql = "select * from free_board where id = '$id'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    echo "<script>alert('아이디가 존재하지 않습니다.');</script>";
    echo "<script>history.back(1);</script>"; // 이전 화면으로 돌아가기
    exit;
  }
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);


  // 비밀번호 일치 확인
  if (password_verify($pwd, $row['pwd'])) {
    $sql = "DELETE FROM free_board WHERE id='$id'";
    mysqli_query($conn, $sql);
    echo "<script>alert('삭제되었습니다.');</script>";
    echo "<script>location.replace('../list.php')</script>";
  } else {
    echo "<script>alert('비밀번호가 다릅니다.');</script>";
    echo "<script>history.back(1);</script>"; // 이전 화면으로 돌아가기

    // DB 연결 닫기
    mysqli_close($conn);
    exit;
  }
  


?>