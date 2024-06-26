  <style>
    fieldset {
      border: none;
    }

    fieldset > legend {
      display: none;
    }

    header{
      overflow: hidden;
    }

    /* 헤더 서식 */
    header {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100px;
      background: var(--b_color2);
      z-index: 1000;
    }
    .h_inner {
      display: flex;
      justify-content: space-around;
      position: relative;
      top: 6px;
      height: 42px;
      align-items: center;
    }
    .h_inner h1 a, .login_btn, .cart_btn, .total_btn, .h_inner div > fieldset > label[for=search_box],.gnb2 > fieldset label[for=search_box2], .icon01, .icon02, .icon03, .icon04, .icon05 {
      display: block;
      background-image: url(../images/sprite__header.png);
      background-size: 400px;
      text-indent: -9999px;
    }
    /* 상단 버튼들 */
    .total_btn{
      background-position: -178px 4px;
      border: 1px solid #ccc;
      width: 36px;
      height: 36px;
      cursor: pointer;
      padding: 2px;
    }
    .h_inner h1 a{
      width: 50px;
      height: 42px;
      background-position: 0px -90px;
    }
    .h_inner div > fieldset {
      width: 100%;
      height: 36px;
      border: 1px solid rgb(45, 110, 230);
      border-radius: 3px;
      position: relative;
      top: 2px;
    }
    #search_box {
      width: 90%;
      border: none;
      height: 36px;
      text-indent: 10px;
    }
    .h_inner div > fieldset > label[for=search_box] {
      width: 30px;
      height: 26px;
      background-position: -53px 0px;
      top: 6px;
      right: 0;
      position: absolute;
      cursor: pointer;
      transform: scale(0.8);
    }


    /* 로그인 장바구니 서식 */
    .util {
      display: flex;
      gap: 10px;
    }
    .login_btn, .cart_btn {
      width: 36px;
      height: 36px;
      transform: scale(0.9);
    }
    .login_btn {
      background-position: -46px -620px;
    }
    .cart_btn {
      background-position: 0px -576px;
    }




    /* 메인메뉴 gnb*/
    .gnb {
      position: absolute;
      width: 100%;
      top: 54px;
      background: rgb(45, 110, 230);
      height: 40px;
    }
    .gnb ul {
      display: flex;
      justify-content: space-around;
    }
    .gnb > ul a {
      color: var(--b_color2);
      line-height: 40px;
      font-weight: 500;
      font-size: 1rem;
    }



    /* 카테고리 메뉴 gnb2 */
    .gnb2{
      width: 100%;height: 100%;
      position: fixed;
      z-index: 500;
      top: 0; left: -100%;
      background: #fff;
      transition: left 0.3s ease;
    }
    .gnb2 > fieldset{
      width: 100%;
      position: relative;
      padding: 5px;
      display: flex;
      justify-content: space-between;
      box-sizing: border-box;
      background: #fafafa;
    }
    .gnb2 > fieldset > div{
      width: 90%;
      position: relative;
      display: inline-block;
      padding: 2px; /* border 두께 */
      background: linear-gradient(220deg, rgba(6,125,253,1) 18%, rgba(0,196,0,1) 76%);
      border-radius: 10px;
    }
    #search_box2{
      width: 100%;
      height: 46px;
      background: white; /* 내부 박스의 배경색, 필요에 따라 변경 */
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      padding: 0 40px 0 20px;

    }
    .gnb2 > fieldset label[for=search_box2] {
      width: 30px;
      height: 26px;
      background-position: -53px 0px;
      top: 10px;
      right: 10px;
      position: absolute;
      cursor: pointer;
      transform: scale(0.8);
    }
    .gnb2 > fieldset > input[value="취소"]{
      background: none;
      border: none;
      font-size: 0.95rem;
      font-family: 'Gmarket Sans';
    }

    /* 카테고리 메뉴 탭 콘텐츠 */
    .tab_con{
      border-bottom: 1px solid #ccc;

    }
    .tab_con > ul{
      display: flex;
      justify-content: space-around;
    }
    .tab_con > ul > li{
      line-height: 50px;
      text-align: center;
      width: 100%;
      background: #fafafa;
    }
    .tab_con > ul > li img{
      width: 40px;
      display: block;
      margin: 0 auto;
    }
    .tab_con > ul > li > a{
      font-size: 1rem;
      font-weight: 500;
    }
    .tab_con > ul > li:last-child > a{
      border-bottom: 3px solid #00c400;
      display: block;
    }
    .cate2{
      position: absolute;
      left: 0;top: 114px;
      background: #fafafa;
      border-right: 1px solid #ccc;
      border-left: 1px solid #ccc;
    }
    .cate2 > ul > li{
      border-bottom: 1px solid #ccc;
      box-sizing: border-box;
      line-height: 40px;
      width: 110px; height: 100px;
    }
    .cate2 > ul > li > a{
      font-size: 0.9rem;
      font-weight: 500;
      width: 100%; height: 100px;
      display: block;
      padding-top: 15px;
      box-sizing: border-box;
    }
    .cate3{
      position: fixed;
      right:100%;top: 114px;
      width: calc(100% - 111px);
      display: none;
      transition: right 0.3s ease;
    }
    .cate3 > ul > li{
      position: relative;
      height: auto;
    }
    .cate3 > ul > li::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 1px; /* 테두리의 두께를 설정합니다 */
      background-color: #ccc;
    }
    .cate3 > ul > li > a{
      display: block;
      line-height: 50px;
      font-size: 0.9rem;
      text-align: left;
      padding: 0 20px;
    }
    .cate3 > ul > li > a > i{
      float: right;
      line-height: 50px;
    }
    .cate3 > ul > li i.rotate {
      transform: rotate(180deg);
    }

    .cate4{
      display: none;
      font-size: 0.9rem;
      border-top: 1px solid #ccc;
    }
    .cate4 a{
      color: #666;
    }

    /* 활성화 버튼 */
    .cate_act{
      background: #00c400;
    }
    .cate_act > a{
      color: #fff;
    }




    /* 하단 바텀바 */
    .f_tab_mnu {
      position: fixed;
      bottom: 0;
      background: var(--b_color2);
      width: 100%;
      border-top: 1px solid #ccc;
    }
    .f_tab_mnu ul {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 60px;
    }
    .f_tab_mnu ul li {
      text-align: center;
      width: 60px;
    }
    .icon01, .icon02, .icon03, .icon04, .icon05 {
      width: 40px;
      height: 40px;
      margin: 0 auto;
    }
    .icon01 {
      background-position: -179px -0px;
    }
    .icon02 {
      background-position: -230px -0px;
    }
    .icon03 {
      width: 36px;
      background-position: -270px -0px;
    }
    .icon04 {
      width: 34px;
      background-position: -299px -0px;
    }
    .icon05 {
      background-position: -330px 3px;
      transform: scale(0.8);
    }





  </style>
  
  
  
  
  <!-- 상단 헤더 -->
  <header>
    <div class="h_inner">
      <label class="total_btn">전체메뉴</label>
      <div style="display: flex; width: 60%;">
        <h1>
          <a href="index.php" title="메인페이지로 바로가기">
            상단로고
          </a>
        </h1>
        <fieldset>
          <legend>검색폼</legend>
          <input type="search" name="search_box" id="search_box" placeholder="검색어 입력">
          <label for="search_box">검색버튼</label>
        </fieldset>
      </div>
      <div class="util">
        <a href="cart.php" title="장바구니" class="cart_btn">장바구니</a>
        <a href="login.php" title="로그인" class="login_btn">로그인</a>
      </div>
    </div>

    <!-- 내비게이션 -->
    <nav class="gnb">
      <ul>
        <li><a href="#" title="홈">홈</a></li>
        <li><a href="#" title="스마일배송">스마일배송</a></li>
        <li><a href="#" title="베스트">베스트</a></li>
        <li><a href="#" title="당일배송">당일배송</a></li>
        <li><a href="#" title="홈쇼핑">홈쇼핑</a></li>
        <li><a href="#" title="백화점">백화점</a></li>
        <li><a href="#" title="패션">패션</a></li>
        <li><a href="#" title="공간">공간</a></li>
      </ul>
    </nav>

    <div class="gnb2">
      <fieldset>
        <div>
          <input type="search" placeholder="검색어 입력" id="search_box2">
          <label for="search_box2">검색하기</label>
        </div>
        <input type="button" value="취소">
      </fieldset>

      <div class="tab_con">
        <ul>
          <li><a href="#" title="전체서비스">전체서비스</a></li>
          <li><a href="#" title="검색어">검색어</a></li>
          <li>
            <a href="#" title="카테고리">카테고리</a>
            <nav class="cate2">
              <ul>
                <li>
                  <a href="#" title="브랜드패션">
                    <img src="../images/cate01.png" alt="이미지">브랜드패션
                  </a>
                  <nav class="cate3">
                    <ul>
                      <li>
                        <a href="#" title="분류">브랜드 여성의류
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 남성의류
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 캐쥬얼의류
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 잡화
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 쥬얼리/시계
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 수입명품
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 아웃도어
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">브랜드 스포츠패션
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </li>
                <li>
                  <a href="#" title="패션의류/잡화">
                    <img src="../images/cate02.png" alt="이미지">패션의류/잡화
                  </a>
                  <nav class="cate3">
                    <ul>
                      <li>
                        <a href="#" title="분류">여성의류
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">남성의류
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">언더웨어
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#" title="분류">유아동의류
                          <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="cate4">
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                          <li><a href="#" title="세부카테고리">세부메뉴</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </li>


                <li><a href="#" title="뷰티"><img src="../images/cate03.png" alt="이미지">뷰티</a></li>
                <li><a href="#" title="출산/유아동"><img src="../images/cate04.png" alt="이미지">출산/유아동</a></li>
                <li><a href="#" title="식품"><img src="../images/cate05.png" alt="이미지">식품</a></li>
                <li><a href="#" title="생필품"><img src="../images/cate06.png" alt="이미지">생필품</a></li>
                <li><a href="#" title="홈데코"><img src="../images/cate07.png" alt="이미지">홈데코</a></li>
                <li><a href="#" title="건강/렌탈"><img src="../images/cate08.png" alt="이미지">건강/렌탈</a></li>
                <li><a href="#" title="문구/취미/반려"><img src="../images/cate09.png" alt="이미지">문구/취미/반려</a></li>
                <li><a href="#" title="스포츠"><img src="../images/cate10.png" alt="이미지">스포츠</a></li>
                <li><a href="#" title="자동차/공구"><img src="../images/cate11.png" alt="이미지">자동차/공구</a></li>
                <li><a href="#" title="가전"><img src="../images/cate12.png" alt="이미지">가전</a></li>
                <li><a href="#" title="디지털"><img src="../images/cate13.png" alt="이미지">디지털</a></li>
                <li><a href="#" title="여행/도서"><img src="../images/cate14.png" alt="이미지">여행/도서</a></li>
                <li><a href="#" title="e쿠폰/배달"><img src="../images/cate15.png" alt="이미지">e쿠폰/배달</a></li>
              </ul>
            </nav>
          </li>
        </ul>
      </div>


    </div>


    <!-- 하단 고정 내비게이션 -->
    <nav class="f_tab_mnu">
      <ul>
        <li>
          <a href="#" title="카테고리">
            <span class="icon01">&nbsp;</span>
            <span>카테고리</span>
          </a>
        </li>
        <li>
          <a href="#" title="쿠폰혜택">
            <span class="icon02">&nbsp;</span>
            <span>쿠폰혜택</span>
          </a>
        </li>
        <li>
          <a href="#" title="검색">
            <span class="icon03">&nbsp;</span>
            <span>검색</span>
          </a>
        </li>
        <li>
          <a href="#" title="마이페이지">
            <span class="icon04">&nbsp;</span>
            <span>마이페이지</span>
          </a>
        </li>
        <li>
          <a href="#" title="최근본상품">
            <span class="icon05">&nbsp;</span>
            <span>최근본상품</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>


  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    document.querySelector('.total_btn').addEventListener('click', function(){
      var content = document.querySelector('.gnb2');
      var content2 = document.querySelector('.cate3');
      content.style.left = '0'; // left 값을 0으로 변경하여 이동
      content2.style.right = '0'; // right 값을 0으로 변경하여 이동
      // 다른 cate3 클래스를 가진 요소들도 이동하도록 처리
      var cate3Elements = document.querySelectorAll('.cate3');
      cate3Elements.forEach(function(element) {
          element.style.right = '0';
      });
    });
    document.querySelector("input[value='취소']").addEventListener('click', function(){
      var content = document.querySelector('.gnb2');
      var content2 = document.querySelector('.cate3');
      content.style.left = '-100%'; // left 값을 0으로 변경하여 이동
      content2.style.right = '100%'; // right 값을 0으로 변경하여 이동
      // 다른 cate3 클래스를 가진 요소들도 숨기도록 처리
      var cate3Elements = document.querySelectorAll('.cate3');
      cate3Elements.forEach(function(element) {
          element.style.right = '100%';
      });
    });



    $(document).ready(function() {
    //---------카테고리 이미지 버튼 활성화-----------
    var imgsrc = [];

    // 이미지 경로 변경 함수
    function imgChange(){
      $('.cate2 > ul > li img').each(function(index, img) {
        // 원래 이미지 경로 저장
        if (!imgsrc[index]) {
          imgsrc[index] = $(img).attr('src');
        }
        var newsrc = imgsrc[index].replace('.png', '_1.png');
        //현재 이미지가 속한 li 요소에 cate_act 클래스가 있는지를 확인.
        if ($(img).closest('li').hasClass('cate_act')) {
          $(img).attr('src', newsrc);
        } else {
          $(img).attr('src', imgsrc[index]);
        }
      });
    }
      
    // 첫 번째 li를 활성화 상태로 설정
    $('.cate2 > ul > li:first-child').addClass('cate_act');
    imgChange();
    

    // 각 li에 클릭 이벤트 바인딩
    $('.cate2 > ul > li').click(function() {
      // 모든 li에서 활성화 클래스 제거
      $('.cate2 > ul > li').removeClass('cate_act');
      
      // 클릭한 li에 활성화 클래스 추가
      $(this).addClass('cate_act');

      // 이미지 경로 변경
      imgChange();

      // 서브 카테고리 메뉴 표시
      $('.cate3').hide(); // 모든 서브 카테고리 숨김
      $(this).find('.cate3').show(); // 선택된 서브 카테고리 표시
    });


    // 초기 서브 카테고리 메뉴 표시
    if ($('.cate2 > ul > li').hasClass('cate_act')) {
      $('.cate2 > ul > li.cate_act').find('.cate3').show();
    } else {
      $('.cate2 > ul > li').siblings().find('.cate3').hide();
    }

    //세부메뉴 토글
    $('.cate3 > ul > li').click(function(e){
      e.stopPropagation(); // 부모 li 클릭 이벤트가 트리거되지 않도록 방지

      $(this).siblings().find('.cate4').stop().slideUp();
      $(this).siblings().find('i').removeClass('rotate'); // 회전 클래스 제거

      $(this).find('.cate4').stop().slideToggle();
      $(this).find('i').toggleClass('rotate');
    })

  });
  </script>