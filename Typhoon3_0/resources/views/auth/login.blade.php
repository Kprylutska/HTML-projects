<!DOCTYPE html>

<head>

    <title>Tajfun sushi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>

</head>
<body style="background-color:#1d2528">
    <div class="card card-info" style="background-color: #2a363f; margin: 250px 300px">
        <div class="card-header">
          <h3 class="card-title">Login</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label ">{{ __('Email')}}</label>
              <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required autocomplete="email" autofocus name="email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">{{ ('Password')}}</label>
              <div class="col-sm-10">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">{{ ('Remember Me') }}</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">{{ __('Sign in')}}</button>
            @if (Route::has('password.request'))
                <a class="forgot" href="{{ route('password.request') }}">
                    {{ ('Forgot Your Password?') }}
                </a>
            @endif
          <!-- /.card-footer -->
              <a href="{{route('home')}}" class="btn btn-default float-right" style="color: #d8cfcc;">{{ ('Cancel')}}</a>
        </form>
          </div>
          <div style="display: flex; justify-content: center">
              <p>Don't have an account?</p>
              <a style="margin-left: 20px" href="{{ route('register') }}">{{ __('Register') }}</a>
          </div>
      </div>




</body>

