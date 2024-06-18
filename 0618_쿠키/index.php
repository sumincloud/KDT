<?php


?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>
      <a href="index2.php" title="메인페이지로 이동">상단로고</a>
    </h1>
    <?php
    if(isset($_SESSION['ss_md_id'])){
      echo "<a href='#' title=''> $mb_id님</a>";
      echo "<a href='logout.php' title=''>로그아웃</a>";
    }else{
      echo "<a href='login.php' title=''>로그인</a>";
    }
    
    ?>
  </header>
  
</body>
</html>