@if(count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissable fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    <p>{{ $error }}</p>
    
</div>
@endforeach
@endif

@if (session('success'))
<div class="alert alert-success alert-dismissable fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <p>{{ session('success') }}</p>
    
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissable fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    <p>{{ session('error') }}</p>
    
</div>
@endif