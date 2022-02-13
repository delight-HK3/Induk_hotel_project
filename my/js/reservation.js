$(document).ready(function(){
	//옵션관련 변수들
	var checkin = new Date(document.getElementById("checkinhidden").value);//체크인 날짜 
	//처음에 값이 없다고 에러가 나오는 것은 reservation.js를 페이지 전체에 적용시켰기에 예약페이지가 아닌이상 나오지 않는다.
	var checkout = new Date(document.getElementById("checkouthidden").value);//체크 아웃 날짜
	var dateDiff = Math.ceil((checkout.getTime()-checkin.getTime())/(1000*3600*24));//시간계산 식
	var room_id = document.getElementById("room_id").value;
	var price = document.getElementById("dayresult").value; //투숙기간 총 가격
	var morningpay1 = document.getElementById("morningpay1").value;//성인 조식비용
	var carpic = document.getElementById("carpic").value; //차량픽업 비용
	var maintain = document.getElementById("maintain").value; //유지비
	var adult = document.getElementById("adult").value; //어른 예약수
	var child = document.getElementById("child").value; //어린이 인원수
	var resultprice = price * dateDiff; //방가격 * 숙박기간
	//옵션관련 변수들
	var tax = resultprice / 10;

	$('#bigo').on('keyup', function() {
        $('#bigo_cnt').html("("+$(this).val().length+" / 200)");
 
        if($(this).val().length > 200) {
            $(this).val($(this).val().substring(0, 200));
            $('#bigo_cnt').html("(200 / 200)");
        }
    });

	if(room_id != 1){
		if(child == 0){
			var totalprice = resultprice + parseInt(priceUnString(morningpay1)) + parseInt(priceUnString(carpic)) + parseInt(tax) + parseInt(maintain); 
			//숙박비 + 성인 조식비 + 차량픽업 + 세금 + 봉사비
		}
		else if(child != 0){
			var morningpay2 = document.getElementById("morningpay2").value;//어린이 조식비용
			var totalprice = resultprice + parseInt(priceUnString(morningpay1)) 
				+ parseInt(priceUnString(morningpay2)) + parseInt(priceUnString(carpic)) 
				+ parseInt(tax) + parseInt(maintain); 
			//숙박비 + 성인 조식비 + 어린이 조식비 + 차량픽업 + 세금 + 봉사비
		}
	}
	else{
		var totalprice = priceToString(parseInt(priceUnString(tax)) + parseInt(priceUnString(resultprice)) + parseInt(priceUnString(maintain)));
		//숙박비 + 차량픽업 + 세금 + 봉사비
	}
	document.getElementById("dayresult").value = priceToString(resultprice); //투숙시간 총가격 자리정리해서 다시 뿌려줌
	document.getElementById("inday1").value = dateDiff; //머무는 일 수 1
	document.getElementById("inday2").value = dateDiff; //머무는 일 수 2
	if(child != 0){
		document.getElementById("inday3").value = dateDiff; //머무는 일 수 3
	}
	document.getElementById("tax").value = priceToString(tax); //세금 총가격 자리정리해서 다시 뿌려줌
	document.getElementById("allprice").value = priceToString(totalprice); //총 가격 자리정리해서 다시 뿌려줌
	
	var adultQty = $('.adult-qty');
    adultQty.prepend('<div class="dec adultbtn" style="border-right:0px; color:black; background: #ffdf80; height:42px;">-</div>');
    adultQty.append('<div class="inc adultbtn" style="border-left:0px; color:black; background: #ffdf80; height:42px;">+</div>');
    adultQty.on('click', '.adultbtn', function () {
		var carpic1 = document.getElementById("carpic").value; //차량픽업 비용
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();

        if ($button.hasClass('inc')) {
            if(oldValue > adult - 1){
                return;
            }
            var newVal = parseFloat(oldValue) + 1;
			document.getElementById("morning1").value = newVal;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
				document.getElementById("morning1").value = newVal;
            } else {
                newVal = 0;
            }
        }
		var morningpay1 = parseInt(dateDiff * (newVal * 50000)); //조식 총 비용
		
		if(room_id != 1){
			document.getElementById("morningpay1").value = priceToString(morningpay1);
			if(child != 0){
				var check1 = document.getElementById("morningpay2").value;//어린이 조식비용
				allprice = priceToString(morningpay1+ 
					parseInt(priceUnString(check1)) + parseInt(priceUnString(carpic1)) + 
					parseInt(priceUnString(tax)) + parseInt(priceUnString(resultprice)) + parseInt(priceUnString(maintain)));
					//총숙박비 = 투숙비 + 성인조식 + 어린이 조식 + 차량 픽업 + 세금 + 유지비
			}else{
			allprice = priceToString(morningpay1 + parseInt(priceUnString(tax)) + 
				parseInt(priceUnString(carpic1)) + parseInt(priceUnString(resultprice)) + parseInt(priceUnString(maintain)));
			//총숙박비 = 투숙비 + 성인조식 + 차량 픽업 + 세금 + 유지비
			}
		}
		else{//vip 계산법
			allprice = priceToString(parseInt(priceUnString(tax)) + parseInt(priceUnString(resultprice)) + parseInt(priceUnString(maintain)));
		}
		document.getElementById("allprice").value = allprice;
        $button.parent().find('input').val(newVal);
    });


	var childQty = $('.child-qty');
    childQty.prepend('<div class="dec childbtn" style="border-right:0px; color:black; background: #ffdf80">-</div>');
    childQty.append('<div class="inc childbtn" style="border-left:0px; color:black; background: #ffdf80">+</div>');
    childQty.on('click', '.childbtn', function () {
		var carpic2 = document.getElementById("carpic").value; //차량픽업 비용
		
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            if(oldValue > child-1){
                return;
            }
            var newVal = parseFloat(oldValue) + 1;
			document.getElementById("morning2").value = newVal;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
				document.getElementById("morning2").value = newVal;
            } else {
                newVal = 0;
            }
        }
		var morningpay2 = parseInt(dateDiff * (newVal * 40000));

		if(room_id != 1){
			var check2 = document.getElementById("morningpay1").value;//성인 조식비용
			document.getElementById("morningpay2").value = priceToString(morningpay2); 
			allprice = priceToString(morningpay2+ 
				parseInt(priceUnString(check2)) + parseInt(priceUnString(carpic2)) + 
				parseInt(priceUnString(tax)) + parseInt(priceUnString(resultprice)) + parseInt(priceUnString(maintain)));
		}
		else{//vip 계산법
			allprice = priceToString(parseInt(priceUnString(tax)) + parseInt(priceUnString(resultprice)) + parseInt(priceUnString(maintain)));
		}
		document.getElementById("allprice").value = allprice;
        $button.parent().find('input').val(newVal);
    });
	$('input:radio[id=four-checkbox]').is(':checked')
	$("div[name=card]").show();
	$("div[name=account]").hide();
	document.getElementById('selectaccount').disabled = true;
});

function disablepay(){
	if($('input:radio[id=four-checkbox]').is(':checked')){
		$("div[name=card]").show();
		$("div[name=account]").hide();
	}
	else{
		$("div[name=card]").hide();
		$("div[name=account]").show();
	}
}

function checkpay(){
	var day1 = document.getElementById('card_day1').value;
	var day2 = document.getElementById('card_day2').value;
	var card1 = document.getElementById('card_num1').value
	var card2 = document.getElementById('card_num2').value
	var card3 = document.getElementById('card_num3').value
	var card4 = document.getElementById('card_num4').value

	var protect = document.getElementById('protected').value;

	if($('input:radio[id=four-checkbox]').is(':checked')){
		if($("#serchcard option:selected").val() == 0){
			alert("카드를 선택해 주십시오.");
			return false;
		}
		else if(card1.length < 4){
			alert("카드번호를 전부 입력해 주십시오.");
			return false;
		}
		else if(card2.length < 4){
			alert("카드번호를 전부 입력해 주십시오.");
			return false;
		}
		else if(card3.length < 4){
			alert("카드번호를 전부 입력해 주십시오.");
			return false;
		}
		else if(card4.length < 4){
			alert("카드번호를 전부 입력해 주십시오.");
			return false;
		}
		else if(day1.length < 2){
			alert("만료일자를 입력해 주십시오.");
			return false;
		}
		else if(day2.length < 2){
			alert("만료일자를 입력해 주십시오.");
			return false;
		}
		else if(protect.length < 3){
			alert("보안코드 3자리를 입력해 주십시오.");
			return false;
		}
	}
	else{
		if($("#selectaccount option:selected").val() == 0){
			alert("계좌를 선택해 주십시오.");
			return false;
		}
	}
	return confirm("예약하시겠습니까 ?");
}

function checkcar(){
	var adult = document.getElementById("adult").value; //어른 예약수
	var child = document.getElementById("child").value; //어린이 인원수
	var allprice = document.getElementById("allprice").value; //현재 총 가격
	var dayresult = document.getElementById("dayresult").value; //총 숙박 기간
	var room_id = document.getElementById("room_id").value; //vip 인지 아닌지 판별
	var morning1 = document.getElementById("morningpay1").value; //어른 조식가격
	var tax = document.getElementById("tax").value; //세금
	var maintain = document.getElementById("maintain1").value; //유지비

	if($("input:checked[Name='carpicupbutton']").is(":checked")){
		
		if(room_id != 1){
			document.getElementById("carcheck").value = 150000;
			var carpic = document.getElementById("carpic").value = priceToString(150000);
			if(child != 0){//어린이가 있는 경우 
				var morningpay2 = document.getElementById("morningpay2").value;//어린이 조식가격
				allprice = priceToString(
					parseInt(priceUnString(dayresult)) + parseInt(priceUnString(morning1)) +
					parseInt(priceUnString(morningpay2)) + parseInt(priceUnString(carpic)) + 
					parseInt(priceUnString(tax)) + parseInt(priceUnString(maintain)));
				//총숙박비 = 투숙비 + 성인조식 + 어린이 조식 + 차량 픽업 + 세금 + 유지비
			}
			else{
				allprice = priceToString(
					parseInt(priceUnString(dayresult)) + parseInt(priceUnString(morning1)) +
					parseInt(priceUnString(carpic)) + parseInt(priceUnString(tax)) + parseInt(priceUnString(maintain)));
				//총숙박비 = 투숙비 + 성인조식 + 차량 픽업 + 세금 + 유지비
			}
		}
		else{//VIP room 
			document.getElementById("carpic").value = 1;
			allprice = priceToString(parseInt(priceUnString(dayresult)) + parseInt(priceUnString(tax)) + parseInt(priceUnString(maintain)));
			//총숙박비 = 투숙비 + 세금 + 유지비
		}
	}
	else if(!$("input:checked[Name='carpicupbutton']").is(":checked")){
		if(room_id != 1){
			document.getElementById("carcheck").value = 0;
			var carpic = document.getElementById("carpic").value = 0;
			if(child != 0){//어린이가 있는 경우
				var morningpay2 = document.getElementById("morningpay2").value;//어린이 조식가격
				allprice = priceToString(
					parseInt(priceUnString(dayresult)) + parseInt(priceUnString(morning1)) +
					parseInt(priceUnString(morningpay2)) + parseInt(priceUnString(carpic)) + 
					parseInt(priceUnString(tax)) + parseInt(priceUnString(maintain)));
				//총숙박비 = 투숙비 + 성인조식 + 어린이 조식 + 차량 픽업 + 세금 + 유지비
			}
			else{
				allprice = priceToString(
					parseInt(priceUnString(dayresult)) + parseInt(priceUnString(morning1)) +
					parseInt(priceUnString(carpic)) + parseInt(priceUnString(tax)) + parseInt(priceUnString(maintain)));
				//총숙박비 = 투숙비 + 성인조식 + 차량 픽업 + 세금 + 유지비
			}
		}
		else{//VIP room 
			document.getElementById("carpic").value = 0;
			allprice = priceToString(parseInt(priceUnString(dayresult)) + parseInt(priceUnString(tax)) + parseInt(priceUnString(maintain)));
			//총숙박비 = 투숙비 + 세금 + 유지비
		}
	}
	document.getElementById("allprice").value = allprice;
}

function priceToString(price) {
    price = String(price);
    return price.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
}
function priceUnString(price) {
	price = String(price);
    return price.replace(/[^\d]+/g, '');
}

$(document).on('click', '.view_data', function(){  
var employee_id = $(this).attr("id");  
   if(employee_id != '')  
   {  
		$.ajax({  
			 url:"/~team1/reservation/select",  
			 method:"POST",  
			 data:{employee_id:employee_id},  
			 success:function(data){  
				  $('#employee_detail').html(data);  
				  $('#dataModal').modal('show');  
			 }  
		});  
   }            
});

$(document).on('click', '.image_data', function(){  
	var image_id = $(this).attr("id");  
   if(image_id != '')  
   {  
		$.ajax({  
			 url:"/~team1/reservation/showimg",  
			 method:"POST",  
			 data:{image_id:image_id},  
			 success:function(data){  
				  $('#image_detail').html(data);  
				  $('#imageModal').modal('show');  
			 }  
		});  
   }            
}); 

$(document).on('click', '.room_data', function(){  
	var room_name = $(this).attr("id");  
	document.getElementById("1selectroom2").value = room_name;
}); 
function reservationroom(){
	var room = $("#1selectroom2").val();
	if(room == ""){
		alert("방을 선택해주십시오.");
		return false;
	}
}

function reservationcheck(){
	var checkin = $("#fromDate").val();
	var checkout = $("#toDate").val();
	var adult = $("#adult").val();
		
	if(checkin == ""){
		alert("예약날짜를 입력해주십시오.");
		$("#fromDate").focus();
		return false;
	}
	if(checkout == ""){
		alert("예약날짜를 입력해주십시오.");
		$("#toDate").focus();
		return false;
	}
	if(checkin == checkout){
		alert("1박 이상 예약가능 합니다.");
		$("#fromDate").focus();
		return false;
	}
	if(adult == 0){
		alert("성인 1명 이상 있어야 합니다.");
		return false;
	}
}

function detailcheck(){
	var checkin = $("#de_fromDate").val();
	var checkout = $("#de_toDate").val();
	var adult = $("#de_adult").val();
		
	if(checkin == ""){
		alert("예약날짜를 입력해주십시오.");
		$("#de_fromDate").focus();
		return false;
	}
	if(checkout == ""){
		alert("예약날짜를 입력해주십시오.");
		$("#de_toDate").focus();
		return false;
	}
	if(checkin == checkout){
		alert("1박 이상 예약가능 합니다.");
		$("#de_fromDate").focus();
		return false;
	}
	if(adult == 0){
		alert("성인 1명 이상 있어야 합니다.");
		return false;
	}
}