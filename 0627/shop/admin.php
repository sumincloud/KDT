<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>STORE BOM</title>
</head>
<body>
<header id="header">
	<div class="col-sm-4 col-sm-offset-1">
		<div class="login-form">
			<h2>로그인</h2>
			<form action="./php/login_check.php" method="POST">
				<input type="text" placeholder="아이디" name="id" />
					<input type="password" placeholder="비밀번호" name="pass" />
					<span>
						<input type="checkbox" class="checkbox">아이디저장
					</span><br>
					<button type="submit" class="btn btn-default" style="display: inline;">로그인</button>
			</form>
		</div>						
	</div>
</header>
</body>
</html>