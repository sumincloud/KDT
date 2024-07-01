<?php
  session_start();
  include('./db/dbconn.php');

  // 사용자가 로그인한 경우, 세션에서 가져옴
  if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];
  } else {
    $userid = null;
    $username = null;
  }

?>

<!-- 부트스트랩 css연결하기 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- 부트스트랩 js연결하기 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- 부트스트랩 아이콘폰트 연결 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- 제이쿼리 -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- 초기화서식 연결 -->
<link rel="stylesheet" href="./css/reset.css">
<!-- 공통서식 연결 -->
<link rel="stylesheet" href="./css/common.css">
<style>
	/* 상단 헤더 부분 */
	header{
		position: fixed;
		width: 100%; height: 60px;
		background: #fff;
		border-bottom: 1px solid #eee;
		top:0;
		z-index: 20 !important;
	}
	header > div{
		width: 100%; height: 40px;
		display: flex;
		align-items: center;
		justify-content: space-between;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		padding: 0 20px;
	}
	#list{
		cursor: pointer;
	}
	.status{
		display:flex;
		gap:15px;
		justify-content:center;
	}
	.status i{
		font-size: 22px;
	}
	.bi-person::before{
		transform: scale(1.25);
	}

	/* 사이드바 메뉴 */
	@media (max-width: 767px) {
		.side_nav {
			width: 300px !important;
		}
		.side_nav:after{
			width: 400px !important;
		}
	}

	.open {
		left:0 !important;
	}
	.side_nav{
		width:400px; height: 100vh;
		background:none;
		box-shadow:none;
		position: relative;
		z-index: 100;
		left: -470px;
		transition: 0.5s;
	}
	#list_close{
		position: absolute;
		right: 0;
		cursor: pointer;
	}
	.side_nav .menu {
		margin-bottom:50px;
	}
	.side_nav .menu > a{
		font-weight:500;
		font-size:25px;
	}
	.side_nav .menu .depth2{
		margin-top: 30px;
	}
	.side_nav .menu .depth2 li{
		margin-top: 20px;
	}
	.side_nav .menu .depth2 a {
		padding:6px 0;
		font-size:18px;
	}
	.side_nav .menu .depth2 a:active {
		font-style:italic;
		color:#cf1317;
	}
	.side_nav .menu .depth2 a:hover {
		font-style:italic;
		color:#cf1317;
	}
	.side_nav:after {
		z-index: -1;
		position:absolute;
		left:-100px;top:0;
		content:"";
		display:block;
		width:500px;height:100%;
		transform:skew(-4deg);
		background:#fff;
		box-shadow:1px 0 18px rgba(0,0,0,0.16);
	}


</style>
<header>
    <div>
      <div class="icon" id="list">
        <i class="bi bi-list" style="font-size: 30px;"></i>
      </div>
      <div style="width:100px; text-align: center;">
        <a href="./index.php" title="메인페이지로 이동" class="w-100 d-block">
          <img src="./images/logo_b.png" alt="로고" height="30px">
        </a>
      </div>
      <ul class="status">
        <li>
          <a href="./login.php" title="로그인"><i class="bi bi-person"></i></a>
        </li>
        <li>
          <a href="#" title="장바구니"><i class="bi bi-bag"></i></a>
        </li>
			</ul>
    </div>

    <!-- 사이드바 -->
    <nav id="side_nav" class="side_nav p-4">
				<div class="nav_inner clearfix">
					<div class="nav_header">
            <a href="#" title="로고">
              <img src="./images/logo_b.png" alt="로고" height="30px">
            </a>
            <div id="list_close">
							<i class="bi bi-x-lg fs-4"></i>
						</div>
						<dl class="mt-3">
							<dd>
								<a href="#" title="로그인" style="margin-right:10px">로그인</a>
								<a href="#" title="회원가입">회원가입</a>
							</dd>
							<?php
								if (isset($_SESSION['userid'])) {
									echo "<dd class='mt-3'>" . 
									$_SESSION['username'].'('. $_SESSION['userid'].')'
									."</dd>";
								}?>
						</dl>
					</div>
					<!-- nav_list -->
					<ul class="nav_list mt-5">
            <div>
            <div>
						<li class="menu">
							<a href="#" title="ABOUT">ABOUT</a>
							<div class="depth2">
								<ul>
									<li><a href="#" title="BRAND STORY">BRAND STORY</a></li>
									<li><a href="#" title="BRAND CAMPAIGN">BRAND CAMPAIGN</a></li>
								</ul>
							</div>
						</li>
						<li class="menu">
							<a href="#" title="PRODUCT">PRODUCT</a>
							<div class="depth2">
								<ul>
									<!-- 카테고리 페이지로 이동 -->
									<li><a href="./cate.php?cate=cate01" title="NEW&BEST">NEW&BEST</a></li>
									<li><a href="./cate.php?cate=cate02" title="FACE">FACE</a></li>
									<li><a href="./cate.php?cate=cate03" title="LIP">LIP</a></li>
									<li><a href="./cate.php?cate=cate04" title="EYE">EYE</a></li>
								</ul>
							</div>
						</li>
						<li class="menu">
							<a href="#" title="PLAY">PLAY</a>
							<div class="depth2">
								<ul>
									<li><a href="#" title="PLAY">PLAY</a></li>
									<li><a href="#" title="PLAY">PLAY</a></li>
								</ul>
							</div>
						</li>
						<li class="menu">
							<a href="#" title="ABOUT">ABOUT</a>
							<div class="depth2">
								<ul>
									<li><a href="#" title="BRAND STORY">BRAND STORY</a></li>
									<li><a href="#" title="BRAND CAMPAIGN">BRAND CAMPAIGN</a></li>
								</ul>
							</div>
						</li>
					</div>
				</div>
			</nav>
  </header>
	<script>
		$(document).ready(function(){
			//사이드바 열고 닫기
			$('#list').click(function(){
				$('#side_nav').addClass('open');
			})
			$('#list_close').click(function(){
				$('#side_nav').removeClass('open');
			})




		})
	</script>
  