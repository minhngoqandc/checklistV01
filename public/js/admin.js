$(document).ready(function() {
	$('.acc').mouseover(function() {
		$('#' + getAccHover($(this)) + ' div.margin-acc').addClass('acc-hover');
	}).mouseout(function() {
		$('#' + getAccHover($(this)) + ' div.margin-acc').removeClass('acc-hover');
	});
});

function getAccHover(idAcc){
	return $(idAcc).attr('id');
}	

$(document).ready(function() {
	$('#account-management').click(function() {
		$('#project-list').css('display', 'none');
		$('#account-list').css('display', 'block');
	});
});

$(document).ready(function() {
	$('#project-management').click(function() {
		$('#project-list').css('display', 'block');
		$('#account-list').css('display', 'none');
	});
});