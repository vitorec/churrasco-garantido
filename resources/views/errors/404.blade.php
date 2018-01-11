@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper no-margin">

        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-yellow"> {{ $exception->getStatusCode() }}</h2>

                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i> Página não encontrada.</h3>

                    <h4>
                        A página que você está tentando acessar não foi encontrada.
                    </h4>

                    <div class="input-group-btn">
                        <a href="/dashboard" class="btn btn-info btn-flat"><i class="fa fa-arrow-left"></i> Voltar para homepage</a>
                    </div>

                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

