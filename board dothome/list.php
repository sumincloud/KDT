<?php
  include('./php/dbconn.php'); //db연결을 위한 파일 인클루드


  //**검색 기능 추가 **
  $search = isset($_GET['search']) ? $_GET['search'] : '';

  if ($search) {
    // 검색어가 있을 경우
    $sql = "SELECT COUNT(*) AS 'cnt' FROM free_board WHERE subject LIKE '%$search%' OR memo LIKE '%$search%'";
  } else {
    // 검색어가 없을 경우
    $sql = "SELECT COUNT(*) AS 'cnt' FROM free_board";
  }


  //free_board 테이블 등록되어 있는 글 수 조회
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $total_count = $row['cnt'];

  //**페이지네이션을 위한 변수 설정 **
  $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $list_num = 10; // 한 페이지 당 게시글 수
  $offset = ($page - 1) * $list_num;
  $total_page = ceil($total_count / $list_num);

  //** 블록 페이징 설정 **
  $page_num = 3; // 한 블록 당 페이지 수
  $now_block = ceil($page / $page_num);
  $s_pageNum = ($now_block - 1) * $page_num + 1;
  $e_pageNum = $now_block * $page_num;

  if ($e_pageNum > $total_page) {
    $e_pageNum = $total_page;
  }



  //**검색 기능과 페이지네이션 결합 **
  if ($search) {
    // 검색어가 있을 경우
    $sql = "SELECT * FROM free_board WHERE subject LIKE '%$search%' OR memo LIKE '%$search%' ORDER BY datetime DESC LIMIT $offset, $list_num";
  } else {
    // 검색어가 없을 경우
    $sql = "SELECT * FROM free_board ORDER BY datetime DESC LIMIT $offset, $list_num";
  }

  $result = mysqli_query($conn, $sql);

?>

<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시판 목록보기</title>
  <!-- 공통 서식 추가 -->
  <link rel="stylesheet" href="./css/common.css">
</head>
<style>
  a{
    text-decoration: none;
    color: #000;
  }
  table{
    text-align: center;
  }
  table th{
    height: 30px;
    font-weight: 550;
    border-bottom:2px solid #ff7417;
    padding:5px;
  }
  table td{
    height: 30px;
    border-bottom: 1px solid #ccc;
    padding:5px;
  }

  /* 원하는 최대 길이 설정 후 제목글씨 말줄임 */
  table td.title {
    max-width: 150px; 
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .total td{
    color:gray;
    text-align: right;
    border-bottom: 2px solid #ff7417;
    padding: 20px 0;
  }
  #btn{
    display: flex;
    flex-wrap: wrap;
    margin-top:50px;
    justify-content: space-between;
    width: 100%;
  }
  #btn > div{
    display:flex;
    gap: 5px;
    width: auto;
    margin-bottom: 10px;
  }
  #btn input[type=search]{
    height: 40px;
    border: 1px solid #000;
    width: 100%;
    max-width: 500px;
    min-width: 200px;
  }
  #btn input[type=submit]{
    height: 40px;
    border: 1px solid #ff7417;
    width: 100px;
    background:  #ff7417;
    color: #fff;
    cursor: pointer;
    font-size: 1rem;
  }
  #write{
    width: 150px !important;
    height: 40px;
    line-height: 40px;
    background:  #ff7417;
    margin-left: 10px;
    font-size: 1rem;
  }
  #write a{
    margin: 0 auto;
    color: #fff;
  }
  #write:hover, #btn input[type=submit]:hover{
    filter: brightness(1.2);
  }

  /* 페이지 클릭시 색변경 */
  .active{
    font-weight: bold;
    color: #ff7417;
  }




</style>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/header.php')?>

  <main>
    <section>
      <h2>게시글 목록</h2>
      <table>
        <caption>리스트</caption>
        <thead>
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
          </tr>
        </thead>
        <tbody>  <!-- for(초기값;조건식;증감식){출력내용} -->
          <?php for($i = $total_count - $offset - 1; $row = mysqli_fetch_assoc($result); $i--): ?>
            <tr>
              <td><?php echo $i+1 ?></td>
              <td class="title">
                <a href="view.php?id=<?php echo $row['id']?>" title="<?php echo $row['subject']?>">
                <?php echo $row['subject'] ?></a>
              </td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo date('Y-m-d', strtotime($row['datetime'])); ?></td>
            </tr>
          <?php endfor; ?>
          <tr class="total"><td colspan="4">총 게시글 수 : <?php echo $total_count?>개</td></tr>
          <?php
            if($total_count==0){  //게시글이 없다면
              echo "<tr><td colspan='4'>등록된 게시글이 없습니다.</td></tr>;";
            };
          ?>
        </tbody>
      </table>

      <!-- 페이지네이션 -->
      <div class="pagination">
        <?php if ($s_pageNum > 1): ?>
          <a href="?page=<?php echo $s_pageNum - 1; ?>&search=<?php echo $search; ?>">&laquo; 이전</a>
        <?php endif; ?>
        <?php for ($p = $s_pageNum; $p <= $e_pageNum; $p++): ?>
          <a href="?page=<?php echo $p; ?>&search=<?php echo $search; ?>" class="<?php echo $p == $page ? 'active' : ''; ?>"><?php echo $p; ?></a>
        <?php endfor; ?>
        <?php if ($e_pageNum < $total_page): ?>
          <a href="?page=<?php echo $e_pageNum + 1; ?>&search=<?php echo $search; ?>">다음 &raquo;</a>
        <?php endif; ?>
      </div>

      <form id="searchForm" method="GET" action="./list.php">
        <div id="btn">
          <div>
            <input type="search" id="search" name="search" placeholder="검색(제목+내용)">
            <input type="submit" value="검색하기" id="search_btn">
          </div>
          <div id="write">
            <a href="./write.php" title="글쓰기">글쓰기</a>
          </div>
        </div>
      </form>
    </section>
  </main>
  <script>
    function form_check() {
      let search = document.getElementById('search');
      if(search.value.length < 1){
        alert('검색어를 입력하지 않았습니다.');
        return false;
      }
      return true;
    }

    const searchForm = document.getElementById('searchForm');
    searchForm.addEventListener('submit', function(event) {
      if (!form_check()) {
        event.preventDefault(); // 폼 제출 막기
      }
    });
    




  </script>

  <?php
    mysqli_close($conn);

  ?>

  <!-- 공통푸터 삽입 -->
  <?php include('./php/footer.php')?>
  
</body>
</html>