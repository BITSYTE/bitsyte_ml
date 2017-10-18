@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/css/plugins/pickers/daterange/daterange.css') }}">
    <style>

    </style>
@endsection

@section('breadcrumbs')
    @include('layouts.partial.breadcrumbs')
@endsection

@section('content')
    <section>
        <div class="row match-height ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">

                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div id="bUsers" style="margin: auto; width: 50%">
                                        <button type="button" class="btn btn-icon btn-secondary "
                                                style="width: 100%; height: 160px">
                                            <span class="icon-transfer"><i class="fa fa-user icon-tam"></i></span>
                                            <span class="icon-transfer"><i class="fa fa-exchange icon-tam"></i></span>
                                            <span class="icon-transfer"><i class="fa fa-user icon-tam"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="bWallets" style="margin: auto; width: 50%">
                                        <button type="button" class="btn btn-icon btn-secondary"
                                                style="width:100%; height:160px">
                                            <span class="icon-transfer"><i class="icon-wallet icon-tam"></i></span>
                                            <span class="icon-transfer"><i class="fa fa-exchange icon-tam"></i></span>
                                            <span class="icon-transfer"><i class="icon-wallet icon-tam"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <form id="users" class="form" action="">

                                <h4 class="form-section"><i class=""></i> Users</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>amount to be transferred</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control"
                                                       placeholder="amount to be transferred"
                                                       aria-label="Amount (to the nearest dollar)" name="amount">
                                                {{--<span class="input-group-addon">.00</span>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Request Token</label>
                                        <div class="input-group">
                                            <button id="token" type="button" class="btn btn-primary bg-blue btn-block"
                                                    style="">
                                                Request Token
                                            </button>
                                            <div id="tokenRequest" class="form-group" style="display: none">
                                                {{--<label for="tokenRequest">token Request</label>--}}
                                                <input id="tokenRequest" class="form-control border-primary"
                                                       value="123456asd654as9d8" name="tokenRequest" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput6">My Wallets</label>
                                                <select id="projectinput6" name="wallets" class="form-control">
                                                    <option value="0" selected="" disabled="">Select a wallet</option>
                                                    @foreach($wallets as $wallet)
                                                        <option value="{!! $wallet->uuid !!}">{!! $wallet->name.' ($ '.number_format($wallet->pivot->balance).') ' !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="col-md-3">
                                                <img src="{{ asset('backoffice/images/circulo1.png') }}"
                                                     style="height: 85px">
                                            </div>
                                            <div class="col-md-9">
                                                <label for="projectinput5">Receiver</label>
                                                <select id="projectinput5" name="interested" class="form-control">
                                                    <option value="none" selected="" disabled="">Receiver</option>
                                                    <option value="design">design</option>
                                                    <option value="development">development</option>
                                                    <option value="illustration">illustration</option>
                                                    <option value="branding">branding</option>
                                                    <option value="video">video</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-actions center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Transfer
                                    </button>
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                </div>
                            </form>

                            <form id="wallets" class="form" action="" style="display: none">
                                <div class="">

                                </div>
                                <h4 class="form-section"><i class=""></i>Wallets</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Wallet from</label>
                                                <select id="projectinput6" name="wallets" class="form-control">
                                                    <option value="0" selected="" disabled="">Select a wallet</option>
                                                    @foreach($wallets as $wallet)
                                                        <option value="{!! $wallet->uuid !!}">{!! $wallet->name.' ($ '.number_format($wallet->pivot->balance).') ' !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <span class="icon-transfer"><i class="fa fa-long-arrow-right icon-tam"></i></span>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control"
                                                       placeholder="amount to be transferred"
                                                       aria-label="Amount (to the nearest dollar)" name="amount">
                                                {{--<span class="input-group-addon">.00</span>--}}
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <span class="icon-transfer"><i class="fa fa-long-arrow-right icon-tam"></i></span>
                                        </div>
                                        <div class="col-md-3">
                                            <label>wallet to</label>
                                            <div class="input-group">
                                                <select id="projectinput6" name="wallets" class="form-control">
                                                    <option value="0" selected="" disabled="">Select a wallet</option>
                                                    @foreach($wallets as $wallet)
                                                        <option value="{!! $wallet->uuid !!}">{!! $wallet->name.' ($ '.number_format($wallet->pivot->balance).') ' !!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Transfer
                                    </button>
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                </div>

                                <h4 class="form-section"></h4>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action"> asd </a>
                        <a href="#" class="list-group-item list-group-item-action"> asd </a>
                        <a href="#" class="list-group-item list-group-item-action"> asd </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script src="{{ asset('backoffice/app-assets/vendors/js/extensions/jquery.steps.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/js/scripts/forms/wizard-steps.js') }}"
            type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            console.log("reaady");
            $('#token').on("click", function () {
                console.log("click token");
                $('#token').hide();
                $('#tokenRequest').show();
            });
            $('#bWallets').on("click", function () {
                console.log("click bwallet");
                $('#wallets').show();
                $('#users').hide();
            });
            $('#bUsers').on("click", function () {
                console.log("click bwallet");
                $('#wallets').hide();
                $('#users').show();
            });

        });

    </script>
@endsection