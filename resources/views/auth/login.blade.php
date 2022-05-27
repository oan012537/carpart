{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout> --}}
@extends('../backend/layouts/templatelogin')
<link href="assets/css/login1.css" rel="stylesheet">
@section('content')
<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="assets/img/login/ln1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4">
                        <div class="h-text-log">
                            <p>
                                เข้าสู่ระบบ
                            </p>
                        </div>
                        <div class="tt-text-log">
                            <p>
                                เบอร์มือถือ / อีเมล
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="xxxxx@xxxx.xx" id="email" name="email" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="tt-text-log2">
                            <p>
                                รหัสผ่าน
                            </p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="*************">
                        </div>
                        <div class="t-pass-t">
                            <p>
                                ลืมรหัสผ่าน
                            </p>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            {{-- <a href="login2.php"> --}}
                                <button class="button button1" type="submit"> เข้าสู่ระบบ </button>
                            {{-- </a> --}}
                        </div>
                        <div class="social-log">
                            <img src="assets/img/login/i1.png" class="img-fluid" alt="">
                            &nbsp;
                            <img src="assets/img/login/i2.png" class="img-fluid" alt="">
                            &nbsp;
                            
                            <a href="{{ route('google.login') }}"><img src="assets/img/login/i3.png" class="img-fluid" alt=""></a>
                        </div>
                        <div class="text-or-t">
                            <p>
                                หรือ
                            </p>
                        </div>
                        <div class='but-bb-log2'>
                            <a href="{{ route('register') }}">
                                <button class="button button2" type="button"> สมัครสมาชิก </button>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</section>
@stop

@section('script')
<script>

</script>
@stop
