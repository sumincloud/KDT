<!-- 회원가입폼 -->
<?php
  //db연결
  include('./dbconn.php');

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
    $title = '내 정보 수정';
    $sub_title = '';
    $modify_mb_info = 'readonly';
    $href = './index.php'; //회원수정 완료시 처음화면으로

  }else{ //세션정보가 없다면
    //신규가입
    $mode = 'insert';
    $title = '회원가입';
    $sub_title = '회원이 되어 맞춤 여행지를 찾아보세요.';
    $modify_mb_info = '';
    $href = './login.php'; //신규가입일경우 로그인화면 나오게
  };
?>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>떠나개 <?php echo $title ?></title>
  <!-- 1. 부트스트랩 css연결하기 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 2. 부트스트랩 js연결하기 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 3. 부트스트랩 아이콘폰트 연결 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- 스와이퍼 js -->
  <script src="../script/swiper.js"></script>
  <!-- 공통서식 연결 -->
  <link rel="stylesheet" href="../css/common.css">
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    /* 로그인페이지 서식 */
    #login_box{
      padding: 50px 6%;
    }

    .logo img{
      width: 160px;
    }
    .login_large_txt{
      font-size: 20px;
      font-weight: bold;
    }
    input{
      height: 50px;
    }
    .invalid-feedback{
      font-size: 0.9rem;
    }

    #login{
      background: #F2055C;
      height: 50px;
      color: white;
    }
    #easy_login{
      margin-bottom: 100px;
    }

    /* 회원가입 페이지 서식 */
    #box{
      padding: 0 6%;
    }
    .btn{
      border: 1px solid #F2055C;
      color: #F2055C;
    }
    .btn:hover{
      border: 1px solid #F2055C;
      color: #F2055C;
    }
    #cancelButton, #join{
      border: none;
      color: #fff;
    }
    #join{
      background: #F2055C;
    }
    #btn_bottom{
      position: fixed;
      bottom:0;
      width: 100%;
      background: #fff;
      padding: 10px 6%;
      border-top:1px solid #eee;
    }
    #agree{
      height: 100px;
      resize:none;
    }






  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./header.php')?>

  <!-- 메인영역 -->
  <main>
    <section id="box">
      <div class="text-center">
        <h2 class="fs-2 fw-bold pt-5"><?php echo $title ?></h2>
        <p><?php echo $sub_title ?></p>
      </div>

      <form name="회원가입" id="join_form" method="post" action="./register_input.php" class="needs-validation" novalidate>
        <!-- 아이디 -->
        <div class="fs-4 mb-2 mt-5">
          <label for="mb_id" class="form-label fw-bold fs-6">아이디</label>
          <div class="input-group">
            <input type="text" class="form-control" name="mb_id" id="mb_id" placeholder="아이디를 입력해주세요 (6 - 20자)" maxlength="20" required>
            <button class="btn" type="button" id="id_check">중복확인</button>
            <div class="invalid-feedback">
              아이디를 입력해주세요.
            </div>
          </div>
        </div>
        <!-- 비밀번호 -->
        <div class="fs-4 mb-4 mt-4">
          <label for="mb_password" class="form-label fw-bold fs-6">비밀번호</label>
          <small class="d-block text-secondary" style="font-size: 14px;">8자 이상 20자 이내의 영문,숫자,특수문자(!@#$%&amp;)사용</small>
          <div style="position: relative;">
            <input type="password" class="form-control" name="mb_password" id="mb_password" placeholder="비밀번호를 입력해주세요" maxlength="20" required>
            <div class="invalid-feedback">
              비밀번호를 입력해주세요.
            </div>
          </div>
        </div>
        <!-- 비밀번호 확인 -->
        <div class="fs-4 mb-4 mt-4">
          <label for="mb_password2" class="form-label fw-bold fs-6">비밀번호 확인</label>
          <div style="position: relative;">
            <input type="password" class="form-control" name="mb_password2" id="mb_password2" placeholder="비밀번호를 다시 입력해주세요" maxlength="20" required>
            <div class="invalid-feedback">
              비밀번호를 다시 입력해주세요.
            </div>
          </div>
        </div>
        <!-- 반려견 이름 -->
        <div class="fs-4 mb-2 mt-4">
          <label for="mb_name" class="form-label fw-bold fs-6">반려견 이름</label>
          <input type="text" class="form-control" name="mb_name" id="mb_name" placeholder="반려견 이름을 입력하세요" maxlength="8" required>
          <div class="invalid-feedback">
            반려견 이름을 입력해주세요.
          </div>
        </div>
        <!-- 휴대폰 번호 -->
        <div class="fs-4 mb-2 mt-4">
          <label for="mb_tel" class="form-label fw-bold fs-6">휴대폰 번호</label>
          <input type="text" class="form-control" name="mb_tel" id="mb_tel" placeholder="'-' 구분없이 입력해주세요" maxlength="11" required>
          <div class="invalid-feedback">
          휴대폰 번호를 입력해주세요.
          </div>
        </div>
        <!-- 이메일 -->
        <div class="fs-4 mb-2 mt-4">
          <label for="mb_email" class="form-label fw-bold fs-6">이메일</label>
          <input type="text" class="form-control" name="mb_email" id="mb_email" placeholder="이메일 주소를 입력하세요" maxlength="255" required>
          <div class="invalid-feedback">
            이메일 주소를 입력해주세요.
          </div>
        </div>
        <!-- 관심 여행지역 -->
        <div class="mb-2 mt-4">
          <p class="form-label fw-bold fs-6">관심 여행지역</p>
          <div class="d-flex justify-content-around">
            <div>
              <input type="checkbox" name="mb_hobby[]" value="서울" class="form-check-input">
              <label for="mb_hobby" class="form-check-label">서울</label>
            </div>
            <div>
              <input type="checkbox" name="mb_hobby[]" value="제주" class="form-check-input">
              <label for="mb_hobby" class="form-check-label">제주</label>
            </div>
            <div>
              <input type="checkbox" name="mb_hobby[]" value="부산" class="form-check-input">
              <label for="mb_hobby" class="form-check-label">부산</label>
            </div>
            <div>
              <input type="checkbox" name="mb_hobby[]" value="강원" class="form-check-input">
              <label for="mb_hobby" class="form-check-label">강원</label>
            </div>
            <div>
              <input type="checkbox" name="mb_hobby[]" value="인천" class="form-check-input">
              <label for="mb_hobby" class="form-check-label">인천</label>
            </div>
            <div>
              <input type="checkbox" name="mb_hobby[]" value="기타" class="form-check-input">
              <label for="mb_hobby" class="form-check-label">기타</label>
            </div>
          </div>
        </div>
        <!-- 직업 -->
        <div class="mb-2 mt-4">
          <label class="form-label fw-bold fs-6">직업</label>
          <select id="mb_job" name="mb_job" class="form-select">
            <option value="">직업을 선택하세요</option>
            <option value="학생">학생</option>
            <option value="회사원">회사원</option>
            <option value="공무원">공무원</option>
            <option value="주부">주부</option>
            <option value="기타">기타</option>
          </select>
        </div>
        <!-- 이용약관 -->
        <div class="mb-2 mt-4">
          <label class="form-label fw-bold fs-6">이용약관 동의</label>
          <textarea name="agree" id="agree" cols="30" rows="10" class="d-block form-control">약관은 이러이러합니다. 약관에 동의하십니까. 약관은 이러이러합니다. 약관에 동의하십니까.약관은 이러이러합니다. 약관에 동의하십니까.약관은 이러이러합니다. 약관에 동의하십니까.약관은 이러이러합니다. 약관에 동의하십니까.약관은 이러이러합니다. 약관에 동의하십니까.</textarea>
          <div class="mt-3">
            <input type="checkbox" id="ch_btn"  name="ch_btn" class="form-check-input">
            <label for="ch_btn" class="form-check-label">위 사항에 동의합니다.</label>
          </div>
        </div>
      </form>
    </section>
  </main>

  <!-- 푸터영역 -->
  <footer>
    <div class="d-flex gap-2" id="btn_bottom">
      <button class="w-50 btn btn-secondary btn-lg" type="button"  id="cancelButton">취소하기</button>
      <button class="w-50 btn btn-primary btn-lg" type="submit" id="join">가입하기</button>
    </div>
  </footer>
  

  <script>
    //유효성 검사 방법 3가지 패턴
    //1. html5에서 사용하는 required 속성을 사용하는 방법
    //2. 자바스크릡트를 활용하여 값을 체크하는 방법
    //3. php문법을 활용하여 php문서 안에서 체크하는 방법
    $(document).ready(function(){

      $('#join').click(function(e) {
        // 폼의 기본 동작인 submit을 막음
        e.preventDefault();
        validateCheck();
        // 유효성 검사를 수행하고 결과를 변수에 저장
        var isFormValid = validateCheck();
        var isPasswordValid = passwordCheck();
        var isAgreeChecked = agreeCheck();

        // 세 가지 유효성 검사가 모두 통과되면 폼 제출
        if (isFormValid && isPasswordValid && isAgreeChecked) {
          $('#join_form').submit();
          // 모든 조건을 만족하면 제출 가능
          //alert('회원가입 성공!');
        }
      });

      $('input').keyup(function() {
        // input에 입력할때마다 함수체크
        validateCheck();
      });


      //빈칸 유효성 검사
      function validateCheck() {

        const id = $('#mb_id').val();
        const password = $('#mb_password').val();
        const password2 = $('#mb_password2').val();
        const name = $('#mb_name').val();
        const tel = $('#mb_tel').val();
        const email = $('#mb_email').val();
        const job = $('#mb_job').val();

        // 아이디 길이 확인
        if (id.length < 6) {
          $('#mb_id').addClass('is-invalid');
          return false;
        } else {
          $('#mb_id').removeClass('is-invalid');
        }

        // 비밀번호 입력 확인
        if (password.length < 8) {
          $('#mb_password').addClass('is-invalid');
          return false;
        } else {
          $('#mb_password').removeClass('is-invalid');
        }
        // 비밀번호 재입력 확인
        if (password.length < 8) {
          $('#mb_password2').addClass('is-invalid');
          return false;
        } else {
          $('#mb_password2').removeClass('is-invalid');
        }
        // 반려견 이름 입력 확인
        if (name.length < 1) {
          $('#mb_name').addClass('is-invalid');
          return false;
        } else {
          $('#mb_name').removeClass('is-invalid');
        }
        // 휴대폰 번호 입력 확인
        if (tel.length < 1) {
          $('#mb_tel').addClass('is-invalid');
          return false;
        } else {
          $('#mb_tel').removeClass('is-invalid');
        }
        // 이메일 입력 확인
        if (email.length < 1) {
          $('#mb_email').addClass('is-invalid');
          return false;
        } else {
          $('#mb_email').removeClass('is-invalid');
        }
        // 직업선택 확인
        if (job.length < 1) {
          $('#mb_job').addClass('is-invalid');
          return false;
        } else {
          $('#mb_job').removeClass('is-invalid');
        }
        return true;
      };

      // 이용약관 동의 체크 확인
      function agreeCheck() {
        if (!$('#ch_btn').is(':checked')) {
          alert('이용약관에 동의하셔야 합니다.');
          return false;
        }
        return true;
      }


      //비밀번호 유효성 검사
      function passwordCheck(){
        const password = $('#mb_password').val();
        const password2 = $('#mb_password2').val();

        // 비밀번호 형식 확인 (영문, 숫자, 특수문자 포함 8자 이상 20자 이내)
        var reg = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,20}$/;
        if (!reg.test(password)) {
          alert('비밀번호는 8 ~ 20자 이내로 영문, 숫자, 특수문자를 포함해야 합니다.');
          return false;
        }

        // 비밀번호 확인 일치 여부 확인
        if (password !== password2) {
          alert('비밀번호와 비밀번호 확인이 일치하지 않습니다.');
          return false;
        }
        return true;
      }

      // 휴대폰번호 입력칸 문자 제거
      $('#mb_tel').on('input', function() {
        var phoneNumber = $(this).val().replace(/\D/g, ''); // 숫자 이외의 문자 제거

        // '010'으로 시작하지 않는 경우
        if (!phoneNumber.startsWith('010')) {
          $(this).addClass('is-invalid');
        } else {
          $(this).removeClass('is-invalid'); 
        }
        // 입력 필드에 반영
        $(this).val(phoneNumber);
      });


      // 취소 버튼 클릭 시 로그인페이지로 이동
      $('#cancelButton').click(function() {
        window.location.href = '<?php echo $href; ?>';
      });









    });












/*     function formCheck(){
      //변수선언
      // let ch_btn = document.getElementById('ch_btn'); 
      // let id = document.getElementById('mb_id'); 
      // let password = document.getElementById('mb_password'); 
      // let password2 = document.getElementById('mb_password2'); 
      // let name = document.getElementById('mb_name'); 
      // let tel = document.getElementById('mb_tel'); 
      // let email = document.getElementById('mb_email'); 

      // if(ch_btn.checked==false){
      //   alert('약관에 동의하셔야 합니다.');
      //   return false;
      // }
      // if(id.value.length<1){
      //   alert('아이디를 입력하지 않았습니다.');
      //   id.focus();
      //   return false;
      // }
      // if(id.value.length<6||id.value.length>20){
      //   alert('아이디는 6~20자 이내로 입력하세요.');
      //   id.focus();
      //   return false;
      // }
      // if(password.value.length<1){
      //   alert('비밀번호를 입력하지 않았습니다.');
      //   password.focus();
      //   return false;
      // }
      //영문 숫자 특수기호 조합 8자리 이상 20이하
      // let reg = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,20}$/
      // if(!reg.test(password.value)){
      //   alert('비밀번호는 8 ~ 20자 이내로 영문, 숫자, 특수문자를 포함해야 합니다.')
      //   return false;
      // }
      //비밀번호 확인 일치여부
      // if(password.value != password2.value){
      //   alert('비밀번호와 비밀번호 확인이 일치하지 않습니다.')
      //   return false;
      // }
      // if(name.value.length<1){
      //   alert('이름을 입력하지 않았습니다.');
      //   name.focus();
      //   return false;
      // }
      // if(tel.value.length<1){
      //   alert('휴대폰 번호를 입력하지 않았습니다.');
      //   tel.focus();
      //   return false;
      // }
      // if(tel.value.length<11){
      //   alert('휴대폰 번호는 11자리로 입력해주세요.');
      //   tel.focus();
      //   return false;
      // }
      // if(email.value.length<1){
      //   alert('이메일주소를 입력하지 않았습니다.');
      //   email.focus();
      //   return false;
      // }
    } */





  </script>
</body>
</html>