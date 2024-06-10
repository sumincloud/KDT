<?php
include('./dbconn.php'); // db연결하기

$id = $_POST['id'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$memo = $_POST['memo'];
$pwd = $_POST['pwd'];

$id = mysqli_real_escape_string($conn, $id);
$name = mysqli_real_escape_string($conn, $name);
$subject = mysqli_real_escape_string($conn, $subject);
$memo = mysqli_real_escape_string($conn, $memo);
$pwd = mysqli_real_escape_string($conn, $pwd);


//새로운 비밀번호에 대해서 해싱처리
$hashpassword = password_hash($pwd, PASSWORD_DEFAULT); //MySQL 5.5 이상 사용 가능. 

//새롭게 업데이트 하는 부분
$sql = "UPDATE free_board
        SET subject = '$subject',
            name ='$name',
            memo ='$memo',
            pwd ='$hashpassword' 
        WHERE id = '$id'";

$result = mysqli_query($conn, $sql);


//위 과정이 정상적으로 진행되었다면
if ($result) {
  echo "<script>alert('글 수정이 완료되었습니다.')</script>";
  echo "<script>location.replace('../list.php')</script>";
  exit;
} else {
  echo "글 수정 실패 : " . mysqli_error($conn);
  mysqli_close($conn); // 데이터베이스 접속종료
}

?>