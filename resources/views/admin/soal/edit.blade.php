@extends('admin.layout.master')
@section('title', 'Question - SAFE2023')
@section('menuSoal','active')

@section('content')
<div class="row">
	<div class="col-lg">
		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">
					Edit a Qeustion 
				</h3>
			</div>
			<form method="POST" action="{{ route('data-soal.update', $soals->id_soal) }}">
				@method('PUT')
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Question Name</label>
						<input type="text" name="soal_jawaban" class="form-control" placeholder="Participants Name" value="{{ $soals->soal_jawaban }}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Question Information</label>
						<textarea class="form-control" name="keterangan_jawaban">{{ $soals->keterangan_jawaban }}</textarea>
					</div>
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="/data-soal" class="btn btn-danger">Back</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection