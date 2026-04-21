  <!-- navbar -->
<div class="navbar-glass navbar navbar-expand-lg px-0 px-lg-4">
  <div class="container-fluid px-lg-0">
    <div class="d-flex align-items-center gap-4">
      <!-- Collapse -->
      <div class="d-block d-lg-none">
        <a class="text-inherit" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
          aria-controls="offcanvasExample">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 6l16 0" />
            <path d="M4 12l16 0" />
            <path d="M4 18l16 0" />
          </svg>
        </a>
      </div>
      <div class="d-none d-lg-block">
        <a class="sidebar-toggle d-flex texttooltip p-3" href="javascript:void(0)" data-template="collapseMessage">
          <span class="collapse-mini">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-bar-left text-secondary">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 12l10 0" />
              <path d="M4 12l4 4" />
              <path d="M4 12l4 -4" />
              <path d="M20 4l0 16" />
            </svg>
          </span>
          <span class="collapse-expanded">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-bar-right text-secondary">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M20 12l-10 0" />
              <path d="M20 12l-4 4" />
              <path d="M20 12l-4 -4" />
              <path d="M4 4l0 16" />
            </svg>
            <div id="collapseMessage" class="d-none">
              <span class="small">Collapse</span>
            </div>
          </span>
        </a>
      </div>
      <!-- Logo -->
      <!-- <div class="d-block d-md-none">
        <a href="../index.html">
          <img src="{{ asset('storage/admin/assets/images/brand/logo/logo-icon.svg') }}" alt="" />
        </a>
      </div> -->
    </div>

    <!-- Navbar nav -->
    <ul class="list-unstyled d-flex align-items-center mb-0 gap-2">
      <!-- Pages link -->
      @include('admin.partial.top-navbar-search')
      <!-- Light dark mode-->
      <li>
        <div class="dropdown">
          <button class="btn btn-ghost btn-icon rounded-circle d-flex align-items-center" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <i class="ti theme-icon-active lh-1 fs-5"><i class="ti theme-icon ti-sun"></i></i>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                aria-pressed="true">
                <i class="ti theme-icon ti ti-sun"></i>
                <span class="ms-2">Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                aria-pressed="false">
                <i class="ti theme-icon ti-moon-stars"></i>
                <span class="ms-2">Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                aria-pressed="false">
                <i class="ti theme-icon ti-circle-half-2"></i>
                <span class="ms-2">Auto</span>
              </button>
            </li>
          </ul>
        </div>
      </li>
      <!-- Bell icon -->
      <li>
        <a class="position-relative btn-icon btn-ghost btn rounded-circle" data-bs-toggle="offcanvas"
          href="#offcanvasNotification" role="button" aria-controls="offcanvasNotification">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
          </svg>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
            2
            <span class="visually-hidden">unread messages</span>
          </span>
        </a>
      </li>
      <!-- Dropdown -->
      <li class="ms-3 dropdown">
        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('storage/admin/assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
          <div>
            <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-4 py-4">
              <img src="{{ asset('storage/admin/assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
              <div>
                <h4 class="mb-0 fs-5">Jitu Chauhan</h4>
                <p class="mb-0 text-secondar small">@imjituchauhan</p>
              </div>
            </div>
            <div class="p-3 d-flex flex-column gap-1">
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-home-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M10 12h4v4h-4z" />
                  </svg>
                </span>
                <span>Home</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-inbox">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                    <path d="M4 13h3l3 3h4l3 -3h3" />
                  </svg>
                </span>
                <span> Inbox</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 9h8" />
                    <path d="M8 13h6" />
                    <path
                      d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                  </svg>
                </span>
                <span> Chat</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-activity">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12h4l3 8l4 -16l3 8h4" />
                  </svg>
                </span>
                <span> Activity</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  </svg>
                </span>
                <span> Account Settings</span>
              </a>
            </div>
            <div class="border-dashed border-top mb-4 pt-4 px-6">
              <a href="#!" class="text-secondary d-flex align-items-center gap-2">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-login-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                    <path d="M3 12h13l-3 -3" />
                    <path d="M13 15l3 -3" />
                  </svg>
                </span>
                <span>Logout</span></a>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!--Offcanvas notification-->
@include('admin.partial.top-navbar-notification')
<!-- Modal of pages -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <input type="search" class="form-control border-0 rounded-0 ps-0 form-focus-none" id="globalSearchInput"
          placeholder="Search any word..." aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal" aria-label="Close">Esc</button>
      </div>

    </div>
  </div>
</div>