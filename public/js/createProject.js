var modal2 = document.getElementById('frame-create-prj');

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
    if (event.target == modal2) {
        $(modal2).css('display', 'none');
    }
});

$(document).ready(function() {
	$('#create-project').click(function() {
		$('#frame-create-prj').css('display', 'block');
		$('body').css('overflow', 'hidden');
	});

});

$(document).ready(function() {
	for (var i = new Date().getFullYear(); i > 1980 ; i--) {
		$('#year').append($('<option />').val(i).html(i));
	}

	for (var i = 1; i < 13; i++) {
		$('#month').append($('<option />').val(i).html(i));
	}

	updateNumberOfDays();

	$('#year, #month').change(function() {
		updateNumberOfDays();
	});
});

function updateNumberOfDays() {
	month = $('#month').val();
	year = $('#year').val();
	day = daysInMonth(year,month);

	for (var i = 1; i < day + 1; i++) {
		$('#day').append($('<option />').val(i).html(i));
	}

}

function daysInMonth(year, month) {
	return new Date(year, month, 0).getDate();
}