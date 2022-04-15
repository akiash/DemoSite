@extends('admin/layout')
@section('page_title','Company')
@section('company_select','active')
@section('container')


@if(session()->has('message'))
<div class="alert with-close alert-fill-success" role="alert">
    <i class="mdi mdi-alert-circle"></i>{{session('message')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="close">
		<span aria-hidden="true">x</span>
	</button>
</div>
@endif
	
	<div class="page-header">
	  <h3 class="page-title"> Company </h3>
	  
	  <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Company</li>
		</ol>
	  </nav>
	</div>
	
	<div class="card">
		<div class="card-body">
			<a href="{{url('admin/company/manage-company')}}"><button type="button" class="btn btn-gradient-danger btn-fw">Add Company</button></a>
			<div class="row">
				<div class="col-12">
					<div class="table-responsive">
						<table id="order-listing" class="table">
						  <thead class="table-dark">
							<tr>
							  <th>S.no #</th>
							  <th>Company Name</th>
							  <th>Company Email</th>
							  <th>Company Website</th>
							  <th>Company Logo</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>
						  	@php
							  $i=1;
							@endphp
						  	@foreach($data as $list)
							<tr>
							  <td>{{$i}}</td>
							  <td>{{$list->company_name}}</td>
							  <td>{{$list->company_email}}</td>
							  <td>{{$list->company_website}}</td>
							  <td>
							  	@if($list->company_logo!='')
									<img src="{{asset('storage/company/'.$list->company_logo)}}">
								@endif
							  </td>
							  <td>
							  
							  <a href="{{url('admin/company/manage-company/')}}/{{$list->id}}"><button type="button" class="btn btn-inverse-primary"> Edit 
							  <i class="mdi mdi-file-check btn-icon-append"></i>
							  </button></a>

							  @if($list->status==1)
							  	<a href="{{url('admin/company/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-outline-success">
								<i class="mdi mdi-remove btn-icon-prepend"></i> Active
								</button></a>

								@elseif($list->status==0)
								<a href="{{url('admin/company/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-inverse-warning btn-icon-text">
								<i class="mdi mdi-remove btn-icon-prepend"></i> DeActive
								</button></a>
							  @endif 

							  <a href="{{url('admin/company/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-inverse-danger">
								<i class="mdi mdi-remove btn-icon-prepend"></i> Delete
								</button>
							  </a>
							  </apache_note>
							  </td>
							</tr>
							@php
							  $i++;
							@endphp
							@endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection