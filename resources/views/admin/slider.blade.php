@extends('admin.layouts.header')
@push('scripts')
<style type="text/css">
    label{
            margin-top: 0rem;
            margin-bottom:0!important; 
    }
    .form-div { margin-top: 100px; border: 1px solid #e0e0e0; }
#profileDisplay { display: block; height: 25rem; width: 100%; margin: 0px auto;  }
.img-placeholder {
  width: 100%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 25rem;
   z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
</style>
<script>
      function triggerClick(e) {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
      if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
</script>
@section('content')

<section>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container" style="width: 60%;">
        <h1>Update Slider === Images ===</h1>
            <form action="/admin/updateslider" method="post" enctype="multipart/form-data">
                @csrf
                <div style="display:flex;">
                    <label>Select Text Color</label>
                    <input type="color" name="color" class="mb-2 mr-2 h-auto">
                        <input type="text" name="heading" class="form-control mb-2" placeholder="Add a Heading to your Image">
                    </div>
                        <div class="form-group text-center" style="position: relative;" >
                            <span class="img-div">
                                <div class="text-center img-placeholder"  onClick="triggerClick()">
                                    <h4>Update image</h4>
                                </div>
                                <img src="../css/admin/img/upload.png" onClick="triggerClick()" id="profileDisplay">
                            </span>
                            <input type="file" name="images" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                        </div>
                            <input type="text" name="description" class="form-control mb-2" placeholder="Add Heading description to your Image">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                <div>
                @if($slider > 0)
                    <a href="/admin/viewAllSlider" class="btn btn-danger">Show all Sliders</a>
                @else
                
                @endif    
                      
                </div>  
            </div>
        </section>
@include('admin.layouts.footer')
@endsection