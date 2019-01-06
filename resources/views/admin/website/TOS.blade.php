@extends('admin.layouts.adminapp') 

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
                <p>{{ $tos }}</p>
            </div>
        </div>
    </div>
</div>
{{-- <form method="POST" action="{{ route('website_content.set_tos') }}">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit TOS</h4>
                    <!-- Create the editor container -->
                    <div id="editor" style="height: 300px;">
                        <textarea class="form-control" id="tos" name="tos">{{ $tos }}</textarea>
                        
                        <p>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
</form> --}}


 <form method="POST" action="{{ route('website_content.set_tos') }}">
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit TOS</h4>
                                <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                        <div class="col-sm-9">
                                        <textarea cols="4" rows="10" class="form-control" name="tos">{{ $tos }}</textarea>
                                        </div>
                                 </div>
                                 <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    
                  </div>
                  
         </div>
    
        
    </form>



<script src="/assets/libs/quill/dist/quill.min.js"></script>
<script>
    
   
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

</script>
@endsection