@extends('layouts.app')

@section('content')

    <section class="body-sign">
        <div class="center-sign">
            <a href="{{ action('PageController@index') }}" class="logo pull-left">
                <img src="{{ asset('root/resources/assets/images/logo.png') }}" height="55" alt="LOGO"/>
            </a>
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Reset Password</h2>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="token" value="{{ $token }}">

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} mb-lg">
                            <label>Confirm Password</label>
                            <div class="input-group input-group-icon">
                                <input type="password" class="form-control input-lg" name="password_confirmation">
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary hidden-xs">Reset Password</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Reset Password</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
