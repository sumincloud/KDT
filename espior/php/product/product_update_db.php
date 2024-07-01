<?php
  include('../../db/dbconn.php');

  $no = $_GET['no'];


  $cate = trim($_POST['cate']);
  $name = trim($_POST['name']);
  $file = uniqid() . '_' . $_FILES['myfile']['name']; //파일이름 중복 방지
  $parent = trim($_POST['parent']);
  $price = trim($_POST['price']);
  $price = str_replace(',', '', $price); // 가격 쉼표 제거
  $comment = trim($_POST['comment']);
  $memo = trim($_POST['memo']);

  date_default_timezone_set('Asia/Seoul');
  $datetime = date('Y-m-d H:i:s', time());

  // 파일 업로드 주소
  $folder = '../../images/shop/';
  $file_root = $folder . basename($file);

  // tmp파일
  $file_tmp = $_FILES['myfile']['tmp_name'];

  // 기존 이미지 파일 경로 가져오기
  $sql_select_image = "SELECT img FROM shop_data WHERE no='$no'";
  $result_select_image = mysqli_query($conn, $sql_select_image);
  $row_select_image = mysqli_fetch_assoc($result_select_image);
  $existing_image = $row_select_image['img'];

    // 이미지 파일이 없을 경우 파일 업로드를 제외하고 업데이트
    if (empty($file)) {
      $sql = "UPDATE shop_data
              SET cate = '$cate',
                  name = '$name',
                  parent = '$parent',
                  price = '$price',
                  comment = '$comment',
                  memo = '$memo',
                  datetime = '$datetime'
              WHERE no = '$no'";
    } else {
      // 기존 파일 삭제
      if (!empty($existing_image)) {
        $existing_file_path = $folder . $existing_image;
        if (file_exists($existing_file_path)) {
          unlink($existing_file_path); // 파일 삭제
        }
      }
      //파일 업데이트
      $sql = "UPDATE shop_data
              SET cate = '$cate',
                  img = '$file',
                  name = '$name',
                  parent = '$parent',
                  price = '$price',
                  comment = '$comment',
                  memo = '$memo',
                  datetime = '$datetime'
              WHERE no = '$no'";
    }
  

  // 쿼리 실행 및 오류 확인
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('상품수정이 완료되었습니다.');</script>";
    //tmp 파일 이동시키기
    move_uploaded_file($file_tmp, $folder . $file);

    echo "<script>location.replace('./product_list.php');</script>";
    exit;
  } else {
    echo "상품수정 실패 : " . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>

