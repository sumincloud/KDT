<?php
  session_start();
  include('../db/dbconn.php');

  //세션정보를 가져온다.
  $userid = $_SESSION['userid'];
  $username = $_SESSION['username'];

  $no = $_GET['no'];

  $sql = "DELETE FROM shop_temp WHERE no_data = '$no' and ss_id = '$userid'";


  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "찜 상태 삭제 성공";
    echo "<script>window.history.go(-1)</script>";
  } else {
    echo "찜 상태 삭제 실패";
  }
?>
