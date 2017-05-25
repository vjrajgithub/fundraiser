<!-- Header -->
<?php $this->load->view('signed-out-menu'); ?>
<!-- /end of header -->
<!-- Sign In -->
<section id="sign-in">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sign-in-inner">
          <div class="header"> <img src="/assets/images/logo.png" class="img-responsive"> </div>
          <div class="sign-in">
            <h2>Sign In</h2>
            <a class="btn btn-primary btn-lg" href="javascript:void(0);"><i class="fa fa-facebook"></i> Use My Facebook Account</a> </div>
          <div class="login-box">
            <div class="title-bg"> Or </div>
            <h4 class="text-center">Use your email Id</h4>
            <div class="error"><?php echo validation_errors(); ?></div>
            <?php echo form_open('user/login'); ?>
              <div class="form-group">
                <label for="uemail">Email address</label>
                <input type="email" class="form-control" id="uemail" name="uemail"  placeholder="Email">
              </div>
              <div class="form-group mr_b25">
                <label for="upass">Password</label>
                <input type="password" class="form-control" id="upass" name="upass" placeholder="Password" >
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-warning">Sign In to Weeboon</button>
              </div>
              <div class="clearfix"></div>
              <p class="text-center"><a href="alert('Under development.')">Forgot your password</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /end of sign in -->