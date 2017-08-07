<fieldset class="form-group position-relative has-icon-left mb-0 {{ $errors->has('email') ? ' has-warning' : '' }}">
    <input type="email" class="form-control form-control-lg input-lg" id="user-name" placeholder="Your E-mail Address" name='email' value="{{ old('email') }}" required>
    <div class="form-control-position">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
    </div>
</fieldset>
@if ($errors->has('email'))
    <span class="help-block text-warning">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
@endif