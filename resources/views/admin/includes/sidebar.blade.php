<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      
     
      <img src="{{ asset('public/upload/default.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 ml-1" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           
          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                General Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
            </ul>
          </li>
       
       

          <li class="nav-item">
            <a href="{{ url('/admin/logout') }}" class="nav-link" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
              <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>