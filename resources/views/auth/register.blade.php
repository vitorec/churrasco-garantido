@extends('layouts.login-master')

@section('login-content')

    <h4 class="text-center">Novo Cadastro</h4>
    <hr>

    <form action="{{ route('register') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
            <span class="glyphicon glyphicon- form-control-feedback"></span>

            @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password" placeholder="Senha" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Repetir Senha" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <div class="row">
            <div class="col-xs-4">
                <a href="/login" class="btn btn-danger btn-block btn-flat">Cancelar</a>
            </div>

            <div class="col-xs-4 pull-right">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
            </div>
        </div>
    </form>

@endsection

