var modal1 = document.getElementById('frame-account-info');

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
	if (event.target == modal1	) {
        $(modal1).css('display', 'none');
    }
});

// import data into frame account info
$(document).ready(function() {
	$('.btn.btn-primary.more-acc').click(function() {
		$('body').css('overflow', 'hidden');
		
		//get button
		var btn = $(this);

		//get li selector which contain this button
		var parentBtn = getParentBtnMoreAcc(btn);

		//show frame account info when click button
		$('#frame-account-info').css('display', 'block');

		//get data from acc which import frame account form
		var srcAvatar = $(createNameSelectorsAcc(parentBtn) + " .avatar-acc").attr('src');
		$('.avatar-acc-form').attr('src', srcAvatar);/*set avatar*/
		
		var valueName = $(createNameSelectorsAcc(parentBtn) + " .name-acc").text(); 
		$('.name-acc-form').text(valueName);/*set name*/

		var valueLevel = $(createNameSelectorsAcc(parentBtn) + " .level-acc").text();
		$('input[name="level"]').attr('value', valueLevel);/*set level*/

		//set height = width
		$('.avatar-acc-form').height($('.avatar-acc-form').width());
	});
});

function getParentBtnMoreAcc(btn) {
	return $(btn).closest('li.acc').attr('id');
}

function createNameSelectorsAcc(selector) {
	return "#" + selector + " .margin-acc";
}