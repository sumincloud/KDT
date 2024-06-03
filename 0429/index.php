<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php문서 제작하기</title>
  <style>
    h2{color: #f00;}
  </style>
  <script>
    let txt = 'kdt과정';
    document.write(`변수값 출력하기: ${txt}`)
    document.write('<h2>자바스크립트 내용 출력하기</h2>');
  </script>
</head>
<body>

  <?php
    $txt1 = 'php변수';
    echo "<p>php변수값 출력하기 : $txt1 </p>";
    echo "<h2>php문서 내용 출력하기</h2>";



  ?>
  
</body>
</html>