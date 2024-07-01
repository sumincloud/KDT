
	<div class="col-sm-4 col-sm-offset-1">
		<div class="login-form">
			<form  name="member_form" id="member_form" method="post" action="./php/join_input.php">
				<h2>회원 가입</h2>
				<div class="form id">
					<label for="id">아이디</label>
					<input type="text" name="id" id="id" style="width: 150px;" required>
					<button type="button" id="id_check">중복확인</button>
					<script>
						$(document).ready(function(){
							let idChecked = false;

							$('#id_check').click(function(event){
								// 기본 동작(폼 제출) 막기
								event.preventDefault();

								let id = $('#id').val();

								$.post(
									"./php/id_check.php",
									{mb_id:id},
									function(data){
										if(data === "사용 가능한 아이디입니다."){
											$('#id_check_msg').html("<span style='color: green;'>" + data + "</span>");
											idChecked = true;
										}else {
											$('#id_check_msg').html("<span style='color: red;'>" + data + "</span>");
											idChecked = false;
										}
									})
							})

							$('#save_frm').click(function(event){
								if(!idChecked){
									alert("아이디 중복확인을 해주세요.");
									event.preventDefault(); // 폼 제출 막기
								}
							});

						})
					</script>
					<span id="id_check_msg" data-check="0"></span><br>
				</div>

				<div class="form">
					<label for="name">이름</label>
						<input type="text" name="name" id="name" required>
				</div>

				<div class="form">
					<label for="pass">비밀번호</label>
						<input type="password" name="pass" id="pass" required>                
				</div>

				<div class="form">
					<label for="pass2">비밀번호 확인</label>
						<input type="password" name="pass2" id="pass2" required>	                 
				</div>

				<div class="form">
					<label for="email">이메일</label>
						<input type="email" name="email" id="email" required>   
				</div>

				<div class="form">
					<label for="address">주소</label>
						<input type="text" name="address" id="address" required>
				</div>

				<div class="form">
					<label id="tel">전화번호</label>
					<input type="text" name="phone" id="tel">
				</div> 

				<button type="submit" class="btn btn-default" style="display: inline;" id="save_frm">가입하기</button>
			</form>
		</div>
	</div>						


</body>
</html>