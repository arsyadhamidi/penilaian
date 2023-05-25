@extends('admin.layout.master')
@section('title', 'Question - SAFE2023')
@section('menuSoal','active')

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Question Data</h3>
		<div class="card-tools">
			<form method="GET" action="{{ route('data-soal.index') }}">
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
		<a href="{{ route('data-soal.create') }}" class="btn btn-success mb-3">
			<i class="fas fa-plus"></i>
			Create a Data Question
		</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th>Question Name</th>
					<th>Question Information</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($soals as $data)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $data->soal_jawaban }}</td>
					<td width="60%">{{ $data->keterangan_jawaban }}</td>
					<td align="center">
						<form action="{{ route('data-soal.destroy',  $data->id_soal) }}" method="POST">
							@method('DELETE')
							@csrf
							<a href="{{ route('data-soal.edit', $data->id_soal) }}" class="btn btn-sm btn-outline-primary">
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
		{{$soals->links('pagination::Bootstrap-5')}}
	</div>
</div>
@endsection