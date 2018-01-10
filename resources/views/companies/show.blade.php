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

                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ $company->name }}</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th>Chave</th>
                                            <th>Valor</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><b>ID</b></td>
                                            <td>{{ $company->id }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>CNPJ</b></td>
                                            <td>{{ $company->cnpj }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <a onclick="window.history.go(-1)" class="btn btn-sm btn-info btn-flat pull-left">Voltar</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

