@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
	<div class="container">
			<div class="row text-left">
					<div class=" col-lg-12 col-12 header-wrap mt-4">
							<p class="story">
									DASHBOARD ADMIN
							</p>
							<h2 class="primary-header ">
									Discount Camp
							</h2>
					</div>
			</div>
			<div class="row mb-3">
					<div class="col-md-12 d-flex flex-row-reverse">
							<a href="{{route('admin.discount.create')}}" class="btn btn-primary btn-sm">Add Discount</a>
					</div>
			</div>
			@include('components.alert')
			<table class="table table-responsive table-hover">
					<thead>
							<tr>
									<th>Name</th>
									<th>Code</th>
									<th>Description</th>
									<th>Percentage</th>
									<th colspan="2">Action</th>
							</tr>
					</thead>
					<tbody>
							@forelse ($discounts as $discount)
									<tr>
											<td>{{$discount->name}}</td>
											<td>
													<span class="badge bg-primary">{{$discount->code}}</span>
											</td>
											<td>{{$discount->description}}</td>
											<td>{{$discount->percentage}}%</td>
											<td class="text-center">
												<a href="{{route('admin.discount.edit', $discount->id)}}" class="btn btn-warning" style="float: left; margin-right:10px;">Edit</a>
												<form action="{{route('admin.discount.destroy', $discount->id)}}" method="post">
													@csrf
													@method('DELETE')
													<button class="btn btn-danger" style="float: left;">Delete</button>
												</form>
											</td>
									</tr>
							@empty
									<tr>
											<td colspan="6">No discount created</td>
									</tr>
							@endforelse
					</tbody>
			</table>
			</div>
	</div>
</section>
@endsection