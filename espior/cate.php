<?php
  include('./db/dbconn.php');
  $cate = trim($_GET['cate']);
?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>카테고리 상품</title>
  <!-- 부트스트랩 css연결하기 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 부트스트랩 js연결하기 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 부트스트랩 아이콘폰트 연결 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- 초기화서식 연결 -->
  <link rel="stylesheet" href="./css/reset.css">
  <!-- 공통서식 연결 -->
  <link rel="stylesheet" href="./css/common.css">
  <style>
    .row{
      width: 100%;
    }
    .product_box{
      padding: 10px; /* 여백 추가 */
    }
    .pd_img{
      position: relative;
      width: 100%;
      padding-top: 100%; /* 1:1 비율 유지 */
      overflow: hidden;
    }
    .pd_img img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./header.php')?>

  <main>
    <section>
      <h2 class="fs-2 p-4"><?php echo $cate; ?></h2>
      <div class="row">
        <?php
          //해당 카테고리 상품 보여지게
          $sql = "SELECT * FROM shop_data where cate = '$cate'";
          $result = mysqli_query($conn, $sql);
          
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="product_box col-md-3 col-6">
          <div class="product">
            <div class="pd_img">
              <button type="button" style="padding: 6px;" id="pick">
                <span>
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.6423 11.1126C13.9062 10.394 12.9283 10 11.892 10C10.8538 10 9.87785 10.394 9.14413 11.1122C7.61869 12.5986 7.61869 15.0205 9.14373 16.5092L15.9859 23.0909L23.0478 16.3007C24.3819 14.8233 24.3105 12.5319 22.8561 11.1126C22.1216 10.394 21.1453 10 20.1078 10C19.0684 10 18.0912 10.394 17.3563 11.1122L14.335 14.0289C13.9611 14.3827 13.7552 14.8529 13.7552 15.3508C13.7552 15.8491 13.9611 16.3193 14.3346 16.6734C15.1074 17.4049 16.3674 17.4049 17.1417 16.6734L20.0873 13.8428" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
              </button>
              <a href="#" title="상품">
                <img src="./images/shop/<?php echo $row['img']; ?>" alt="상품이미지">
              </a>
            </div>
            <div class="info">
              <p><?php echo $row['name']; ?></p>
              <p><?php echo number_format($row['price']); ?>원</p>
              <a href="./detail.php?no=<?php echo $row['no']; ?>" title="자세히보기">Show more</a>
            </div>
          </div>
        </div>
          <?php
            }
            ?>
      </div>
    </section>
  </main>


</body>





