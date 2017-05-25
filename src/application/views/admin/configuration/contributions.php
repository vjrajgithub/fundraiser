<!-- Header -->
<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="/assets/temp/images/logo.png" class="img-responsive"></a> </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Free trail 10 days left</a></li>
          <li><a href="#"><i class="fa fa-leaf"></i></a></li>
          <li><a href="#"><i class="fa fa-edit"></i></a></li>
          <li><a href="#"><i class="fa fa-gear"></i></a></li>
          <li><a href="#"><i class="fa fa-sign-out"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- /end of header -->

<!-- Main Content -->
<section id="dashboard">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dashboardInn">
          <div class="dashboard-title">
            <div class="title-lt">
              <h2>Boon</h2>
            </div>
            <div class="title-rt"><a href="#" class="btn btn-success">Visit Website</a> </div>
          </div>
          <div class="go-back"> <a href="#"><i class="fa fa-angle-left"></i> Back to the site list</a> </div>
          <div class="dashboard-pages">
            <div class="pages-top">
              <ul class="list-inline">
                <li><a href="<?php echo site_url('admin/dashboard')?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li class="active"><a href="<?php echo site_url('admin/configuration')?>"<i class="fa fa-cogs"></i> Configuration</a></li>
                <li><a href="<?php echo site_url('admin/design')?>"><i class="fa fa-pencil"></i> Design</a></li>
                <li><a href="<?php echo site_url('admin/files')?>"><i class="fa fa-folder"></i> Files</a></li>
                <li><a href="<?php echo site_url('admin/users')?>"><i class="fa fa-users"></i> Users</a></li>
                <li><a href="<?php echo site_url('admin/campaigns')?>"><i class="fa fa-volume-up"></i> Campaigns</a></li>
                <li><a href="<?php echo site_url('admin/groups')?>"><i class="fa fa-gears"></i> Groups</a></li>
              </ul>
            </div>
            <div class="pages-content">
              <div class="row">
                <div class="col-md-12">
                  <div class="page-contentLt">
                    <div class="cong-options">
                      <ul class="list-inline">
                        <li><a href="<?php echo site_url('admin/configuration')?>">Settings</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/options')?>">Options</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/categories')?>">categories</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/appearance')?>">Appearance</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/contributions')?>" class="btn btn-primary btn-sm">Contributions</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/sharing')?>">Sharing</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/badges')?>">Badges</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/fields')?>">Fields</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/language')?>">Language</a></li>
                      </ul>
                    </div>
                    <div class="configuration-form">
                      <div class="row">
                        <div class="col-md-6">
                          <form>
                            <div class="form-group mr_b30">
                              <label for="exampleInputEmail1" class="mr_b15">Payment Gateway <i class="fa fa-question-circle green"></i></label>
                              <h5 class="uppercase"><strong>Live Payment Mode</strong> <a href="#" class="btn btn-success btn-xs">Edit</a></h5>
                              <a href="#" class="btn btn-success mr_b10">USE</a>
                              <p class="ft12">You haven't enabled any payment option for  this configuration.</p>
                            </div>
                            <div class="form-group mr_b30">
                              <h5 class="uppercase"><strong>Test Payment Mode</strong> <a href="#" class="btn btn-success btn-xs">Edit</a></h5>
                              <a href="#" class="btn btn-default mr_b10">IN USE</a>
                              <p class="ft12">You have enabled payment.</p>
                            </div>
                            <div class="form-group mr_b30 col-sm-4 pd_none">
                              <label for="exampleInputEmail1">Platform fee <i class="fa fa-question-circle green"></i></label>
                              <p class="gray mr_none ft13">Base Fee(%)</p>
                              <input type="text" class="form-control" placeholder="5.0">
                            </div>
                            <div class="form-group mr_b30 pd_none">
                              <h5 class="uppercase"><strong>Extra Fees</strong> <a href="#" class="btn btn-success btn-xs">Add Extra Fees</a></h5>
                              <p class="gray mr_none ft13">No extra fees added</p>
                              <label class="checkbox-inline">
                                <input type="checkbox" value="option1" id="inlineCheckbox1">
                                Enabled </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" value="option1" id="inlineCheckbox1">
                                Required </label>
                            </div>
                            <div class="form-group mr_b30 col-sm-4 pd_none">
                              <label for="exampleInputEmail1">Default Currency <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" placeholder="THB">
                            </div>
                            <div class="form-group mr_b10">
                              <label for="exampleInputEmail1">Display currency as <i class="fa fa-question-circle green"></i></label>
                              <div class="row">
                                <div class="col-sm-5">
                                  <p class="gray-sm-text">Left</p>
                                  <input type="text" class="form-control" placeholder="$">
                                </div>
                                <div class="col-sm-5">
                                  <p class="gray-sm-text">Right</p>
                                  <input type="text" class="form-control" placeholder="THB">
                                </div>
                              </div>
                            </div>
                            <div class="checkbox mr_b30">
                              <label>
                                <input type="checkbox">
                                Display actual currency in contribution list </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Currency Display style <i class="fa fa-question-circle green"></i></label>
                              <div class="clearfix"></div>
                              <label class="radio-inline">
                                <input type="radio" checked="" value="option2" id="inlineRadio2" name="inlineRadioOptions">
                                Comma(EX:1,000) </label>
                              <label class="radio-inline">
                                <input type="radio" value="option3" id="inlineRadio3" name="inlineRadioOptions">
                                Point(EX:1.000) </label>
                            </div>
                            <hr>
                            <div class="form-group mr_b30">
                              <label for="exampleInputEmail1">Campaign goal <i class="fa fa-question-circle green"></i></label>
                              <div class="row">
                                <div class="col-sm-5">
                                  <p class="gray-sm-text">Min</p>
                                  <input type="text" class="form-control" placeholder="00">
                                </div>
                                <div class="col-sm-5">
                                  <p class="gray-sm-text">Max</p>
                                  <input type="text" class="form-control" placeholder="00">
                                </div>
                              </div>
                            </div>
                            <div class="form-group mr_b30">
                              <label for="exampleInputEmail1">Contrubtion amount <i class="fa fa-question-circle green"></i></label>
                              <div class="row mr_b10">
                                <div class="col-sm-5">
                                  <p class="gray-sm-text">Min</p>
                                  <input type="text" class="form-control" placeholder="100.0">
                                </div>
                                <div class="col-sm-5">
                                  <p class="gray-sm-text">Max</p>
                                  <input type="text" class="form-control" placeholder="0.0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    Hide </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    Show </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked="">
                                    Optional </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group mr_b30 col-sm-4 pd_none">
                              <label for="exampleInputEmail1">Fixed contributions <i class="fa fa-question-circle green"></i></label>
                              <p class="gray mr_none ft13">Amount</p>
                              <input type="text" placeholder="0.0" class="form-control mr_b10">
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                Enabled </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1" checked>
                                Optional </label>
                            </div>
                            <div class="form-group mr_b30 pd_none">
                              <h5 class="uppercase"><strong>Additional Cost</strong> <a class="btn btn-success btn-xs" href="#">Add Cost</a></h5>
                              <p class="gray mr_none ft13">No cost added</p>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                Enabled </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                Required </label>
                            </div>
                            <div class="form-group mr_b30 pd_none">
                              <h5 class="uppercase"><strong>Contribution confirmation</strong> <a class="btn btn-success btn-xs" href="#">Edit Fees</a></h5>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                Contribution confirmation </label>
                              <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                Contribution pays fees </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Anonymous contributions <i class="fa fa-question-circle green"></i></label>
                              <div class="clearfix"></div>
                              <label class="radio-inline">
                                <input type="radio" checked="" value="option2" id="inlineRadio2" name="inlineRadioOptions">
                                Contributors decide </label>
                              <label class="radio-inline">
                                <input type="radio" value="option3" id="inlineRadio3" name="inlineRadioOptions">
                                All </label>
                              <label class="radio-inline">
                                <input type="radio" value="option3" id="inlineRadio3" name="inlineRadioOptions">
                                None </label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /end of main content -->

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-inn">
          <div class="title">
            <h3>Who &amp; What</h3>
          </div>
          <div class="links">
            <ul>
              <li> <a href="#">Blog</a> </li>
              <li> <a href="#">Pricing</a> </li>
              <li> <a href="#">Who We Serve</a> </li>
              <li> <a href="#">About</a> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-inn">
          <div class="title">
            <h3>Resources</h3>
          </div>
          <div class="links">
            <ul>
              <li> <a href="#">Getting Started</a> </li>
              <li> <a href="#"> Docs </a> </li>
              <li> <a href="#">FAQ</a> </li>
              <li> <a href="#"> Contact Us </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-inn">
          <div class="title">
            <h3>Service</h3>
          </div>
          <div class="links">
            <ul>
              <li> <a href="#"> Terms of Service </a> </li>
              <li> <a href="#"> Privacy Policy </a> </li>
              <li> <a href="#"> What's New? </a> </li>
              <li> <a href="#"> Additional Services </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-inn">
          <div class="links social-media">
            <ul class="list-inline">
              <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
              <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
              <li> <a href="#"><i class="fa fa-linkedin"></i></a> </li>
              <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
            </ul>
          </div>
          <div class="footer-logo"> <a href="#"> <img src="/assets/temp/images/footer-logo.png" class="img-responsive"> </a> </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /end of footer -->

<!-- Export Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>Export Data For Site <span class="green">Boon</span></strong></h4>
      </div>
      <div class="modal-body">
        <div class="export-data mr_b20">
          <p><strong>What do you want to export?</strong></p>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
            User Emails </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            Contributor Emails </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            Campaigner Emails </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            All Site Data </label>
        </div>
        <div class="export-data">
          <p><strong>Select format</strong></p>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
            JSON </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            XML </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            YAML </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            Newline </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            CSV </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Export</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /end of export modal -->