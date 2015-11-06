
<div class="collapse has-tabs" id="user-area">
    <div class="container">
        <div class="inner">
            <a href="#" class="close" data-close-parent="#user-area"><img src="{{ asset('img/close.png') }}" alt=""></a>
            <div class="row">
                <div class="col-md-3 col-md-offset-9">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation"><a href="#sign-in" aria-controls="sign-in" role="tab" data-toggle="tab" data-transition-parent="#sign-in">Sign In</a></li>
                            <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab"  data-transition-parent="#register">Register</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane" id="sign-in">
                                <form role="form" method="post" id="form-sign-in">
                                    <div class="form-group animate move_from_bottom_short">
                                        <input type="text" class="form-control" id="sing-in-name" name="name" placeholder="Name">
                                    </div>
                                    <!--end .form-group-->
                                    <div class="form-group animate move_from_bottom_short">
                                        <input type="email" class="form-control" id="sing-in-email" name="email" placeholder="Email">
                                    </div>
                                    <!--end .form-group-->
                                    <div class="form-group animate move_from_bottom_short">
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                    <!--end .form-group-->
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="register">
                                <form role="form" method="post" id="form-register">
                                    <div class="form-group animate move_from_bottom_short">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <!--end .form-group-->
                                    <div class="form-group animate move_from_bottom_short">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <!--end .form-group-->
                                    <div class="form-group animate move_from_bottom_short">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <!--end .form-group-->
                                    <div class="form-group animate move_from_bottom_short">
                                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
                                    </div>
                                    <!--end .form-group-->
                                    <div class="form-group animate move_from_bottom_short">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                    <!--end .form-group-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end .col-md-3-->
            </div>
            <!--end .row-->
        </div>
        <!--end .container-->
    </div>
    <!--end .inner-->
</div>
<!--end User area-->
<header class="animate" id="header">
    <div class="container">
        <div class="header-inner">
            <nav class="secondary">
                <ul>
                    <li><a href="#user-area" data-toggle="collapse" aria-expanded="false" aria-controls="user-area" data-tab="#sign-in" data-transition-parent="#header">Sign In</a></li>
                    <li><a href="#user-area" class="promoted" data-toggle="collapse" aria-expanded="false" aria-controls="user-area" data-tab="#register" data-transition-parent="#header">Register</a></li>
                </ul>
            </nav>
            <!--end Secondary navigation-->
            <nav class="main">
                <div class="brand">
                    <a href="index-map.html">
                        <img src="{{ asset('img/logo.png') }}" alt="brand">
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="#" class="has-child">Home</a>
                        <ul>
                            <li><a href="index-listing.html">Listing</a></li>
                            <li><a href="index-map-fullscreen.html">Fullscreen Map</a></li>
                            <li><a href="index-map.html">Map with Listing</a></li>
                            <li><a href="index-search.html">Search</a></li>
                        </ul>
                    </li>
                    <li><a href="assets/pages/about_e.html" data-expand-width="col-8" data-transition-parent=".content-loader" data-external="true">About Us</a></li>
                    <li><a href="assets/pages/persons_e.html" data-expand-width="col-6" data-transition-parent=".content-loader" data-external="true">Agents</a></li>
                    <li><a href="assets/pages/faq_e.html" data-expand-width="col-6" data-transition-parent=".content-loader" data-external="true">FAQ</a></li>
                    <li><a href="assets/pages/contact_e.html" data-expand-width="col-6" data-transition-parent=".content-loader" data-external="true">Contact</a></li>
                </ul>
                <div class="toggle-nav">
                    <div class="dots">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                </div>
            </nav>
            <!--end Main navigation-->
        </div>
        <!--end .header-inner-->
    </div>
    <!--end .container-->
    <div class="container">
        <div class="submit-container">
            <a href="#search-collapse" class="btn btn-default btn-sm show-filter" data-toggle="collapse" aria-expanded="false" aria-controls="search-collapse">Search Filter</a>
            <a href="assets/pages/submit_e.html" class="submit-button" data-expand-width="col-8" data-transition-parent=".content-loader" data-external="true"><i><img src="{{ asset('img/plus.png') }}" alt=""></i></a>
        </div>
    </div>
</header>
<!--end Header-->