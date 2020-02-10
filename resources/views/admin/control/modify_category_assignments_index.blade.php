@extends('layouts.app')

@section('content')

<h1 class="career-title mb-5 mt-3">choose the category which you want to edit</h1>

<div class="dropdown show m-5 text-center">
    <a class="btn btn-primary  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Categories </a>

    <div class="dropdown-menu dropdown-menu-search" aria-labelledby="dropdownMenuLink">
        @foreach($categories as $index => $cat)
        <a class="dropdown-item text-dark" href="/modify-category-contents/{{$cat['id']}}">{{$cat['category_name']}}</a>
        @endforeach
    </div>
</div>

<br><br>
@endsection