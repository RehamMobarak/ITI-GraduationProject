@extends('layouts.app')

@section('content')
<h1 class="career-title"> ADD NEW CAREER</h1>
<h5 class="text-info sub-title">(Also Assignment Of Career-Category)</h5>
<br>
@if(session()->has('careercategorymessage'))
<div class="alert alert-success">
    {{ session()->get('careercategorymessage') }}
</div>
@endif

@if(session()->has('careermessage'))
<div class="alert alert-success">
    {{ session()->get('careermessage') }}
</div>
@endif

@if(session()->has('categorymessage'))
<div class="alert alert-success">
    {{ session()->get('categorymessage') }}
</div>
@endif

@if(session()->has('contentmessage'))
<div class="alert alert-success">
    {{ session()->get('contentmessage') }}
</div>
@endif

@if(session()->has('categorycontentmessage'))
<div class="alert alert-success">
    {{ session()->get('categorycontentmessage') }}
</div>
@endif

@if(session()->has('NoCareer'))
<div class="alert alert-danger alert-block">
    {{ session()->get('NoCareer') }}
</div>
@endif

@if(session()->has('NoCategory'))
<div class="alert alert-danger alert-block">
    {{ session()->get('NoCategory') }}
</div>
@endif

<div class="row m-auto no-gutters">
    <div class="col-6">
        <form method="POST" action="/add-career">
            @csrf
            <fieldset class="add-career">
                <legend>Career:</legend>
                <p>Job Name:</p> <input name="job_name" type="text" required><br><br>
                <input type="submit" class="btn btn-info " value="Add Career">
            </fieldset>

        </form>

    </div>


    <div class="col-6">
        <form method="POST" action="/add-career/category" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career  ">
                <legend>Category:</legend>
                <p>category Name:</p> <input name="category_name" type="text" required><br><br>
                <p>category image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Add Category">
            </fieldset>

        </form>
    </div>
</div>


<div class="row m-auto no-gutters ">
    <div class="col-6 ">
        <form method="POST" action="/add-career/content" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career-content add-career">
                <legend>Content:</legend>
                <p>Content Name:</p> <input name="content_name" type="text" required><br><br>
                <p>Content description:</p> <input name="description" type="text" required><br><br>
                <p>Content details:</p> <input name="content_details" type="text" required><br><br>
                <p> Content links:</p> <input name="links" type="text" required><br><br>
                <p>Content image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Add Content">
            </fieldset>

        </form>
    </div>
</div>

<h1 class="career-title mt-5"> ASSIGNMENT</h1>
<div class="row m-auto no-gutters">
    <div class="col-6">
        <form method="POST" action="/add-career/assign_career_category">
            @csrf
            <fieldset class="add-career">
                <legend>Career-category:</legend>
                <p>assign the career </p>

                <select name="job_name" class="form-control Career">
                    <option> all careers</option>
                    @foreach($jobs as $index => $job)
                    <option value="{{$job->id}}">{{$job->job_name}}</option>
                    @endforeach
                </select>
                <input name="career_id" id="career_id" type="text" value="" hidden>
                <p>To the category</p>

                <select name="category_name" class="form-control assigncategory">
                    <option> all categories</option>
                    @foreach($categories as $index => $cat)
                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                    @endforeach
                </select>
                <input name="career_category_id" id="career_category_id" type="text" hidden>
                <input type="submit" class="btn btn-info ml-2 mt-2 " value="Assign">
            </fieldset>

        </form>
    </div>


    <div class="col-6">
        <form method="POST" action="/add-career/assign_category_content">
            @csrf
            <fieldset class="add-career">
                <legend>Category-content:</legend>
                <p>assign the category </p>
                <select name="category_name" class="form-control category">
                    <option> all categories</option>
                    @foreach($categories as $index => $cat)
                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                    @endforeach
                </select>
                <input name="category_id" id="category_id" type="text" hidden>
                <p>To the content</p>
                <select name="category_name" class="form-control assigncontent">
                    <option> all contents</option>
                    @foreach($contents as $index => $con)
                    <option value="{{$con->id}}">{{$con['content_name']}}</option>
                    @endforeach
                </select>
                <input name="category_content_id" id="category_content_id" type="text" hidden>
                <input type="submit" class="btn btn-info ml-2 mt-2 " value="Assign">
            </fieldset>

        </form>
    </div>
</div>



<br><br><br>

@endsection