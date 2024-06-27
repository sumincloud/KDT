<?php
  include('../db/dbconn.php');

  // POST로 전달된 아이디 가져오기
  $id = $_POST['mb_id'];

  // SQL 쿼리를 사용하여 아이디 중복 여부 확인
  $sql = "SELECT * FROM members WHERE mb_id = '$id'";
  $result = $conn->query($sql);

  // 결과 검사 및 출력
  if ($result->num_rows > 0) {
    echo "이미 사용 중인 아이디입니다.";
  } else {
    echo "사용 가능한 아이디입니다.";
  }

?>
