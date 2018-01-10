<div class="row">
    <div class="col-md-12">
        <!-- Application buttons -->
        <div class="box">
            <div class="box-body text-center">
                <a class="btn btn-app" href="/dashboard">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>

                <a class="btn btn-app" href="/company/new">
                    <i class="fa fa-building"></i> Cadastrar nova empresa
                </a>

                <a class="btn btn-app" href="/order/new">
                    <i class="fa fa-inbox"></i> Novo pedido
                </a>

                <a class="btn btn-app"  href="/profile">
                    <i class="fa fa-user"></i> Minha conta
                </a>

                <a class="btn btn-app" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>