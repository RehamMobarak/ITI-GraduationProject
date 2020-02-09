@extends('layouts.app')

@section('content')

<div class="container mx-5 text-center">
    <div class="table-responsive mx-5 my-2">
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
                    <td><a class="btn btn-outline-secondary" href="#">DELETE</a></td>

                </tr>
               @endforeach
                

            </tbody>
        </table>

    </div>
</div>

<br><br>
@endsection