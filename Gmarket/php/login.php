<?php
  include('./dbconn.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>지마켓 모바일 - 로그인</title>
  <!-- CSS초기화 -->
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <!-- base서식 -->
  <link href="../css/base.css" rel="stylesheet" type="text/css">
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">






  <style>
    main{
      margin-top: 100px;
    }


    section{
      text-align: center;
      width: 80%;
      margin: 0 auto;
      padding: 50px 0;
    }
    h2 svg{
      height: 40px;
    }

    /* 회원 / 비회원 */
    .type{
      display:flex;
      background: #eee;
      border-radius: 10px 10px 0 0;
      margin-top: 50px;
    }
    .type button{
      font-family: 'Gmarket Sans';
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      background: #eee;
      border-radius: 10px 10px 0 0;
      border:1px solid #eee;
      color: #aaa;
      height: 48px;
    }
    .type_act{
      background: #fff !important;
      border:1px solid #00c400 !important;
      color: #000 !important;
    }

    /* 아이디 비번 입력창 */
    section input[type="text"], section input[type="password"], section input[type="submit"], section button{
      width: 100%;
      box-sizing: border-box;
      background: #fff;
      border:none;
      height: 58px;
    }
    .text_box{
      border: 1px solid #ccc;
      display: flex;
      padding: 0 20px;
      gap:10px;
    }
    .text_box input, .text_box i{
      line-height: 58px;
      font-size: 1rem;
      color: #888;
    }
    .text_box + .text_box {
      border-top-width: 0; /* 두번째 .text_box의 위 테두리 제거 */
      border-radius: 0 0 10px 10px;
    }

    #pwShow{
      font-size: 0.7rem;
      width: 40px;
    }
    .fa-eye{
      cursor: pointer;
    }
    label[for="id_save"]{
      font-size: 0.9rem;
      line-height: 30px;
      cursor: pointer;
    }
    #id_save{
      width: 20px; height: 20px;
      margin: 0 10px;
      cursor: pointer;
    }

    /* 로그인버튼 */
    #login_btn{
      background: #00c400;
      border-radius: 10px;
      font-size: 1.2rem;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    #find{
      display:flex;
      justify-content: center;
      margin-top: 20px;
    }
    #find a{
      padding: 2px 10px;
      border-right: 1px solid #ccc;
      color: #666;
      font-size: 0.9rem;
    }
    #find a:last-of-type{
      border:none;
    }

    /* 간편 로그인 */
    #sec02{
      border-top: 1px solid #ccc;
      font-size: 0.9rem;
      color: #666;
    }
    #easy_login{
      display:flex;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }








    .hidden{
      display:none;
    }
  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./header.php')?>

  <!-- 메인 영역 -->
  <main>
    <section>
      <h2>
        <a href="index.html">
          <svg xmlns="http://www.w3.org/2000/svg" width="326" height="85" viewBox="0 0 326 85" fill="none">
            <path d="M42.6219 85C19.1236 85 0 65.9369 0 42.5C0 19.0631 19.1236 0 42.6219 0C52.5426 0 62.146 3.42851 69.6639 9.65534C71.5831 11.2458 72.8751 13.8191 72.8751 16.0622C72.8751 18.1929 72.044 20.1959 70.5328 21.7039C69.0217 23.2118 67.0119 24.0446 64.8736 24.0446C63.0451 24.0446 61.2242 23.3844 59.7357 22.1765C54.9982 18.3429 48.4474 15.9572 42.6295 15.9572C27.9562 15.9572 16.0106 27.8632 16.0106 42.5C16.0106 57.1293 27.9487 69.0353 42.6295 69.0353C56.2374 69.0353 64.6167 59.3425 64.6167 50.4748H43.0904V34.9453H73.0187C77.1819 34.9453 80.6349 38.0587 80.99 42.1999C81.1184 43.6703 81.1562 44.7807 81.1562 45.801C81.1562 56.1915 78.3228 65.9744 70.9862 73.3491C63.5211 80.8663 54.5902 85 42.6219 85Z" fill="#00C01E"/>
            <path d="M50.8804 42.7177C50.8804 47.0089 47.3972 50.4824 43.0979 50.4824C38.7987 50.4824 35.3155 47.0089 35.3155 42.7177C35.3155 38.4264 38.7987 34.9529 43.0979 34.9529C47.3896 34.9529 50.8804 38.4264 50.8804 42.7177Z" fill="#0028AC"/>
            <path d="M213.087 35.9882C211.871 36.4233 210.707 37.0385 209.604 37.7662V34.9829H199.064V75.1572H209.604V55.2764H209.611C209.611 49.8598 214.054 45.4485 219.509 45.4485H220.069V34.9904H219.509C217.265 34.9904 215.104 35.2605 213.087 35.9882Z" fill="#0028AC"/>
            <path d="M128.674 34.0076C123.96 34.0076 119.691 35.8756 116.54 38.899C113.389 35.8756 109.12 34.0076 104.405 34.0076C94.7641 34.0076 86.9212 41.7949 86.9212 51.3677V75.1347H97.6202V51.3602C97.6202 47.6466 100.665 44.6232 104.405 44.6232C108.145 44.6232 111.183 47.6466 111.183 51.3602V75.1572H121.882V75.1272H121.889V51.3602C121.889 47.6466 124.934 44.6232 128.667 44.6232C132.407 44.6232 135.452 47.6466 135.452 51.3602V75.1572H146.151V51.3602C146.151 41.7949 138.308 34.0076 128.674 34.0076Z" fill="#0028AC"/>
            <path d="M181.376 37.856C180.824 37.3534 179.638 36.6332 178.799 36.2655C176.275 35.1627 173.646 34.54 170.714 34.54C159.313 34.54 150.042 43.7528 150.042 55.0736C150.042 66.3944 159.32 75.6071 170.714 75.6071C173.638 75.6071 176.26 74.9919 178.784 73.8966C179.63 73.529 180.696 72.8913 181.383 72.2986V75.1645H191.447V34.9902H181.383V37.856H181.376ZM170.714 65.6142C164.859 65.6142 160.099 60.8878 160.099 55.0736C160.099 49.2594 164.859 44.533 170.714 44.533C176.57 44.533 181.33 49.2594 181.33 55.0736C181.33 60.8878 176.57 65.6142 170.714 65.6142Z" fill="#0028AC"/>
            <path d="M326 45.6059V34.9827H316.956V26.3252H306.257V34.9827H301.648V45.6059H306.257V60.0326C306.257 68.3751 313.087 75.1571 321.489 75.1571H325.471V64.5339H321.489C318.988 64.5339 316.956 62.5158 316.956 60.0326V45.6059H326Z" fill="#0028AC"/>
            <path d="M261.882 34.9827H247.42L234.704 48.8618V20.2559H223.952V75.157H234.704V61.2854L247.949 75.157H262.562L243.091 54.9386L261.882 34.9827Z" fill="#0028AC"/>
            <path d="M299.691 55.1563C299.426 44.2556 293.027 34.4802 279.472 34.4802C267.375 34.4802 258.928 43.768 258.928 55.0438V55.1938C258.928 67.2799 268.153 75.6073 280.635 75.6073C288.153 75.6073 293.737 72.809 297.613 68.2402L290.473 62.2084C287.428 64.8942 284.436 65.7344 280.786 65.7344C276.155 65.7344 271.568 64.1965 270.02 59.8752H299.192C299.192 59.8677 299.751 57.6846 299.691 55.1563ZM279.487 44.4432C284.413 44.4432 287.745 46.9714 289.083 50.8876H269.71C271.236 46.9264 274.621 44.4432 279.487 44.4432Z" fill="#0028AC"/>
          </svg>
        </a>
      </h2>

      <!-- 회원 / 비회원 -->
      <div class="type">
        <button class="type_act">회원</button>
        <button>비회원</button>
      </div>


      <form action="login_check.php" name="로그인폼" method="post" onsubmit="return form_check();">
        <fieldset>
          <legend class="hidden">회원 정보 입력</legend>
          <div>
            <div class="text_box">
              <label for="mb_id" class="hidden">아이디를 입력해주세요.</label>
              <i class="fa-regular fa-user"></i>
              <input type="text" name="mb_id" id="mb_id" placeholder="아이디"/>
            </div>
            <div class="text_box">
              <label for="mb_password" class="hidden">비밀번호를 입력해주세요.</label>
              <i class="fa-solid fa-lock"></i>
              <input type="password" name="mb_password" id="mb_password" placeholder="비밀번호"/>
              <button type="button" id="pwShow">
                <span>
                  <i class="fa-solid fa-eye"></i>
                </span>
                <span class="hidden">숨기기</span>
              </button>
            </div>
          </div>
        </fieldset>

        <div style="display:flex; height: 30px;align-items: center;margin: 10px 0;">
          <input type="checkbox" name="id_save" id="id_save">
          <label for="id_save">아이디 저장</label>
        </div>
        <div>
          <input type="submit" name="login_btn" id="login_btn" value="로그인">
        </div>
        <div id="find">
          <a href="id_search.php" title="아이디 찾기">아이디 찾기</a>
          <a href="pw_search.php" title="비밀번호 찾기">비밀번호 찾기</a>
          <a href="register.php" title="회원가입">회원가입</a>
        </div>
      </form>
    </section>
    <section id="sec02">
    <div>
      <span>간편로그인</span>
    </div>
    <div id="easy_login">
      <div>
        <a href="javascript:void(0);" onclick="kakaoLogin()">
          <img src="../images/login_kakao.png" alt="카카오톡 로그인">
        </a>
      </div>
      <div>
        <a href="#">
          <img src="../images/login_naver.png" alt="네이버 로그인">
        </a>
      </div>
      <div>
        <a href="#">
          <img src="../images/icon_goggle.png" alt="구글 로그인">
        </a>
      </div>
    </section>
  </main>

  <!-- 공통푸터삽입 -->
  <?php include('./footer.php')?>


  <script>
    function form_check(){
      let mb_id = document.getElementById('mb_id').value;
      let mb_password = document.getElementById('mb_password').value;

      if(mb_id.length < 1){
        alert('아이디를 입력해주세요.');
        return false;
      };
      if(mb_password.length < 1){
        alert('비밀번호를 입력해주세요.');
        return false;
      };
      return true;

    }
  </script>


  <!-- 카카오 로그인 -->
  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
  <script>
    Kakao.init('앱 주소 넣기');
    // sdk초기화여부판단 
    console.log(Kakao.isInitialized());
    //카카오로그인 
    function kakaoLogin() {
      //Kakao.Auth.authorize()
      Kakao.Auth.login({
        success: function (response) {
          Kakao.API.request({ 
          url: '/v2/user/me', success: function (response) {
              console.log(response)
              }, fail: function (error) { 
              console.log(error)
              }, 
            })
            }, fail: function (error) { 
            console.log(error) 
          }, 
        }) 
      } 
    //카카오로그아웃 
    function kakaoLogout() {
    if (Kakao.Auth.getAccessToken()) { 
      Kakao.API.request({
      url: '/v1/user/unlink',
    })
    .then(function(response) {
      console.log(response);
    })
    .catch(function(error) {
      console.log(error);
    });
    // Kakao.API.request({ 
    // url: '/v1/user/unlink', success: function (response) { 
    // console.log(response) 
    // }, fail: function (error) { 
    //   console.log(error) }, 
    //});
      Kakao.Auth.setAccessToken(undefined) 
    }}
  </script>
</body>
</html>