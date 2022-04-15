@extends('admin/layout')
@section('page_title','Manage Employee')
@section('employee_select','active')
@section('container')

@if($id>0)
	@php
	$image_required="";
	@endphp
@else
	@php
	$image_required="required";
	@endphp
@endif
<div class="page-header">
	  <h3 class="page-title">ADD Employee </h3>
		@error('company_logo')
			<div class="alert with-close alert-fill-danger" role="alert"> 
				<i class="mdi mdi-alert-circle"></i>{{$message}}&nbsp;&nbsp;
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
		@enderror
	  <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
		  <li class="breadcrumb-item "><a href="{{url('admin/employee')}}">Back</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
		</ol>
	  </nav>
	</div>

<div class="row grid-margin">
	<div class="col-12">
	
		<div class="card">
			<div class="card-body">
				<form class="cmxform" id="employeeForm" method="post" action="{{route('employee.manage_employee_process')}}" enctype="multipart/form-data">
				@csrf
				  <fieldset>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
									<input id="f_name" class="form-control" maxlength="25" name="f_name" type="text" value="{{$f_name}}" required> 				
									@error('f_name')
										<div class="alert alert-danger" role="alert">
											{{$message}}
										</div>
									@enderror
							</div>	
							<div class="col-md-6">
								<label for="l_name">Last Name</label>
									<input id="l_name" class="form-control" maxlength="25" name="l_name" type="text" value="{{$l_name}}"> 
										@error('l_name')
											<div class="alert alert-danger" role="alert">
												{{$message}}
											</div>
										@enderror
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="company">Company</label>
							<select id="company" class="form-control" name="companies_id" type="text">
								<option value="0">Select Companies</option>
								@foreach($company as $list)
									@if($companies_id==$list->id)
										<option selected value="{{$list->id}}">
									@else
										<option  value="{{$list->id}}">
									@endif
										{{$list->company_name}}</option>
								@endforeach
							</select>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
							<input id="email" class="form-control" name="email" type="email" value="{{$email}}" > 
							@error('email')
								<div class="alert alert-danger" role="alert">
									{{$message}}
								</div>
							@enderror
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
							<input id="phone" class="form-control" name="phone" type="text" value="{{$phone}}" > 
							@error('phone')
								<div class="alert alert-danger" role="alert">
									{{$message}}
								</div>
							@enderror
					</div>
					<button class="btn btn-gradient-primary" type="submit" value="">Submit</button>
					<input type="hidden" name="id" value="{{$id}}">
				  </fieldset>
				</form>
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
</script>
@endsection