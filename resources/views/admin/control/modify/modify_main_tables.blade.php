@extends('layouts.app')

@section('content')
<h1 class="career-title"> Modify Main Tables </h1>
<br>
@if (session()->has('NoSelectedCareerError'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session()->get('NoSelectedCareerError') }}</strong>
</div>
@endif

@if (session()->has('modifyCareerError'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session()->get('modifyCareerError') }}</strong>
</div>
@endif

@if(session()->has('careerModifymessage'))
<div class="alert alert-success">
    {{ session()->get('careerModifymessage') }}
</div>
@endif
@if (session()->has('NoSelectedCategoryError'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session()->get('NoSelectedCategoryError') }}</strong>
</div>
@endif

@if (session()->has('modifyCategoryError'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session()->get('modifyCategoryError') }}</strong>
</div>
@endif

@if(session()->has('categorymodifymessage'))
<div class="alert alert-success">
    {{ session()->get('categorymodifymessage') }}
</div>
@endif


@if (session()->has('NoSelectedContentError'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session()->get('NoSelectedContentError') }}</strong>
</div>
@endif

@if (session()->has('modifyContentError'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session()->get('modifyContentError') }}</strong>
</div>
@endif

@if(session()->has('contentmodifymessage'))
<div class="alert alert-success">
    {{ session()->get('contentmodifymessage') }}
</div>
@endif

<div class="row m-auto  no-gutters">
    <div class="col-6">
        <form method="POST" action="/Modify/career">
            @csrf
            <fieldset class=" add-career">
                <legend>Modify Career:</legend>
                <select name="job_name" class="form-control ModifyCareer">
                    <option>All Careers</option>
                    @foreach($jobs as $index => $job)
                    <option value="{{$job->id}}">{{$job->job_name}}</option>
                    @endforeach
                </select>
                <input type="text" id="job_id" name="job_id" hidden>
                <p>Job Name:</p> <input name="job_name" placeholder="new job name" type="text"><br><br>
                <input type="submit" class="btn btn-info " value="Modify Career">
            </fieldset>

        </form>
    </div>

    <div class="col-6">
        <form method="POST" action="/Modify/category" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career  ">
                <legend>Modify Category:</legend>
                <select name="category_name" class="form-control ModifyCategory">
                    <option>All Categories</option>

                    @foreach($categories as $index => $cat)
                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                    @endforeach
                </select>
                <input type="text" id="cat_id" name="cat_id" hidden>

                <p>category Name:</p> <input name="category_name" type="text" placeholder="new category name"><br><br>
                <p>category image:</p> <input name="image" type="file"><br><br>

                <input type="submit" class="btn btn-info " value="Modify Category">
            </fieldset>

        </form>
    </div>

</div>

<div class="row m-auto no-gutters ">
    <div class="col-6 ">
        <form method="POST" action="/Modify/content" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career-content add-career">
                <legend>Content:</legend>
                <select name="content_name" class="form-control ModifyContent">
                    <option>All Contents</option> 

                    @foreach($contents as $index => $con)
                    <option value="{{$con->id}}">{{$con->content_name}}</option>
                    @endforeach
                </select>
                <input type="text" id="con_id" name="con_id" hidden>

                <p>Content Name:</p> <input name="content_name" type="text"><br><br>
                <p>Content description:</p> <input name="description" type="text" ><br><br>
                <p>Content details:</p> <textarea rows="4" cols="50" name="content_details"
                    type="text"></textarea><br><br>
                <p>Content links:</p> <textarea rows="4" cols="50" name="links" type="text"></textarea><br><br>
                <p>Content image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Modify Content">
            </fieldset>

        </form>
    </div>
</div>
<br><br><br><br>

@endsection