@for($i=0;$i<count($breadcrumbs);$i++ )
    @if( $i == count($breadcrumbs)-1 )
        <li class="breadcrumb-item active">{{ $breadcrumbs['name'][$i] }}</li>
    @else
        <li class="breadcrumb-item"><a href="/{{$breadcrumbs['route'][$i]}}">{{ $breadcrumbs['name'][$i] }}</a></li>
    @endif
@endfor
