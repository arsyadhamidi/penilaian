@extends('admin.layout.master')
@section('title', 'Student - SAFE2023')
@section('menuKategori','active')
@section('menuStudent','active')

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Data Student</h3>
		<div class="card-tools">
			<form method="GET" action="{{ route('data-student.index') }}">
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
		<a href="{{ route('data-student.create') }}" class="btn btn-success mb-3">
			<i class="fas fa-plus"></i>
			Create a Data Student
		</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th>Name</th>
					<th>E-Mail Address</th>
					<th>Affiliation</th>
					<th>Category</th>
					<th>Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $data)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $data->nama_peserta }}</td>
					<td>{{ $data->email_peserta }}</td>
					<td>{{ $data->asal_peserta }}</td>
					<td>{{ $data->kategori_peserta }}</td>
					<td>{{ $data->judul_peserta }}</td>
					<td align="center">
						<form action="{{ route('data-student.destroy',  $data->id_peserta) }}" method="POST">
							@method('DELETE')
							@csrf
							<a href="{{ route('data-student.edit', $data->id_peserta) }}" class="btn btn-sm btn-outline-primary">
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
		{{$students->links('pagination::Bootstrap-5')}}
	</div>
</div>
@endsection