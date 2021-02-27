@extends('admin.layouts.header')
@push('scripts')
@section('content')

<section>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
      @foreach($viewSlider as $slider)
      <div>
        <img src="../{{ $slider->image }}">
      </div>
      <a href="{{ route('deleteSlider', ['id' => $slider->id]) }}" class="btn btn-danger mt-2 mb-2">Delete</a>
      @endforeach
    </div>



        </section>
@include('admin.layouts.footer')
@endsection