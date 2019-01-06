<div class="modal fade popup-form" id="register" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> register</h4>
            <form class="rd-mailform"  data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
            <div class="row row-fix">
                <div class="col-sm-12">
                <div class="form-group form-wrap"><label for="regName">Your
                    Name</label><input type="text" class="form-control" id="regName" name="name"  data-constraints='@Required'>
                </div>
                </div>
                <div class="col-sm-12">
                <div class="form-group form-wrap">
                    <label for="regEmail">Email</label><input type="text" class="form-control" id="regEmail" name="email"  data-constraints='@Required @Email'>
                </div>
                </div>
                <div class="col-sm-12">
                <div class="form-group form-wrap">
                    <label for="passwordReg">Password</label><input type="password" class="form-control" id="passwordReg" name="pas" data-constraints='@Required'>
                </div>
                </div>
            </div>

            <button type="submit" class="btn-default btn-form2-submit">Register</button>
            </form>
        </div>

        </div>
    </div>
</div>