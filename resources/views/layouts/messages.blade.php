@if($flash = session('success'))
    <div class="alert alert-success alert alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4 class="no-margin"><i class="icon fa fa-check"></i> {{ $flash }}</h4>
    </div>
@endif