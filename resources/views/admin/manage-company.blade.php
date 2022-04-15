@extends('admin/layout')
@section('page_title','Manage Company')
@section('company_select','active')
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
	  <h3 class="page-title">ADD Company </h3>
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
		  <li class="breadcrumb-item "><a href="{{url('admin/company')}}">Back</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Add Company</li>
		</ol>
	  </nav>
	</div>

<div class="row grid-margin">
	<div class="col-12">
	
		<div class="card">
			<div class="card-body">
				<form class="cmxform" id="compnayForm" method="post" action="{{route('company.manage_company_process')}}" enctype="multipart/form-data">
				@csrf
				  <fieldset>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="category">Company Name</label>
									<input id="company" class="form-control" maxlength="25" name="company_name" type="text" value="{{$company_name}}" required> 				
								
							</div>	
							<div class="col-md-4">
								<label for="company_email">Company Email</label>
									<input id="company_email" class="form-control" maxlength="25" name="company_email" type="email" value="{{$company_email}}"> 
										@error('company_email')
											<div class="alert alert-danger" role="alert">
												{{$message}}
											</div>
										@enderror
							</div>

							<div class="col-md-4">
								<label for="company_website">Company Website</label>
									<input id="company_website" class="form-control" maxlength="25" name="company_website" type="text" value="{{$company_website}}"> 
										@error('company_website')
											<div class="alert alert-danger" role="alert">
												{{$message}}
											</div>
										@enderror
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="company_logo">Image</label>
							<input id="company_logo" class="form-control" name="company_logo" type="file" {{$image_required}}> 
								@if($company_logo!='')
									<a href="{{asset('storage/company/'.$company_logo)}}" target="_blank"><img width="100px" src="{{asset('storage/company/'.$company_logo)}}"></a>
								@endif
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