@extends('layouts.main')

@section('breadcrumbs')
    @include('layouts.partial.breadcrumbs')
@endsection

@section('content')
<div class="row match-height">

    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
        <div class="card">
            @include('wallet.partials.wallets')
        </div>
    </div>
    <div id="description" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
        <div class="card">

        </div>
    </div>
</div>

@endsection
