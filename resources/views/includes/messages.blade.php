@if(Session::has('errors'))
<div class="card alert alert-danger">
    <div class="card-body">
        @foreach($errors->all() as $errors)
            {{$errors}}
        @endforeach
    </div>
</div>
@endif

@if(Session::has('message'))
<div class="card alert alert-success">
    <div class="card-body">
        {{Session::get('message')}}
    </div>
</div>
@endif