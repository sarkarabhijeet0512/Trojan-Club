@extends('admin.layouts.header')
@push('scripts')
@section('content')
<div class="container" style="display: flex;">
    @foreach($Gallery as $img)
    <div class="card">
        <img src="../{{ $img->thumbnail_location}}" style="height: auto;
    width: 100%;">
    </div>
    @endforeach
</div>
@include('admin.layouts.footer')        
@endsection