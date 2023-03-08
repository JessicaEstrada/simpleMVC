@extends('dashboard')

@section('content')

    <div class="card">
        <div class="card-body">
            
        <form action="{{url('/admin')}}" method="post">
            {!! csrf_field() !!}
            <label>Flavor</label><br>
            <input type="text" name="flavor" id="text" class="form-control"><br>
            <label>Description</label><br>
            <input type="text" name="desc" id="text" class="form-control"><br>
            <label>Image</label><br>
            <input type="text" name="img" id="text" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
        </div>
    </div>
    
@endsection