@extends('layouts.app')

@section('content')

<h1 class="career-title mb-5 mt-3">choose the category to delete </h1>

<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-2">
        @if(session()->has('deleteAssignedCategorymessage'))
        <div class="alert alert-success">
            {{ session()->get('deleteAssignedCategorymessage') }}
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

                @foreach($category_names as $index => $CategoryName)
                <tr>
                    <td>{{$CategoryName}}</td>
                    <td><a class="btn btn-outline-secondary" href="/deleteCareerCategory/{{$index}}">DELETE</a></td>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>

<br><br>
@endsection