@extends ('layouts.login')

@section('content')
    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
        <span>We will send you a link to reset password.</span>
    </h6>
    <div class="card-body collapse in">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-block">
            <form class="form-horizontal" action="{{route('password.email')}}" method="post" novalidate>
                {{ csrf_field() }}

                @if(env('APP_LOGIN_WITH') == 'email')
                    @include('auth.passwords.partial.email')
                @else
                    @include('auth.passwords.partial.username_email')
                @endif

                <button type="submit" class="btn btn-outline-primary btn-lg btn-block"><i class="ft-unlock"></i>
                    Recover Password
                </button>
            </form>
        </div>
    </div>
    <div class="card-footer no-border">
        <p class="float-sm-left text-xs-center"><a href="{{ route('login') }}" class="card-link">Login</a></p>
        {{--<p class="float-sm-right text-xs-center">New to BitSite ? <a href="../register/register.html" class="card-link">Create Account</a></p>--}}
    </div>
@endsection