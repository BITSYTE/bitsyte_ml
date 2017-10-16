@extends('layouts.main')

@section('breadcrumbs')
    @include('layouts.partial.breadcrumbs')
@endsection

@section('content')

    <section id="description" class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
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

        </div>
    </section>

@endsection
