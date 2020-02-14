@extends('layouts.app')

@section('content')

<section class="site-section block__62272" id="portfolio-section">
    <div class="container">
    <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Mindmaps Control</h2>
            </div>
        </div>
        <div class="row no-gutter justify-content-center">

            <div class="item web col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2  mb-3 ">
                <a href="/mindmap/add" class="item-wrap">
                    
                    <img class="img-fluid controlimages" src="/images/add.png">
                </a>
            </div>

            <div class="item web col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 mb-3 mx-xl-5">
                <a href="/mindmap/Edit" class="item-wrap">
                    
                    <img class="img-fluid controlimages" src="/images/edit.png">
                </a>
            </div>

            <div class="item brand col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 mb-3">
                <a href="/mindmap/delete" class="item-wrap">
                    
                    <img class="img-fluid controlimages" src="/images/delete.png">
                </a>
            </div>

        </div>
    </div>
</section>

@endsection