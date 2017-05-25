<!-- Header -->
<?php
if ($signedIn) {
    $this->load->view('signed-in-menu'); 
} else {
    $this->load->view('signed-out-menu'); 
}
?>
<!-- /end of header -->
<!-- Main Content -->
<section id="main-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <aside class="sidebar">
          <div class="signup-btn"> <a href="javascript:void(0)" class="btn btn-primary btn-lg" id="sign-up-btn">Sign Up FREE</a> </div>
          <div class="all-categories">
            <div class="title">
              <h3>All Categories</h3>
            </div>
            <ul>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/animal.png"></i> Animals</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/business.png"></i> Business</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/charity.png"></i> Charity</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/community.png"></i> Community</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/creative.png"></i> Creative</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/education.png"></i> Education</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/emergency.png"></i> Emergencies</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/events.png"></i> Events</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/family.png"></i> Family</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/other.png"></i> Other</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/medical.png"></i> Medical</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/sports.png"></i> Sports</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/travel.png"></i> Travel</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/volunter.png"></i> Volunteer</a></li>
              <li><a href="#"><i class="img"><img src="/assets/images/icons/wishes.png"></i> Wishes</a></li>
            </ul>
          </div>
        </aside>
      </div>
      <div class="col-md-9">
        <article class="content-area">
          <div class="product-list">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#popular">Popular</a></li>
              <li><a data-toggle="tab" href="#Almost">Almost done</a></li>
              <li><a data-toggle="tab" href="#Around">Around me</a></li>
              <li><a data-toggle="tab" href="#Facebook"><i class="fa fa-facebook-square"></i> Facebook</a></li>
            </ul>
            <div class="tab-content">
              <div id="popular" class="tab-pane fade in active">
                <ul class="row">
                  <li class="col-md-4">
                    <div class="product-area">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-1.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 79,500</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Help Ton to get kidney surgery</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Hua Hin </a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-medkit"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area bg2">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-2.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 18,250</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Thailand bobsleigh to Olympics</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"> <a href="#"><i class="fa fa-map-marker"></i> Bangkok </a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-venus"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area bg3">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-3.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 1,000</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Smart watch next generation</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Chiang Mai</a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-commenting"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-1.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 79,500</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Help Ton to get kidney surgery</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Hua Hin </a></div>
                          <div class="rt-icon"> <a href="#"> <i class="fa fa-medkit"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area bg2">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-2.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 18,250</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Thailand bobsleigh to Olympics</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Bangkok </a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-venus"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area bg3">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-3.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 1,000</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Smart watch next generation</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Chiang Mai</a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-commenting"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-1.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 79,500</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Help Ton to get kidney surgery</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Hua Hin </a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-medkit"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area bg2">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-2.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 18,250</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Thailand bobsleigh to Olympics</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Bangkok </a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-venus"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <div class="product-area bg3">
                      <div class="product-image"> <a href="<?php echo site_url('campaign') ?>/name-123245"><img src="/assets/images/img-3.jpg" class="img-responsive"></a> </div>
                      <div class="product-content">
                        <div class="price">
                          <h2><span>THB</span> 1,000</h2>
                        </div>
                        <div class="process"> </div>
                        <div class="name">
                          <h3>Smart watch next generation</h3>
                        </div>
                        <div class="map-area">
                          <div class="lt-icon"><a href="#"> <i class="fa fa-map-marker"></i> Chiang Mai</a></div>
                          <div class="rt-icon"><a href="#"> <i class="fa fa-commenting"></i> </a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="Almost" class="tab-pane fade">
                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
              </div>
              <div id="Around" class="tab-pane fade">
                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
              </div>
              <div id="Facebook" class="tab-pane fade">
                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
              </div>
            </div>
            <div class="load-more"> <i class="fa fa-spinner fa-spin"></i> </div>
            <footer>
              <div class="row">
                <div class="col-md-3">
                  <div class="footer-inn">
                    <div class="title">
                      <h3>GET STARTED</h3>
                    </div>
                    <div class="links">
                      <ul>
                        <li> <a href="#">Why Weeboon</a> </li>
                        <li> <a href="#">How Its Works</a> </li>
                        <li> <a href="#">Discover</a> </li>
                        <li> <a href="#">Fees</a> </li>
                        <li> <a href="#">Sign Up Now</a> </li>
                        <li> <a href="#">Ask a Question</a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="footer-inn">
                    <div class="title">
                      <h3>About</h3>
                    </div>
                    <div class="links">
                      <ul>
                        <li> <a href="#">Press</a> </li>
                        <li> <a href="#">Career </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="footer-inn">
                    <div class="title">
                      <h3>Connect with us</h3>
                    </div>
                    <div class="links">
                      <ul>
                        <li> <a href="#"> Facebook </a> </li>
                        <li> <a href="#"> Twitter </a> </li>
                        <li> <a href="#"> Instagram </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="footer-inn pd_ft30">
                    <div class="title">
                      <h3>Help</h3>
                    </div>
                    <div class="links">
                      <ul>
                        <li> <a href="#"> FAQs </a> </li>
                        <li> <a href="#"> Ask a Question </a> </li>
                        <li> <a href="#"> Terms of Use </a> </li>
                        <li> <a href="#"> Privacy Policy </a> </li>
                        <li> <a href="#"> Code of Conduct </a> </li>
                        <li> <a href="#"> Contact Us</a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- /end of main content -->

<!-- Sign Up Modal -->
<div id="signup-box">
  <div class="sign-in-overlay"></div>
  <div class="sign-in-inner">
    <div class="header"> <img src="/assets/images/logo.png" class="img-responsive"> </div>
    <div class="sign-in">
      <h2>Sign In</h2>
      <a class="btn btn-primary btn-lg mr_b10" href="javascript:void(0);"><i class="fa fa-facebook"></i> Use My Facebook Account</a>
      <p class="text-center ft12">We will never post without your permission.</p>
      <div class="clearfix mr_b10"></div>
      <a class="btn btn-warning btn-lg mr_b10" href="javascript:void(0);" id="reg-top"><i class="fa fa-envelope"></i> Use My Email Address</a>
      <p class="text-center ft12">Weeboon fee is 5% from each donation you receive. WePay's fee is 2.9% + $0.30 per donation. You are agreeing with all terms.</p>
    </div>
    <div class="login-box"> </div>
  </div>
</div>
<!-- /end of sign up modal -->

<div id="signup-box" class="reg-top-content">
  <div class="sign-in-overlay"></div>
  <div class="sign-in-inner">
    <div class="header"> <img src="/assets/images/logo.png" class="img-responsive"> </div>
    <div class="login-box">
        <?php echo form_open('user/signUp'); ?>
        <div class="error"></div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="fname">First name</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="lname">Last name</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <!--div class="form-group">
          <label for="confirmEmail">Confirm email</label>
          <input type="email" class="form-control" id="confirmEmail" name="confirmEmail"  placeholder="Confirm email" required>
        </div -->
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <p class="ft12">Weeboon fee is 5% from each donation you receive. WePay's fee is 2.9% + $0.30 per donation. You are agreeing with all terms.</p>
        <div class="form-group text-center">
          <button type="button" class="btn btn-default email-signup">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>