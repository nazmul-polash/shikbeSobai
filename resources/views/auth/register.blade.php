@extends('layouts.adminlayouts')

@section('body')
    
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name" :value="old('name')" required autofocus>
                </div>

                <div class="form-group">
                    <label for="">Email:</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Enter your Email" :value="old('email')" required >
                </div>

                <div class="form-group">
                    <label for="">Password:</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password">
                </div>

                <div class="form-group">
                    <label for="">Confirm Password:</label>
                    <input id="password_confirmation" name="password_confirmation" required type="password" class="form-control" placeholder="Confirm your password">
                </div>

                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>

            <div class="mg-t-40 tx-center">{{ __('Already registered?') }} <a href="{{ route('login') }}" class="tx-info">Login Here</a></div>
        </div>
    </div><!-- d-flex -->

@endsection