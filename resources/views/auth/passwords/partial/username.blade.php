<fieldset class="form-group position-relative has-icon-left{{ $errors->has('username') ? ' has-warning' : '' }}">
    <input type="text" class="form-control form-control-lg input-lg" id="username" placeholder="Your Username" name="username" value="{{old('username')}}" required>
    <div class="form-control-position">
        <i class="ft-user"></i>
    </div>

    @if ($errors->has('username'))
        <span class="help-block text-warning">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
    @endif
</fieldset>