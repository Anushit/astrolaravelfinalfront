  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link p-0" data-toggle="dropdown" href="#">
         {{ Auth::guard('admin')->user() ->name }}
            <img src="{{ asset('public/upload/default.png') }}" alt="User Avatar" class="img-circle" style="width: 40px;">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right border-0">
            <div class="row text-center my-2">
              <div class="col-12">
                  <a href=""> 
                      <img src="{{ asset('public/upload/default.png') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle" style="width: 50;height: 50px;">
                     {{ Auth::guard('admin')->user() ->name }}
                  </a>
              </div>
              <div class="col-12">
                  <h5 class="m-0">
                    <a class="text-dark" href=""></a>
                  </h5>
                 

              <p class="btn btn-sm btn-danger" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Logout</p>
              <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
             </form>
              </div>
            </div>
            <!-- Message End -->
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>