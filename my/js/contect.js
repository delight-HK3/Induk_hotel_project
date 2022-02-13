$(document).ready(function(){
	$('#q_bigo').on('keyup', function() {
        $('#q_bigo_cnt').html("("+$(this).val().length+" / 500)");
 
        if($(this).val().length > 500) {
            $(this).val($(this).val().substring(0, 500));
            $('#q_bigo_cnt').html("(500 / 500)");
        }
    });
});
function back(){
	window.history.back();
}
function check(){
	alert("문의사항이 성공적으로 접수되었습니다.");
}