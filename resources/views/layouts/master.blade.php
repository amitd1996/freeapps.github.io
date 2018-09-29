<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('/public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/public/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('/public/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/public/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />

    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">

    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">

    <style>
        body{
          font-family: 'Raleway', sans-serif;
        }
        #particles-js{
          background: #f00;
        }
        #stats{
          border-radius: 3px 3px 0 0;
          overflow: hidden;
        }
      </style>


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{ url('dashboard') }}">FreeApps</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      @auth
      <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>  {{ auth()->user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
          </li>
        </ul>
      @endauth
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('homes') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Home</span>
            </a>
          </li>
          @auth
        </li>
                {{-- For Admin Menu --}}

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Admin</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="{{ url('admincreate') }}">Create</a>
                    <a class="dropdown-item" href="{{ url('adminview') }}">view</a>
                  </div>
                </li>

                {{-- For Post Menu  --}}

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Post</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="{{ url('create') }}">Create</a>
                    <a class="dropdown-item" href="{{ url('postview') }}">view</a>
                  </div>
                </li>

        @else

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Login Screens:</h6>
              <a class="dropdown-item" href="{{ route('login') }}">Login</a>
              <a class="dropdown-item" href="{{ route('register') }}">Register</a>
              <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="404.html">404 Page</a>
              <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>

        @endauth

      </ul>

      <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              @auth
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger">Logout</button>
              </form>
              @endauth
            </div>
          </div>
        </div>
      </div>


      <div id="content-wrapper">
              <!--     Put Main Contain Here      -->
              <!-- Container -->
              <!--                                -->
        <div class="container-fluid">
                @yield('content')



        <!--                                       -->
        <!--          End container                -->
        <!--                                       -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
              </div>
            </div>
          </footer>

        </div>
        <!-- /.content-wrapper -->

      </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/public/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/public/js/sb-admin.min.js') }}"></script>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{-- Date Picker --}}

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- <script>
        $( function() {
          $( "#datepicker" ).datepicker({ minDate: 0 });
        } );
        // </script> --}}

        {{-- For yy-mm-dd --}}
        <script>
           $(function(){
        $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#to").datepicker( "option", "minDate", minValue );
        })
    });
        </script>

    {{-- Jqeury Validaton --}}

    {{-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.js"></script>
    <script>
      $(function(){
        $("#register-form").validate({
          rules: {
            Name: {
              required: true;
            }
          },
          messages: {
            Name: {
              required: 'Please'
            }
          }
        });
      });
    </script> --}}

    <!-- Particles.js -->
    <script src="{{ asset('/public/js/particles.js') }}"></script>
    <script src="{{ asset('/public/js/particleapp.js') }}"></script>
    <script>
      var count_particles, stats, update;
      stats = new Stats;
      stats.setMode(0);
      stats.domElement.style.position = 'absolute';
      stats.domElement.style.left = '0px';
      stats.domElement.style.top = '0px';
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector('.js-count-particles');
      update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>
    <script
            src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.js"></script>
        <script>
            $(function () {
                $("#register-form").validate({
                    rules: {
                        Category: {
                            required: true
                        },
                        Post: {
                            required: true,
                            minlength: 100
                        }
                    },
                    messages: {
                      Post: {
                       required: "Please Enter a Post",
                       minlength: "Your Post must consist of at least 100 Words"
                     }
                    }
                });
            });
        </script>
        <style>
            #register-form label.error {
                margin-left: 15px;
                clear: both !important;
            }
            label.error {
                color: red;
                font-size: 16px;
                font-weight: normal;
                line-height: 1.4;
                margin-top: 0.5em;
                width: 100%;
                clear: both;
            }
            em {
                color: red;
                font-weight: bold;
                padding-right: 0.25em;
            }
            .input-group > .custom-file,
            .input-group > .custom-select,
            .input-group > .form-control {
                clear: both;
            }
        </style>
  </body>

</html>
