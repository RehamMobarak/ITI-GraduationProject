@extends('layouts.app')

@section('content')
<div class="row m-auto no-gutters">
<div class="col-6">
        <form method="POST" action="/mindmap/control/update/{{$mindmap['id']}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <fieldset class="add-career ">
                <legend>Mindmap:</legend>
                <p>Mindmap Name:</p> <input name="name" type="text"  value ="{{$mindmap['name']}}" required><br><br>
                <p>Mindmap image:</p> <input name="image" type="file" ><br><br>
                <input type="submit" class="btn btn-info " value="Edit">
            </fieldset>
    
        </form>
    </div>
</div>

@endsection
