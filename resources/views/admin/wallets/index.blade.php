@extends ('layouts.mainblack')

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">Wallets</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}">Dashboard</a></li>
                        {{--@include('layouts.partial.breadcrumbs')--}}
                    </ol>
                </div>
            </div>
        </div>
        {{--<div class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
                <div class="media-left media-middle">
                    <div id="sp-bar-total-sales"></div>
                </div>
                <div class="media-body media-right text-xs-right">
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Balance</span>
                </div>
            </div>
        </div>--}}
    </div>
@endsection

@section('content')
    <div class="row match-height">

        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
            <div class="card">
                <span>hola</span>
            </div>
        </div>
        <div id="description" class=" col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tooltip Triggers</h4>
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
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>
                            <tr>
                                <td class="width-200">Hover</td>
                                <td class="width-350">
                                    <div class="text-xs-center">
                                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-original-title="Hover Triggered">
                                            On Hover Trigger
                                        </button>
                                    </div>
                                </td>
                                <td>Use <code>data-trigger="hover"</code> for hover trigger. This is a default trigger.</td>
                            </tr>
                            <tr>
                                <td>Click</td>
                                <td>
                                    <div class="text-xs-center">
                                        <button type="button" class="btn btn-success" data-toggle="tooltip" data-original-title="Click Triggered" data-trigger="click">
                                            On Click Trigger
                                        </button>
                                    </div>
                                </td>
                                <td>Use <code>data-trigger="click"</code> for click trigger.</td>
                            </tr>
                            <tr>
                                <td>Focus</td>
                                <td>
                                    <div class="text-xs-center">
                                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-original-title="Focus Triggered" data-trigger="focus">
                                            On Focus Trigger
                                        </button>
                                    </div>
                                </td>
                                <td>Use <code>data-trigger="focus"</code> for focus trigger.</td>
                            </tr>
                            <tr>
                                <td>Manual</td>
                                <td>
                                    <div class="text-xs-center">
                                        <button type="button" class="btn btn-danger manual" data-toggle="tooltip" data-original-title="Manual Triggered" data-trigger="manual">
                                            On Manual Trigger
                                        </button>
                                    </div>
                                </td>
                                <td>Use <code>data-trigger="manual"</code> for manual trigger. You can do show/hide using js</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection