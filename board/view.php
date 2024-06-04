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
</head>
<style>
  body{
    margin: 0; padding: 0;
    background: #ffecca;
  }
  form{
    width: 90%;
    position: relative;
    top: 50%; left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    box-shadow: 0 0 10px rgba(255, 156, 43, 0.5);
    box-sizing: border-box;
    padding: 20px 50px;
    background: white;
    border-radius: 30px;

  }
  .free_board{
    border-collapse: collapse;
    border: none;
    width: 100%;
    /* background: #ffecca; */
  }
  .free_board th{text-wrap: nowrap;}
  .free_board caption{display: none;}
  .free_board input, .free_board textarea{
    width: 100%;
    border: none;
    resize: none;
    border-radius: 10px;
    line-height: 160%;
    padding: 5px 10px;
  }
  .free_board input[type='password']{
    width: 100px;
    height: 30px;
    background: #f5f5f5;
  }
  .free_board input[type="submit"]{
    width: 100px;
    height: 30px;
    background: #ff7417;
    float:right;
    color: #fff;
    cursor: pointer;
  }
  .free_board input:focus{
    outline: none;
  }
  .free_board tr{border-bottom: 1px solid #ffecca;}
  .free_board td{padding: 20px 10px;}

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


</style>


<body>
  <form name="글내용보기" method="post" action="./php/delete.php" id="deleteForm">
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
                <input type="submit" id="btn02" value="삭제">
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
  </script>
  </form>
  
  
</body>
</html>