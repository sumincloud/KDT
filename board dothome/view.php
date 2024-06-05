<?php
  include("./php/dbconn.php"); //db연결하기

  $id = $_GET['id'];
  $id = mysqli_real_escape_string($conn, $id);

  //echo $id; //넘겨받은 id값 출력해보기
  $sql = "select * from free_board where id='$id'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글내용보기</title>
  <!-- 공통 서식 추가 -->
  <link rel="stylesheet" href="./css/common.css">
</head>
<style>
  table input, table textarea{
    width: 100%;
    border: none;
    resize: none;
    border-radius: 10px;
    line-height: 160%;
    padding: 5px 10px;
  }
  table input[type='password']{
    width: 100px;
    height: 30px;
    background: #f5f5f5;
  }
  table input[type="submit"]{
    width: 100px;
    height: 30px;
    background: #ff7417;
    color: #fff;
    cursor: pointer;
  }
  table input:focus{
    outline: none;
  }
  table tr{border-bottom: 1px solid #ffecca;}
  table td{padding: 20px 10px;}

  .btn_box{
    text-align: center;
    margin-top: 50px;
  }
  .btn{
    padding: 10px 40px;
    height: 30px;
    background: #ff7417;
    text-decoration: none;
    color: #fff;
    border-radius: 10px;
  }
  #btn03{
    background: gray;
    margin-top: 10px;
  }


</style>


<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/header.php')?>

  <form id="mainForm" method="post">
    <main>
      <section>
        <h2>글내용 보기</h2>
        <table class="free_board">
          <caption>글내용 보기</caption>
            <tr>
              <th>id값</th>
              <td><?php echo $row['id']?></td>
            </tr>
            <tr>
              <th>작성자</th>
              <td><?php echo $row['name']?></td>
            </tr>
            <tr>
              <th>제목</th>
              <td><?php echo $row['subject']?></td>
            </tr>
            <tr>
              <th>내용</th>
              <td><?php echo $row['memo']?></td>
            </tr>
            <tr>
              <th>작성일</th>         
              <td><?php echo date('Y-m-d', strtotime($row['datetime'])); ?></td>
            </tr>
            <tr>
              <td colspan="2">
                
                <label for="pwd">비밀번호 : </label><input type="password" id="pwd" name="pwd">
                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                <input type="submit" name="action" value="수정" onclick="submitForm('./php/update.php')">
                <input type="submit" name="action" value="삭제" onclick="submitForm('./php/delete.php')">

                <p class="btn_box">
                  <a href="./list.php" title="목록보기" class="btn">목록보기</a>
                </p>
              </td>
            </tr>
        </table>
      </section>
    
    </main>
    <script>
    document.getElementById('deleteForm').onsubmit = function() {
      return f_check();
    };

    function f_check() {
        var id = document.getElementById('id').value;
        // 여기서 id 변수를 사용하여 작업 수행
        console.log("전달된 ID:", id);
        // 반환 값에 따라 동작 결정
        return true; // 예시로 true를 반환하도록 함
    }

    //수정 삭제 버튼 클릭시 각각의 php 파일로 넘어가도록 하기
    function submitForm(action) {
    document.getElementById('mainForm').action = action;
}



  </script>
  </form>

  <!-- 공통푸터 삽입 -->
  <?php include('./php/footer.php')?>
  
  
</body>
</html>