<!--Offcanvas notification-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotification"
  aria-labelledby="offcanvasNotificationLabel">
  <div class="sticky-top bg-white">
    <div class="offcanvas-header gap-4">
      <div class="d-flex justify-content-between w-100">
        <h5 class="mb-0" id="offcanvasNotificationLabel">Notifications</h5>
        <div class="d-flex gap-3 align-items-center">
          <a href="#" class="link-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
            data-bs-title="Mark all as read">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-checks">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M7 12l5 5l10 -10" />
              <path d="M2 12l5 5m5 -5l5 -5" />
            </svg>
          </a>
          <a href="#" class="text-inherit">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
            </svg>
          </a>
        </div>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="mt-2">
      <ul class="nav nav-line-bottom" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active px-4 py-2" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
            type="button" role="tab" aria-controls="pills-all" aria-selected="true">
            All
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link px-4 py-2" id="pills-following-tab" data-bs-toggle="pill"
            data-bs-target="#pills-following" type="button" role="tab" aria-controls="pills-following"
            aria-selected="false">
            Following
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link px-4 py-2" id="pills-archive-tab" data-bs-toggle="pill"
            data-bs-target="#pills-archive" type="button" role="tab" aria-controls="pills-archive"
            aria-selected="false">
            Archive
          </button>
        </li>
      </ul>
    </div>
  </div>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
      <div data-simplebar="" style="height: 800px">
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-column gap-1">
                <div>New message from John Doe</div>
                <small class="text-secondary"> 2 minutes ago</small>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-column gap-1">
                <div>Your password will expire soon.</div>
                <small class="text-secondary"> 2 minutes ago</small>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Alice uploaded a new profile picture.</div>
                  <small class="text-secondary"> 1 hour ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-2.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Mike sent you a friend request.</div>
                  <small class="text-secondary"> 5 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
            <div class="d-flex gap-2 align-items-center mt-4">
              <button type="button" class="btn btn-primary btn-sm">Accept</button>
              <button type="button" class="btn btn-white btn-sm">Decline</button>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-3.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Sophia commented on your post.</div>
                  <small class="text-secondary"> 20 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-primary-subtle text-primary-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>A system update has been installed.</div>
                  <small class="text-secondary"> 30 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-info-subtle text-info-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                    <path d="M16 3v4" />
                    <path d="M8 3v4" />
                    <path d="M4 11h16" />
                    <path d="M7 14h.013" />
                    <path d="M10.01 14h.005" />
                    <path d="M13.01 14h.005" />
                    <path d="M16.015 14h.005" />
                    <path d="M13.015 17h.005" />
                    <path d="M7.01 17h.005" />
                    <path d="M10.01 17h.005" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Reminder: Team meeting at 3:00 PM.</div>
                  <small class="text-secondary"> 1 hour ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-danger-subtle text-danger-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Your order has been shipped!</div>
                  <small class="text-secondary"> 2 hours ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-3.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Sophia commented on your post.</div>
                  <small class="text-secondary"> 20 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-primary-subtle text-primary-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>A system update has been installed.</div>
                  <small class="text-secondary"> 30 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-info-subtle text-info-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                    <path d="M16 3v4" />
                    <path d="M8 3v4" />
                    <path d="M4 11h16" />
                    <path d="M7 14h.013" />
                    <path d="M10.01 14h.005" />
                    <path d="M13.01 14h.005" />
                    <path d="M16.015 14h.005" />
                    <path d="M13.015 17h.005" />
                    <path d="M7.01 17h.005" />
                    <path d="M10.01 17h.005" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Reminder: Team meeting at 3:00 PM.</div>
                  <small class="text-secondary"> 1 hour ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-danger-subtle text-danger-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Your order has been shipped!</div>
                  <small class="text-secondary"> 2 hours ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-following" role="tabpanel" aria-labelledby="pills-following-tab" tabindex="0">
      <div data-simplebar="" style="height: 800px">
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-info-subtle text-info-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                    <path d="M16 3v4" />
                    <path d="M8 3v4" />
                    <path d="M4 11h16" />
                    <path d="M7 14h.013" />
                    <path d="M10.01 14h.005" />
                    <path d="M13.01 14h.005" />
                    <path d="M16.015 14h.005" />
                    <path d="M13.015 17h.005" />
                    <path d="M7.01 17h.005" />
                    <path d="M10.01 17h.005" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Reminder: Team meeting at 3:00 PM.</div>
                  <small class="text-secondary"> 1 hour ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-danger-subtle text-danger-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Your order has been shipped!</div>
                  <small class="text-secondary"> 2 hours ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-3.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Sophia commented on your post.</div>
                  <small class="text-secondary"> 20 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-primary-subtle text-primary-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>A system update has been installed.</div>
                  <small class="text-secondary"> 30 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-info-subtle text-info-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                    <path d="M16 3v4" />
                    <path d="M8 3v4" />
                    <path d="M4 11h16" />
                    <path d="M7 14h.013" />
                    <path d="M10.01 14h.005" />
                    <path d="M13.01 14h.005" />
                    <path d="M16.015 14h.005" />
                    <path d="M13.015 17h.005" />
                    <path d="M7.01 17h.005" />
                    <path d="M10.01 17h.005" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Reminder: Team meeting at 3:00 PM.</div>
                  <small class="text-secondary"> 1 hour ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <div class="icon-shape icon-md bg-danger-subtle text-danger-emphasis rounded-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-1">
                  <div>Your order has been shipped!</div>
                  <small class="text-secondary"> 2 hours ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-archive" role="tabpanel" aria-labelledby="pills-archive-tab" tabindex="0">
      <div data-simplebar="" style="height: 800px">
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-column gap-1">
                <div>New message from John Doe</div>
                <small class="text-secondary"> 2 minutes ago</small>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-column gap-1">
                <div>Your password will expire soon.</div>
                <small class="text-secondary"> 2 minutes ago</small>
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Alice uploaded a new profile picture.</div>
                  <small class="text-secondary"> 1 hour ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-action p-5 border-dashed border-bottom">
            <div class="d-flex justify-content-between">
              <div class="d-flex gap-4 align-items-center">
                <img src="{{ asset('storage/admin/assets/images/avatar/avatar-2.jpg') }}" alt="" class="avatar avatar-md rounded-circle" />
                <div class="d-flex flex-column gap-1">
                  <div>Mike sent you a friend request.</div>
                  <small class="text-secondary"> 5 minutes ago</small>
                </div>
              </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                </svg>
              </div>
            </div>
            <div class="d-flex gap-2 align-items-center mt-4">
              <button type="button" class="btn btn-primary btn-sm">Accept</button>
              <button type="button" class="btn btn-white btn-sm">Decline</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="px-5 py-3 text-center bg-white position-absolute bottom-0 border-top border-dashed w-100 text-center">
    <a href="#!" class="text-inherit">View all</a>
  </div>
</div>