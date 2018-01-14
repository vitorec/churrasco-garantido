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

                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>Meus pedidos</b> - Empresa {{ $company->name }}</h3>
                            </div>

                            <form role="form" id="search-order" method="POST" action="/company/{company}/orders">

                                {{ csrf_field() }}

                                <div class="box-body">

                                    <div class="form-group col-xs-5 no-padding-left">
                                        <label for="cnpj" class="control-label">CNPJ</label>
                                        <input type="text" class="form-control" id="cnpj" name="cnpj" data-inputmask="'mask': '99.999.999/9999-99'">

                                        {{--<span class="help-block" style="display: none">Por favor, informe um CNPJ válido.</span>--}}
                                    </div>

                                    <div class="form-group col-xs-5">
                                        <label for="order" class="control-label">Pedido</label>
                                        <input type="text" class="form-control" id="order" name="order_id">

                                        {{--<span class="help-block" style="display: none">Por favor, informe um CNPJ válido.</span>--}}
                                    </div>

                                    <div class="form-group col-xs-2">
                                        <label>&nbsp;</label>
                                        <button type="button" id="search" class="btn btn-info block">Filtrar</button>
                                    </div>
                                </div>

                            </form>

                            <!-- /.box-header -->
                            <div class="box-body">

                                <div class="table-responsive">
                                    <table class="table no-margin table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Código do pedido</th>
                                            <th class="text-center">Itens do pedido</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr id="order-{{ $order->id }}">
                                                <td class="text-center vertical-middle">{{ $order->id }}</td>

                                                <td class="text-center">
                                                    <ul class="list-unstyled">
                                                        @foreach($order->getProductsList() as $product)
                                                            <li>{{ $product->qtd }}x {{ $product->name }} </li>
                                                        @endforeach
                                                    </ul>
                                                </td>

                                                <td class="text-center vertical-middle">
                                                    <a href="#" class="btn btn-danger btn-xs remove-order" data-id="{{ $order->id }}">Cancelar</a>
                                                </td>
                                            </tr>
                                        @endforeach
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

