<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tajfun sushi</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body style="background-color:#1d2528">
<div class="card card-info" style="background-color: #2a363f; margin: 250px 300px">
        <div class="card-header">
          <h3 class="card-title">Register</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label ">{{ __('Name')}}</label>
              <div class="col-sm-10">
                <input for="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus">
@error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">{{ ('E-mail')}}</label>
              <div class="col-sm-10">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
            </div>
            <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">{{ ('Password') }}</label>
              <div class="col-sm-10">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
            </div>

            <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">{{ ('Confirm Password') }}</label>
              <div class="col-sm-10">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">{{ ('Register')}}</button>
            <a href="{{route('home')}}" class="btn btn-default float-right" style="color: #d8cfcc;">{{ ('Cancel')}}</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>

</body>
