@extends('layouts.app')

@section('content')
<div class="row m-auto no-gutters">

<div class="col-6">
        <form method="POST" action="/mindmap/control/store" enctype="multipart/form-data">
            @csrf
            <fieldset class="add-career ">
                <legend>Mindmap:</legend>
                <p>Mindmap Name:</p> <input name="name" type="text"  required><br><br>
                <p>Mindmap image:</p> <input name="image" type="file" required><br><br>
                <input type="submit" class="btn btn-info " value="Add">
            </fieldset>
    
        </form>
    </div>
</div>
<br><br>

@endsection
