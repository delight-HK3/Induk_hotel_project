function searchhome() {
	new daum.Postcode({
		oncomplete: function(data) {
			// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
			// 각 주소의 노출 규칙에 따라 주소를 조합한다.
			// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
			var addr = ''; // 주소 변수
			var extraAddr = ''; // 참고항목 변수

			//사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
			if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
				addr = data.roadAddress;
			} else { // 사용자가 지번 주소를 선택했을 경우(J)
				addr = data.jibunAddress;
			}

			// 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
			if(data.userSelectedType === 'R'){
				// 법정동명이 있을 경우 추가한다. (법정리는 제외)
				// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
				if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
					extraAddr += data.bname;
				}
				// 건물명이 있고, 공동주택일 경우 추가한다.
				if(data.buildingName !== '' && data.apartment === 'Y'){
					extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
				}
				// 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
				if(extraAddr !== ''){
					extraAddr = '(' + extraAddr + ')';
				}
				// 조합된 참고항목을 해당 필드에 넣는다.
				document.getElementById("mydetailjuso").value = extraAddr;
			
			} else {
				document.getElementById("mydetailjuso").value = '';
			}

			// 우편번호와 주소 정보를 해당 필드에 넣는다.
			document.getElementById('mychzip').value = data.zonecode;
			document.getElementById("mychjuso").value = addr;
			// 커서를 상세주소 필드로 이동한다.
			document.getElementById("mydetailjuso").focus();
		}
	}).open();
}
function mypagecheck(){
	var pwd = $("#pwd").val();
	var name = $("#name").val();
	var email = $("#email").val();
	var phone1 = $("#phone1").val();
	var phone2 = $("#phone2").val();
	var phone3 = $("#phone3").val();
	
	if(pwd == ""){
		alert("비밀번호가 없습니다.");
		$("#pwd").focus();
		return false;
	}
	else if(name == ""){
		alert("이름이 없습니다.");
		$("#name").focus();
		return false;
	}
	else if(email == ""){
		alert("이메일이 없습니다.");
		$("#email").focus();
		return false;
	}
	else if(phone1.length < 3){
		alert("앞자리는 3자 여야 합니다.");
		$("#phone1").focus();
		return false;
	}
	else if(phone2.length < 4){
		alert("두번째자리는 4자 여야 합니다.");
		$("#phone2").focus();
		return false;
	}
	else if(phone3.length < 4){
		alert("세번째자리는 4자 여야 합니다.");
		$("#phone3").focus();
		return false;
	}
}