@extends('layouts.app')

@section('content')


<section class="site-section services-section bg-light block__62849" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Control Panel</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-6 col-lg-6 mb-4 mb-lg-5">

                <a href="/mindmap/control"
                    class="block__16443 text-center d-block">
                    <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                    <h3>Mindmap Control</h3>
                </a>

            </div>

            <div class="col-6 col-md-6 col-lg-6 mb-4 mb-lg-5">

                <a href="/career/control"
                    class="block__16443 text-center d-block">
                    <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                    <h3>Career Control</h3>
                </a>

            </div>
        </div>

    </div>
</section>



@endsection