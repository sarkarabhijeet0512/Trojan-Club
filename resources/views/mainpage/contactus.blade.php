@extends('layouts.header')
<style type="text/css">
    body{
        background-color: #f5f5f5!important;
    }
    .bg{
        background-color: white;
    width: auto!important;
    /* line-height: 1; */
    font-size: 12px;
    text-align: justify;
    }
    .pd{
        padding-top: 3pc;
    padding-bottom: 3pc;
    }
    .fa {
        position: relative;
        /*padding-left: 0px!important;*/
        margin-bottom: 12px;
        line-height: 24px;
        /*color: blue;*/
        font-size: 2rem!important;
        /*height: 4rem;*/
        padding-right: -25px;
        margin-right: -10px;
    }

</style>
@push('scripts')
@section('content')
<div class="container" style="margin-top: 14rem;">
    <h1 class="mb-5">Contact Us</h1>
    <div class="row">
        <div class="col-md-4 card">
              <div>
                  <img src="https://www.edufever.com/wp-content/uploads/2017/02/CEB-Bhubaneswar.png" width= "360px">
              </div>
              <div class="container bg">
                  <ul class="pd">
                    <div class="col-md-2 fa fa-map-marker" style="height:4rem;"></div><div class="mb-5 text-place text-light animated fadeInRight">
                            Trojans Club, Department of Computer Science & Information Technology, College of Engineering Bhubaneswar,
                            Patia,Bhubaneswar-751024Odisha, India.
                    </div>
                    <div class="col-md-2 fa fa-phone"></div><div class="mb-5 text-place text-light animated fadeInRight">Phone: 0674 - 2740133 / 2740386 / 2744407</div>

                    <div class="col-md-2 fa fa-envelope"></div>
                            <div class="text-place text-light animated fadeInRight mb-5">Email : info@koustuvgroup.ac.in (Official)</div>

                    <div class="mb-2 col-md-2 fa fa-clock-o"></div>
                            <div class="text-place text-light animated fadeInRight mb-2">Mon-Sat:9AM-6PM</div>
                  </ul>
              </div>
        </div>
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.96599748818!2d85.81410701444369!3d20.343023316210125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19091aa817126b%3A0x3d04abe2868d9dfe!2sCollege%20of%20Engineering%20Bhubaneswar!5e0!3m2!1sen!2sin!4v1608717307432!5m2!1sen!2sin" width="750" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mb-5"></iframe>
                <form action="/feedback" method="post">
                    @csrf
                    <h1 class="mb-2">Feedback Form</h1>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control mb-2" placeholder="Name*">
                            <input type="email" name="email" class="form-control mb-2" placeholder="Email*">
                            <input type="tel" name="Phone" class="form-control mb-2" placeholder="Phone*">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    <div class="col-md-6">
                        <textarea class="form-control" name="message" style="height: 13rem;resize: none;" placeholder="Message*"></textarea>
                    </div>
                </form>   
            </div>    
        </div>
    </div>
@include('layouts.footer')
@endsection