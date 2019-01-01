@extends('layouts.adminapp') 

@section('content')
<style>
.preview-images-zone {
    width: 100%;
    border: 1px solid #ddd;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;
}
.preview-images-zone > .preview-image:first-child {
    height: 185px;
    width: 185px;
    position: relative;
    margin-right: 5px;
}
.preview-images-zone > .preview-image {
    height: 90px;
    width: 90px;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}
.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .tools-edit-image {
    position: absolute;
    z-index: 100;
    color: #fff;
    bottom: 0;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    display: none;
}
.preview-images-zone > .preview-image > .image-cancel {
    font-size: 18px;
    position: absolute;
    top: 0;
    right: 0;
    font-weight: bold;
    margin-right: 10px;
    cursor: pointer;
    display: none;
    z-index: 100;
}
.preview-image:hover > .image-zone {
    cursor: move;
    opacity: .5;
}
.preview-image:hover > .tools-edit-image,
.preview-image:hover > .image-cancel {
    display: block;
}
.ui-sortable-helper {
    width: 90px !important;
    height: 90px !important;
}

.container {
    padding-top: 50px;
}
</style>

@section('custom-script')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h4 class="box-title"> Details Of HOME Page </h4>
           </div>
       </div> 
</div>       
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Slider Images</h5>       
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <div class="container">
            <fieldset class="form-group">
                <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
            </fieldset>
            <div class="preview-images-zone">
                <div class="preview-image preview-show-1">
                    <div class="image-cancel" data-no="1">x</div>
                    <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                </div>
                <div class="preview-image preview-show-2">
                    <div class="image-cancel" data-no="2">x</div>
                    <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                </div>
                <div class="preview-image preview-show-3">
                    <div class="image-cancel" data-no="3">x</div>
                    <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <br>
        <a href="#" class="btn btn-primary">Add</a>
    </div>
</div>


<div class="card">
        <div class="card-body">
          <h5 class="card-title">Featured</h5>       
              
              <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
              <div class="container">
                  <fieldset class="form-group">
                      <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                      <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
                  </fieldset>
                  <div class="preview-images-zone">
                      <div class="preview-image preview-show-1">
                          <div class="image-cancel" data-no="1">x</div>
                          <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                          <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                      </div>
                      <div class="preview-image preview-show-2">
                          <div class="image-cancel" data-no="2">x</div>
                          <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
                          <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                      </div>
                      <div class="preview-image preview-show-3">
                          <div class="image-cancel" data-no="3">x</div>
                          <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
                          <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
                      </div>
                  </div>
              </div>
              <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
              <br>
              <a href="#" class="btn btn-primary">Add</a>
          </div>
      </div>
      
<div class="card">
     <div class="card-body">
        <h5 class="card-title">Best Offers</h5>       
                  
                  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                  <div class="container">
                      <fieldset class="form-group">
                          <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                          <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
                      </fieldset>
                      <div class="preview-images-zone">
                          <div class="preview-image preview-show-1">
                              <div class="image-cancel" data-no="1">x</div>
                              <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                              <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                          </div>
                          <div class="preview-image preview-show-2">
                              <div class="image-cancel" data-no="2">x</div>
                              <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
                              <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                          </div>
                          <div class="preview-image preview-show-3">
                              <div class="image-cancel" data-no="3">x</div>
                              <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
                              <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
                          </div>
                      </div>
                  </div>
                  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                  <br>
                  <a href="#" class="btn btn-primary">Add</a>
     </div>
</div>
<div class="card">
    <div class="card-body">
       <div class="row">
         <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Welcome note</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>                  
            
   <div class="row">
       <div class="col-12">
        
                <h4 class="card-title">Edit Welcome note</h4>
                            <!-- Create the editor container -->
                <div id="editor" style="height: 300px;">
                   <p>Hello World!</p>
                   <p>Some initial <strong>bold</strong> text</p>
                   <p>
                   <br>
                  </p>
               </div>
           </div>
       </div>
    </div>
 </div>

<!--*******-->
<script src="/assets/libs/quill/dist/quill.min.js"></script>
            <script>
                
               
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });
            
</script>

<script>
$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});



var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}

</script>
    @endsection
