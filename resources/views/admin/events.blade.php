@extends('admin.layouts.header')
@push('scripts')
<style type="text/css">
    label{
            margin-top: 2rem;
            margin-bottom:0!important; 
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function(){
        setTimeout(function() {
            $('.alert').slideUp();
        }, 3000);
    });
    </script>
@section('content')

<section>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container" style="width: 60%;">
        <h1>Create New === Events ===</h1>
            <form action="/admin/createEvent" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Event Title</label>
                    <input type="text" name="title" class="form-control">
                <label>Date And Time of Event</label>
                    <input type="datetime-local" name="date" class="form-control">
                <!-- <label>Time Of Event</label>
                    <input type="time" name="time" class="form-control"> -->
                <label>Description of Event</label>
                    <textarea class="form-control" name="description"></textarea>
                <div>
                <label>Upload Photo for Event</label>
                    <input type="file" name="images">
                </div>
                <button class="btn btn-primary">Submit</button> 
            </form>  
            <div>
                 @if($Events > 0)
                    <a href="/admin/all_events" class="btn btn-danger">Show all Events</a>
                @else
                
                @endif
            </div>  
    </div>
</section>
@include('admin.layouts.footer')
@endsection