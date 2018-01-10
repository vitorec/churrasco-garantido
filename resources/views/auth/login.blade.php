@extends('layouts.login-master')

@section('login-content')

    <h4 class="text-center">Efetue seu login para acessar o sistema</h4>
    <hr>

    <form action="{{ route('login') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

            @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password" placeholder="Senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif

            <a href="{{ route('password.request') }}">Esqueci minha senha</a><br>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <a href="/register" class="btn btn-success btn-block btn-flat">Nova conta</a>
            </div>

            <div class="col-xs-4 pull-right">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
        </div>
    </form>

@endsection

