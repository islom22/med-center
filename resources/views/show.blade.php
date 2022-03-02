<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MedCenter.uz</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body class="hold-transition sidebar-mini">
  <div class="row">
    <div class="col-md-3">
      
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; position:absolute; top:0%; bottom:0%">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      
      <i class="fas fa-heartbeat fa-2x px-2"></i>
      <span class="fs-4">Med-Center</span>
    </a>
    <hr>  
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="/home"></use></svg>
          Home
        </a>
      </li>
    </ul>
    @yield('sidebar')
  </div>
    </div>
    <div class="col-md-9">
      <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light; justify-content: flex-end !important;">
          <ul class="navbar-nav mb-0">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">Home</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
             
                    
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
      
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
               
            </li>
            
            <li class="nav-item">
              {{-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
              </a> --}}
              <div class="navbar-search-block">
                <form class="form-inline">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                      <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
      
          </ul>
        </nav>
      </div>
    </div>
  </div>


 

  
  <div class="content-wrapper" style="width: 81%; margin-left: auto">
    
    
    <div id="div1">
      <div class="container">
        @yield('content')
      </div>
    </div>
  </div>
 

  
  <aside class="control-sidebar control-sidebar-dark">
 
    <div class="p-3" style="position: absolute; width: 100%; bottom: 0;">
     <!-- <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside> -->
  <div class="container">
    <footer class="main-footer" style="display: flex; justify-content: center;">
      <strong>Copyright &copy; 2022.  </strong> All rights reserved.
    </footer>
  </div>
  
</div>


<style>
  .navbar-expand{
    justify-content: flex-end !important
  }
</style>