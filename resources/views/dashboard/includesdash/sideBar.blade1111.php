<div class="wrapper">
  <!-- Sidebar -->
  <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ route('main') }}" class="logo {{ request()->is('main') ? 'active' : '' }}">
          <span class="fa fa-book-reader me-3" style="color: #274472; font-size: 2rem;"></span>
          <span class="navbar-brand" style="color: #E8E8E8; font-size: 2rem;">Kideradmin</span>
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="{{ route('home') }}"  aria-expanded="false">
              <i class="fas fa-home"></i>

              <p>Kider</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('home') }}">
                    <span class="fa fa-book-reader me-3" style="color: #ff8c00; font-size: 1.25rem;"> Kider Site</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Data Analysis</h4>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="{{ route('course') }}">
              <i class="fas fa-layer-group"></i>
              <p>Classes</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('course') }}">
                    <span class="sub-item {{ request()->is('course') ? 'active' : '' }}">Classes Table</span>
                  </a>
                </li>
                <li>
                  <a href="components/avatars.html">
                    <span class="sub-item">Art & Drawing</span>
                  </a>
                </li>
                    <li>
                      <a href="components/buttons.html">
                        <span class="sub-item">Color Management</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/gridsystem.html">
                        <span class="sub-item">Athletic & Dance</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/panels.html">
                        <span class="sub-item">Language & Speaking</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/notifications.html">
                        <span class="sub-item">Religion & History</span>
                      </a>
                    </li>
                    <li>
                      <a href="components/sweetalert.html">
                        <span class="sub-item">General Knowledge</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="{{ route ('teachers') }}">
                  <i class="fas fa-th-list"></i>
                  <p>Teachers</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                  <li>
                      <a href="{{ route ('teachers') }}">
                        <span class="sub-item {{request()->is('teachers') ? 'active' : ''}}">Teachers List</span> 
                      </a>
                    </li>
                    <li>
                      <a href="sidebar-style-2.html">
                        <span class="sub-item">Add Teacher</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route ('teachers') }}">
                        <span class="sub-item {{request()->is('teachers') ? 'active' : ''}}">Candidate Teachers</span>
                      </a>
                    </li>
                    <li>
                      <a href="sidebar-style-2.html">
                        <span class="sub-item">Current Teachers</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Guardians</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="forms/forms.html">
                        <span class="sub-item">Guardians Info</span>
                      </a>
                    </li>
                    <li>
                      <a href="forms/forms.html">
                        <span class="sub-item">Testimonials</span>
                      </a>
                    </li>
                    <li>
                      <a href="forms/forms.html">
                        <span class="sub-item">Recommendations</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Kids</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="tables/tables.html">
                        <span class="sub-item">Kids Table</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-pen-square"></i>
                  <p>Accounts Management</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="maps/googlemaps.html">
                        <span class="sub-item">Login</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route ('join') }}">
                        <span class="sub-item">Registration</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Charts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="charts/charts.html">
                        <span class="sub-item">Chart Js</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Sparkline</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                  <i class="fas fa-bars"></i>
                  <p>Appointments</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Add Appointment</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Modify Appointment</span>
                      </a>
                    </li>
                    <li>
                      <a href="charts/sparkline.html">
                        <span class="sub-item">Cancel Appointment</span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="{{ asset('adminassets/img//kaiadmin/logo_light.svg') }}"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>