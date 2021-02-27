@extends('admin.layouts.header')
@push('scripts')
<style type="text/css">
    label{
            margin-top: 2rem;
            margin-bottom:0!important; 
    }
    div.card{
            flex-direction: row;
    text-align: justify;
    border-radius: 10px;
    background-color: beige;
    padding-left: 20px;
    margin-top: 8px;
    }
    .description{
        padding: 15px;
    }
    .img-alignment{
        padding-top: 22px;
    }
</style>
    </script>
@section('content')
<section>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        @foreach($allnews as $getnews)
        <div class="card">
                <div class="img-alignment">
                     <img src="../{{ $getnews->image}}">
                     {{ $getnews->created_at }}
                </div>
                <div class="description">
                    <h2>
                        {{ $getnews->title }}
                    </h2>
                     {{ $getnews->description }}
                </div>
        </div>
                    <a href="{{ route('deleteNews', ['id' => $getnews->id]) }}" class="btn btn-del btn-danger mt-2">Delete</a>
               
               @endforeach     <!-- <a href="" class="btn btn-warning">Edit</a> -->
            </div>
        
</section>

@include('admin.layouts.footer')
@endsection