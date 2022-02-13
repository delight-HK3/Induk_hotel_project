$('#insert').click(function(){
	if (!$("input:checked[Name='check1']").is(":checked")){
		alert("약관 전체에 동의 체크 하십시오"); 
		$("check1").focus(); 
		return false; 
	}
	if (!$("input:checked[Name='check2']").is(":checked")){
		alert("약관 전체에 동의 체크 하십시오"); 
		$("check2").focus(); 
		return false; 
	}
	if (!$("input:checked[Name='check3']").is(":checked")){
		alert("약관 전체에 동의 체크 하십시오"); 
		$("check3").focus(); 
		return false;  
	}
	$('#signUpModal').modal('hide');
	Uncheck();
	$('#signUpinsertModal').modal('show');
})

$('#sign').click(function(){
	$('#loginModal').modal('hide');
	logreset();
	$('#signUpModal').modal('show');
})

function logreset(){
	document.getElementById("loguid").value = "";
	document.getElementById("logpwd").value = "";
}

function Uncheck(){
	document.getElementById("one-checkbox").checked = false;
	document.getElementById("two-checkbox").checked = false;
	document.getElementById("three-checkbox").checked = false;
}

function signreset(){
	document.getElementById("chuid").value = "";
	document.getElementById("chpwd").value = "";
	document.getElementById("chname").value = "";
	document.getElementById("chemail").value = "";

	document.getElementById("chphone1").value = "";
	document.getElementById("chphone2").value = "";
	document.getElementById("chphone3").value = "";
	document.getElementById("entranceDate").value = "";

	document.getElementById("chzip").value = "";
	document.getElementById("chjuso").value = "";
	document.getElementById("detailjuso").value = "";
	document.getElementById("modeljuso").value = "";
}

function check_id() {
	const target = document.getElementById('signinsert');
	var uid = $("#chuid").val();
	let success = "&nbsp&nbsp&nbsp<font style='color:rgb(0, 201, 0)'>사용가능한 아이디입니다.</font>";
	let error = "&nbsp&nbsp&nbsp<font style='color:red'>아이디가 중복됩니다.</font>"; 
	$.ajax({
		url: "/main/check_id",
		type: "POST",
		data:{
			"uid":uid
		},
		dataType:'json',
        success:function(data){ //데이터 성공적으로 받았다.
			if(data.responseText == "no"){
				document.getElementById("id").innerHTML = error;
				target.disabled = true;
			} else{
				document.getElementById("id").innerHTML = success;
				target.disabled = false;
			}
		},
	});
}
function logincheck(){
	var uid = $("#loguid").val();
	var pwd = $("#logpwd").val();
	$.ajax({
		url: "/main/clientlogin",
		type: "POST",
		data : {
			"uid":uid, 
			"pwd":pwd
		},
		dataType:'json',
		traditional : true,    // or false, your choice
		async : false,    // or true, your choice
        success:function(data){ // 데이터 성공적으로 받았다.
			if(data.responseText == "no"){
				alert("아이디 혹은 비밀번호가 잘못 되었습니다.");
				return false;
			}
		},
	});
}

function searchinhome() {
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
				document.getElementById("modeljuso").value = extraAddr;
			
			} else {
				document.getElementById("modeljuso").value = '';
			}

			// 우편번호와 주소 정보를 해당 필드에 넣는다.
			document.getElementById('chzip').value = data.zonecode;
			document.getElementById("chjuso").value = addr;
			// 커서를 상세주소 필드로 이동한다.
			document.getElementById("detailjuso").focus();
		}
	}).open();
}

