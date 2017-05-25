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
                        <li><a href="<?php echo site_url('admin/configuration/categories')?>" class="btn btn-primary btn-sm">categories</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/appearance')?>">Appearance</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/contributions')?>">Contributions</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/sharing')?>">Sharing</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/badges')?>">Badges</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/fields')?>">Fields</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/language')?>">Language</a></li>
                      </ul>
                    </div>
                    <div class="configuration-form">
                      <div class="campain-categories">
                        <div class="cam-cat pull-left">
                          <p class="ft13"><strong>Compaign Categories <i class="fa fa-question-circle green"></i></strong></p>
                        </div>
                        <div class="add-cat pull-right"> <a href="#" class="btn btn-success btn-sm">ADD CATEGORY</a> </div>
                      </div>
                      <div class="about-categories mr_b40">
                        <p><strong>What are Categories?</strong></p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <form>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>Featured</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>All</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>Ending</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>Sucessful</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>Random</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>Closed</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mr_b30">
                              <div class="col-sm-12">
                                <div class="featured-title pull-left"> <strong>You</strong> </div>
                                <div class="acen-dec pull-right">
                                  <ul class="angle-align">
                                    <li><a href="#"><i class="fa fa-angle-down fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-angle-up fa-2x"></i></a></li>
                                    <li>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" value="">
                                          Hidden </label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="clearfix"></div>
                                <p class="gray-sm-text">Sort by</p>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Newest</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <select class="form-control">
                                    <option>Decending</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
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