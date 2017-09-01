@extends('layouts.main')

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">New User</h3>
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
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section id="register" class="card">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    {{--<div class="card-header">
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                --}}{{--<li><a data-action="collapse"><i class="ft-minus"></i></a></li>--}}{{--
                                --}}{{--<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>--}}{{--
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                --}}{{--<li><a data-action="close"><i class="ft-x"></i></a></li>--}}{{--
                            </ul>
                        </div>
                    </div>--}}
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> New User</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">Fist Name</label>
                                                <input type="text" id="first_name" class="form-control border-primary"
                                                       placeholder="Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2">Last Name</label>
                                                <input type="text" id="last_name" class="form-control border-primary"
                                                       placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput3">Username</label>
                                                <input type="text" id="username" class="form-control border-primary"
                                                       placeholder="Username" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="issueinput4">Birthday</label>
                                                <input type="date" id="Birthday" class="form-control" name="Birthday" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Birthday">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="form-section"><i class="ft-mail"></i> Contact Info </h4>

                                    <div class="form-group">
                                        <label for="userinput5">Email</label>
                                        <input class="form-control border-primary" type="email" placeholder="email" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="userinput6">Password</label>
                                        <input class="form-control border-primary" type="password" placeholder="password" id="password">
                                    </div>

                                </div>

                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Save
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
