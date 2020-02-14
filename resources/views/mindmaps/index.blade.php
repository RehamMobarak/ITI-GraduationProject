@extends('layouts.app')

@section('content')
<h1 class="career-title">All Mindmaps</h1>
 

  <div class="row">
    <div class="col text-center pt-5 pb-1">
    <a href="/mindmap/control/add" class="btn btn-success btn-lg">Add Mindmap</a>
    </div>
  </div>


<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-1">
        @if(session()->has('deleteMindmapmessage'))
        <div class="alert alert-danger">
            {{ session()->get('deleteMindmapmessage') }}
        </div>
        @endif
        
        @if(session()->has('UpdateMindmapMsg'))
        <div class="alert alert-success">
            {{ session()->get('UpdateMindmapMsg') }}
        </div>
        @endif

        @if(session()->has('AddMindmapMsg'))
        <div class="alert alert-success">
            {{ session()->get('AddMindmapMsg') }}
        </div>
        @endif

        <table class="table table-hover table-bordered mb-5">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Mindmap</th>
                    <th scope="col">Actions</th> 
                </tr>
            </thead>
            <tbody>

                @foreach($mindmaps as $index => $mindmap)
                <tr>
                    <td>{{$mindmap['name']}}</td>
                    <td><a class="btn btn-outline-secondary" href="/mindmap/control/edit/{{$mindmap['id']}}" >Edit</a>
                    <a class="btn btn-outline-secondary" href="/mindmap/control/delete/{{$mindmap['id']}}" onclick="return confirm('Are you sure?')" >DELETE</a></td>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>

<br><br>

@endsection