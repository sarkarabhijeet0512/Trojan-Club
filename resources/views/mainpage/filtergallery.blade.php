@extends('layouts.header')
@push('scripts')
    <link rel="stylesheet" href="css/index_assets/gallery.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <style type="text/css">
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    background-color: #f7ca18;
    }  
    .pagination {
    margin-top: 3px!important;
    background-color: #efefef;
    padding: 5px;
}
    </style>
@section('content')
<div style="margin-top: 13rem;">

<div class="filters filter-button-group">
	<ul>
		<li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
        @foreach($filter as $sort)
		<li><a href="javascript:void(0);" data-filter="{{ $sort->event }}">{{ $sort->event }}</a></li>
        @endforeach
	</ul>
</div>
	<div id="container" class="isotope">
        @foreach($gallery as $img)
		<div class="grid-item" data-filter="{{ $img->event }}">
        <a class="popupimg" href="{{ $img->storage_path }}">
            <div class="card frame-box">
                <img src="{{ $img->thumbnail_path }}">
            </div>
        </a>
        <div class="overlay">{{ $img->event }}</div>
        </div>
        @endforeach

	</div>
    
    <div class="isotope-pager" style="padding-top: 15px; text-align:center;display: none"></div>
    </div>
    <span style="padding-top: 15px; text-align:center;">{{ $gallery->links() }}</span>
    @include('layouts.footer')
 @endsection