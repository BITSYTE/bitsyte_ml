@extends('layouts.main')

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">Wallets</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
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
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row match-height">
    <div class=" col-sm-4 col-xl-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">My Wallets</h4>
                {{--<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>--}}
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body px-1">
                <div id="recent-buyers" class="list-group height-300 position-relative">
                    <a href="{{ route('wallet.show') }}" class="list-group-item list-group-item-action media no-border " >
                        <div class="media-left ">
                            <div class="">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        {{--<div class="media-left">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{ asset('backoffice/images/paquete oro.png') }}" alt="Generic placeholder image">
                            --}}{{--<i></i>--}}{{--
                            </span>
                        </div>--}}
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">
                                <span class="font-medium-3">Kristopher Candy</span> <span class="font-medium-4 ">$1,021</span>
                            </h6>
                            {{--<p class="list-group-item-text"><span class="tag tag-primary">Electronics</span><span class="tag tag-warning ml-1">Decor</span></p>--}}
                        </div>
                    </a>
                    <a href="{{ route('wallet.show') }}" class="list-group-item list-group-item-action media no-border " >
                        <div class="media-left ">
                            <div class="">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">
                                <span class="font-medium-3">Lawrence Fowler   </span> <span class="font-medium-4 ">$2,021</span>
                            </h6>
                        </div>
                    </a>

                    <a href="{{ route('wallet.show') }}" class="list-group-item list-group-item-action media no-border ">
                        <div class="media-left ">
                            <div class="">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">Roy Clark <span class="font-medium-4 ">$2,815</span></h6>
                        </div>
                    </a>
                    <a href="{{ route('wallet.show') }}" class="list-group-item list-group-item-action media no-border ">
                        <div class="media-left ">
                            <div class="">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">Roy Clark <span class="font-medium-4 ">$2,815</span></h6>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div id="description" class=" col-sm-8 ">
        <div class="card">

        </div>
    </div>
</div>

@endsection
