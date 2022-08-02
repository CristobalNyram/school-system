@extends('layouts.login')
@section('title',"Login - DVTECAM")

@section('content')
  <header class="header-login">
  	<center>
   
    </center>
  </header>

<section class="login p-fixed d-flex text-center">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" name="user" action="{{ route('login') }}" method="POST">
						@csrf
						<h3 class="text-center text-uppercase">
							Ingreso al personal de la institución
						</h3>
						@error('user')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="row">
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="text" class="md-form-control" name="user" value="{{ old('user') }}" required="required"/>
									<label>Usuario</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" name="password" required="required"/>
									<label>Contraseña</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">INGRESAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection