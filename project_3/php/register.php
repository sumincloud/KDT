<!-- 회원가입폼 -->
<?php
  //db연결
  include('./php/dbconn.php');

  //세션정보가 있다면
  if(isset($_SESSION['ss_mb_id'])){
    $mb_id = $_SESSION['ss_mb_id'];
    //회원정보를 조회하는 sql쿼리문
    $sql = "select * from member where mb_id = '$mb_id'"; //id가 일치하는 자료 조회
    $result = mysql_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);
    mysqli_close($conn);

    //회원수정
    $mode = 'modify';
    $title = '회원수정';
    $sub_title = '';
    $modify_mb_info = 'readonly';
    $href = './index.php'; //회원수정 완료시 처음화면으로

  }else{ //세션정보가 없다면
    //신규가입
    $mode = 'insert';
    $title = '회원가입';
    $sub_title = '회원이 되어 다양한 혜택을 경험해보세요.';
    $modify_mb_info = '';
    $href = './login.php'; //신규가입일경우 로그인화면 나오게
  };
?>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>떠나개 <?php echo $title ?></title>
</head>
<body>
  <!-- 헤더영역 -->
  <header></header>

  <!-- 메인영역 -->
  <main>
    <section>
      <h2><?php echo $title ?></h2>
      <p><?php echo $sub_title ?></p>

      <form name="회원가입" method="post" action="./php/register_input.php" onsubmit="return formCheck();">

        <!-- 1. 이용약관 -->
        <label>이용약관 동의</label>
        <textarea name="agree" id="agree" cols="30" rows="10">약관내용</textarea>
        <p>
          <input type="checkbox" id="ch_btn">
          <label for="ch_btn">위 사항에 동의합니다.</label>
        </p>

        <p>
          <label for="mb_id">아이디</label>
          <input type="text" placeholder="아이디를 입력하세요.(6~20자)" name="mb_id" id="mb_id">
          <input type="button" id="id_check" value="중복확인">
        </p>

        <p>
          <label for="mb_password">비밀번호</label>
          <input type="password" id="mb_password" placeholder="비밀번호를 입력해주세요(문자, 숫자, 특수문자 포함 8~20자)" name="mb_password">
        </p>

        <p>
          <label for="mb_password2">비밀번호 확인</label>
          <input type="password" id="mb_password2" name="mb_password2" placeholder="비밀번호 재입력">
        </p>
        <p>
          <label for="mb_name">이름</label>
          <input type="text" placeholder="이름을 입력해주세요." id="mb_name" name="mb_name">
        </p>
        <p>
          <label for="mb_tel">전화번호</label>
          <input type="text" placeholder="휴대폰 번호 입력('-'제외 11자리 입력)" id="mb_tel" name="mb_tel">
        </p>
        <p>
          <label for="mb_email">이메일주소</label>
          <input type="email" placeholder="이메일 주소를 입력해주세요." id="mb_email" name="mb_email">
        </p>
        <p>
          <span>관심사</span>
          <label for="mb_hobby">여행</label>
          <input type="checkbox" id="mb_hobby" name="mb_hobby[]" value="여행">
          <label for="mb_hobby">음악</label>
          <input type="checkbox" id="mb_hobby" name="mb_hobby[]" value="음악">
          <label for="mb_hobby">운동</label>
          <input type="checkbox" id="mb_hobby" name="mb_hobby[]" value="운동">
          <label for="mb_hobby">게임</label>
          <input type="checkbox" id="mb_hobby" name="mb_hobby[]" value="게임">
          <label for="mb_hobby">독서</label>
          <input type="checkbox" id="mb_hobby" name="mb_hobby[]" value="독서">
          <label for="mb_hobby">기타</label>
          <input type="checkbox" id="mb_hobby" name="mb_hobby[]" value="기타">
        </p>
        <p>
          <label>직업</label>
          <select id="mb_job" name="mb_job">
            <option value="">직업을 선택하세요</option>
            <option value="학생">학생</option>
            <option value="회사원">회사원</option>
            <option value="공무원">공무원</option>
            <option value="주부">주부</option>
            <option value="기타">기타</option>
          </select>
        </p>
        <p>
          <input type="submit" id="join_btn" value="가입하기">
          <a href="<?php echo $href ?>" title="가입취소">가입취소</a>
        </p>





      </form>
    </section>
  </main>

  <!-- 푸터영역 -->
  <footer></footer>
  

  <script>
    //유효성 검사 방법 3가지 패턴
    //1. html5에서 사용하는 required 속성을 사용하는 방법
    //2. 자바스크릡트를 활용하여 값을 체크하는 방법
    //3. php문법을 활용하여 php문서 안에서 체크하는 방법


    function formCheck(){
      //변수선언
      let ch_btn = document.getElementById('ch_btn'); //체크박스 변수
      let id = document.getElementById('mb_id'); //아이디 변수
      let password = document.getElementById('mb_password'); //비밀번호 변수
      let password2 = document.getElementById('mb_password2'); //비밀번호 확인 변수
      let name = document.getElementById('mb_name'); //이름 변수
      let tel = document.getElementById('mb_tel'); //전화번호 변수
      let email = document.getElementById('mb_email'); //이메일 변수

      if(ch_btn.checked==false){
        alert('약관에 동의하셔야 합니다.');
        return false;
      }
      if(id.value.length<1){
        alert('아이디를 입력하지 않았습니다.');
        id.focus();
        return false;
      }
      if(id.value.length<6||id.value.length>20){ //6~20자로 입력 안할때
        alert('아이디는 6~20자 이내로 입력하세요.');
        id.focus();
        return false;
      }
      if(password.value.length<1){
        alert('비밀번호를 입력하지 않았습니다.');
        password.focus();
        return false;
      }
      //영문 숫자 특수기호 조합 8자리 이상 20이하
      let reg = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,20}$/
      if(!reg.test(password.value)){
        alert('비밀번호는 8 ~ 20자 이내로 영문, 숫자, 특수문자를 포함해야 합니다.')
        return false;
      }
      //비밀번호 확인 일치여부
      if(password.value != password2.value){
        alert('비밀번호와 비밀번호 확인이 일치하지 않습니다.')
        return false;
      }
      if(name.value.length<1){
        alert('이름을 입력하지 않았습니다.');
        name.focus();
        return false;
      }
      if(tel.value.length<1){
        alert('전화번호를 입력하지 않았습니다.');
        tel.focus();
        return false;
      }
      if(tel.value.length<11){
        alert('전화번호는 11자리 입니다. 다시 입력해주세요.');
        tel.focus();
        return false;
      }
      if(email.value.length<1){
        alert('이메일주소를 입력하지 않았습니다.');
        email.focus();
        return false;
      }


    }
  </script>
</body>
</html>