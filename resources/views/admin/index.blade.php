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
									Bootcamps All Users
							</h2>
					</div>
			</div>
			<div class="row my-5">
				@include('components.alert')
					<table class="table">
						<thead>
							<tr>
								<th>Image Camps</th>
								<th>Camps</th>
								<th>User Image</th>
								<th>Username</th>
								<th>Price</th>
								<th>Status Payment</th>
								<th>Action</th>
							</tr>
						</thead>
							<tbody>
									@forelse ($checkouts as $checkout)
										<tr class="align-middle">
											<td width="18%">
													<img src="{{ asset('images/item_bootcamp.png') }}" height="90" alt="camp-image">
											</td>
											<td>
													<p class="mb-2">
															<strong>{{ $checkout->Camp->title }}</strong>
													</p>
													<p>
															{{ $checkout->created_at->format('M d, Y') }}
													</p>
											</td>
											<td>
												@if (Auth::user()->avatar)
												<img src="{{ Auth::user()->avatar }}" class="user-photo" alt="" style="border-radius: 50%">
												@else
												<img src="https://ui-avatars.com/api/?name=Admin" class="user-photo" style="border-radius: 50%">
												@endif
											</td>
											<td>{{ $checkout->User->name }}</td>
											<td>
													<strong>${{ $checkout->Camp->price }}k</strong>
											</td>
											<td>
													@if ($checkout->is_paid)
													<strong class="text-success">Payment Success</strong>
													@else
													<strong class="text-warning">Waiting for Payment</strong>
													@endif
											</td>
											<td>
													@if (!$checkout->is_paid)
													<form action="{{ route('admin.checkout.update',$checkout->id) }}" method="post">
															@csrf
															<button class="btn btn-primary">Set to Paid</button>
														</form>
														@else
														<button class="btn btn-thirdty disabled">Paid</button>
													@endif
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="7">
												<h3>No camps registered</h3>
											</td>
										</tr>
									@endforelse
							</tbody>
					</table>
			</div>
	</div>
</section>
@endsection