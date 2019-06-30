var modal = document.getElementById('frame-create-acc');

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        $(modal).css('display', 'none');
    }
});

$(document).ready(function() {
	$('#create-account').click(function() {
		$('#frame-create-acc').css('display', 'block');
		$('body').css('overflow', 'hidden');
	});
});