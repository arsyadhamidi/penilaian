@extends('admin.layout.master')
@section('title','Assessment Form - SAFE2023')
@section('menuNilai', 'active')

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Assessment Form</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<h4><b>A-Judging Criteria</b></h4>
		<p class="card-text">
			All Innovation will be judged based on the following criteria: originality, level of inspiration, and overall creativity. Judging will be conducted by a panel of  Product Innovation Contest. 
		</p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">#</th>
					<th>Question</th>
					<th>Assessment</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>
						<h5 class="card-title"><b>Originality (15%)</b></h5>
						<p class="card-text">
							Entries must indicate being one-of-a-kind, new, and fresh in some demonstrable way. They may draw inspiration or derive from existing objects, but they would be an iteration or unique improvement 
						</p>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="originality1" value="1">
							<label class="form-check-label" for="exampleRadios1">
								1 Weak
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="originality2" value="2">
							<label class="form-check-label" for="exampleRadios2">
								2 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="originality3" value="3">
							<label class="form-check-label" for="exampleRadios2">
								3 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="originality4" value="4">
							<label class="form-check-label" for="exampleRadios2">
								4 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="originality5" value="5">
							<label class="form-check-label" for="exampleRadios2">
								5 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="originality6" value="6">
							<label class="form-check-label" for="exampleRadios2">
								6 Very Strong
							</label>
						</div>
					</td>
					<td id="output-originility" align="center"></td>
				</tr>
				<tr>
					<td>2</td>
					<td>
						<h5 class="card-title"><b>Usefulness (15%)</b></h5>
						<p class="card-text">
							An interest should inspire entries in solving a problem identified locally or in one's immediate community. Judges will look for inventions that demonstrate the potential to make a positive difference in the lives of others. The intent behind the design and the benefit of using the invention should be detailed in the poster 
						</p>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="usefulness1" value="1">
							<label class="form-check-label" for="exampleRadios1">
								1 Weak
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="usefulness2" value="2">
							<label class="form-check-label" for="exampleRadios2">
								2 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="usefulness3" value="3">
							<label class="form-check-label" for="exampleRadios2">
								3 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="usefulness4" value="4">
							<label class="form-check-label" for="exampleRadios2">
								4 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="usefulness5" value="5">
							<label class="form-check-label" for="exampleRadios2">
								5 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="usefulness6" value="6">
							<label class="form-check-label" for="exampleRadios2">
								6 Very Strong
							</label>
						</div>
					</td>
					<td id="output-usefulness" align="center"></td>
				</tr>
				<tr>
					<td>3</td>
					<td>
						<h5 class="card-title"><b>Degree in Inventiveness (20%)</b></h5>
						<p class="card-text">
							The degree of inventiveness refers to the relative degree of modifications made to the previous system or solution due to solving an inventive problem1. There are five levels of inventiveness, ranging from routine design problems solved by well-established methods to highly inventive solutions. Inventiveness can also refer to displaying or possessing new and unique ideas. Consequently, the degree of inventiveness is defined as the degree to which a solution or system differs from the prior one as a result of solving an inventive problem. It is a measurement of the solution's creativity and originality <strong class="text-danger">We place a premium on innovations that are supported by  research, development, and publication!.</strong>
						</p>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="inventiveness1" value="1">
							<label class="form-check-label" for="exampleRadios1">
								1 Weak
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="inventiveness2" value="2">
							<label class="form-check-label" for="exampleRadios2">
								2 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="inventiveness3" value="3">
							<label class="form-check-label" for="exampleRadios2">
								3 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="inventiveness4" value="4">
							<label class="form-check-label" for="exampleRadios2">
								4 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="inventiveness5" value="5">
							<label class="form-check-label" for="exampleRadios2">
								5 
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="inventiveness6" value="6">
							<label class="form-check-label" for="exampleRadios2">
								6 Very Strong
							</label>
						</div>
					</td>
					<td id="output-inventiveness" align="center"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection