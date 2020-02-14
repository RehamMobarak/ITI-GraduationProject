@extends('layouts.app')

@section('content')

<section class="site-section" id="next-section">
    <div class="container">
        <div class="row no-gutters">
            @foreach($mindmaps as $index => $value)
            <div class="col-md-6 col-lg-4 item">
                <a href="{{$value['image']}}" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="{{$value['image']}}">
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection 