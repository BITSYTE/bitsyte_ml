@extends('layouts.base')


@section('body')
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1">
    <div class="card-header bg-transparent no-border pb-0">
        <h2 class="error-code text-xs-center mb-2">404</h2>
        <h3 class="text-uppercase text-xs-center">Page Not Found !</h3>
    </div>
    <div class="card-body collapse in">
        <fieldset class="row py-2">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control form-control-lg input-lg border-grey border-lighten-1" placeholder="Search..." aria-describedby="button-addon2">
                <span class="input-group-btn" id="button-addon2">
					<button class="btn btn-lg btn-secondary border-grey border-lighten-1" type="button"><i class="ft-search"></i></button>
				</span>
            </div>
        </fieldset>
        <div class="row py-2">
            <div class="col-xs-12 ">
                <a href="{{ url('/home') }}" class="btn btn-primary btn-block font-small-3"><i class="ft-home"></i> Back to Home</a>
            </div>
            
            </div>
        </div>
        <div class="card-footer bg-transparent pb-0">
            <div class="row">
                <p class="text-muted text-xs-center col-xs-12 py-1">© 2016 by <a href="http://themeforest.net/user/pixinvent/portfolio" target="_blank">BitSyteT</a></p>
                
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

 @endsection