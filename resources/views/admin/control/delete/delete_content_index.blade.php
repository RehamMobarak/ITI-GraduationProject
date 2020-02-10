@extends('layouts.app')

@section('content')

<h1 class="career-title">All Contents</h1>


<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-2">
        @if(session()->has('deleteContentmessage'))
        <div class="alert alert-success">
            {{ session()->get('deleteContentmessage') }}
        </div>
        @endif
        <table class="table table-hover table-bordered mb-5">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th> 
                </tr>
            </thead>
            <tbody>

                @foreach($contents as $index => $content)
                <tr>
                    <td>{{$content['content_name']}}</td>
                    <td><a class="btn btn-outline-secondary" href="/delete/content/{{$content['id']}}">DELETE</a></td>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>

<br><br>

@endsection