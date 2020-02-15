@extends('layouts.app')

@section('content')

<h1 class="text-center m-5">{{$categories->category_name}} contents</h1>
<div class="row no-gutters ">
    @foreach($contents as $index => $value)
    <div class="card m-4" style="max-width: 400px;">

        <div class="row no-gutters">

            <div class="col-md-4">
                <img src="{{$value['image']}}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{$value['content_name']}}</h5>
                    <p>{{$value['description']}}</p>
                    <a href="{{route('contents.view',['content' => $value['id'] ])}}"
                        class="btn btn-outline-primary btn-lg">View</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<br><br><br>
@endsection