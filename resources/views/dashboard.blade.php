@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper no-margin">
        <!-- Content Header (Page header) -->

        @include('layouts.app-buttons')

        <section class="content-header">
            <h1>
                Dashboard
                {{--<small>Optional description</small>--}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!-------------------------
            | Your Page Content Here |
            -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

