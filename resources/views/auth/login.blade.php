@extends('layout.app')

@section('body')
    <body>
        <div class="www-layout">
            <section>
                <div class="gap no-gap signin whitish medium-opacity">
                    <div class="bg-image" style="background-image:url(images/resources/theme-bg.jpg)"></div>
                    <div class="container">
                        <div class="row">
                            @include('partials.auth_side_content')
                            <div class="col-lg-4">
                                <div class="we-login-register">
                                    <div class="form-title">
                                        <i class="fa fa-key"></i>{{__("login")}}
                                        <span>{{__("sign in now and meet the awesome Friends around the world.")}}</span>
                                    </div>
                                    <form class="we-form" method="post">
                                        @csrf
                                        <input type="text" name="email" placeholder="{{__('Email')}}" class="@error('email') is-invalid @enderror form-control">
                                        <input type="password" name="password" placeholder="{{__('Password')}}" class="@error('password') is-invalid @enderror form-control">
                                        <input type="checkbox"><label>{{__("remember me")}}</label>
                                        <button type="submit" data-ripple="">{{__("sign in")}}</button>
                                        <a class="forgot underline" href="#" title="">{{__("forgot password?")}}</a>
                                    </form>
                                    <a class="with-smedia facebook" href="#" title="" data-ripple=""><i class="fa fa-facebook"></i></a>
                                    <a class="with-smedia twitter" href="#" title="" data-ripple=""><i class="fa fa-twitter"></i></a>
                                    <a class="with-smedia instagram" href="#" title="" data-ripple=""><i class="fa fa-instagram"></i></a>
                                    <a class="with-smedia google" href="#" title="" data-ripple=""><i class="fa fa-google-plus"></i></a>
                                    <span>{{__("don't have an account?")}} <a class="we-account underline" href="/register" title="">{{__("register now")}}</a></span>
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