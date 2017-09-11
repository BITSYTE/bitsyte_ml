@extends('layouts.main')

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">My Wallets</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        @include('layouts.partial.breadcrumbs')
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
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Balance</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row match-height">

    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
        <div class="card">
            @include('wallet.partials.selectWallets')
            @include('wallet.partials.wallets')
        </div>
    </div>
    <div id="description" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
        <div class="card">

        </div>
    </div>
</div>

@endsection
