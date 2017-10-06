@extends ('layouts.login')

@section('content')
    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
        <span>Login to BitSyte</span>
    </h6>
    <div class="card-body collapse in">
        <div class="card-block">
            <form class="form-horizontal form-simple" method="post" action="{{route('login')}}"
                  novalidate>
                {{ csrf_field() }}

                @if (env('APP_LOGIN_WITH') == 'email')
                    @include('auth.partial.email')
                @else
                    @include('auth.partial.username')
                @endif

                <fieldset class="form-group position-relative has-icon-left
                                        {{ $errors->has('password') ? ' has-warning' : '' }}">
                    <input type="password" class="form-control form-control-lg input-lg"
                           id="password" name="password" value="{{old('password')}}"
                           placeholder="Enter Password" required>
                    <div class="form-control-position">
                        <i class="fa fa-key"></i>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block text-warning">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </fieldset>

                <fieldset class="form-group row">
                    <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                        <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>
                        </fieldset>
                    </div>
                    <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a
                                href="{{ route('password.request') }}" class="card-link">Forgot
                            Password?</a></div>
                </fieldset>
                <button type="submit" class="btn btn-blue btn-lg btn-block"><i
                            class="ft-unlock"></i> Login
                </button>
            </form>
        </div>
    </div>
    <div class="card-footer">
        <div class="">

        </div>
    </div>
@endsection