<?php 
  include("./php/dbconn.php");
  $mb_id = $_SESSION['ss_mb_id'];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
  <meta name="Description" content="항공 스케줄, 스카이패스, 할인 항공권, 여행상품안내">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">



  <title>대한항공-모바일웹(앱)</title>
  <!-- CSS초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">
  <!-- 메인서식 -->
  <link href="./css/main.css" rel="stylesheet" type="text/css">
  <!-- 스와이퍼 링크 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  

  <style>
    /* 상단 헤더영역 */
    .h_inner{
      display:flex;
      width:100%;
      height:68px;
      background:var(--main_color);
      align-items: center;
      padding: 0 20px;
      box-sizing:border-box;
      box-shadow: 0 0 8px rgba(0,0,0,0.4);
      position: fixed;
      z-index: 100;
    }
    .h_inner h1{
      width:230px;
      margin:0 auto;
    }
    #myname a{
      font-size: 1.2rem;
      font-weight: bold;
      color: #fff;
    }

    /* 메인영역 */
    .login_txt{
      width: 100px;
      height: 50px;
      text-align: center;
      margin: 50px 0;
    }
    .login_txt a{
      font-size: 1.2rem;
      line-height: 50px;
      display:block;
    }
  </style>
</head>
<body>
  <!-- 상단헤더영역 -->
  <header>
    <div class="h_inner">
      <div id="toggle_btn">
        <label for="toggle">
          <img src="./images/toggle.png" alt="메뉴버튼">
        </label>
      </div>

<!--       <div id="toggle">
        <img src="./images/toggle.png" alt="메뉴버튼">
      </div> -->
      <h1>
        <a href="index.html" title="상단로고">
          <img src="./images/txt_logo.png" alt="상단로고">
        </a>
      </h1>
      <?php 
        if(isset($mb_id)){
          echo "
          <div id='myname'>
            <a href='#' title='마이페이지'>
              $mb_id 님
            </a>
          </div>";
        }else{
          echo "
          <div>
            <a href='login.php' title='로그인'>
              <img src='./images/user1.png' alt='로그인버튼'>
            </a>
          </div>";
        }
      ?>
    </div>

    <!-- 토글 체크박스 -->
    <input type="checkbox" id="toggle">
    <!-- 태블릿&모바일 토글 메뉴바 -->
    <div id="toggle_bg">
      <div>
        <label for="toggle" class="fas fa-times"></label>
      </div>
    </div>
    <nav id="toggle_menu">
      <?php
        if(isset($mb_id)){
          echo "
            <div class='login_txt'>
              <a href='./php/logout.php'>로그아웃</a>
            </div>
          ";
        }else{
          echo "
          <div class='login_txt'>
            <a href='./php/login.php'>로그인</a>
          </div>
        ";
        }
      ?>

      <ul id="t_gnb">
        <li>
          <p>메뉴1</p>
          <ul class="t_sub">
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
          </ul>
        </li>
        <li>
          <p>메뉴1</p>
          <ul class="t_sub">
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
          </ul>
        </li>
        <li>
          <p>메뉴1</p>
          <ul class="t_sub">
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
          </ul>
        </li>
        <li>
          <p>메뉴1</p>
          <ul class="t_sub">
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
          </ul>
        </li>
        <li>
          <p>메뉴1</p>
          <ul class="t_sub">
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
            <li><a href="#" title="">서브메뉴</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- 메인콘텐츠영역 -->
  <main>
    <section id="gallery">
      <div class="grid_gallery">
        <figure>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./images/banner01.jpg" alt="배너이미지1">
              </div>
              <div class="swiper-slide">
                <img src="./images/banner02.jpg" alt="배너이미지2">
              </div>
              <div class="swiper-slide">
                <img src="./images/banner03.jpg" alt="배너이미지3">
              </div>
              <div class="swiper-slide">
                <img src="./images/banner04.jpg" alt="배너이미지4">
              </div>
            </div>
            <!-- pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </figure>
        <figure>
          <img src="./images/m_img01.jpg" alt="국내선 예매">
        </figure>
        <figure>
          <img src="./images/m_img02.jpg" alt="국제선 예매">
        </figure>
        <figure>
          <img src="./images/m_img03.jpg" alt="예약 관리">
        </figure>
        <figure>
          <img src="./images/m_img04.jpg" alt="체크인">
        </figure>
        <figure>
          <img src="./images/m_img05.jpg" alt="스케줄/출도착">
        </figure>

      </div>
    </section>

    <section>
      <a href="#">
        <img src="./images/skypass.jpg" alt="나의정보">
      </a>
    </section>
  </main>

  <!-- 푸터영역 -->
  <footer>
    <div class="f_link">
      <a href="#" style="color: #000; font-weight:bold;">개인정보취급방침</a>
      <a href="#">PC버전보기</a>
      <a href="#">앱다운로드</a>
    </div>
    <p>Copyright© 2022 KOREAN AIR All Rights Reserved.</p>
    <p>
      사업자등록번호: 123-45-67890 
      통신판매업신고번호: 강서 제00-000
    </p>
  </footer>

  <!-- 스와이퍼 스크립트 -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });

    //--------토글버튼 메뉴바 서식-------

    $(document).ready(function(){
      $('#t_gnb > li p').click(function(){
        $(this).parent().siblings().find('.t_sub').stop().slideUp()
        $(this).next().stop().slideToggle()
      })
    })


  </script>
</body>
</html>