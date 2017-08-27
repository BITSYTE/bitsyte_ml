@extends('layouts.main')

@section('content')
<div class="row match-height">
    <div class=" col-sm-4 col-xl-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Wallets</h4>
                {{--<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>--}}
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body px-1">
                <div id="recent-buyers" class="list-group height-300 position-relative">
                    <a href="#" class="list-group-item list-group-item-action media no-border list-wallet no-padding" >
                        <div class="media-left fonticon-container-small">
                            <div class="fonticon-wrap2">
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
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-xs-right pt-1">$1,021</span></h6>
                            {{--<p class="list-group-item-text"><span class="tag tag-primary">Electronics</span><span class="tag tag-warning ml-1">Decor</span></p>--}}
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border list-wallet no-padding" >
                        <div class="media-left fonticon-container-small">
                            <div class="fonticon-wrap2">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-xs-right pt-1">$2,021</span></h6>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border list-wallet no-padding" >
                        <div class="media-left fonticon-container-small">
                            <div class="fonticon-wrap2">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-xs-right pt-1">$1,112</span></h6>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action media no-border list-wallet no-padding">
                        <div class="media-left fonticon-container-small">
                            <div class="fonticon-wrap2">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="media-middle-align">
                            <h6 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-xs-right pt-1">$2,815</span></h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="description" class=" col-sm-8 ">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Summary</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <p class="card-text">An example of page header with page title, breadcrumbs, content title and
                        stats.</p>
                    <div class="alert bg-success alert-icon-left mb-2" role="alert">
                        <strong>Experience it!</strong>
                        <p>This page contain breadcrumbs with stats example, check on the top of the page container
                            section.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
