<?php 
  include("./dbconn.php");
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행사이트_로그인</title>
  </head>
  <body>
    <!-- 상단헤더영역 시작 -->
    <header></header>

    <!-- 메인콘텐츠 시작 -->
    <main>
      <section>
        <form name="로그인" method="post" action="./php/login_check.php">
          <p>
            <label for="mb_id">아이디</label>
            <input type="text" placeholder="아이디를 입력해주세요" name="mb_id" id="mb_id">
            <br>
            <input type="checkbox" id="id_check">
            <label for="id_check">아이디 저장</label>
          </p>
          <p>
            <label for="mb_password">비밀번호</label>
            <input type="password" placeholder="패스워드를 입력해주세요" name="mb_password" id="mb_password">
          </p>
          <p>
            <a href="#" title="아이디 찾기">아이디 찾기</a>
            <a href="#" title="비밀번호 변경">비밀번호 변경</a>
            <a href="register.php" title="회원가입">회원가입</a>
          </p>

          <input type="submit" value="로그인" id="login_btn">

          <h3>간편로그인</h3>
          <a href="#" title="네이버 로그인">네이버 로그인</a>
          <a href="#" title="카카오 로그인">카카오 로그인</a>
          <a href="#" title="구글 로그인">구글 로그인</a>
        </form>
      </section>
    </main>
    
    <!-- 푸터영역 시작 -->
    <footer>
    </footer>

    <!-- 제이쿼리 라이브러리 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- 자바스크립트 쿠키생성파일 -->
    <script src="./script/javascript_cookie.js"></script>

    <script>
      $(document).ready(function(){
        let key = getCookie('idChk'); //쿠키이름 저장
        if(key!=""){ //만약에 key변수에 값이 있다면
          $('#mb_id').val(key); //id값을 저장
        }
        if($('#mb_id').val() !=""){ //만약에 id값이 있다면
          $('#id_check').attr('checked',true); //체크박스에 체크를 해둔다.
        }
        $('#id_check').change(function(){ //체크박스의 상태가 변경되면 아래내용 실행
          if($('#id_check').is(':checked')){ //체크박스에 체크가 된경우라면
            setCookie('idChk', $('#mb_id').val(), 7); //쿠키를 생성하고
          }else{   //그렇지 않으면 
            deleteCookie('idChk'); //쿠키를 삭제한다.
          }
        });
        $('#mb_id').keyup(function(){ //아이디 입력창에 키를 눌렀을 경우
          if($('#id_check').is(':checked')){ //체크박스에 체크가 된 경우라면
            setCookie('idChk', $('#mb_id').val(),7); //쿠키를 생성한다.
          }
        });
      });
      </script>
  </body>
</html>