<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    //<!-- db_input.php -->
    //<!-- 데이터 베이스에 연결하여 입력된 자료를 추가하기 -->

    //<!-- 1. db연결을 위한 변수 -->
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_password = '1234';
    $mysql_db = 'product';

    //<!-- 2. 데이터를 담기위한 변수 -->
    $name = $_POST["f_name"];
    $price = $_POST["f_price"];
    $color = $_POST["f_color"];
    $country = $_POST["f_country"];
    $date = date("Y-m-d", time());

    //<!-- db연결방식 3가지 - 절차지향방식 -->
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    //<!-- 연결성공 또는 실패 -->
    if(!$conn){ //연결실패라면
      die('연결실패 : '.mysqli_connect_error());
    }
    
    //<!-- db연결이 성공인 경우 아래 데이터값을 입력한다. -->
    $query = "insert into fruits value('0', '$name', '$price', '$color', '$country', '$date')";

    $result = mysqli_query($conn, $query);

    echo '입력완료';
    echo '<button onclick="history.back()">뒤로가기</button>'
  ?>
  
</body>
</html>