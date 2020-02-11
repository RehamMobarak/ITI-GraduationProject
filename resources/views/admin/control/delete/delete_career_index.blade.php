@extends('layouts.app')

@section('content')

<h1 class="career-title">All Careers</h1>


<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-2">
        @if(session()->has('deleteCareermessage'))
        <div class="alert alert-success">
            {{ session()->get('deleteCareermessage') }}
        </div>
        @endif
        <table class="table table-hover table-bordered mb-5">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Career</th>
                    <th scope="col">Actions</th> 
                </tr>
            </thead>
            <tbody>

                @foreach($jobs as $index => $job)
                <tr>
                    <td>{{$job['job_name']}}</td>
                    <td><a class="btn btn-outline-secondary" href="/delete/career/{{$job['id']}}" onclick="return confirm('Are you sure?')" >DELETE</a></td>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>

<br><br>

@endsection