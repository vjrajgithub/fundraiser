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
                        <li><a href="<?php echo site_url('admin/configuration/contributions')?>">Contributions</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/sharing')?>">Sharing</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/badges')?>" class="btn btn-primary btn-sm">Badges</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/fields')?>">Fields</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/language')?>">Language</a></li>
                      </ul>
                    </div>
                    <div class="configuration-form">
                      <div class="row">
                        <div class="col-md-12">
                          <form>
                            <div class="display-campign"> <span class="pull-left ft12">Display campign badges on your home page <i class="fa fa-question-circle green"></i></span> <span class="pull-right"><a href="#" class="btn btn-success btn-xs">Add Budgets</a></span> </div>
                            <div class="table-responsive">
                              <table class="table" border="0">
                                <tr>
                                  <td width="55%"><select class="form-control">
                                      <option>Featured</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select></td>
                                  <td width="5%">Limit</td>
                                  <td width="10%"><input type="text" class="form-control" placeholder="36"></td>
                                  <td width="10%"><div class="checkbox">
                                      <label>
                                        <input type="checkbox">
                                        Big Badges </label>
                                    </div></td>
                                  <td width="10%"><div class="checkbox">
                                      <label>
                                        <input type="checkbox">
                                        Show title </label>
                                    </div></td>
                                  <td width="10%" align="right"><i class="fa fa-trash trash"></i></td>
                                </tr>
                                <tr>
                                  <td width="55%"><select class="form-control">
                                      <option>Sucessfull</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select></td>
                                  <td width="5%">Limit</td>
                                  <td width="10%"><input type="text" class="form-control" placeholder="12"></td>
                                  <td width="10%"><div class="checkbox">
                                      <label>
                                        <input type="checkbox">
                                        Big Badges </label>
                                    </div></td>
                                  <td width="10%"><div class="checkbox">
                                      <label>
                                        <input type="checkbox">
                                        Show title </label>
                                    </div></td>
                                  <td width="10%" align="right"><i class="fa fa-trash trash"></i></td>
                                </tr>
                                  </tr>

                              </table>
                            </div>
                            <a href="#" class="btn btn-success pull-right">Submit</a>
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