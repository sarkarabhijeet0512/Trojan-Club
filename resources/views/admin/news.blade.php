@extends('admin.layouts.header')
@push('scripts')
<style type="text/css">
    label{
            margin-top: 2rem;
            margin-bottom:0!important; 
    }
</style>
@section('content')

<section>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container" style="width: 60%;">
        <h1>Create News === Feed ===</h1>
            <form action="/admin/createNews" method="POST" enctype="multipart/form-data">
                @csrf
                <label>News Title</label>
                    <input type="text" name="title" class="form-control">
                <label>Description of News</label>
                    <textarea class="form-control" name="description"></textarea>
                <div>
                <label>Upload Photo for News</label>
                    <input type="file" name="images">
                </div>
                <button class="btn btn-primary">Submit</button> 
            </form>  
            <div>
                @if($news > 0)
                    <a href="/admin/allnews" class="btn btn-danger">Show all News</a>
                @else
                
                @endif
            </div>  
    </div>
</section>
@include('admin.layouts.footer')
@endsection