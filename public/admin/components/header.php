<?php $full_name = $worker->get_full_name(); ?>
<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>C</b>O</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Cross</b>Over</span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo "{$full_name}"; ?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Sign out</span></a></li>
            </ul>
          </li>
      </ul>
    </div>
  </nav>
</header>
