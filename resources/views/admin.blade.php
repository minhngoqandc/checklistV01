@extends('layouts.createAccount')
@extends('layouts.createProject')
@extends('layouts.accountInfo')
@extends('layouts.projectInfo')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{asset('css/createAccount.css')}}">
	<link rel="stylesheet" href="{{asset('css/createProject.css')}}">
	<link rel="stylesheet" href="{{asset('css/accountInfo.css')}}">
	<link rel="stylesheet" href="{{asset('css/projectInfo.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>CheckList.AIT</title>
</head>
<body>
	<nav class="menu-category navbar navbar-expand-sm navbar-dark">
		<div class="container">
			<a class="navbar-brand name-product" href="#">CheckList.AIT</a>

			<div class="collapse navbar-collapse acc-logined d-flex">
				<ul class="navbar-nav ml-auto" style="width: 36%;">
					<li class="nav-item">
						<img src="{{asset('images/admin/user.png')}}" alt="">
						<a href="">Nguyễn Thị Hà Phương</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container d-flex">
		<input type="button" value="Create Account" id="create-account" class="create-obj btn btn-success">
		@section('create account form')

		<input type="button" value="Create Project" id="create-project" class="create-obj btn btn-dark">
		@section('create project form')

		<form class="form-inline ml-auto" id="search-item">
			<input class="form-control" type="text" placeholder="Search">
			<button class="form-control" type="button"><i class="fa fa-search"></i></button>
		</form>
	</div>

	<div class="container">
		<hr>
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<nav class="d-none d-sm-block bg-light sidebar">
					<ul class="nav nav-pills flex-column menu-management">
						<li class="nav-item title-management">
							Management
						</li>
						<li class="nav-item">
							<a class="nav-link item-management" id="account-management" href="#"><i class="fa fa-user"></i><span>Account list</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link item-management" id="project-management" href="#"><i class="fa fa-list-alt"></i><span>Projects list</span></a>
						</li>
					</ul>
				</nav>	
			</div>
			
			<div class="col-sm-8 col-md-9" id="project-list" style="display: block;">
				<ul class="nav row">
					<li class="prj nav-item col-sm-6 col-lg-4" id="1_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/frontend.png')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Design CheckList login interface</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thị Hà Phương</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="2_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">			
								<h3 class="name-prj">Building homepage website with wordpress</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thành Tú</strong></h4>
								<h4 class="status-prj">Status: <strong>Uncompleted</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="3_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Building website which manage projects</h3>
								<h4 class="pm-prj">PM: <strong>Ngô Quang Minh</strong></h4>
								<h4 class="status-prj">Status: <strong>Uncompleted</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="4_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/artifical-intelligent.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Game AI automatic chess</h3>
								<h4 class="pm-prj">PM: <strong>Đoàn Minh Tuấn</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="5_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/image-processing.png')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Denoise medical image</h3>
								<h4 class="pm-prj">PM: <strong>Ngô Quang Minh</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="6_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Finance software with Nodejs</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thị Hà Phương</strong></h4>
								<h4 class="status-prj">Status: <strong>Unompleted</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="1_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Blog selling vegetable</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thành Tú</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="1_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/image-processing.png')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Generative Adversarial Network</h3>
								<h4 class="pm-prj">PM: <strong>Ngô Quang Minh</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="5_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/image-processing.png')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Denoise medical image</h3>
								<h4 class="pm-prj">PM: <strong>Ngô Quang Minh</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="6_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Finance software with Nodejs</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thị Hà Phương</strong></h4>
								<h4 class="status-prj">Status: <strong>Unompleted</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="1_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Blog selling vegetable</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thành Tú</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="1_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/frontend.png')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Design CheckList login interface</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thị Hà Phương</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="2_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Building homepage website with wordpress</h3>
								<h4 class="pm-prj">PM: <strong>Nguyễn Thành Tú</strong></h4>
								<h4 class="status-prj">Status: <strong>Uncompleted</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="3_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/web.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Building website which manage projects</h3>
								<h4 class="pm-prj">PM: <strong>Ngô Quang Minh</strong></h4>
								<h4 class="status-prj">Status: <strong>Uncompleted</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="4_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/artifical-intelligent.jpeg')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Game AI automatic chess</h3>
								<h4 class="pm-prj">PM: <strong>Đoàn Minh Tuấn</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					<li class="prj nav-item col-sm-6 col-lg-4" id="5_prj">
						<div class="margin-prj">
							<img src="{{asset('images/project-type/image-processing.png')}}" alt="" class="avatar-prj img-fluid">
							<div class="margin-content-prj">
								<h3 class="name-prj">Denoise medical image</h3>
								<h4 class="pm-prj">PM: <strong>Ngô Quang Minh</strong></h4>
								<h4 class="status-prj">Status: <strong>Completed</strong></h4>
								<input type="button" value="Detail" class="btn btn-primary more-prj">
							</div>
						</div>
					</li>
					@section('project info form')
				</ul>
			</div>

			<nav class="col-sm-8 col-md-9" id="account-list" style="display: none;">
				<ul class="nav row">
					<li class="acc nav-item col-sm-4" id="1_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/1_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="2_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/2_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="3_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/3_acc.jpg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>						
					</li>
					<li class="acc nav-item col-sm-4" id="4_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/4_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="5_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/5_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">	
						</div>					
					</li>
					<li class="acc nav-item col-sm-4" id="6_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/1_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="7_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/2_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc" >
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="8_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/3_acc.jpg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc" >
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="9_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/4_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="10_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/5_acc.jpeg')}}" alt="" class="avatar-acc img-fluid">
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="11_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/1_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="12_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/2_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="13_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/3_acc.jpg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>						
					</li>
					<li class="acc nav-item col-sm-4" id="14_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/4_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="15_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/5_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">	
						</div>					
					</li>
					<li class="acc nav-item col-sm-4" id="16_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/1_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="17_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/2_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc" >
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="18_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/3_acc.jpg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc" >
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="19_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/4_acc.jpeg')}}" alt="" class="avatar-acc img-fluid" >
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					<li class="acc nav-item col-sm-4" id="20_acc">
						<div class="margin-acc">
							<img src="{{asset('images/admin/5_acc.jpeg')}}" alt="" class="avatar-acc img-fluid">
							<h3 class="name-acc">Hà Puns</h3>
							<h4 class="level-acc">Member</h4>
							<input type="button" value="More" class="btn btn-primary more-acc">
						</div>
					</li>
					@section('account info form')
				</ul>
			</nav>
		</div>
	</div>

	<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>