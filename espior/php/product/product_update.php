<?php
  include('../../db/dbconn.php');

  $no = $_GET['no'];

  //해당 게시글 불러오기
  $sql = "select * from shop_data where no='$no'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>관리자 페이지</title>
  </head>
  <body>
    
    <main>
      <section>
        <h2>상품수정</h2>
        <form action="./product_update_db.php?no=<?php echo $no; ?>" method="post" enctype="multipart/form-data">
          <p>
            <label for="name">상품명</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
          </p>
          <p>
            <label for="cate">카테고리</label>
            <select name="cate" id="cate">
              <option value="">선택하세요.</option>
              <option value="cate01" <?php echo $row['cate'] == 'cate01' ? 'selected' : ''; ?>>함께하는 공간</option>
              <option value="cate02" <?php echo $row['cate'] == 'cate02' ? 'selected' : ''; ?>>함께하는 외출</option>
              <option value="cate03" <?php echo $row['cate'] == 'cate03' ? 'selected' : ''; ?>>함께하는 목욕</option>
              <option value="cate04" <?php echo $row['cate'] == 'cate04' ? 'selected' : ''; ?>>건강한 간식</option>
            </select>
          </p>
          <p>
            <label for="price">상품가격</label>
            <input type="text" id="price" name="price" value="<?php echo number_format($row['price']); ?>">원
          </p>
          <p>
            <label>현재 상품사진</label><br>
            <img src="../../images/shop/<?php echo $row['img']; ?>" alt="현재 상품 이미지" style="max-width: 100px;">
          </p>
          <p>
            <label>상품사진변경</label>
            <input type="file" name="myfile">
          </p>
          <p>
            <label for="parent">상품요약설명</label>
            <textarea name="parent" id="parent" cols="30" rows="10"><?php echo $row['parent']; ?></textarea>
          </p>
          <p>
            <label for="comment">설명</label>
            <textarea name="comment" id="comment" cols="30" rows="10"><?php echo $row['comment']; ?></textarea>
          </p>
          <p>
            <label for="memo">메모</label>
            <input type="text" id="memo" name="memo" value="<?php echo $row['memo']; ?>">
          </p>
          
          <input type="reset" value="초기화">
          <input type="submit" name="action" value="수정하기">
        
          
        </form>
      </section>
    </main>






    <script>
      //자동으로 가격에 쉼표 찍히게
      document.getElementById('price').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/,/g, ''); // 기존 쉼표 제거
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ','); // 새로 쉼표 추가
        e.target.value = value;
      });
    </script>




  </body>
</html>