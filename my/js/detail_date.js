$(function(){
		var proQty = $('.deroom-qty');
		proQty.prepend('<div style="border-right:0px; color:black; background: #ffdf80"; class="dec deroombtn">-</div>');
		proQty.append('<div  style="border-left:0px; color:black; background: #ffdf80"; class="inc deroombtn">+</div>');
		proQty.on('click', '.deroombtn', function () {
			var $button = $(this);
			var deValue = $button.parent().find('input').val();
			if ($button.hasClass('inc')) {
				if(deValue > 1){
					return;
				}
				var newVal = parseFloat(deValue) + 1;
			} else {
				// Don't allow decrementing below zero
				if (deValue > 0) {
					var newVal = parseFloat(deValue) - 1;
				} else {
					newVal = 0;
				}
			}
			$button.parent().find('input').val(newVal);
		});
	 //오늘 날짜를 출력
	  $('#de_fromDate').datepicker({
          dateFormat: "yy-mm-dd",             // 날짜의 형식
          changeMonth: true,                  // 월을 이동하기 위한 선택상자 표시여부
          minDate: 1,                       // 선택할수있는 최소날짜, ( 0 : 오늘 이전 날짜 선택 불가)
          onClose: function( selectedDate ) {
            // 종료일(toDate) datepicker가 닫힐때
            // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
            $("#de_fromDate").datepicker( "option", "maxDate", selectedDate );
        }           
      });
  
      //종료일
      $('#de_toDate').datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          minDate: 2, 
          onClose: function( selectedDate ) {
              // 종료일(toDate) datepicker가 닫힐때
              // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
              $("#de_fromDate").datepicker( "option", "maxDate", selectedDate );
          }          
      });
});
function detailcheck(){
	var checkin = $("#de_fromDate").val();
	var checkout = $("#de_toDate").val();
	var adult = $("#adult").val();
		
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
