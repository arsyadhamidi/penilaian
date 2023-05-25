@extends('admin.layout.master')
@section('title', 'User Registrasion - SAFE2023')
@section('menuUser','active')

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">User Registration</h3>
		<div class="card-tools">
			<form method="GET" action="{{ route('data-user.index') }}">
				<div class="input-group input-group-sm" style="width: 150px;">
					<input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request('search') }}">

					<div class="input-group-append">
						<button type="submit" class="btn btn-default">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<a href="{{ route('data-user.create') }}" class="btn btn-success mb-3">
			<i class="fas fa-plus"></i>
			Create a User
		</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th>Your Name</th>
					<th>Username</th>
					<th>Status</th>
					<th>Picture</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $data)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $data->nama_lengkap }}</td>
					<td>{{ $data->username }}</td>
					<td>{{ $data->level }}</td>
					<td align="center">
						@if($data->foto_profile)
							<img src="{{ asset('storage/'. $data->foto_profile) }}" class="rounded-circle" width="50" height="50">
						@else
							<img src="{{ asset('gambar/foto-profile.png') }}" class="rounded-circle" width="50" height="50">
						@endif
					</td>
					<td align="center">
						<form action="{{ route('data-user.destroy',  $data->id) }}" method="POST">
							@method('DELETE')
							@csrf
							<a href="{{ route('data-user.edit', $data->id) }}" class="btn btn-sm btn-outline-primary">
								<i class="fas fa-edit"></i>
							</a>
							<button type="submit" class="btn btn-sm btn-outline-danger">
								<i class="fas fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<div class="card-footer clearfix">
		<ul class="pagination pagination-sm m-0 float-right">
			<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
		</ul>
	</div>
</div>
@endsection