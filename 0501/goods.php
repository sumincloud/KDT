<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>goods내용 출력하기</title>
  <style>
    body{font-family: "맑은 고딕"; font-size: 12px; color: #333;}
    caption{font-size: 16px; font-weight: bold; padding: 10px;}
    table{width: 600px; border-collapse:collapse; border:2px solid #ccc;}
    table th{}
    table th, table td{line-height: 30px; border:2px solid #ccc;}
    table tr:nth-of-type(odd) td{background: rgba(162,255,0,0.5);}
    table tr:nth-of-type(even) td{background: rgba(219,250,166,0.5);}
  </style>
</head>
<body>
  <?php
    //1. db연결을 위한 변수선언과 값 설정
    $mysql_host='localhost';
    $mysql_user='root';
    $mysql_password='1234';
    $mysql_db='product';

    //2. 데이터베이스에 연결을 위한 함수작성
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    if(!$conn){
      die('연결실패 : ' .mysqli_connect_error());
    }
    echo '연결성공';

    //데이터베이스 쿼리문을 통해 조회하여 변수에 담은 다음 반복문을 통해 출력한다.
    $query = 'select * from customer';
    $query1 = 'select * from goods';
    $query2 = 'select * from orders';

    //단가가 500원 이상인 상품의 주문에 대해 주문일, 고객명, 고객주소를 출력하시오.
    $query3 = 'select o.o_day 주문일, o.c_name 고객명, g_cost 가격 from orders o, goods g, customer c where c.c_name = o.c_name and g.g_code = o.g_code and g_cost >= 500';

    $result = mysqli_query($conn, $query); //변수에 각각 결과값을 저장
    $result1 = mysqli_query($conn, $query1); //변수에 각각 결과값을 저장
    $result2 = mysqli_query($conn, $query2); //변수에 각각 결과값을 저장
    $result3 = mysqli_query($conn, $query3); //변수에 각각 결과값을 저장

    //----------customer 테이블 출력하기------------
    print "<table><caption>customer 데이터베이스 출력결과</caption><tr>" .
          "<th>고객명</th>" .
          "<th>주소</th>" .
          "<th>전화번호</th></tr>";
    
    // 조회된 데이터 개수만큼 반복 실행한다.
    while($row = mysqli_fetch_row($result)){
      print 
      "<tr><td>" . $row[0] . "</td>" .
      "<td>" . $row[1] . "</td>" .
      "<td>" . $row[2] . "</td></tr>";
    }

    print "</table>";

    //----------goods 테이블 출력하기------------
    print "<table><caption>goods 데이터베이스 출력결과</caption><tr>" .
          "<th>코드번호</th>" .
          "<th>상품명</th>" .
          "<th>가격</th></tr>";

    // 조회된 데이터 개수만큼 반복 실행한다.
    while($row1 = mysqli_fetch_row($result1)){
      print "<tr><td>" . $row1[0] . "</td>" .
      "<td>" . $row1[1] . "</td>" .
      "<td>" . $row1[2] . "</td></tr>";
    }
    
    print "</table>";

    //----------orders 테이블 출력하기------------
    print "<table><caption>orders 데이터베이스 출력결과</caption><tr>" .
    "<th>날짜</th>" .
    "<th>고객명</th>" .
    "<th>코드번호</th>" .
    "<th>주문수</th></tr>";

    // 조회된 데이터 개수만큼 반복 실행한다.
    while($row2 = mysqli_fetch_row($result2)){
      print 
      "<tr><td>" . $row2[0] . "</td>" .
      "<td>" . $row2[1] . "</td>" .
      "<td>" . $row2[2] . "</td>" .
      "<td>" . $row2[3] . "</td></tr>";
    }
    
    print "</table>";

    //----------단가 500원 이상 테이블 출력하기------------
    print "<table><caption>단가 500원 이상 데이터베이스 출력결과</caption><tr>" .
          "<th>주문일</th>" .
          "<th>고객명</th>" .
          "<th>가격</th></tr>";
    
    // 조회된 데이터 개수만큼 반복 실행한다.
    while($row3 = mysqli_fetch_row($result3)){
      print 
      "<tr><td>" . $row3[0] . "</td>" .
      "<td>" . $row3[1] . "</td>" .
      "<td>" . $row3[2] . "</td></tr>";
    }

    print "</table>";




    mysqli_free_result($result);
    mysqli_free_result($result1);
    mysqli_free_result($result2);
    mysqli_free_result($result3);
    mysqli_close($conn);





  ?>
  
</body>
</html>