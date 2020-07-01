<header>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
    <a class="navbar-brand" href="#"><strong>Online | Library</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="fa fa-home" aria-hidden="true"></i> Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          {{-- <i class="fab fa-facebook-f"> </i> --}}<i class="fa fa-info-circle" aria-hidden="true"></i> Information
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-signal" aria-hidden="true"></i> News
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-question-circle" aria-hidden="true"></i> Help
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-plus" aria-hidden="true"></i> Librarian</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-users" aria-hidden="true"></i> Member Area</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="#">My account</a>
            <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
            <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>

    </div>
  </nav>


  <!--Main layout-->
  <main class="pt-4">

    <!--Intro-->
    <section>

      <!--Carousel Wrapper-->
      <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city13.jpg" alt="First slide">
              <div class="mask rgba-indigo-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">Welcome To Our Online Library</h1>
                    </li>
                    <li>
                      <p>Tempora incidunt ut labore et dolore veritatis et quasi architecto beatae</p>
                    </li>

                  </ul>
                </div>
                <!-- /.Caption -->
              </div>
            </div>
          </div>
          <!--/First slide-->
          <!--Second slide-->
          <div class="carousel-item h-100">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city10.jpg" alt="Second slide">
              <div class="mask rgba-stylish-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">Welcome To Our Online Library </h1>
                    </li>
                    <li>
                      <p>Nemo enim ipsamvoluptatem quia veritatis et quasi architecto beatae</p>
                    </li>
                  </ul>
                </div>
                <!-- /.Caption -->
              </div>
            </div>
          </div>
          <!--/Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <div class="view h-100">
              <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city12.jpg" alt="Third slide">
              <div class="mask rgba-black-light">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeIn col-10 list-unstyled">
                    <li>
                      <h1 class="h1-responsive font-weight-bold">Welcome To Our Online Library</h1>
                    </li>
                    <li>
                      <p>Unde omnis iste natus sit voluptatem veritatis et quasi architecto beatae</p>
                    </li>
                  </ul>
                </div>
                <!-- /.Caption -->
              </div>
            </div>
          </div>
          <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->

    </section>
    <!--/Intro-->
