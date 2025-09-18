<div class="sidebar-wrapper sidebar-theme">
  <nav id="sidebar">
    <div class="navbar-nav theme-brand flex-row text-center">
      <div class="nav-logo">
        <div class="nav-item theme-logo">
          <a href="{{ url('/admin') }}" class="brand-link">
            <img src="{{ url('vendor/adminlte/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Elabels</span>
          </a>
        </div>
      </div>
      <div class="nav-item sidebar-toggle">
        <div class="btn-toggle sidebarCollapse">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
            <polyline points="11 17 6 12 11 7"></polyline>
            <polyline points="18 17 13 12 18 7"></polyline>
          </svg>
        </div>
      </div>
    </div>
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">

      @php
        $tenantId = request()->route('tenant')
            ?? request()->segment(1)
            ?? request()->input('tenant')
            ?? null;
      @endphp

      {{-- Dashboard - with permission check --}}
      @if(auth('swiftpos')->user()?->canAccess('dashboard','view'))
      <li class="menu">
        <a href="{{ route('swiftpos.dashboard', ['tenant' => $tenantId]) }}"
           aria-expanded="true"
           class="dropdown-toggle @if(request()->routeIs('swiftpos.dashboard')) active @endif">
          <div>
            <svg class="nav-icon bi bi-speedometer" width="24" height="24" fill="currentColor">
              <use xlink:href="#speedometer"></use>
            </svg>
            <span>Dashboard</span>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        </a>
      </li>
      @endif

      {{-- Store Users --}}
      <li class="menu">
        <a href="{{ route('swiftpos.posusers', ['tenant' => $tenantId]) }}"
           aria-expanded="false"
           class="dropdown-toggle @if(request()->routeIs('swiftpos.posusers')) active @endif">
          <div>
            <svg class="nav-icon bi bi-speedometer" width="24" height="24" fill="currentColor">
              <use xlink:href="#speedometer"></use>
            </svg>
            <span>Store Users</span>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        </a>
      </li>

      {{-- Roles --}}
      <li class="menu">
        <a href="{{ route('swiftpos.roles', ['tenant' => $tenantId]) }}"
           aria-expanded="false"
           class="dropdown-toggle @if(request()->routeIs('swiftpos.roles')) active @endif">
          <div>
            <svg class="nav-icon bi bi-speedometer" width="24" height="24" fill="currentColor">
              <use xlink:href="#speedometer"></use>
            </svg>
            <span>Roles</span>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        </a>
      </li>

      <!-- Add more sidebar items here matching your menu requirements and routes -->

    </ul>
  </nav>
</div>
