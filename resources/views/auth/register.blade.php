{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


    
@extends('../backend/layouts/templatelogin')
<link href="assets/css/regis.css" rel="stylesheet">
@section('content')

<section id="sec-login1">
    <div class="container">
        <div class="box-b-login">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="img-img-log">
                            <img src="assets/img/login/ln1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4">

                        <div class="b-box-big">
                            <div class="t-text-s">
                                <p>
                                    Strictly Necessary Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new1">
                            </div>
                            <div class="ko-text-t">
                                <p>
                                    ข้อตกลง / เงื่อนไข
                                </p>
                            </div>
                            <div class="b-text-t-b">
                                <div class="d-detail">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. </p>
                                </div>
                            </div>
                            <div class="t-text-s2">
                                <div class="s-switch2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <p>
                                    Aceept/Reject
                                </p>
                            </div>
                            <div class="t-text-s3">
                                <p>
                                    Strictly Necessary Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch3">
                                    <p>
                                        Always accept
                                    </p>
                                </div>
                                <hr class="new3">
                            </div>
                            <div class="t-text-s4">
                                <p>
                                    Analytics Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new4">
                            </div>
                            <div class="d-detail2">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It
                                    has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. </p>
                            </div>
                            <div class="t-text-s5">
                                <p>
                                    Functional Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new5">
                            </div>
                            <div class="t-text-s6">
                                <p>
                                    Targeting Cookies &nbsp;&nbsp; <i class='fas fa-angle-down'></i>
                                </p>
                                <div class="s-switch5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                    </div>
                                </div>
                                <hr class="new5">
                            </div>
                        </div>
                        <br>
                        <div class='but-bb-log'>
                            <a href="{{route('register.otp')}}">
                                <button type="button" class="button button1"> ยอมรับข้อตกลง & เงื่อนไข &nbsp; <i class='fas fa-angle-right'></i> </button>
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