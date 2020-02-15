@extends('layouts.app')

@section('content')
 
<section class="site-section block__18514" id="next-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-4 mr-auto">
        <div class="border p-4">
          <img src="{{$content['image']}}" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-12">
        <h2 class="mb-4 content-title">{{$content['content_name']}}</h2>

        <h4>Brief</h4>
        <p>{{$content['content_details']}}</p>
        <div class="d-flex flex-column">
        <h4>Links<h4>
        <span style="color:blue">{{$content['links']}}</span>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br><br>
@endsection