@extends('layouts.main-homepage')

@section('main.authentication')
    <main class="authentication">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="content-authentication">
                        <h1 class="title">Login</h1>
                        <form class="form">
                            <div class="input-group">
                                <input type="email" id="email">
                                <label for="email d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/email.svg') }}" alt="Email Icon">
                                    <span>Enter your email</span>
                                </label>
                            </div>
                            <div class="input-group">
                                <input type="email" id="email">
                                <label for="email d-flex align-items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/email.svg') }}" alt="Email Icon">
                                    <span>Enter your email</span>
                                </label>
                            </div>
                            <button type="submit">
                                <span>Login account</span>
                                <img src="{{ asset('assets/images/icons/arrow-light.svg') }}" alt="Arrow Button Light">
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-6 p-0 d-flex align-items-center">
                    <img src="{{ asset('assets/images/banners/banner-login.jpg') }}" alt="Login Banner" class="img-fluid banner-login">
                </div>
            </div>
        </div>
    </main>
@endsection