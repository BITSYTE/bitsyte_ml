@extends ('layouts.login')

@section('content')
    <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
        <span>Change your BitSyte password</span>
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

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection