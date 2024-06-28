<?php
  include('../db/dbconn.php');

  $sql = "SELECT * FROM shop_data";

  $result = mysqli_query($conn, $sql);
  //$row = mysqli_fetch_assoc($result);

  echo "<table><caption>상품목록 리스트</caption>";
  echo "<tr>
          <th>No.</th>
          <th>상품분류</th>
          <th>상품명</th>
          <th>보조설명</th>
          <th>가격</th>
          <th>설명</th>
          <th>메모</th>
          <th>등록일</th>
          <th>이미지</th>
        </tr>";

  //반복문 for, do while, while, foreach
  while($row=mysqli_fetch_row($result)){
    echo "<tr><td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "<td>" . $row[7] . "</td>";
    echo "<td>" . date('Y-m-d', strtotime($row[8])) . "</td>";
    echo "<td>" . "<img src='" . $row[2] . "' alt='이미지'></td>";
    echo "<td>
            <button>수정</button>
            <button>삭제</button>
          </td></tr>";
  }
  echo "</table>";




  mysqli_free_result($result); //쿼리 내용을 메모리에서 제거
  mysqli_close($conn);

?>
<style>
  img{
    width: 100px;height: 100px;
    object-fit:cover;
  }
</style>