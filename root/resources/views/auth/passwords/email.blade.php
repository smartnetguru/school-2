@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <section class="body-sign">
        <div class="center-sign">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{ action('PageController@index') }}" class="logo pull-left">
                <img src="{{ asset('root/resources/assets/images/logo.png') }}" height="55" alt="LOGO"/>
            </a>
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                        <p class="m-none text-semibold h6">Enter your e-mail below and we will send you reset link!</p>
                    </div>
                    <form role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-none">
                            <div class="input-group">
                                <input type="email" placeholder="E-mail address" class="form-control input-lg" name="email" value="{{ old('email') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-lg" type="submit">Send!</button>
                                </span>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <p class="text-center mt-lg">Remembered? <a href="{{ URL('/login') }}">Sign In!</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
