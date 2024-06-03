<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fruits 과일명 검색결과</title>
  <style>
    body{font-family: "맑은 고딕"; font-size: 12px; color: #333;}
    caption{font-size: 16px; font-weight: bold; padding: 10px;}
    table{width: 600px; border-collapse:collapse; border:2px solid #ccc;}
    table th{}
    table th, table td{
      line-height: 30px; border:2px solid #ccc;
    }
    table tr:nth-of-type(odd) td{background: rgba(255,255,50,0.5);}
    table tr:nth-of-type(even) td{background: rgba(255,255,150,0.5);}
  </style>
</head>
<body>
  <?php
    //search박스 값 저장을 위한 변수값
    $search_txt = $_POST['search_txt'];

    //1. db연결을 위한 변수선언과 값 설정
    $mysql_host='localhost';
    $mysql_user='root';
    $mysql_password='1234';
    $mysql_db='product';

    //<!-- 2. db연결 - 절차지향방식 -->
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    //<!-- 연결성공 또는 실패 -->
    if(!$conn){ //연결실패라면
      die('연결실패 : '.mysqli_connect_error());
    }
    echo '연결성공';
    //<!-- db연결이 성공인 경우 아래 실행 -->

    //쿼리에 표 데이터값을 담음
    $query = "select * from fruits where f_name='$search_txt'";

    //변수에 결과값을 저장
    $result = mysqli_query($conn, $query);

    // -----------fruits 테이블 출력하기-----------
    print "<form name='search' method='post' action='fruits_search.php'><table><caption>검색결과</caption><tr>" .
          "<th>no</th>" .
          "<th>f_name</th>" .
          "<th>f_price</th>" .
          "<th>f_color</th>" .
          "<th>f_country</th>" .
          "<th>f_date</th></tr>";

    //조회된 데이터 개수만큼 반복실행
    while($row = mysqli_fetch_row($result)){
      echo "<tr><td>$row[0]</td>";
      echo "<td>$row[1]</td>";
      echo "<td>$row[2]</td>";
      echo "<td>$row[3]</td>";
      echo "<td>$row[4]</td>";
      echo "<td>$row[5]</td></tr>";
    }

    echo "</table><br><br>";


    echo "
      <input type='text' id='search_txt' name='search_txt'>
      <input type='submit' value='과일명 검색' id='search_btn'></form>";

    echo '<button onclick="history.back()">뒤로가기</button>';



    //mysqli_free_result($result);
    //mysqli_close($conn);



  ?>
  
</body>
</html>