$(document).ready(function(){
	$('#bigo').on('keyup', function() {
        $('#bigo_cnt').html("("+$(this).val().length+" / 200)");
 
        if($(this).val().length > 200) {
            $(this).val($(this).val().substring(0, 200));
            $('#bigo_cnt').html("(200 / 200)");
        }
    });
});
$(function() {     
    //2이상 입력이 안되는 JQuery
    var restarurantQty = $('.restarurant-qty');
    restarurantQty.prepend('<div style="border-right:0px; color:black; background: #ffdf80"; class="dec resbtn">-</div>');
    restarurantQty.append('<div style="border-left:0px; color:black; background: #ffdf80"; class="inc resbtn">+</div>');
    restarurantQty.on('click', '.resbtn', function () {
        var $button = $(this);
        var resValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            if(resValue > 7){
                return;
            }
            var newVal = parseFloat(resValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (resValue > 1) {
                var newVal = parseFloat(resValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    //오늘 날짜를 출력

	$('#inDate').datepicker({
		dateFormat: "yy-mm-dd",             // 날짜의 형식
		changeMonth: true,                  // 월을 이동하기 위한 선택상자 표시여부
		minDate: 1,                       // 선택할수있는 최소날짜, ( 0 : 오늘 이전 날짜 선택 불가)
		onClose: function( selectedDate ) {
			// 종료일(toDate) datepicker가 닫힐때
			// 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정            
		}           
    });
});

function res_reset() {
	document.getElementById("inDate").value = "";
	document.getElementById("bigo").value = "";
	document.getElementById("adult_meal").value = 1;
	document.getElementById("child_meal").value = 0;
}
function res_check(){
	var select = document.getElementById("res_time");
	var value = select.options[select.selectedIndex].value;
	var date = document.getElementById("inDate").value;
	var adult = document.getElementById("adult_meal").value;
	var child = document.getElementById("child_meal").value;
	var all = parseInt(adult) + parseInt(child);
	if(date == ""){
		alert("예약일자를 입력해 주십시오");
		return false;
	}
	if(value == 0){
		alert("예약할 시간을 입력해 주십시오");
		return false;
	}
	if(adult <= 0){
		alert("성인 1명은 필수입니다.");
		return false;
	}
	if(all > 8){
		alert("예약가능한 인원을 초과했습니다.");
		return false;
	}
	return confirm("예약하시겠습니까 ?");
}


