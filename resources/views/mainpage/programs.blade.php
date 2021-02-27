@include('layouts.header')
<style type="text/css">
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    background-color: #f7ca18;
}

    .pagination{
        margin-top: 19px;
    margin-left: 30px;
    }
</style>
<script>
jQuery(document).ready(function () {
    $('#time-event').syotimer({
        year: <?php echo $Year ?>,
        month: <?php echo $Mon ?>,
        day: <?php echo $Day ?>,
        hour: <?php echo $Hours ?>,
        minute: <?php echo $min ?>,
    });
});
</script>
@section('content')
    <!--End header wrapper-->

    <!--Begin content wrapper-->
    <div class="content-wrapper">

        <!--begin upcoming event-->
        <div class="program-upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="area-img">
                            <img class="img-responsive animate zoomIn" src="images/programs-events-img.jpg" alt="">
                            <div id="time-event" class="animated fadeIn"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="area-content">
                            <div class="area-top">
                                <div class="top-section animated lightSpeedIn">
                                    <h5 class="heading-light">UPCOMING EVENT</h5>
                                    <span class="dates text-white text-uppercase">{{ $M}} {{$Day}}, {{$Year }}</span>
                                </div>
                                <h2 class="heading-bold animated rollIn">{{ $event->event_title }}</h2>
                            <span class="animated fadeIn">
                                <p class="text-justify mb-2">{{ $event->description }}</p>
                                <span class="icon map-icon"></span>
                                <span class="text-place text-white">CEB, Programming Lab, Room no -302, Patia, Bhubaneswar</span>
                            </span>
                            </div>
                            <div class="area-bottom animated zoomInLeft">
                                <a href="event-single.html" class="bnt bnt-theme join-now">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end upcoming event-->

        <!--begin event calendar-->
        <div class="event-calendar">
            <div class="container">
                <div class="top-section text-center">
                    <h4>All Alumni Events</h4>
                </div>
                <div class="event-month">
                    <ul class="columns1 text-center">
                        <li class="event-item">
                            <span class="text-light year">2016</span>
                            <span class="text-light month">January</span>
                        </li>
                        <li class="event-item">
                            <span class="text-light year">2016</span>
                            <span class="text-light month">February</span>
                        </li>
                        <li class="event-item">
                            <span class="text-light year">2016</span>
                            <span class="text-light month">March</span>
                        </li>
                        <li class="event-item">
                            <span class="text-light year">2016</span>
                            <span class="text-light month">April</span>
                        </li>
                    </ul>
                </div>
                <div class="event-list-content">
                    @foreach($Eventcalander as $calanderEvent)
                    <?php
                        $Week_c = date("D",strtotime($calanderEvent->event_date));
                        $Mon_c  = date("M",strtotime($calanderEvent->event_date));
                        $day_c  = date("d",strtotime($calanderEvent->event_date)); 
                    ?> 
                    <div class="event-list-item">
                        <div class="date-item">
                            <span class="day text-bold color-theme">{{ $day_c }}</span>
                            <span class="dates text-gray text-uppercase">{{ $Week_c }}</span>
                        </div>
                        <div class="date-desc-wrapper">
                            <div class="date-desc">
                                <div class="date-title"><h4 class="heading-regular"><a href="#">{{ $calanderEvent->event_title }}</a></h4></div>
                                <div class="date-excerpt">
                                    <p>{{ $calanderEvent->description }}</p>
                                </div>
                                <div class="place">
                                    <span class="icon map-icon"></span>
                                    <span class="text-place">Gondomanan Street 209, California </span>
                                    <a href="#"> View Map</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-links register text-center">
                            <a href="{{ route('Eventregister', ['id' => $calanderEvent->id]) }}" class="text-regular">REGISTER</a>
                            <span class="limit">Limited! seat left</span>
                        </div>
                    </div>
                    @endforeach
                    <span>{{ $Eventcalander->links() }}</span>
                </div>
            </div>
        </div>
        <!--end event calendar-->

        <!--begin newsletter-->
        <div class="newsletter newsletter-parallax">
            <div class="container">
                <div class="newsletter-wrapper text-center">
                    <div class="newsletter-title">
                        <h2 class="heading-light">Keep Up and Join Our Newsletter</h2>
                        <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                    </div>
                    <form name="subscribe-form" target="_blank" class="form-inline">
                        <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >
                        <button type="submit" class="button bnt-theme">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end newsletter-->

    </div>
    <!--End content wrapper-->
    <!--Begin footer wrapper-->
 @include('layouts.footer')
    <!--End footer wrapper-->
</div>


</body>
</html>