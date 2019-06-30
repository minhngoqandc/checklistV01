@section('project info form')
<div id="frame-project-info" class="modal">
  
	<form class="modal-content animate">
		<div class="header">
			<span onclick="document.getElementById('frame-project-info').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container" style="padding: 0 27px;">

			<h3 class="name-prj-form"></h3>
			
			<label class="field" for="code"><b>Code</b></label>
			<input type="text" name="code" value="PRJ03" disabled>

			<label class="field" for="pm"><b>Project Manager</b></label>
			<input type="text" name="pm" disabled>

			<label class="field" for="begin"><b>Begin</b></label>
			<input type="text" name="begin" value="23/06/2019" disabled>

			<label class="field" for="status"><b>Status</b></label>
			<input type="text" name="status" disabled>
			
			<label class="field" for="description"><b>Description</b></label>
			<textarea name="description" cols="30" rows="5" disabled>This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose. This project was built which serve selling vegetable purpose.</textarea>
			
			<button class="btn-edit-prj" type="submit">Edit Project</button>
			<br><br>

		</div>
	</form>
</div>

<script src="{{asset('js/projectInfo.js')}}"></script>
@show

