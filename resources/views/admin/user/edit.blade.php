@extends('admin.layout.master')
@section('title', 'User Registrasion - SAFE2023')
@section('menuUser','active')

@section('content')
<div class="row">
	<div class="col-lg">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">
					<i class="fas fa-user-plus"></i>
					Edit a user registrasion
				</h3>
			</div>
			<form method="POST" action="{{ route('data-user.update', $users->id) }}">
				@method('PUT')
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Your Name</label>
						<input type="text" name="nama_lengkap" class="form-control" placeholder="Your Name" value="{{ $users->nama_lengkap }}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" value="{{ $users->username }}">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection