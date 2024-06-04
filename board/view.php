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
<body>
  <form name="글내용보기" method="post" action="./php/delete.php" id="deleteForm">
    <main>
      <section>
        <h2>글내용 보기</h2>
        <table>
          <caption>글내용 보기</caption>
            <tr>
              <th>No.</th>
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
                <a href="./list.php" title="목록보기" class="btn">목록보기</a>

                <label for="pwd">비밀번호 : </label><input type="password" id="pwd" name="pwd">
                <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                <input type="submit" id="btn02" value="삭제">
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