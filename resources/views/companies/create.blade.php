@extends('layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper no-margin">

        @include('layouts.menu')

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastro de empresa</h3>
                        </div>

                        <form role="form" id="new-company" method="POST" action="/dashboard">

                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name" class="control-label">Nome fantasia</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome fantasia" required>
                                </div>

                                <div class="form-group validate">
                                    <label for="cnpj" class="control-label">CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" required
                                       data-inputmask="'mask': '99.999.999/9999-99'">
                                    <span class="help-block" style="display: none">Por favor, informe um CNPJ válido.</span>
                                </div>
                            </div>

                            <div class="box-footer">
                                <a href="/dashboard" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
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

