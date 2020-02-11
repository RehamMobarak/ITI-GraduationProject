@extends('layouts.app')

@section('content')
@if(session()->has('replyMsg'))
<div class="alert alert-success">
    {{ session()->get('replyMsg') }}
</div>
@endif
<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-2">
    @if(session()->has('deleteMsg'))
        <div class="alert alert-success">
            {{ session()->get('deleteMsg') }}
        </div>
        @endif
        <table class="table table-hover table-bordered mb-5">

            <thead class="thead-dark ">
                <tr>
                    <th scope="col"> Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($msgs as $index => $msg)
                <tr>
                    <td>{{$msg['first_name']}}</td>
                    <td>{{$msg['subject']}}</td>
                    <td>
                    <a class="btn btn-outline-secondary" href="{{route('msgs.show',['msg' => $msg['id'] ])}}">View</a>
                    <a class="btn btn-outline-secondary" href="{{route('msgs.delete',['msg' => $msg['id'] ])}}" onclick="return confirm('Are you sure?')" >Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
{{ $msgs->links() }}
<br><br>
@endsection