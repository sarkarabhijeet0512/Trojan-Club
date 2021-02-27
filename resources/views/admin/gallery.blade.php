@extends('admin.layouts.header')
@push('scripts')

              <style>
        input {
            background-color: transparent;
            border: none;
            border-radius: 0;
            outline: none;
            width: 100%;
            line-height: normal;
            font-size: 1em;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            margin: 0;
            color: rgba(0, 0, 0, 0.72);
            background-position: center bottom, center calc(100% - 1px);
            background-repeat: no-repeat;
            background-size: 0 2px, 100% 1px;
            -webkit-transition: background 0s ease-out 0s;
            -o-transition: background 0s ease-out 0s;
            transition: background 0s ease-out 0s;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#2196f3), to(#2196f3)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
            background-image: -webkit-linear-gradient(#2196f3, #2196f3), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
            background-image: -o-linear-gradient(#2196f3, #2196f3), -o-linear-gradient(#d9d9d9, #d9d9d9);
            background-image: linear-gradient(#2196f3, #2196f3), linear-gradient(#d9d9d9, #d9d9d9);
            height: 2.4em;
        }
        
        .input-field {
            position: relative;
            margin-top: 2.2rem;
        }

        .container {
            width: 60%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        

        .quote-imgs-thumbs {
          background: #eee;
          border: 1px solid #ccc;
          border-radius: 0.25rem;
          margin: 1.5rem 0;
          padding: 0.75rem;
        }
        .quote-imgs-thumbs--hidden {
          display: none;
        }
        .img-preview-thumb {
          background: #fff;
          border: 1px solid #777;
          border-radius: 0.25rem;
          box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
          margin-right: 1rem;
          max-width: 140px;
          padding: 0.25rem;
          margin-bottom: 8px;
        }
    </style>   
    <script src="../css/admin/js/photoselector.js"></script> 
@endpush('scripts')
@section('content')
    <div class="container">
<!-- <form  method="POST" > -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1>Upload Gallery === Photos ===</h1>
        <form method="POST" enctype="multipart/form-data" action="/admin/gallery">
            @csrf
            <div class="input-field">
                <input type="text" name="name" id="name-1" placeholder="Event">
            </div>

            <div class="input-field">
                <input type="text" name="description" id="description-1" placeholder="Description">
                
            </div>
            
            <div style="margin-top: 2rem;margin-bottom: 10px;">
                <label class="active">Photos</label>
                   <div style="border: 1px solid yellowgreen;height: auto;position: relative;padding: 11px;text-align: center;">
                    <label for="upload_imgs" style="cursor: pointer;" class="button hollow"><i class="fa fa-upload" aria-hidden="true"></i>Click to Select Images</label>
                    <input class="show-for-sr" type="file" id="upload_imgs" name="images[]" multiple style="display: none" />
                    <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                  </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
        <a href="/admin/viewgallery" class="btn btn-danger">Show All Gallery Images</a>
    </div>
@include('admin.layouts.footer') 
@endsection
