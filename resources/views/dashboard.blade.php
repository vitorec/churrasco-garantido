@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper no-margin">
        <!-- Content Header (Page header) -->

        @include('layouts.menu')

        <section class="content-header">
            <h1>
                Dashboard
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">

                    @include('layouts.messages')

                    <div class="box">
                        <div id="data"></div>
                        <div class="box-header">
                            <h3 class="box-title">Minhas empresas</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="companies" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome fantasia</th>
                                        <th>CNPJ</th>
                                        <th>Qtd de pedidos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

