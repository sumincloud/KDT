<?php
  include('./db_conn.php'); //데이터베이스 파일 연결

  $sql = "select * from todo order by id DESC"; //데이터 정렬하여 목록을 가져옴
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn); //데이터베이스 접속종료
?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>오늘의 할일 - todolist</title>
  <style>
    .cancle_line{
      text-decoration:line-through;
      font-style:italic;
      color:#ccc;
    }
  </style>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <form action="./php/add.php" method="post" name="오늘의 할일">
    <!-- 상단 헤더 -->
    <header>
      <h1>ToDoList - 오늘의 할일</h1>
      <div>
        <div>
          <input type="text" name="title" placeholder="오늘의 일정을 입력하세요.">
        </div>
        <div>
          <button type="submit" value="추가">
            <i class="fa-solid fa-plus"></i>
          </button>
        </div>
      </div>
    </header>

    <!-- 메인 영역 -->
    <main>
      <section>
        <h2>글 목록 출력</h2>
        <?php if(mysqli_num_rows($result) <= 0){?> <!-- 데이터베이스 자료가 없다면 -->
        <div>등록된 글 내용이 없습니다.</div>
        <?php } ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>

        <div>
          <div class="flex_box">
            <input type="checkbox" onclick="location.href='./php/check.php?id=<?php echo $row['id'] ?>'" <?php echo $row['checked'] ? 'checked' : '' ?> id="circle">
  
            <h3 class="<?php echo $row['checked'] ? 'cancle_line':''?>">
              <?php echo $row['title']?>
            </h3>
  
            <a href="./php/remove.php?id=<?php echo $row['id']?>" id="<?php echo $row['id']?>" title="삭제">삭제</a>
          </div>

          <div>
            <small>등록일시 : <?php echo $row['datetime']?></small>
          </div>
        </div>

        <?php endwhile;?>
      </section>

    </main>
  </form>

  <!-- 푸터 영역 -->
  <footer>
    <address>Copyright&copy;2024 TodoList allrights reserved.</address>
  </footer>
</body>
</html>