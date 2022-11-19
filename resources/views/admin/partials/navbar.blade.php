<aside class="left-sidebar" data-sidebarbg="skin6">
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <!-- User Profile-->
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}" aria-expanded="false"><i class="me-3 mdi mdi-view-dashboard fs-3" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('devices.index') }}" aria-expanded="false">
            <i class="me-3 mdi mdi-desktop-mac fs-3" aria-hidden="true"></i><span class="hide-menu">Devices</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('rents.index') }}" aria-expanded="false">
            <i class="me-3 mdi mdi-timer fs-3" aria-hidden="true"></i><span class="hide-menu">Rents</span></a>
        </li>
        <li class="sidebar-item">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" onclick="return confirm('are you sure')" class="sidebar-link waves-effect waves-dark sidebar-link border-0 bg-white"><i class="e-3 mdi mdi-logout fs-3"></i><span class="hide-menu">Logout</span></button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
