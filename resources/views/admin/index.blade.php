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
					<table class="table table-responsive table-hover">
						<thead>
							<tr>
								<th>Image Camps</th>
								<th>Camps</th>
								<th>User Image</th>
								<th>Username</th>
								<th>Price</th>
								<th>Status Payment</th>
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
												@if ($checkout->User->avatar =='')
												<img src="https://ui-avatars.com/api/?name=Admin" class="user-photo" style="border-radius: 50%">
												@else
												<img src="{{ $checkout->User->avatar }}" class="user-photo" alt="" style="border-radius: 50%; background-color:darkgrey;" width="30%">
												@endif
											</td>
											<td>{{ $checkout->User->name }}</td>
											<td>
													<strong>Rp. {{ number_format($checkout->total,0,',','.') }}</strong>
													@if ($checkout->discount_id)
															<span class="badge bg-primary">Disc {{ $checkout->discount_percentage }}%</span>
													@endif
											</td>
											<td>
												@if ($checkout->payment_status == 'paid')
												<strong class="text-success">Payment Success</strong>
												@elseif($checkout->payment_status == 'failed')
												<strong class="text-danger">Payment Failed</strong>
												@else
												<strong class="text-warning">Waiting for Payment</strong>
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