<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
    <title>Blank | Dasher - Responsive Bootstrap 5 Admin Dashboard</title>
   
    @include('admin.components.icons')

<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-144x144.png" />
<meta name="theme-color" content="#ffffff" />

@include('admin.components.js-head')
@include('admin.components.css')

<!-- FIX TOTAL -->
<style>
  html, body {
    height: 100%;
  }

  #content {
    min-height: 100vh;
    padding-bottom: 70px; /* ruang untuk footer */
  }

  footer.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 100;
  }
</style>

  </head>

  <body class="d-flex flex-column min-vh-100">
 @include('admin.partial.side-navbar')

      <!-- Main Content -->
      <div id="content" class="position-relative flex-grow-1">
       
@include('admin.partial.top-navbar')

        <div class="custom-container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="mb-5">
                  @yield('content')
              </div>
            </div>
          </div>
        </div>

      </div>

@include('admin.components.js')

<footer class="footer mt-auto">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-md-12 col-sm-12 text-center">
        <p class="text-center">
          All rights reserved by 
          <a href="https://codescandy.com" target="__blank">CodesCandy</a>. 
          Distributed ny 
          <a href="https://themewagon.com" target=__blank">Themewagon</a>.
        </p>
      </div>
    </div>
  </div>
</footer>

  </body>
</html>