<div class="content-header row">
    <div class="content-header-left col-md-6 col-xs-12 mb-2">
        <h3 class="content-header-title mb-0">{{ $name }}</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    @for($i=0;$i<count($breadcrumbs);$i++ )
                        @if( $i == count($breadcrumbs)-1 )
                            <li class="breadcrumb-item active">{{ $breadcrumbs['name'][$i] }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="/{{$breadcrumbs['route'][$i]}}">{{ $breadcrumbs['name'][$i] }}</a></li>
                        @endif
                    @endfor
                </ol>
            </div>
        </div>
    </div>
    <div id="bred-graph" class="content-header-right col-md-6 col-xs-12">
        <div class="media width-250 float-xs-right">
            <div class="media-left media-middle">
                <div id="sp-bar-total-sales"></div>
            </div>
            <div class="media-body media-right text-xs-right">
                <h3 class="m-0">${!! auth()->user()->wallets()->sum('balance') !!}</h3><span class="text-muted">Balance</span>
            </div>
        </div>
    </div>
</div>
