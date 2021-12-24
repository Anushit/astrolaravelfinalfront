@extends('admin.layout.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="{{url('/admin')}}"><b>Admin Login</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Login') }}</p>

        <form novalidate="novalidate" id="login" method="POST" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}
            <div class="form-group input-group mb-3">
                <input id="phone" type="text" class="form-control required" placeholder="Email" name="email" value="{{ old('email') }}"  autocomplete="phone" autofocus>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
                 @if ($errors->has('email'))
                  <span class="help-block">
                    <p >{{ $errors->first('email') }}</p>
                </span>
                @endif
               
            </div>
            <div class="form-group input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control required" name="password"  autocomplete="current-password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
            @if ($errors->has('password'))
              <span class="help-block">
                <p >{{ $errors->first('password') }}</p>
              </span>
            @endif
            </div>
          <div class="row">
            <div class="col-8">
              {{--<div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>--}}
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>

        <p class="mb-1">
         <a class="btn btn-link" href="{{ url('/admin/password/reset') }}">
        Forgot Your Password?
        </a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
  $('#login').validate({
    rules: {
      phone: {
        required: true,
        phone: true,
      },
      password: {
        required: true,
        minlength: 8
      },
      terms: {
        required: true
      },
    },
    messages: {
      phone: {
        required: "Please enter a mobile no.",
        phone: "Please enter a vaild mobile no."
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  })
</script>
@endsection
