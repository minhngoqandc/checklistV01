@section('account info form')
<div id="frame-account-info" class="modal">
  
	<form class="modal-content animate">
		<div class="header">
			<span onclick="document.getElementById('frame-account-info').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container" style="padding: 0 27px;">

			<img class="avatar-acc-form" alt="">
			<h3 class="name-acc-form"></h3>

			<label class="field" for="email"><b>Email</b></label>
			<input type="text" value="example123@gmail.com" name="email" disabled>

			<label class="field" for="birthday"><b>Birthday</b></label>
			<input type="text" value="16/01/1997" name="birthday" disabled>

			<label class="field" for="gender"><b>Gender</b></label>
			<input type="text" value="Female" name="gender" disabled>

			<label class="field" for="level"><b>Level</b></label>
			<input type="text" name="level" disabled><br><br>

		</div>
	</form>
</div>

<script src="{{asset('js/accountInfo.js')}}"></script>
@show

