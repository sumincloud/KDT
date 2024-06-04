<?php
  include('./php/dbconn.php'); //db연결을 위한 파일 인클루드

  //free_board 테이블 등록되어 있는 글 수 조회
  $sql = "select count(*) as 'cnt' from free_board";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $total_count = $row['cnt'];

  //echo $total_count; //글 수 결과
  $sql = "select * from free_board order by datetime desc";
  $result = mysqli_query($conn, $sql);

?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시판 목록보기</title>
  <!-- 초기화 서식 -->
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
</head>
<style>

  /* 메인 서식 */
  body{
    background: #ffecca;
    position: relative;
    padding: 0 5%;
  }
  section{
    width: 90%;
    min-width: 1000px;
    position: absolute;
    top: 50%; 
    transform: translateY(-50%);
    text-align: center;
    box-shadow: 0 0 10px rgba(255, 156, 43, 0.5);
    box-sizing: border-box;
    padding: 20px 50px;
    background: white;
    border-radius: 30px;
  }
  section > h2{
    text-align: center;
    font-size: 1.5em;
    font-weight: 550;
    margin: 20;
  }
  section caption{display:none;}

  section table{
    table-layout: auto;
    width: 100%;
    text-align: center;
    line-height: 30px;
    margin-top: 50px;
    text-wrap: nowrap;
  }
  section table th{
    height: 30px;
    font-weight: 550;
    border-bottom:2px solid #ff7417;
    padding:5px;
  }
  section table td{
    height: 30px;
    border-bottom: 1px solid #ccc;
    padding:5px;
  }
  section .total td{
    background: #ff7417;
    color: #fff;
  }
  section a{
    text-decoration: none;
    color: #000;
  }
  section #btn a{
    text-align: center;
    display:inline-block;
    width: 200px;
    height: 40px;
    line-height: 40px;
    background:  #ff7417;
    color: #fff;
    font-weight: 400;
    margin-top:50px;
    text-decoration: none;
  }
  section #btn:hover{
    filter: brightness(1.2);
  }
</style>
<body>
  <header>

  </header>

  <main>
    <section>
      <h2>게시글 목록</h2>
      <table>
        <caption>리스트</caption>
        <thead>
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
          </tr>
        </thead>
        <tbody>  <!-- for(초기값;조건식;증감식){출력내용} -->
          <?php for($i = $total_count - 1; $row = mysqli_fetch_assoc($result); $i--): ?>
            <tr>
              <td><?php echo $i+1 ?></td>
              <td>
                <a href="view.php?id=<?php echo $row['id']?>" title="<?php echo $row['subject']?>">
                <?php echo $row['subject'] ?></a>
              </td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo date('Y-m-d', strtotime($row['datetime'])); ?></td>
            </tr>
          <?php endfor; ?>
          <tr class="total"><td colspan="4">총 게시글 수 : <?php echo $total_count?>개</td></tr>
          <?php
            if($total_count==0){  //게시글이 없다면
              echo "<tr><td colspan='4'>등록된 게시글이 없습니다.</td></tr>;";
            };
          ?>
        </tbody>
      </table>
      <div id="btn">
        <a href="./write.php" title="글쓰기">글쓰기</a>
      </div>
    </section>
  </main>
  <footer>

  </footer>

  <?php
    mysqli_close($conn);

  ?>
  
</body>
</html>