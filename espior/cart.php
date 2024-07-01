<?php
  session_start();
  include('./db/dbconn.php');
?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>장바구니</title>
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
    .cart_product{
      width: 100px;
      height: 100px;
      overflow: hidden;
    }
    .cart_product img{
      width: 100%; height: 100%;
      object-fit:cover;
    }
    .table-bordered {
      border: 1px solid #dee2e6; /* 기본 테두리 스타일 */
    }

    td{
      vertical-align: middle !important;
    }
    .cart_delete a{
      color: red;
    }
  </style>
</head>
<body>
    <!-- 공통헤더삽입 -->
    <?php include('./header.php')?>


    <main>
      <?php
        //세션정보를 가져온다.
        $userid = $_SESSION['userid'];
        //$userid = 'admin';
        $username = $_SESSION['username'];

        //해당 유저의 상품 보여지게
        $sql = "SELECT * FROM shop_temp where ss_id = '$userid'";
        $result = mysqli_query($conn, $sql);
      ?>


      <section id="cart_item">
        <div class="container">
          <div class="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" title="메인으로 바로가기">홈</a></li>
              <li  class="breadcrumb-item active">찜 목록</li>
            </ol>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr class="cart_menu table-info">
                <th scope="col">제품이미지</th>
                <th scope="col">제품명</th>
                <th scope="col">가격</th>
                <th scope="col">수량</th>
                <th scope="col">전체금액</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_assoc($result)){ ?>

              <tr>
                <td class="cart_product">
                  <a href="./detail.php?no=<?php echo $row['no']; ?>" title="상품">
                    <img src="./images/shop/<?php echo $row['img']; ?>" alt="상품이미지">
                  </a>
                </td>
                <td class="cart_name">
                  <?php echo $row['name']; ?>
                </td>
                <td class="cart_price text-end">
                  <?php echo number_format($row['price']).'원'; ?>
                </td>
                <td class="cart_quantity text-center">
                  <?php echo ($row['count']).'개'; ?>
                </td>
                <td class="cart_total text-end">
                  <?php echo number_format($row['price']*$row['count']).'원'; ?>
                </td>
                <td class="cart_delete text-center">
                  <a href="./php/cart_delete.php?no=<?php echo $row['no']; ?>" title='삭제'>삭제</a>
                </td>
              </tr>



              <?php
              };
              ?>
            </tbody>

          </table>
        </div>
      </section>
    </main>


</body>
</html>