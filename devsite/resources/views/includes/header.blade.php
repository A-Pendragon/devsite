<!--
    This is the default header for pages if the user are not logged in.
 -->

<!-- Navbar not logged in -->
<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand navbar-logo" href="/">
      	DevSite
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login">Log in</a></li>
          <li><a href="signup">Sign up</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger navbar-dropdown"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/">DevSite</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </li>
        </ul>
      @else
        <ul class="nav navbar-nav">
          <li><a href="post">Post</a></li>
        </ul>

        <!-- Search bar -->
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" id="nav-search-bar" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn _btn-default" type="button" id="nav-search-bar-btn">Go!</button>
            </span>
          </div>
        </form>
      
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="profile">
              <img src="/uploads/profile_pics/{{ Auth::user()->profile_pic }}" class="navbar-profile-pic">
              {{ Auth::user()->first_name }}
            </a>
          </li>
          <li><a href="home"><i class="glyphicon glyphicon-home">&nbsp;</i>Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger navbar-dropdown"></span></a>
            <ul class="dropdown-menu">
              <li><a href="basicinfo"><i class="glyphicon glyphicon-edit"></i>&nbsp;&nbsp;Edit Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>&nbsp;&nbsp;Help</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-alert"></i>&nbsp;&nbsp;Report a Problem</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="glyphicon glyphicon-cog"></i>&nbsp;&nbsp;Settings</a></li>
              <li><a href="logout"><i class="glyphicon glyphicon-log-out"></i>&nbsp;&nbsp;Log out</a></li>              
            </ul>
          </li>
        </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- /Navbar not logged in -->