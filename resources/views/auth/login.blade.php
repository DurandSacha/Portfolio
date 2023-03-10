<!-- resources/views/auth/login.blade.php -->
<head>
    <!-- Link -->
    <link rel="stylesheet" href="/css/global.css" type="text/css">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{mix('css/app.css') }}" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <!-- Fonts -->


    <title>Sacha Durand</title>
</head>
<body class="m-0 p-0" style="margin:0px;padding:0px;">
    <div id="bg" style="background-image: url('{{ asset('img/login-bg.jpg') }}'); height:100vh;width:100%;padding:0; margin:0;background-size: cover; background-repeat: no-repeat;">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="flex justify-center align-items w-full pt-60" style="">
                                <div class="p-2 border border-green bg-opacity-25 backdrop-filter backdrop-blur-lg rounded-lg w-1/4 text-center bg-white bg-opacity-05">
                                    <form method="POST" action="{{ route('checkLogin') }}" class="p-8" style="">
                                        @csrf
                            
                                        <div class="form-group m-2">
                                            <label for="email">Email :</label>
                                            <input id="email" type="email" class="border border-blue-300 rounded-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                            
                                        <div class="form-group m-2">
                                            <label for="password">Password :</label>
                                            <input id="password" type="password" class="border border-blue-300 rounded-md @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                            
                                        <div class="form-group m-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            
                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                            
                                        <button type="submit" class="color-white bg-blue-400 p-2 rounded-md">Login</button>
                            
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        @endif
                            
                                        @if($errors->any())
                                            <div class="text-red-400 mt-4">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                                
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>