<!-- Header -->
<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/"><img src="/assets/temp/images/logo.png" class="img-responsive"></a> </div>
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
                <li><a href="<?php echo site_url('admin/configuration')?>"<i class="fa fa-cogs"></i> Configuration</a></li>
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
                    <div class="top-title">
                      <h5 class="uppercase pull-left"><strong>Files</strong> <i class="fa fa-question-circle green"></i></h5>
                      <a href="#" class="btn btn-success btn-sm pull-right">Create Campaigns</a> </div>
                    <div class="search-area">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="custom-search-input">
                            <div class="input-group col-md-12">
                              <input type="text" class="form-control input-lg" placeholder="Search by Name or Email" />
                              <span class="input-group-btn">
                              <button class="btn btn-info btn-lg" type="button"> <i class="glyphicon glyphicon-search"></i> </button>
                              </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="filter-options">
                      <div class="filter-dropdown pull-left">
                        <ul class="list-inline">
                          <li>Filters:</li>
                          <li class="dropdown"> <a class=" dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown"> All <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Featurd</a></li>
                              <li><a href="#">In review</a></li>
                              <li><a href="#">Draft</a></li>
                            </ul>
                          </li>
                          <li class="dropdown"> <a class=" dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown"> Newest <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Approval</a></li>
                              <li><a href="#">Expiry</a></li>
                            </ul>
                          </li>
                          <li class="dropdown"> <a class=" dropdown-toggle btn btn-primary btn-sm" data-toggle="dropdown"> Decending <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Ascending</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="filter-export pull-right"> <a href="#"><i class="fa fa-download"></i> Export</a> </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="display-campign"> <span class="pull-left ft12">Found 1 result with current option</span> </div>
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="result-image">
                          <div class="result-imgLt"> <img src="/assets/temp/images/campaigns.jpg" width="165" height="122"> </div>
                          <div class="result-imgRt">
                            <h5><a href="#">test</a></h5>
                            <a href="#"><i class="fa fa-envelope"></i> mail@gmail.com</a>
                            <div class="campaign-list">
                              <ul class="list-inline">
                                <li><i class="fa fa-sliders"></i> Keep it All</li>
                                <li><i class="fa fa-tag"></i> Category not to set</li>
                                <li><i class="fa fa-bullseye"></i> 1000THB</li>
                                <li><i class="fa fa-bullseye"></i> 0THB</li>
                                <li><i class="fa fa-power-off"></i> Draft</li>
                              </ul>
                            </div>
                            <div class="campaign-list">
                              <ul class="list-inline">
                                <li><a href="#" class="btn btn-default btn-xs"> SUBMITTED</a></li>
                                <li><a href="#" class="btn btn-default btn-xs"> APPROVED</a></li>
                                <li><a href="#" class="btn btn-default btn-xs"> VISIBLE</a></li>
                                <li><a href="#" class="btn btn-default btn-xs"> OPEN</a></li>
                                <li><a href="#" class="btn btn-default btn-xs"> FEATURD</a></li>
                                <li><a href="#" class="btn btn-success btn-xs"> ARCHIVED</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="d-t"> <span class="gray pull-right ft13">March 7, 2016</span> </div>
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