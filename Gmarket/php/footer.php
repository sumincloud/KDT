  <style>
    /* top버튼 */
    html{
      scroll-behavior: smooth;
    }
    
    /* 푸터서식 */
    footer{
      background: var(--b_color1);
      padding: 10px 0 80px 0;
      color: var(--b_color2);
      text-align: center;
      overflow: hidden;
    }
    footer a, footer nav{color: var(--b_color2);}
    .top_btn{
      background: url('../images/sp_header.png');
      background-size: 330px;
      background-position: -43px -31px;
      display: block;
      width: 46px;height: 46px;
      position: fixed;
      right: 10px;bottom: 80px;
      text-indent: -9999px;
    }
    .f_top_btn > ul li{
      display: inline-block;
      line-height: 50px;
    }
    .f_top_btn > ul li > a{
      font-size: 0.9rem;
      padding: 4px 10px;
      text-transform: uppercase;
      background: #777;
      border-radius: 3px;
    }
    footer > h2{
      margin-bottom: 10px;
    }
    footer > address{
      display: none;
      font-style: normal;
      background: #777;
      padding: 10px 0;
    }
    footer > address::after{
      clear: both;
      display: block;
      content: "";
    }
    footer > address dl{
      text-align: left;
      line-height: 160%;
      width: 400px;
      margin: 0 auto;
    }
    footer > address dt{
      width: 30%;
      float: left;
    }
    footer > address dd{
      width: 70%;
      float: left;
    }
    #f_toggle{display: none;}
    #f_toggle:checked + address{
      display: block;
    }

    /* 사업자 정보 서식 */
    .f_lnb{
      line-height: 160%;
      margin-top: 20px;
    }
    /* 글자 옆 | 표시 */
    .f_lnb a::after{  
      content: '';
      display: inline-block;
      margin-left: 10px;
      margin-right: 10px;
      width: 1px;
      height: 10px;
      background-color: #ccc;
    }
    .f_lnb a:last-of-type::after{
      display: none;
    }
  </style>
  
  
  <!-- 푸터 영역 -->
  <footer>
    <a href="#" title="위로 바로가기" class="top_btn">Top</a>
    <nav class="f_top_btn">
      <ul>
        <li><a href="login.php" title="로그인">로그인</a></li>
        <li><a href="http://www.gmarket.co.kr" title="PC버전">PC버전</a></li>
        <li><a href="http://mobile.gmarket.co.kr/CustomerCenter" title="고객센터">고객센터</a></li>
      </ul>
    </nav>

    <h2><label for="f_toggle">(주)이베이 코리아 사업자정보 &#8744;</label></h2>
    <input type="checkbox" id="f_toggle">
    <address>
      <dl>
        <dt>업무진행자</dt><dd>0000</dd>
        <dt>사업자등록번호</dt><dd>000-000-0000</dd>
        <dt>통신판매업신고</dt><dd>강남 0000호</dd>
        <dt>주소</dt><dd>서울시 강남구 테헤란로 0000(강남파이낸스센터)</dd>
        <dt>고객센터</dt>
        <dd>
          000-0000<br>
          gmarket&#64;corp.gmarket.co.kr<br>
          상담가능시간 오전 9시 ~ 오후 6시(토요일, 공휴일 휴무)
        </dd>
      </dl>
    </address>

    <nav class="f_lnb">
      <a href="#" title="사업자정보확인">사업자정보확인</a>
      <a href="#" title="개인정보처리방침">개인정보처리방침</a>
      <a href="#" title="이용약관">이용약관</a>
    </nav>
    <p class="copy">Copyright&copy; eBay Korea LLC All rights reserved.</p>





  </footer>