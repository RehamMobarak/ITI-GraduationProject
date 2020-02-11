@extends('layouts.app')

@section('content')

<section class="site-section block__62272" id="portfolio-section">
    <div class="container">
        <div class="row no-gutter justify-content-center">
            <div class="item web col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2  mb-3 ">
                <a href="/control/add" class="item-wrap">
                    
                    <img class="img-fluid controlimages" src="images/add.png">
                </a>
            </div>
            <div class="item web col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 mb-3 mx-xl-5">
                <a href="/Edit" class="item-wrap">
                    
                    <img class="img-fluid controlimages" src="images/edit.png">
                </a>
            </div>

            <div class="item brand col-6 col-sm-6 col-md-6 col-lg-3 col-xl-2 mb-3">
                <a href="/delete" class="item-wrap">
                    
                    <img class="img-fluid controlimages" src="images/delete.png">
                </a>
            </div>
        </div>
    </div>
</section>


@endsection