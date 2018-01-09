@extends('layouts.login-master')

@section('login-content')

    <h4 class="text-center">Redefinir Senha</h4>
    <hr>

    @if (session('status'))
        <div class="callout callout-success">
            <p> {{ session('status') }}</p>
        </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar link de redefinição de senha</button>
            </div>
        </div>
    </form>

@endsection

