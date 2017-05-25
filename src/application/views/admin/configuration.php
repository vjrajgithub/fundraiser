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
                        <li><a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/configuration')?>">Settings</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/options')?>">Options</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/categories')?>">categories</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/appearance')?>">Appearance</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/contributions')?>">Contributions</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/sharing')?>">Sharing</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/badges')?>">Badges</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/fields')?>">Fields</a></li>
                        <li><a href="<?php echo site_url('admin/configuration/language')?>">Language</a></li>
                      </ul>
                    </div>
                    <div class="configuration-form">
                      <div class="row">
                        <div class="col-md-5">
                          <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Site Mode <i class="fa fa-question-circle green"></i></label>
                              <div class="clearfix"></div>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
                                Multi User </label>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                Single User </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Site Email Address <i class="fa fa-question-circle green"></i></label>
                              <input type="email" class="form-control" id="exampleInputPassword1" placeholder="user@gmail.com">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Site Password <i class="fa fa-question-circle green"></i></label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="checkbox mr_b30">
                              <label>
                                <input type="checkbox">
                                Password Enabled </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Time Zone <i class="fa fa-question-circle green"></i></label>
                              <select class="form-control">
                                <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
                                <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
                                <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
                                <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
                                <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
                                <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
                                <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
                                <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
                                <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
                                <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
                                <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
                                <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
                                <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                                <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
                                <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
                                <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
                                <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
                                <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
                                <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
                                <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
                                <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                                <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
                                <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
                                <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
                                <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
                                <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
                                <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
                                <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
                                <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
                                <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
                                <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                                <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
                                <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
                                <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
                                <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
                                <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                                <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
                                <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                                <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
                                <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                                <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
                                <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
                                <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
                                <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
                                <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
                                <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
                                <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
                                <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
                                <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
                                <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
                                <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
                                <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
                                <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Redirect URL <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter redirect URL">
                            </div>
                            <div class="checkbox mr_b30">
                              <label>
                                <input type="checkbox">
                                Redirect All </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Site Title <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="BOON">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title Separator <i class="fa fa-question-circle green"></i></label>
                              <div class="clearfix"></div>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
                                Pipe (|) </label>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                Dash (-) </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Tagline Title <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="THE MOTTO HERE">
                            </div>
                            <div class="checkbox mr_b30">
                              <label>
                                <input type="checkbox">
                                Use on homepage </label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Tagline Subtitle <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter tagline subtitle">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Meta Description <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter meta description">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Favicon URL <i class="fa fa-question-circle green"></i></label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter favicon URL">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
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