@section('create project form')
<div id="frame-create-prj" class="modal">
  
	<form class="modal-content animate">
		<div class="header">		
			<span onclick="document.getElementById('frame-create-prj').style.display='none'" class="close" title="Close Modal">&times;</span>

			<h2>Create Project</h2>
		</div>

		<div class="container">
			<label class="field" for="code"><b>Code</b></label>
			<input type="text" placeholder="PRJ02" name="code" required>			

			<label class="field" for="project"><b>Project</b></label>
			<input type="text" placeholder="Check List" name="project" required autofocus>

			<label class="field" for="pm"><b>Project Manager</b></label>
			<select class="custom-select custom-select-lg mb-3" name="pm">
				<option disabled selected>--Select--</option>
				<option value="">Ngô Quang Minh</option>
				<option value="">Đoàn Minh Tuấn</option>
				<option value="">Nguyễn Thành Tú</option>
				<option value="">Nguyễn Thị Hà Phương</option>
			</select>


			<label class="field" for="begin"><b>Begin</b></label>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<select class="custom-select custom-select-lg mb-3" name="year" id="year">
							<option disabled selected>Year</option>
						</select>
					</div>
					<div class="col-sm-4">
						<select class="custom-select custom-select-lg mb-3" name="month" id="month">
							<option disabled selected>Month</option>
						</select>
					</div>
					<div class="col-sm-3">
						<select class="custom-select custom-select-lg mb-3" name="day" id="day">
							<option disabled selected>Day</option>
						</select>
					</div>
				</div>
			</div>

			<label class="field" for="status"><b>Status</b></label>
			<input type="text" name="status" value="Uncompleted" required>

			<label class="field" for="description"><b>Description</b></label>
			<textarea name="description" cols="30" rows="5" required=""></textarea>

			<button class="btn-create" type="submit">Create Project</button>	
		</div>
	</form>
</div>

<script src="{{asset('js/createProject.js')}}"></script>
@show

