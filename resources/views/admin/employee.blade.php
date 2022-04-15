@extends('admin/layout')
@section('page_title','Employee')
@section('employee_select','active')
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
	  <h3 class="page-title"> Employee </h3>
	  
	  <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Employee</li>
		</ol>
	  </nav>
	</div>
	
	<div class="card">
		<div class="card-body">
			<a href="{{url('admin/employee/manage-employee')}}"><button type="button" class="btn btn-gradient-danger btn-fw">Add Employee</button></a>
			<div class="row">
				<div class="col-12">
					<div class="table-responsive">
						<table id="order-listing" class="table">
						  <thead class="table-dark">
							<tr>
							  <th>S.no #</th>
							  <th>Name</th>
							  <th>Company</th>
							  <th>Email</th>
							  <th>Phone</th>
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
							  <td>{{$list->f_name}}&nbsp;{{$list->l_name}}</td>
							  <td>{{$list->companies_id}}</td>
							  <td>{{$list->email}}</td>
							  <td>{{$list->phone}}</td>
							  
							  <td>
							  
							  <a href="{{url('admin/employee/manage-employee/')}}/{{$list->id}}"><button type="button" class="btn btn-inverse-primary"> Edit 
							  	<i class="mdi mdi-file-check btn-icon-append"></i>
							  	</button>
							  </a>

							  <a href="{{url('admin/employee/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-inverse-danger">
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