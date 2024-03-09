<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="rkive">
    <link rel="icon" href="{{ asset('assets/images/favicon7.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon7.png') }}" type="image/x-icon">
    <title>Rkive</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    @include('layouts.css')
    <style>
        .right {
            background-color: #dde0fc;
        }

        .left {
            background-color: #312B70;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg fill-opacity='0.99'%3E%3Cpolygon fill='%232c2765' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23272259' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23211d4c' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%231a163b' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%230F0D22' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .left div {
            margin: 20% 10%;
        }

        .card {
            width: 400px;
        }

        @media (max-width: 700px) {
            .card {
                width: 70%;
            }
        }

        #logo {
            height: 100px;
            width: auto;
            margin: 0;
            /* Set initial position */
            transform: translateY(0);
            /* Define the animation */
            animation: mover 2s infinite alternate;
        }

        #mode {
            height: 75px;
            width: auto;
            margin: 0;
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @media (max-width: 576px) {

            /* Small screens (sm) */
            h5 {
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {

            /* Medium screens (md) */
            h4 {
                font-size: 16px;
            }

            .right {
                background-color: #312B70;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg fill-opacity='0.99'%3E%3Cpolygon fill='%232c2765' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23272259' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23211d4c' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%231a163b' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%230F0D22' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
                background-attachment: fixed;
                background-size: cover;
            }
        }
    </style>
</head>

<body
    @if (Route::current()->getName() == 'index') onload="startTime()" @elseif (Route::current()->getName() == 'button-builder') class="button-builder" @endif>
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-body-wrapper">

            <!-- Container-fluid starts-->
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-6 left d-none d-md-block d-sm-none text-white">
                        <div>
                            <img src="{{asset('assets/images/logo/logo-sm.png')}}" alt="" id="logo">
                            <h1>Rkive</h1>
                            <h4 class="d-lg-none">Administrative Solutions</h4>
                            <p>Your administrative needs in one place</p>
                        </div>
                    </div>
                <div class="col p-0 right">
            <div class="login-card">
        <div>
            <div><a class="logo"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" style="height:40px ; width:auto" alt="loginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/rkive.png')}}" style="height:40px ; width:auto" alt="looginpage"></a></div>
               <div class="login-main">
                  <form action="{{ route('login') }}" method="POST" class="theme-form">
                     @csrf
                     <h4>Sign in to account</h4>
                     <p>Enter your email & password to login</p>
                     <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" name="email" required="" value="admin@gmail.com">


                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control" type="password" name="password" required="" value="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />


                        <div></div>
                     </div>
                     <div class="form-group mb-0">
                        <div class="checkbox p-0">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                  </form>
               </div>
            </div>
         </div>
            </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    @include('layouts.script')
</body>

</html>














{{-- @extends('layouts.css')

@section('title', 'Sign-up')

@section('css')
@endsection

@section('style')
@endsection

<link rel="icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">

<x-guest-layout>
    <div style="display: flex; justify-content: center !important;">
        <a class="logo" href="/">
            <img style="" class="img-fluid for-light" src="{{asset('assets/images/logo/logo-sm.png')}}">
        </a>
    </div>
    <div class="container-fluid p-0">
        <div class="row m-0">
           <div class="col-12 p-0">
                <div class="">
                    <div class="login-main">
                       <form method="POST" action="{{ route('login') }}" class="theme-form">
                          @csrf
                          <div class="text-center">
                          <h4 style="font-weight: 900px">Sign in to Account</h4>
                          <p>Enter your email and password to log in</p>
                          </div>

                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email Address')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="admin@gmail.com" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                value="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="text-center mt-4">
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Log in</button>
                            </div>
                                {{-- <p class="mt-4 mb-0"><a class="ms-2" href="{{ route('register') }}">Create account</a></p>
                            </div>
                        </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</x-guest-layout>
 --}}
