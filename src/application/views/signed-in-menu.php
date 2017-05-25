<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/"><img src="/assets/images//logo.png" class="img-responsive"></a> </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><i class="fa fa-play"></i> Get Started</a></li>
          <li><a href="#">How it Works</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Help</a></li>
          <li>
            <form method="get" action="<?php echo site_url('search')?>">
              <div id="custom-search-input">
                <div class="input-group">
                  <input type="text" class="  search-query form-control" placeholder="Search" name="q"/>
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"> <span class=" glyphicon glyphicon-search"></span> </button>
                  </span> </div>
              </div>
            </form>
          </li>
          <li><a href="<?php echo site_url('user/signOut') ?>" class="btn btn-primary">Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>