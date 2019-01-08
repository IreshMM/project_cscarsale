<div class="modal fade popup-form" id="SignIn" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Sign In</h4>
            <form class="rd-mailform"  data-form-output="form-output-global" data-form-type="forms" method="POST" action="{{ route('login') }}">
                @csrf
            <div class="row row-fix">
                <div class="col-sm-12">
                <div class="form-group form-wrap"><label for="singInName" >Your Email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="singInName" name="email"   data-constraints='@Required' value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
                <div class="col-sm-12">
                <div class="form-group form-wrap">
                    <label for="password">Password</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password"  data-constraints='@Required'>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
            </div>

            <button type="submit" class="btn-default btn-form2-submit">Login</button>
            </form>
        </div>
        
        </div>
    </div>
</div>