@extends('layout.app')

@section('body')
    <body>
        <div class="www-layout">
            <section>
                <div class="gap no-gap signin whitish medium-opacity register">
                    <div class="bg-image" style="background-image:url(images/resources/theme-bg.jpg)"></div>
                    <div class="container">
                        <div class="row">
                            @include('partials.auth_side_content')
                            <div class="col-lg-4">
                                <div class="we-login-register">
                                    <div class="form-title">
                                        <i class="fa fa-key"></i>{{__("Sign Up")}}
                                        <span>{{__("Sign Up now and meet the awesome friends around the world.")}}</span>
                                    </div>
                                    <form class="we-form" method="post">
                                        @csrf
                                        <input type="text" placeholder="{{__("Full name")}}" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name') }}">
                                        <input type="text" placeholder="{{__("Email")}}" class="@error('email') is-invalid @enderror form-control" name="email" value="{{ old('email') }}">
                                        <input name="password" type="password" placeholder="{{__("Password")}}" class="@error('password') is-invalid @enderror form-control">
                                        <input name="password_confirmation" type="password" placeholder="{{__("Confirm Password")}}" class="form-control">
                                        <button type="submit" data-ripple="">{{__("Register")}}</button>
                                        <a class="forgot underline" href="#" title="">{{__("forgot password?")}}</a>
                                    </form>
                                    <a data-ripple="" title="" href="#" class="with-smedia facebook"><i class="fa fa-facebook"></i></a>
                                    <a data-ripple="" title="" href="#" class="with-smedia twitter"><i class="fa fa-twitter"></i></a>
                                    <a data-ripple="" title="" href="#" class="with-smedia instagram"><i class="fa fa-instagram"></i></a>
                                    <a data-ripple="" title="" href="#" class="with-smedia google"><i class="fa fa-google-plus"></i></a>
                                    <span>{{__("already have an account?")}} <a class="we-account underline" href="/login" title="">{{__("sign in")}}</a></span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        
            <script src="/js/main.min.js"></script>
            <script src="/js/script.js"></script>
    </body>
@endsection
