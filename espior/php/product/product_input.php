<?php
  include('../../db/dbconn.php');
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>관리자 페이지</title>
  </head>
  <body>
    
    <main>
      <section>
        <h2>상품등록</h2>
        <form action="./product_input_db.php" method="post" enctype="multipart/form-data">
          <p>
            <label for="name">상품명</label>
            <input type="text" id="name" name="name">
          </p>
          <p>
            <label for="cate">카테고리</label>
            <select name="cate" id="cate">
              <option value="">선택하세요.</option>
              <option value="cate01">함께하는 공간</option>
              <option value="cate02">함께하는 외출</option>
              <option value="cate03">함께하는 목욕</option>
              <option value="cate04">건강한 간식</option>
            </select>
          </p>
          <p>
            <label for="price">상품가격</label>
            <input type="text" id="price" name="price">원
          </p>
          <p>
            <label>상품사진</label>
            <input type="file" name="myfile" value="이미지 업로드">
          </p>
          <p>
            <label for="parent">상품요약설명</label>
            <textarea name="parent" id="parent" cols="30" rows="10"></textarea>
          </p>
          <p>
            <label for="comment">설명</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
          </p>
          <p>
            <label for="memo">메모</label>
            <input type="text" id="memo" name="memo">
          </p>
          
          <input type="reset" value="초기화">
          <input type="submit" name="action" value="등록하기">
        
          
        </form>
      </section>
    </main>











  </body>
</html>