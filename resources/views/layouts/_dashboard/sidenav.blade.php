<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.index')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('kasm.index')}}">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">Kas Masuk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Kas Keluar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Report</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> LogOut</a></li>
           
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>