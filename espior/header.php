
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
									<li><a href="#" title="NEW&BEST">NEW&BEST</a></li>
									<li><a href="#" title="FACE">FACE</a></li>
									<li><a href="#" title="LIP">LIP</a></li>
									<li><a href="#" title="EYE">EYE</a></li>
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
  