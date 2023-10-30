<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>DKP</b>3</span>
    <!-- logo for regular state and mobile devices -->
    <div class="pull-left image">
      <img src="{{ asset('template/dist/img/pemko.png') }}" width="50">
    </div>
    <span class="logo-lg"><b>DKP</b>3</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top navbar-primary" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
              <span class="hidden-xs">{{ Auth()->user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
              <!-- Menu Body -->
              <li class="user-body">
                  <div class="row">
                      <div class="col-xs-12 text-center">
                          <p>
                              {{ Auth()->user()->name }}<br>
                              <small>Since {{ Auth()->user()->created_at->format('D. M. Y') }}</small>
                          </p>
                          <hr>
                          <a href="{{ url('Logout') }}" class="d-block" onclick='return confirm("yakin?")'>Logout</a>
                      </div>
                  </div>
              </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
