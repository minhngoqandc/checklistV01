@section('create account form')
<div id="frame-create-acc" class="modal">
  
	<form class="modal-content animate">
		<div class="header">		
			<span onclick="document.getElementById('frame-create-acc').style.display='none'" class="close" title="Close Modal">&times;</span>

			<h2>Create Account</h2>
		</div>

		<div class="container">
			<label class="field" for="fullname"><b>Fullname</b></label>
			<input type="text" placeholder="Thomas Edison" name="fullname" required autofocus>

			<label class="field" for="email"><b>Email</b></label>
			<input type="text" placeholder="example123@gmail.com" name="email" required>			

			<label class="field" for="password"><b>Password</b></label>
			<input type="password" placeholder="At least 6 characters"	 name="password" required>

			<label class="field" for="level-radio"><b>Level</b></label>				
			<label class="level">
				<input type="radio" name="level-radio" required checked="checked">
				<span class="check-level"></span>
				<span class="type-level">Member</span>
			</label>
			<label class="level">
				<input type="radio" name="level-radio" required>
				<span class="check-level"></span>
				<span class="type-level">Admin</span>
			</label>

			<button class="btn-create" type="submit">Create Account</button>	
		</div>
	</form>
</div>

<script src="{{asset('js/createAccount.js')}}"></script>
@show

