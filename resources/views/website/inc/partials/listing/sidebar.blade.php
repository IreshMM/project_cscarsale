<div class="col-sm-12 col-md-3 column-sidebar">

    <div class="row">
        <div class="col-sm-6 col-md-12">
            <div class="banner2-wrapper">
                <div class="contact-banner">
                    <div class="top-info clearfix">
                        <div class="info1">
                            <div class="banner-title">BMW M3</div>
                            <div class="txt2">
                                <span class="txt">FIRST DRIVE REVIEW</span>
                                <span class="stars">
            <i class="fa fa-star novi-icon" aria-hidden="true"></i>
            <i class="fa fa-star novi-icon" aria-hidden="true"></i>
            <i class="fa fa-star novi-icon" aria-hidden="true"></i>
            <i class="fa fa-star novi-icon" aria-hidden="true"></i>
            <i class="fa fa-star-o novi-icon" aria-hidden="true"></i>
          </span>
                            </div>
                        </div>
                    </div>
                    <div class="txt3">Rs.{{$cars->selling_price}}.00</div>
                    <div class="txt4">George Freeman</div>
                    <div class="txt5">44 Shirley Ave. <br> West Chicago, IL 60185<br> Phone: <a href="tel:#">+1 (312) 954-1151</a>
                    </div>
                    <div class="form-wrapper">
                        <div id="note2"></div>
                        <div id="fields2">
                            <form id="ajax-contact-form2" class="form-horizontal rd-mailform" data-form-output="form-output-global" data-form-type="forms"
                                method="post" action="bat/rd-mailform.php">
                                <div class="form-group form-wrap">
                                    <label for="inputEmail">Email</label><input type="text" class="form-control" id="inputEmail"
                                        name="email" placeholder="E-mail address" data-constraints="@Email @Required">
                                </div>
                                <div class="form-group form-wrap">
                                    <label for="inputMessage">Your Message</label>
                                    <textarea class="form-control" rows="9" id="inputMessage" placeholder="Message" name="content" data-constraints="@Required"></textarea>
                                </div>

                                <div class="checkbox-inline">
                                    <label>
                                                <input type="checkbox"> Send me a copy of this message
                                            </label>
                                </div>

                                <div class="checkbox-inline">
                                    <label>
                                                <input type="checkbox" checked> Subscribe to our Newsletter
                                            </label>
                                </div>

                                <button type="submit" class="btn-default btn-cf-submit2">SEND E-MAIL</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-12">
            <div class="banner novi-background">
                <figure><a href="#"><img src="images/banner.jpg" alt="" class="img-responsive"></a></figure>

            </div>
        </div>
    </div>
</div>
