@if ($message = Session::get('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Success! </strong>{{ $message }}
		<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif
@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Oppss.. </strong>{{ $message }}
		<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif