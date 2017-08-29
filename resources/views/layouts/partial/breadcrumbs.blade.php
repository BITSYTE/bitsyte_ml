@for($i=0;$i<count($breadcrumbs);$i++ )
    @if( $i == count($breadcrumbs)-1 )
        <li class="breadcrumb-item active">{{ $breadcrumbs[$i]['name'] }}</li>
    @else
        <li class="breadcrumb-item"><a href="{{$breadcrumbs[$i]['route']}}">{{ $breadcrumbs[$i]['name'] }}</a></li>
    @endif
@endfor
