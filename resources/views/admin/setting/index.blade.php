@extends('admin.layout.master')
@section('title','Setting - SAFE2023')
@section('menuSetting','active')

@section('content')
<div class="row">
	<div class="col-md-3">

		<!-- Profile Image -->
		<div class="card card-primary card-outline">
			<div class="card-body box-profile">
				<div class="text-center">
					@if(Auth()->user()->foto_profile)
					<img class="profile-user-img img-fluid img-circle"
					src="{{ asset('storage/'. Auth()->user()->foto_profile) }}"
					alt="User profile picture">
					@else
					<img class="profile-user-img img-fluid img-circle"
					src="{{ asset('gambar/foto-profile.png') }}"
					alt="User profile picture">
					@endif
				</div>

				<h3 class="profile-username text-center">{{ Auth()->user()->nama_lengkap }}</h3>

				<p class="text-muted text-center">Software - {{ Auth()->user()->level }}</p>

				<ul class="list-group list-group-unbordered mb-3">
					<li class="list-group-item">
						<b>Followers</b> <a class="float-right">1,322</a>
					</li>
					<li class="list-group-item">
						<b>Following</b> <a class="float-right">543</a>
					</li>
					<li class="list-group-item">
						<b>Friends</b> <a class="float-right">13,287</a>
					</li>
				</ul>

				<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

	</div>
	<!-- /.col -->
	<div class="col-md-9">
		<div class="card">
			<div class="card-header p-2">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
				</ul>
			</div><!-- /.card-header -->
			<div class="card-body">
				<div class="tab-content">
					<div class="active tab-pane" id="settings">
						<form class="form-horizontal" method="POST" action="/setting-action" enctype="multipart/form-data">
							@csrf
							<div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Your Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputName" placeholder="Your Name" name="nama_lengkap" value="{{ Auth()->user()->nama_lengkap }}">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="text" name="username" class="form-control" id="inputEmail" placeholder="Username" value="{{ Auth()->user()->username }}">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputName2" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control" id="inputName2" placeholder="Password">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputName2" class="col-sm-2 col-form-label">Status</label>
								<div class="col-sm-10">
									<input type="text" name="level" class="form-control" id="inputName2" value="{{ Auth()->user()->level }}" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputSkills" class="col-sm-2 col-form-label">Picture</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" name="foto_profile" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-sm-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-sm-2 col-sm-10">
									<button type="submit" class="btn btn-danger">Submit</button>
								</div>
							</div>
						</form>
					</div>
					<!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			</div><!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
</div>
@endsection