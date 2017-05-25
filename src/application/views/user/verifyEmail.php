<!-- Header -->
<?php $this->load->view('signed-in-menu');?>
<!-- /end of header --> 

<!-- Sign In -->
<section id="sign-in" class="gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sign-in-inner accont-veryfication">
          <div class="header">
            <h2>Email Veryfication</h2>
          </div>
          <div class="sign-in msg-detail">
            <div class="msg-icon"> <img src="/assets/images/msg-icon.jpg" class="img-responsive">
              <div class="clearfix mr_b20"></div>
              <h4>To verify your account and use the application, you MUST tap 'Confirm' inside the email and continue the setup process.</h4>
              <p>The email has the subject "Please confirm your Weeboon account" <br>
                and was sent to : <?php echo $currentUser['email'] ?></p>
              <p class="text-center"><a href="">RESENT EMAIL</a></p>
            </div>
          </div>
          <div class="login-box text-center"> <span>You may also want to check your junk or spam folder for this email.</span><br>
            <span>Need help? Contact Us</span> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /end of sign in --> 