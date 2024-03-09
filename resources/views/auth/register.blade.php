@extends('layouts.css')

@section('title', 'Sign-up')

@section('css')
@endsection

@section('style')
@endsection

<link rel="icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<title>Register</title>

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
                       <form method="POST" action="{{ route('register') }}" class="theme-form">
                          @csrf
                          <div class="text-center">
                          <h4 style="font-weight: 900px">Create your account</h4>
                          <p>Enter your personal details to create account</p>
                          </div>
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                    
                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    
                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="text-center mt-4">
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                            <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</x-guest-layout>
