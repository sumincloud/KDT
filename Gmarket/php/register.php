<?php
  include('./dbconn.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>지마켓 모바일 - 회원가입</title>
  <!-- CSS초기화 -->
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <!-- base서식 -->
  <link href="../css/base.css" rel="stylesheet" type="text/css">
</head>
<body>
  <!-- 상단 헤더 -->
  <header></header>

  <!-- 메인 영역 -->
  <main>
    <section>
      <h2>회원가입</h2>
      <form action="register_update.php" name="회원가입" method="post" onsubmit="return form_check();">
        <p>
          <label for="mb_id">아이디 : </label>
          <input type="text" id="mb_id" name="mb_id" maxlength="16" placeholder="아이디를 입력하세요.">
          <!-- 아이디 중복확인 -->
          <input type="button" id="id_check_btn" value="중복확인">
        </p>
        <p>
          <label for="mb_password">비밀번호 : </label>
          <input type="password" id="mb_password" name="mb_password" maxlength="16" placeholder="비밀번호를 입력하세요.">
        </p>
        <p>
          <label for="mb_name">이름 : </label>
          <input type="text" id="mb_name" name="mb_name" maxlength="16">
        </p>
        <p>
          <input type="submit" value="가입하기" id="join_btn">
          <input type="reset" value="취소하기" id="reset_btn">
        </p>



      </form>
    </section>
  </main>

  <!-- 푸터 영역 -->
  <footer></footer>


  <script>
    function form_check(){
      let mb_id = document.getElementById('mb_id').value;
      let mb_password = document.getElementById('mb_password').value;
      let mb_name = document.getElementById('mb_name').value;

      if(mb_id.length < 1){
        alert('아이디를 입력해주세요.');
        return false;
      };
      if(mb_password.length < 1){
        alert('비밀번호를 입력해주세요.');
        return false;
      };
      if(mb_name.length < 1){
        alert('이름을 입력해주세요.');
        return false;
      };
      
      return true;
    };
  </script>




</body>
</html>