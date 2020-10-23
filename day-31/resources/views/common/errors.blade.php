@if (count($errors) > 0) 
    @foreach ($errors->all() as $error)
        <h4 class="alert alert-danger">{{ $error }}</h4>
    @endforeach
@endif