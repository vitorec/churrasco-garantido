@extends('layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper no-margin">

    @include('layouts.menu')

    <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">

                    @include('layouts.messages')

                    <div class="box box-info">

                        <div class="box-header with-border">
                            <h3 class="box-title">Minha conta</h3>
                        </div>

                        <form role="form" id="profile" method="POST" action="/profile">

                            {{ csrf_field() }}

                            <div class="box-body">

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="name" class="control-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="E-mail" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="name" class="control-label">Senha</label>
                                    <input type="password" class="form-control" name="password" placeholder="Senha" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="name" class="control-label">Repetir Senha</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Repetir Senha" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="box-footer">
                                <a href="/dashboard" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Alterar dados</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

