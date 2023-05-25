@extends('admin.layout.master')
@section('title', 'Non-Student - SAFE2023')
@section('menuKategori','active')
@section('menuNonStudent','active')

@section('content')
<div class="row">
	<div class="col-lg">
		<div class="card card-secondary">
			<div class="card-header">
				<h3 class="card-title">
					Create a Non-Student Participants 
				</h3>
			</div>
			<form method="POST" action="{{ route('data-non-student.store') }}">
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Participants Name</label>
						<input type="text" name="nama_peserta" class="form-control" placeholder="Participants Name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Participants Email</label>
						<input type="email" name="email_peserta" class="form-control" placeholder="Participants Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Affiliation</label>
						<input type="text" class="form-control" name="asal_peserta" placeholder="Affiliation">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Product Title</label>
						<input type="text" class="form-control" name="judul_peserta" placeholder="Product Title">
					</div>
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="/data-student" class="btn btn-danger">Back</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection 