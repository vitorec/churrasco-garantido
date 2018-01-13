{{--{{ dd($products) }}--}}
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
                            <h3 class="box-title">Novo pedido</h3>
                        </div>



                        <form role="form" id="new-order" method="POST" action="/order/new">

                            {{ csrf_field() }}

                            <div class="box-body">

                                <div class="form-group">
                                    <label>Empresa</label>
                                    <select id="company" name="company_id" class="form-control select2 select-company" style="width: 100%;"
                                            data-placeholder="Selecione a empresa" required>
                                    </select>
                                </div>

                                <div class="form-group col-xs-6 no-padding-left">
                                    <label>Produto</label>
                                    <select id="product" class="form-control select2 select-product" data-placeholder="Selecione o produto">
                                        <option></option>
                                        @foreach($products as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block" id="msg-product" style="display: none">Por favor, selecione o produto</span>
                                </div>

                                <div class="form-group col-xs-2">
                                    <label>Qtd</label>
                                    <input id="qtd" type="number" class="form-control" min="1">
                                    <span class="help-block" id="msg-qtd" style="display: none">Informe a quantidade</span>
                                </div>

                                <div class="form-group col-xs-2">
                                    <label>&nbsp;</label>
                                    <button type="button" id="add-button" class="btn btn-info block">Adicionar</button>
                                </div>
                            </div>

                            <div class="box-body">
                                <h3 class="box-title">Lista de compras</h3>
                                <div class="table-responsive">
                                    <table class="table no-margin" id="list">
                                        <thead>
                                        <tr>
                                            <th class="w-50">Produto</th>
                                            <th class="w-20">Qtd</th>
                                            <th class="w-20 text-center">Ação</th>
                                        </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Fechar pedido</button>
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

