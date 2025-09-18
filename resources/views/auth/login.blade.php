<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elabels - Electronic Shelf Label Manufacturer | ESL Australia</title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
    <link href="../layouts/collapsible-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/collapsible-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/collapsible-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="../layouts/collapsible-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />
    
    <link href="../layouts/collapsible-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css" />

</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                        
                    <div class="auth-cover">
    
                        <div class="position-relative">
    
                            <img src="../src/assets/img/auth-cover.svg" alt="auth-img">
    
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert developers</h2>
                            <p class="text-white px-2">It is easy to setup with great customer experience. Start your 7-day free trial</p>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card">
                            <div class="card-body login-card-body">
                                <div class="login-logo">
                                    <img src="{{ url('admin/dist/img/-new-logo.png') }}" alt="Elabels Logo"
                                          width="250px" style="opacity: .8">
                                </div>
                                <p class="login-box-msg">Welcome to Elabels Integration</p>
                                <h4 class="login-box-msg">Sign In</h4>
                    
                                {{-- Show session status (like logout success) --}}
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                    
                                {{-- Show login errors --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                    
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                    
                                    {{-- Email --}}
                                    <label for="email">Email</label>
                                    <div class="input-group mb-3">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autofocus
                                               autocomplete="username" style="border-right:1px solid #ced4da;">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    {{-- Password --}}
                                    <label for="password">Password</label>
                                    <div class="input-group mb-3">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    {{-- Remember Me --}}
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" name="remember" id="remember"
                                                       {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- {{-- Forgot password link --}}
                                    <p class="mb-2 text-right">
                                        <a href="{{ route('password.request') }}"> Forgot Password ?</a>
                                    </p> -->
                    
                                    {{-- Submit button --}}
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block align-items-center"
                                                    style="background-color:#021324c4;">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


           

</body>
</html>
