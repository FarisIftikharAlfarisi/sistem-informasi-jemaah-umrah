<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-2 text-muted"><span>Dashboard</span></h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard
                </a>
              </li>
        @endcan
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Jemaah</span></h6>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/datajemaah*') ? 'active' : '' }}" aria-current="page" href="/dashboard/datajemaah">
                <span data-feather="users"></span> Data Jemaah </a>
        </li>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Web Post</span></h6>
        <li class="nav-item">
            <a href="/posts" class="nav-link"><span data-feather="arrow-left"></span> To Front Page </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file" class="align-text-bottom"></span>
            My Posts
          </a>
        </li>
        <li class="nav-item">
            <a href="/dashboard/categories" class="nav-link {{ Request::is('dashboard/categories') ? 'active' : '' }}"> <span data-feather="bookmark"></span> Post Categories </a>
        </li>
      </ul>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Administrator</span></h6>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a href="/dashboard/marketing" class="nav-link {{ Request::is('dashboard/marketing*') ? 'active' : '' }}"> <span data-feather="users"></span> Marketing </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>
