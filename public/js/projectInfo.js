var modal3 = document.getElementById('frame-project-info');

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
	if (event.target == modal3	) {
        $(modal3).css('display', 'none');
    }
});

// import data into frame project info
$(document).ready(function() {
	$('.btn.btn-primary.more-prj').click(function() {
		$('body').css('overflow', 'hidden');
		
		//get button
		var btn = $(this);

		//get li selector which contain this button
		var parentBtn = getParentBtnMorePrj(btn);

		//show frame project info when click button
		$('#frame-project-info').css('display', 'block');

		var valueName = $(createNameSelectorsPrj(parentBtn) + " .name-prj").text(); 
		$('.name-prj-form').text(valueName);/*set name*/

		var valuePm = $(createNameSelectorsPrj(parentBtn) + " .pm-prj").text(); 
		$('input[name="pm"]').attr('value', valuePm);/*set project manager*/

		var valueStatus = $(createNameSelectorsPrj(parentBtn) + " .status-prj").text();
		$('input[name="status"]').attr('value', valueStatus);/*set level*/

	});
});

function getParentBtnMorePrj(btn) {
	return $(btn).closest('li.prj').attr('id');
}

function createNameSelectorsPrj(selector) {
	return "#" + selector + " .margin-prj .margin-content-prj";
}