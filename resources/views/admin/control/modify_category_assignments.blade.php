@extends('layouts.app')

@section('content')

<h1 class="career-title mb-5 mt-3">choose the category to delete </h1>

<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-2">
        @if(session()->has('deleteAssignedContentmessage'))
        <div class="alert alert-success">
            {{ session()->get('deleteAssignedContentmessage') }}
        </div>
        @endif
        <table class="table table-hover table-bordered mb-5">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Categories</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($content_names as $index => $ContentName)
                <tr>
                    <td>{{$ContentName}}</td>
                    <td><a class="btn btn-outline-secondary" href="/deleteCategoryContent/{{$index}}">DELETE</a></td>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>

<br><br>
@endsection