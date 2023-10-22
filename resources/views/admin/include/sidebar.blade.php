<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('home')  ? '' : 'collapsed' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->








      <li class="nav-heading">Other</li>

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('systemInfo.index')  ? '' : 'collapsed' }}" href="{{ route('systemInfo.index') }}">
          <i class="bi bi-gear-fill"></i>
          <span>System Info</span>
        </a>
      </li><!-- End Profile Page Nav -->



    </ul>

  </aside>
