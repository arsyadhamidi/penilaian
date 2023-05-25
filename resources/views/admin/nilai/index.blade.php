@extends('admin.layout.master')
@section('title','Assessment Form - SAFE2023')
@section('menuNilai', 'active')

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Assessment Form</h3>
		<div class="card-tools">
			<form method="GET" action="{{ route('data-nilai.index') }}">
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
		<a href="{{ route('data-nilai.create') }}" class="btn btn-success mb-3">
			<i class="fas fa-plus"></i>
			Create a Assessment Form
		</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th>Participants Name</th>
					<th>Title Name</th>
					<th>Assessment</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($nilais as $data)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $data->nama_peserta }}</td>
					<td>{{ $data->judul_peserta }}</td>
					<td>{{ $data->nilai_peserta }}</td>
					<td align="center">
						<form action="{{ route('data-nilai.destroy',  $data->id_nilai) }}" method="POST">
							@method('DELETE')
							@csrf
							<a href="{{ route('data-nilai.edit', $data->id_nilai) }}" class="btn btn-sm btn-outline-primary">
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
		{{$nilais->links('pagination::Bootstrap-5')}}
	</div>
</div>
@endsection