@extends('layouts.master')
@section('content')
  
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			<form method="POST" action="{{ route('register') }}">
				@csrf

				<div class="form-group ">
					<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

					<div class="col-md-6">
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group ">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

					<div class="col-md-6">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email2" value="{{ old('email2') }}" required autocomplete="email">

						@error('email2')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group ">
					<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

					<div class="col-md-6">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group ">
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

					<div class="col-md-6">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div>
				</div>

				<div class="form-group ">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-primary">
							{{ __('Register') }}
						</button>
					</div>
				</div>
			</form>
			
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form method="POST" action="{{ route('login') }}">
				@csrf

				<div class="form-group ">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

					<div class="col-md-6">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group ">
					<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

					<div class="col-md-6">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group ">
					<div class="col-md-6 offset-md-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="form-check-label" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>
					</div>
				</div>

				<div class="form-group ">
					<div class="col-md-8 offset-md-4">
						<button type="submit" class="btn btn-primary">
							{{ __('Login') }}
						</button>

						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
@endsection