<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>espior</title>
  <!-- 부트스트랩 css연결하기 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 부트스트랩 js연결하기 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 부트스트랩 아이콘폰트 연결 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- 초기화서식 연결 -->
  <link rel="stylesheet" href="./css/reset.css">
  <!-- 공통서식 연결 -->
  <link rel="stylesheet" href="./css/common.css">
  <!-- 메인 css 서식 연결 -->
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./header.php')?>
  
  <!-- 메인서식 -->
  <main>
    <section id="sec01">
      <!-- Swiper -->
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Slide 1</div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section id="sec02">
      <h2 class="fs-2 p-4">상품목록</h2>
      <div class="row">
        <!-- Swiper -->
        <div class="swiper mySwiper2 col-md-6">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="product_box col-md-6">
          <?php
            include('./db/dbconn.php');
            $sql = "SELECT * FROM shop_data LIMIT 4";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="product">
            <div class="pd_img">
              <a href="#" title="상품">
                <img src="./images/shop/<?php echo $row['img']; ?>" alt="상품이미지">
              </a>
            </div>
            <div class="info">
              <p>노웨어 립스틱 볼륨 매트</p>
              <p>24,000원</p>
              <a href="#" title="자세히보기">Show more</a>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </div>
    </section>
  </main>
  
  
  <!-- 메인 스크립트 -->
  <script src="./script/main.js"></script>
</body>
</html>