<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>@yield('title') | {{config('app.name')}}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/components.css">

  {{-- custiom CSS --}}
@stack('page-styles')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
     @include('layoutss.navbar')
     @include('layoutss.sidebar')
    

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                  <div class="breadcrumb-item">Form</div>
                </div>
              </div>

      @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @stack('before-scripts')
  <!-- General JS Scripts -->
  <script src="/js/jquery-3.5.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="/js/stisla.js"></script>
  <!-- JS Libraies -->
  @stack('pages-sctipts')

  <!-- Template JS File -->
  <script src="/js/scripts.js"></script>
  <script src="/js/custom.js"></script>

  <!-- Page Specific JS File -->
  @stack('after-scripts')
</body>
</html>
