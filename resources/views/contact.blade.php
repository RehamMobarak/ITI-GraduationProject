@extends('layouts.app')

@section('content')

<section class="site-section" id="next-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <form method="post" action="/contactus">
          @csrf
          @if(session()->has('contactmessage'))
          <div class="alert alert-success">
            {{ session()->get('contactmessage') }} 
          </div>
          @endif
          <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="text-black" for="fname">First Name</label>
              <input type="text" id="fname" class="form-control" name="first_name" required>
            </div>
            <div class="col-md-6">
              <label class="text-black" for="lname">Last Name</label>
              <input type="text" id="lname" class="form-control" name="last_name" required>
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label>
              <input type="email" id="email" class="form-control" name="email" required>
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="subject">Subject</label>
              <input type="subject" id="subject" class="form-control" name="subject" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label class="text-black" for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="7" class="form-control" required placeholder="Write your notes or questions here..."></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
            </div>
          </div>

        

        </form>
      </div>

    </div>
  </div>
</section>


@endsection