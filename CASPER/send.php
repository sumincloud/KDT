<!-- send.php내용을 전송하기 위한 문서 -->
<?php
header("Content-Type: text/html; charset=UTF-8");

//빈값이 있는지 여부를 확인
if(empty($_POST['subject']) || //값이 있는지 여부 판단
    empty($_POST['name']) || //값이 있는지 여부 판단
    empty($_POST['email']) || //값이 있는지 여부 판단
    empty($_POST['select']) || //값이 있는지 여부 판단
    empty($_POST['message']) || //값이 있는지 여부 판단
    empty($_POST['agreement']) || //값이 있는지 여부 판단
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) //이메일 형식 체크
    {
      echo "값이 없습니다. 확인하세요.";
      return false;
    }
      echo "<script>alert('문의하기 접수가 완료되었습니다.');</script>";
      echo "<script>location.replace('./qna.html');</script>";


// Cross-Site Scripting (XSS)을 방지하는 시큐어코딩
// strip_tags() -> 문자열에서 html과 php태그를 제거한다
// htmlspecialchars() -> 특수 문자를 HTML 엔터티로 변환
// 악의적인 특수문자 삽입에 대비하기 위함

$subject = strip_tags(htmlspecialchars($_POST['subject']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$select = strip_tags(htmlspecialchars($_POST['select']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$agreement = strip_tags(htmlspecialchars($_POST['agreement']));

//값 출력하기
// echo '제목 : '.$subject.'<br>';
// echo '이름 : '.$name.'<br>';
// echo '이메일 : '.$email.'<br>';
// echo '문의유형 : '.$select.'<br>';
// echo '문의내용 : '.$message.'<br>';
// echo '동의여부 : '.$agreement.'<br>';

// 이메일을 생성하고 메일을 전송하는 부분
$to = 'allblue0121@naver.com'; // 받는 측의 이메일 주소를 기입하는 부분
$email_subject = "FROM:  $name"; // 메일 제목에 해당하는 부분
$email_body = 
  "본 메일은 홈페이지 폼메일로부터 전송된 이메일입니다.\n\n".
  "세부정보는 다음과 같습니다.\n\n".
  "제목: $subject\n\n".
  "이름: $name\n\n".
  "이메일: $email\n\n".
  "문의유형: $select\n\n".
  "문의내용: $message\n\n".
  "개인정보수집 동의여부: $agreement";

$headers = "Reply-To: $to\r"; // 답장 주소

mail($to,'=?UTF-8?B?'.base64_encode($email_subject).'?=',$email_body,$headers);
return true;		




?>