@include('includes.head')
<body class="login-pg">
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('login') }}" class="form-signin">
            @csrf
            <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="100%">
            <h1 class="h3 mb-3 font-weight-normal">Авторизуйтеся</h1>
            <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
            <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
            <label for="inputPassword" class="sr-only">{{ __('Password') }}</label>
            <input type="password" id="inputPassword"
                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"
                   name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox"
                           value="remember-me" {{ old('remember') ? 'checked' : '' }}> {{ __('Запамятати?') }}
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Вхід') }}</button>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Забули пароль?') }}
            </a>
        </form>
    </div>
</div>

