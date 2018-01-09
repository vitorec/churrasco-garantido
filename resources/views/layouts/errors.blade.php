@if (count($errors))
    <div class="box-body">
        <div class="alert alert-danger alert-dismissible">
            <h4><i class="icon fa fa-ban"></i> Algo deu errado!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
