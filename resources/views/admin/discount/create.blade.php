@extends('layouts.app')
@section('content')
<section class="checkout">
	<div class="container">
		<a href="{{ route('admin.discount.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</a>
			<div class="row text-center pb-70">
					<div class="col-lg-12 col-12 header-wrap">
							<p class="story">
									Discount
							</p>
							<h2 class="primary-header">
									Insert New Discount
							</h2>
					</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-9 col-12">
							<div class="row">
									<div class="col-lg-5 col-12">
											<div class="item-bootcamp">
													<img src="{{ asset('images/step1.png') }}" alt="create_discount" class="cover" width="50%">
													<h1 class="package text-uppercase">
															Create Discount
													</h1>
													<p class="description">
															Tambah diskon untuk camp tertentu agar semua pengguna menikmati promo ini.
													</p>
											</div>
									</div>
									<div class="col-lg-1 col-12"></div>
									<div class="col-lg-6 col-12">
											<form action="{{ route('admin.discount.store') }}" class="basic-form" method="POST">
												@csrf
													<div class="mb-4">
															<label class="form-label">Name</label>
															<input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{old('name')}}" placeholder="Masukan Nama Discount" required/>
														@if ($errors->has('name'))
															<p class="text-danger">{{ $errors->first('name') }}</p>
														@endif
													</div>
													<div class="mb-4">
															<label class="form-label">Code</label>
															<input type="text" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" name="code" value="{{old('code')}}" placeholder="Masukan Code" required/>
															@if ($errors->has('code'))
															<p class="text-danger">{{ $errors->first('code') }}</p>
														@endif
													</div>
													<div class="mb-4">
															<label class="form-label">Description</label>
															<textarea name="description" id="" cols="0" rows="2" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" style="border-radius:10px;" placeholder="Masukan Deskripsi" required >{{old('description')}}</textarea>
															@if ($errors->has('description'))
															<p class="text-danger">{{ $errors->first('description') }}</p>
														@endif
													</div>
													<div class="mb-4">
														<label class="form-label">Discount Percentage</label>
														<input name="percentage" type="number" class="form-control {{$errors->has('percentage') ? 'is-invalid' : ''}}" value="{{old('percentage')}}" min="1" max="100" placeholder="1 - 100 %" required />
														@if ($errors->has('percentage'))
																<p class="text-danger">{{$errors->first('percentage')}}</p>
														@endif
														</div>
													<button type="submit" class="w-100 btn btn-primary">Submit</button>
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>
</section>
@endsection