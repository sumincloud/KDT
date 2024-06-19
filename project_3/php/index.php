<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>떠나개</title>
  <!-- 1. 부트스트랩 css연결하기 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 2. 부트스트랩 js연결하기 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 3. 부트스트랩 아이콘폰트 연결 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- 공통서식 연결 -->
  <link rel="stylesheet" href="../css/common.css">
  <!-- 메인 css 서식 연결 -->
  <link rel="stylesheet" href="../css/main.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- 스와이퍼 js -->
  <script src="../script/swiper.js"></script>
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- 메인 스크립트 -->
  <script src="../script/main.js"></script>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./header.php')?>

  <!-- 메인서식 -->
  <main>
    <!-- 1. 메인배너 -->
    <section id="sec01">
      <!-- Swiper -->
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="main_img">
              <img src="../images/main_visual_01.jpg" alt="">
            </div>
            <div class="main_txt">
              <span>서울부터 부산까지<br>한 번에 떠나개</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="main_img">
              <img src="../images/main_visual_01.jpg" alt="">
            </div>
            <div class="main_txt">
              <span>서울부터 부산까지<br>한 번에 떠나개</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="main_img">
              <img src="../images/main_visual_01.jpg" alt="">
            </div>
            <div class="main_txt">
              <span>서울부터 부산까지<br>한 번에 떠나개</span>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="input-group mb-3" id="search_box">
        <span class="input-group-text" style="background: #fff; border-radius: 30px 0 0 30px;">
          <i class="bi bi-search"></i>
        </span>
        <input type="text" class="form-control" aria-label="검색창" placeholder="구름이랑 어디로 떠날까?" style="border-left: none; border-radius: 0 30px 30px 0;">
      </div>
    </section>

    <!-- 2. 카테고리 -->
    <section class="padding">
      <div class="d-flex justify-content-between mt-5 mb-4">
        <h2 class="fw-bold fs-5 m-0">카테고리</h2>
        <a href="#" title="카테고리 전체보기" style="color: var(--main_color);">+ 전체보기</a>
      </div>
      <div>
        <div class="d-flex justify-content-between mb-2">
          <div class="text-center categori" role="button">
            <img alt="" src="../images/icon_seoul.png" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="../images/icon_jeju.png" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">제주</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="../images/icon_busan.png" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">부산</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
          <div class="text-center categori" role="button">
            <img alt="" src="https://dummyimage.com/50x50" width="50px"/>
            <p class="fw-bold mt-1" style="font-size: 14px;">서울</p>
          </div>
        </div>

      </div>
    </section>

    <!-- 3. 딱 맞는 여행지 -->
    <section style="padding-left: 6%;">
      <div class="d-flex justify-content-between mt-5 mb-4" style="padding-right: 6%;">
        <h2 class="fw-bold fs-5 m-0">
          <span style="color:var(--main_color)">구름이</span>에게 딱 맞는 여행지예요 🏝️</h2>
        <a href="#" title="추천여행지 전체보기" style="color: #aaa; width: 40px; text-align: center;">
          <i class="bi bi-chevron-right fs-4"></i>
        </a>
      </div>
      
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>
          <div class="swiper-slide recommend">
            <div>
              <img src="../images/busan_01.jpg" alt="이미지">
            </div>
            <div style="padding: 10px 5px;">
              <div class="d-flex justify-content-between mb-1">
                <span class="title_txt">부산 바다 패키지 여행코스 초보자도 쉽게 여행</span>
                <div style="font-size: 13px; font-weight: bold; text-wrap: none;width: 60px;">
                  <i class="bi bi-star-fill" style="color: #ffc000;"></i>
                  <span>4.8</span>
                </div>
              </div>
              <p class="sub_txt mb-1">부산의 바다냄새를 맡으러 댕댕이와 여행가자</p>
              <span class="title_txt">
                <i class="bi bi-geo-alt-fill"></i>
                부산 해운대구 
                <span style="opacity: 0.4; font-weight: normal;">/ 1박추천</span>
              </span>
            </div>
          </div>

        </div>
      </div>
    
    </section>

    <!-- 4. 여행 메이트 구해요 -->
    <section class="padding">
      <div class="d-flex justify-content-between mt-5 mb-4">
        <h2 class="fw-bold fs-5 m-0">
          여행 메이트 구해요 🐾</h2>
        <a href="#" title="여행메이트 전체보기" style="color: #aaa; width: 40px; text-align: center;">
          <i class="bi bi-chevron-right fs-4"></i>
        </a>
      </div>

      <div class="container" style="margin: 0;padding: 0; max-width: inherit;">
        <div class="row">
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
              <img src="../images/find_deabu_01.jpg" alt="">
              <div class="card-top">
                <h4 class="card-title">6월 23일 출발</h4>
              </div>
              <div class="card-body">
                <h4 class="card-title">대부도 먹고 뜯고 즐기자</h4>
                <p class="card-text">: 으르렁파크에서 완벽한 휴가</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
              <img src="../images/find_gongju_01.jpg" alt="">
              <div class="card-top">
                <h4 class="card-title">6월 25일 출발</h4>
              </div>
              <div class="card-body">
                <h4 class="card-title">공주에서 제대로 '쉼'</h4>
                <p class="card-text">: 도심을 벗어나 자연속으로</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
              <img src="../images/find_deabu_01.jpg" alt="">
              <div class="card-top">
                <h4 class="card-title">6월 26일 출발</h4>
              </div>
              <div class="card-body">
                <h4 class="card-title">대부도 먹고 뜯고 즐기자</h4>
                <p class="card-text">: 으르렁파크에서 완벽한 휴가</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
              <img src="../images/find_deabu_01.jpg" alt="">
              <div class="card-top">
                <h4 class="card-title">6월 27일 출발</h4>
              </div>
              <div class="card-body">
                <h4 class="card-title">대부도 먹고 뜯고 즐기자</h4>
                <p class="card-text">: 으르렁파크에서 완벽한 휴가</p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>

    <!-- 5. 제휴배너 광고 -->
    <section class="padding mb-5">
      <!-- Swiper -->
      <div class="swiper mySwiper3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="ad">
              <img src="https://dummyimage.com/400x150" alt="광고배너">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ad">
              <img src="https://dummyimage.com/400x150" alt="광고배너">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="ad">
              <img src="https://dummyimage.com/400x150" alt="광고배너">
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>


    <!-- 6. 이달의 인기여행 테마 -->
    <section id="sec06">
      <div class="d-flex justify-content-between mb-4 padding pt-5 pb-2">
        <h2 class="fw-bold fs-5 m-0">
          이 달의 인기 여행 테마 🏆</h2>
        <a href="#" title="인기여행테마 전체보기" style="color: #aaa; width: 40px; text-align: center;">
          <i class="bi bi-chevron-right fs-4"></i>
        </a>
      </div>
      <div class="slider">
        <div class="inner">
          <ul class="swiper-wrapper slide_list">
            <li class="swiper-slide">
              <span class="img">
                <img src="https://picsum.photos/id/10/1000/600" alt="썸네일 이미지">
              </span>
              <div class="flag d-inline">
                <svg width="26" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z" fill="#F2055C"></path>
                </svg>
                <span>1</span>
              </div>
            </li>
            <li class="swiper-slide">
              <span class="img">
                <img src="https://picsum.photos/id/20/1000/600" alt="썸네일 이미지">
              </span>
              <div class="flag d-inline">
                <svg width="26" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z" fill="#F2055C"></path>
                </svg>
                <span>2</span>
              </div>
            </li>
            <li class="swiper-slide">
              <span class="img">
                <img src="https://picsum.photos/id/30/1000/600" alt="썸네일 이미지">
              </span>
              <div class="flag d-inline">
                <svg width="26" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z" fill="#F2055C"></path>
                </svg>
                <span>3</span>
              </div>
            </li>
            <li class="swiper-slide">
              <span class="img">
                <img src="https://picsum.photos/id/40/1000/600" alt="썸네일 이미지">
              </span>
              <div class="flag d-inline">
                <svg width="26" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z" fill="#F2055C"></path>
                </svg>
                <span>4</span>
              </div>
            </li>
            <li class="swiper-slide">
              <span class="img">
                <img src="https://picsum.photos/id/50/1000/600" alt="썸네일 이미지">
              </span>
              <div class="flag d-inline">
                <svg width="26" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z" fill="#F2055C"></path>
                </svg>
                <span>5</span>
              </div>
            </li>
            <li class="swiper-slide">
              <span class="img">
                <img src="https://picsum.photos/id/60/1000/600" alt="썸네일 이미지">
              </span>
              <div class="flag d-inline">
                <svg width="26" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z" fill="#F2055C"></path>
                </svg>
                <span>6</span>
              </div>
            </li>
          </ul>
          <div class="swiper-pagination" style="margin: 30px 0 25px 0;"></div>
        </div>
      </div>
    </section>

    <!-- 공백 -->
    <section style="height:500px;"></section>




  </main>

  <!-- 공통 바텀바삽입 -->
  <?php include('./bottom.php')?>
  <script>
    //해당 페이지에 해당하는 하단 바텀바에 버튼색 생기게
    $(document).ready(function() {
      $('a[title="홈"]').find('i, span').addClass('active');
    });
  </script>

</body>
</html>