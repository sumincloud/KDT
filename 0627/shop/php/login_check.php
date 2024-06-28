<?php
include('../db/dbconn.php'); // 데이터베이스 연결

$mb_id = trim($_POST['id']);
$mb_password = trim($_POST['pass']);
$mb_name = trim($_POST['name']);

if(!$mb_id || !$mb_password) {
    echo "<script>alert('아이디나 비밀번호가 공백이면 안됩니다.');</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
}

// db에서 아이디를 조회하여 일치하는지 확인하고 로그인 성공하게끔 한다.
$sql = "SELECT * FROM members WHERE mb_id = '$mb_id'";
$result = mysqli_query($conn, $sql); // 조회한 결과를 변수에 저장
$mb = mysqli_fetch_assoc($result);

if (!$mb) {
    echo "<script>alert('가입된 회원아이디가 아닙니다.')</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
}

// 입력한 비밀번호와 데이터베이스에 저장된 비밀번호를 확인한다.
$hash_password = $mb['mb_password'];

if (!password_verify($mb_password, $hash_password)) {
    echo "<script>alert('비밀번호가 틀립니다.')</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit; // 종료
}

// 아이디, 패스워드 체크가 잘 이루어질 경우
session_start();
$_SESSION['userid'] = $mb_id; // 아이디 정보를 가지고 세션정보 생성함.
$_SESSION['username'] = $mb['mb_name']; // 사용자 이름도 세션에 저장

mysqli_close($conn); // 데이터베이스 접속 종료

if($mb_id=='admin'){
    //id가 admin일 경우
    echo "<script>alert('관리자 페이지로 이동합니다.');</script>";
    echo "<script>location.replace('../product_mg.php');</script>";
}else{
    echo "<script>alert('로그인 성공');</script>";
    echo "<script>location.replace('../index.php');</script>";
}

// 세션정보가 있다면 페이지로 이동한다.
// if (isset($_SESSION['userid'])) {
//     echo "<script>alert('로그인 성공');</script>";
//     echo "<script>location.replace('../index.php');</script>";
// }




?>
