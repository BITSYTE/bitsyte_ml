@extends('layouts.main')

@section('head')

@endsection

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">Payment</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        {{--                        @include('layouts.partial.breadcrumbs')--}}
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
                <div class="media-left media-middle">
                    <div id="sp-bar-total-sales"></div>
                </div>
                <div class="media-body media-right text-xs-right">
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section id="register" class="card col-md-6 offset-md-3">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> My info</h4>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Fist Name</label>
                                                <input type="text" id="first_name" class="form-control border-primary"
                                                       placeholder="Fist Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" id="last_name" class="form-control border-primary"
                                                       placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput5">Email</label>
                                        <input class="form-control border-primary" type="email" placeholder="Email"
                                               name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput5">Postal Code</label>
                                        <input class="form-control border-primary" type="email" placeholder="Postal Code"
                                               name="cp" id="cp">
                                    </div>

                                    <h4 class="form-section"><i class="ft-mail"></i> Billing Details </h4>

                                    <div class="form-group">
                                        <label for="userinput5">Number Credit Card</label>
                                        <input class="form-control border-primary" placeholder="Number Credit"
                                               name="numbercredit" id="numbercredit">
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput5">CVV</label>
                                        <input class="form-control border-primary" placeholder="CVV"
                                               name="cvv" id="cvv">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 no-padding">
                                            <label for="username">Expiration Date</label>
                                        </div>
                                        <div class="col-md-6 " style="padding-left: 0px">
                                            <input type="number" id="day" class="form-control border-primary"
                                                   name="day">
                                        </div>
                                        <div class="col-md-6 " style="padding-right: 0px">
                                            <input type="date" id="year" class="form-control" name="year"
                                                   data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                   data-title="birthday" style="float: right">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Submit Payment <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')

@endsection
