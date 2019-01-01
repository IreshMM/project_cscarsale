@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title"> Terms Of Services</h3>
        </div>
    </div>
</div>
       
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Terms Of condition</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit TOS</h4>
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
<a href="#" class="btn btn-primary">Add</a>
<script src="/assets/libs/quill/dist/quill.min.js"></script>
<script>
    
   
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

</script>
@endsection