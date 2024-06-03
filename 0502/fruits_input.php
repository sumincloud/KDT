<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>과일정보 입력_fruits_input.php</title>
  <style>

  </style>

  <!-- 제이쿼리 라이브러리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
  <h2>과일정보 입력</h2>
  <form action="db_input.php" name="fruits" method="post" onsubmit="return form_check();">
    <fieldset>
      <legend>과일정보 입력하기</legend>
      <p>
        <label for="f_name">과일명:</label>
        <input type="text" id="f_name" name="f_name" maxlength='10'>
      </p>
        <label for="f_price">가격:</label>
        <input type="text" id="f_price" name="f_price" maxlength='6'>
      </p>
        <label for="f_color">색상:</label>
        <input type="text" id="f_color" name="f_color" maxlength='20'>
      </p>
        <label for="f_country">원산지:</label>
        <input type="text" id="f_country" name="f_country" maxlength='30'>
      </p>
      <p>
        <input type="submit" value="데이터입력">
        <input type="reset" value="다시쓰기 또는 취소">
        <a href="fruits_list.php" title="과일정보 리스트 보기">과일정보 리스트보기</a>
      </p>
    </fieldset>
  </form>
  <script>
    //제이쿼리로 하는 방법
    function form_check(){
      if($.trim($("#f_name").val())==''){   //trim 은 문자의 공백을 제외해주는 것
        alert("이름을 입력해주세요.");
        return false;
      } 
      if($.trim($("#f_price").val())==''){
        alert("가격을 입력해주세요.");
        return false;
      } 
      if($.trim($("#f_color").val())==''){
        alert("색상을 입력해주세요.");
        return false;
      } 
      if($.trim($("#f_country").val())==''){
        alert("원산지를 입력해주세요.");
        return false;
      } 

      submit();
    }
  </script>

  <!-- 자바스크립트로 하는 방법 -->
  <!-- <script>
    function form_check(){
      const f_name = document.getElementById('f_name');
      //값을 입력했는지 여부를 확인해서
      if(f_name.value.length==''||f_name.value==' '){
        alert('상품명을 입력하세요.');
        f_name.focus();
        return false
      }

      return true;
    };
  </script>-->


</body>
</html>