<nav class="navbar navbar-expand justify-content-between fixed-top">
  <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
    <img src="./dist/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
    Dashboard Admin Friday For Future
  </a>

  <div class="d-flex flex-1 d-block d-md-none">
    <a href="#" class="sidebar-toggle ml-3 black-hover">
      <i data-feather="menu"></i>
    </a>
  </div>

  <ul class="navbar-nav d-flex justify-content-end mr-2">
    <li class="nav-item dropdown">
      <a class="nav-link avatar-with-name collapsed" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
      <span class="sidebar-nav-name logout-admin">Log Out</span>
      <i data-feather="user" class="logout-admin"></i>
        <!-- <span class="sidebar-nav-end">
              <i data-feather="chevron-right" class="nav-collapse-icon"></i>
        </span> -->
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item text-danger" href="../login_secure/logout.php">Yakin Log Out</a>
      </div>
    </li>
  </ul>
</nav>