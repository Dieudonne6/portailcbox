<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    {{-- <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="asset/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">David Grey. H</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" href="{{url('/admin/dashbord')}}" >
        <span class="menu-title">Tableau de bord</span>

        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('/admin/addforms')}}">
        <span class="menu-title">Ajouter un sous domaine</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>