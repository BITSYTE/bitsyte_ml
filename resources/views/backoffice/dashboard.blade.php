@extends('layouts.dashboard')

@section('content')

    <section id="description" class="card">
        <h1>Dashboard</h1>
        <div class="card-header">
            <h4 class="card-title">Description</h4>
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
    </section>

@endsection
