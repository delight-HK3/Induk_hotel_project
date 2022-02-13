$(function() {     
    //2이상 입력이 안되는 JQuery
    var proQty = $('.pro-qty');
    proQty.prepend('<div class="dec qtybtn">-</div>');
    proQty.append('<div class="inc qtybtn">+</div>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            if(oldValue > 1){
                return;
            }
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
      //오늘 날짜를 출력

	  $('#fromDate').datepicker({
          showOn: "both",                     // 달력을 표시할 타이밍 (both: focus or button)
          buttonImage: "./my/img/calendar.png", // 버튼 이미지
          buttonImageOnly : true,             // 버튼 이미지만 표시할지 여부
          dateFormat: "yy-mm-dd",             // 날짜의 형식
          changeMonth: true,                  // 월을 이동하기 위한 선택상자 표시여부
          minDate: 1,                       // 선택할수있는 최소날짜, ( 0 : 오늘 이전 날짜 선택 불가)
          onClose: function( selectedDate ) {
            // 종료일(toDate) datepicker가 닫힐때
            // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
            $("#fromDate").datepicker( "option", "maxDate", selectedDate );
        }           
      });
  
      //종료일
      $('#toDate').datepicker({
          showOn: "both", 
          buttonImage: "./my/img/calendar.png",
          buttonImageOnly : true,
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          minDate: 2, 
          onClose: function( selectedDate ) {
              // 종료일(toDate) datepicker가 닫힐때
              // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
              $("#fromDate").datepicker( "option", "maxDate", selectedDate );
          }          
      });
});