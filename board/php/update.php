<?php
  include('./dbconn.php'); //db연결하기

  $id = $_POST['id'];
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $memo = $_POST['memo'];
  $pwd = $_POST['pwd'];

  // SQL Injection 방지
  $id = mysqli_real_escape_string($conn, $id);
  $name = mysqli_real_escape_string($conn, $name);
  $subject = mysqli_real_escape_string($conn, $subject);
  $memo = mysqli_real_escape_string($conn, $memo);
  $pwd = mysqli_real_escape_string($conn, $pwd);
  
  //아이디 확인 및 해당 게시글 불러오기
  $sql = "select * from free_board where id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if($id && $pwd){ // 사용자가 수정하려는 글의 아이디 값과 비밀번호가 제출된 경우
    //일치하는 글이 있고 비밀번호가 일치하는 경우
    if ($row && password_verify($pwd, $row['pwd'])) {
      ?>
      
      <html lang="ko">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>글 수정하기</title>
          <!-- 공통 서식 추가 -->
          <link rel="stylesheet" href="../css/common.css">
          <style>
            table input[name="name"]{
              background: none;
            }
            table input, table textarea{
              width: 100%;
              border: none;
              resize: none;
              border-radius: 10px;
              line-height: 160%;
              padding: 5px 10px;
              background: #f5f5f5;
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
        </head>
        <body>
          <!-- 공통헤더삽입 -->
          <?php include('./header.php') ?>

          <form method="post" action="update_process.php">
            <main>
              <section>
                <h2>글 수정하기</h2>
                <table class="free_board">
                  <caption>글 수정하기</caption>
                  <tr>
                    <th>id값</th>
                    <td><?php echo $row['id'] ?></td>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" readonly>
                  </tr>
                  <tr>
                    <th>작성자</th>
                    <td><input type="text" name="name" value="<?php echo $row['name'] ?>" maxlength="50" readonly></td>
                  </tr>
                  <tr>
                    <th>제목</th>
                    <td><input type="text" name="subject" value="<?php echo $row['subject'] ?>"></td>
                  </tr>
                  <tr>
                    <th>내용</th>
                    <td><textarea name="memo" maxlength="255"><?php echo $row['memo'] ?></textarea></td>
                  </tr>
                  <tr>
                    <th>비밀번호</th>
                    <td><input type="password" name="pwd" maxlength="255"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="submit" value="수정 완료">
                    </td>
                  </tr>
                </table>
              </section>
            </main>
          </form>

          <!-- 공통푸터 삽입 -->
          <?php include('./footer.php') ?>
        </body>
      </html>
      <?php

    }else{
      echo "<script>alert('비밀번호가 일치하지 않습니다.')</script>";
      echo "<script>history.back(1);</script>"; // 이전 화면으로 돌아가기
    }
  }else{
    echo "<script>alert('비밀번호가 입력되지 않았습니다.')</script>";
    echo "<script>history.back(1);</script>"; // 이전 화면으로 돌아가기
  }

  ?>


