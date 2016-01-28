@extends('layouts.app')

@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <a href="{{ action('PageController@index') }}" class="logo pull-left">
                <img src="{{ asset('root/resources/assets/images/logo.png') }}" height="55" alt="LOGO"/>
            </a>
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none">Sign in</h2>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg">
                            <label>E-Mail Address</label>

                            <div class="input-group input-group-icon">
                                <input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}">
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                            </div>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-lg">
                            <label>Password</label>
                            <a href="{{ URL('/password/reset') }}" class="pull-right">Lost Password?</a>

                            <div class="input-group input-group-icon">
                                <input type="password" class="form-control input-lg" name="password">
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" type="checkbox" name="remember">
                                    <label>Remember Me</label>
                                </div>
                            </div>

                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary hidden-xs">Login</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. All Rights Reserved.</p>
        </div>
    </section>
@endsection
