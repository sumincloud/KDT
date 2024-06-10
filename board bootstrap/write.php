<?php
  include('./php/dbconn.php'); //db계정과 연결

?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>자유게시판 - 글쓰기</title>
  <!-- 공통 서식 추가 -->
  <!-- <link rel="stylesheet" href="./css/common.css"> -->
</head>
<!-- <style>
  table input, table textarea{
    width: 100%;
    border: none;
    resize: none;
    border-radius: 10px;
    line-height: 160%;
    padding: 5px 10px;
  }
  table input{
    height: 40px;
    background: #f5f5f5;
  }
  table input:focus, table textarea:focus{
    outline: none;
  }
  table textarea{
    height: 150px;
    background: #f5f5f5;
  }

  table tr{border-bottom: 1px solid #ffecca;}
  table td{padding: 20px 10px;}

  .btn input{
    width: 40%;
    max-width: 300px;
    height: 50px;
    border: none;
    margin: 0 5px;
    cursor: pointer;
    margin-top: 50px;
    border-radius: 10px;
  }
  .btn input:hover{
    filter: brightness(0.93);
  }
  .btn input[value="입력완료"]{
    background: #ff7417;
  }  
</style> -->
<style>
  table{
    width: 80%;
    margin: 0 auto;
  }
  table textarea{
    resize: none;
  }
  caption{
    display:none;
  }
  #pwd{
    width: 200px;
  }
</style>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/header.php')?>
  <form name="글쓰기" method="post" action="./php/dbinput.php" onsubmit="return formCheck(this);">
    <section>
      <h2 class="text-center">게시판 글 입력</h2>
      <table class="free_board text-center">
        <caption>글 입력하기</caption>
        <thead>
          <tr>
            <td scope="row"><label for="title">글 제목</label></td>
            <td scope="row"><input type="text" maxlength ="255" name="title" id="title" class="form-control"></td>
          </tr>
        </thead>
      
        <tbody>
          <tr>
            <td><label for="name">작성자</label></td>
            <td><input type="text" maxlength ="50" name="name" id="name" class="form-control"></td>
          </tr>
          <tr>
            <td><label for="txtbox">내용</label></td>
            <td><textarea cols="50" rows="30" name="txtbox" maxlength ="255" class="form-control"></textarea></td>
          </tr>
          <tr>
            <td><label for="pwd">비밀번호</label></td>
            <td><input type="password" maxlength ="255" name="pwd" id="pwd" class="form-control"></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center">
        <input type="reset" value="입력취소" class="btn btn-danger">
        <input type="submit" value="입력완료" class="btn btn-success">
      </div>
    </section>
  </form>
  <script>
    function formCheck(f){
      //제목 체크
      if(f.title.value.length < 1){
        alert('제목을 입력하세요.');
        return false;
      }
      //작성자명 체크
      if(f.name.value.length < 1){
        alert('작성자명을 입력하세요.');
        return false;
      }
      //내용 체크
      if(f.txtbox.value.length < 1){
        alert('내용을 입력하세요.');
        return false;
      }
      //비밀번호 체크
      if(f.pwd.value.length < 1){
        alert('비밀번호를 입력하세요.');
        return false;
      }
      return true;
    }
  </script>



  <!-- 공통푸터 삽입 -->
  <?php include('./php/footer.php')?>




</body>
</html>