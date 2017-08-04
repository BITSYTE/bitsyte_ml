@extends('layouts.base')


@section('body')

  <body data-open="click" data-menu="horizontal-menu" data-col="1-column" class="horizontal-layout horizontal-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content container center-layout mt-2">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
		<div class="card border-grey border-lighten-3 px-2 py-2 m-0">
			<div class="card-header no-border">
				<div class="card-title text-xs-center">
					<img src="../../app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
				</div>
				<h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account</span></h6>
			</div>
			<div class="card-body collapse in">	
				<div class="card-block">
					<form class="form-horizontal form-simple" action="index.html" novalidate>
						<fieldset class="form-group position-relative has-icon-left mb-1">
							<input type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="User Name">
							<div class="form-control-position">
							    <i class="ft-user"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left mb-1">
							<input type="email" class="form-control form-control-lg input-lg" id="user-email" placeholder="Your Email Address" required>
							<div class="form-control-position">
							    <i class="ft-mail"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left">
							<input type="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Enter Password" required>
							<div class="form-control-position">
							    <i class="fa fa-key"></i>
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
					</form>
				</div>
				<p class="text-xs-center">Already have an account ? <a href="{{ url('/home') }}" class="card-link">Login</a></p>
			</div>
		</div>
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

  @endsection