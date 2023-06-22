<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        @auth
        <div class="info">
            <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
        <br>
        <div class="info">
            <h6 style="color: white">({{ Auth::user()->profil->age}} tahun)</h6>
        </div>
        @endauth

        @guest
        <div class="info">
            <a href="#" class="d-block">Guest</a>
        </div>
        @endguest
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Tables
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/table" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Table</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/data-table" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Tables</p>
                        </a>
                    </li>
                </ul>
            <li class="nav-item">
                <a href="/cast" class="nav-link">
                    <i class="nav-icon fas fa-user-alt"></i>
                    <p>
                        Cast
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/film" class="nav-link">
                    <i class="nav-icon fas 	fa fa-film"></i>
                    <p>
                        Film
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/genre" class="nav-link">
                    <i class="nav-icon fas 	fa fa-filter"></i>
                    <p>
                        Genre Film
                    </p>
                </a>
            </li>

            @guest
            <li class="nav-item">
              <a href="/login" class="nav-link">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>
                      Login
                  </p>
              </a>
          </li>
            @endguest

            @auth
            <li class="nav-item">
                <a href="/profil" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Profil
                    </p>
                </a>
            </li>

            <li class="nav-item bg-danger" aria-labelledby="navbarDropdown">
              <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>
            @endauth
   
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
