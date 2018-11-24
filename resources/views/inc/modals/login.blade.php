<div class="modal fade popup-form" id="SignIn" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Sign In</h4>
            <form class="rd-mailform"  data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
            <div class="row row-fix">
                <div class="col-sm-12">
                <div class="form-group form-wrap"><label for="singInName" >Your
                    Name</label><input type="text" class="form-control" id="singInName" name="name"   data-constraints='@Required'>
                </div>
                </div>
                <div class="col-sm-12">
                <div class="form-group form-wrap">
                    <label for="password">Password</label><input type="password" class="form-control" id="password" name="pas"  data-constraints='@Required'>
                </div>
                </div>
            </div>

            <button type="submit" class="btn-default btn-form2-submit">Submit</button>
            </form>
        </div>
        
        </div>
    </div>
</div>