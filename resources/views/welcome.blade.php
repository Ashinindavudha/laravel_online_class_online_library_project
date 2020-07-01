@extends('layouts.user_template')

@section('content')

<section>
    <div class="container">
        <!-- Search form -->
        <div class="active-pink-3 active-pink-4 mb-4">
          <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
              aria-label="Search">
          </form>
      </div>
      <!--Section heading-->
      <h2 class="text-center h2 my-5 pt-4">Recent posts</h2>
      <!--Section description-->
      <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
      sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <!--Grid row-->
      <div class="row text-center mb-2">

        <!--Grid column-->
        @foreach($books as $book)
        <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1 mb-2">
                @foreach($book->cover_image as $key => $media)
                <a href="{{ $media->getUrl() }}" target="_blank">
                    <img src="{{ $media->getUrl('thumb') }}" class="img-fluid" alt="First sample image"> </a> 
                    @endforeach
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <h4 class="mb-2 mt-4 font-weight-bold">{{ $book->title }}</h4>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-6 text-lg-right ">
                        <p class="grey-text">
                            <i class="far fa-clock-o" aria-hidden="true"></i> July 5, 2017</p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-6 col-md-6 text-lg-left">
                            <p class="grey-text">
                                <i class="far fa-comment-dots" aria-hidden="true"></i> 6 Comments</p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                        placeat facere possimus voluptas...</p>
                        <a class="text-uppercase font-small font-weight-bold spacing">Read more</a>
                        <hr class="mt-1" style="max-width: 90px">
                    </div>
                    @endforeach
                    <!--Grid column-->



            </div>
            <!--Grid row-->

            <!--Pagination -->
            <nav class="my-4 flex-center">
                <ul class="pagination pagination-circle pg-blue mb-0">

                    <!--First-->
                    <li class="page-item disabled clearfix d-none d-md-block">
                        <a class="page-link">First</a>
                    </li>

                    <!--Arrow left-->
                    <li class="page-item disabled">
                        <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <!--Numbers-->
                    <li class="page-item active">
                        <a class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link">5</a>
                    </li>

                    <!--Arrow right-->
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>

                    <!--First-->
                    <li class="page-item clearfix d-none d-md-block">
                        <a class="page-link">Last</a>
                    </li>

                </ul>
            </nav>
<!--/Pagination -->

</div>

</section>
<!--Blog section-->

<!--Latest posts-->
        <section>
            <div class="container-fluid grey lighten-3 mb-0 pb-0">
                <div class="container">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12">
                            <h6 class="font-weight-bold mt-5 mb-3">ABOUT</h6>
                            <hr class="mb-5">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img (108).jpg" alt="sample image" class="img-fluid z-depth-1">
                            <p class="mt-4 mb-5">Sed ut in perspiciatis unde omnis iste natus error sit on i tatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6">
                            <h6 class="font-weight-bold mt-5 mb-3">LATESTS POSTS</h6>
                            <hr class="mb-5">
                            <!--Grid row-->
                            <div class="row mt-4">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-8 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Sed ut in perspiciatis unde omnis</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/photo11.jpg" class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">At vero eos et accusamus et </a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/photo15.jpg" class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Nemo enim ipsam voluptatem</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6">
                            <h6 class="font-weight-bold mt-5 mb-3">OLDER POSTS</h6>
                            <hr class="mb-5">
                            <!--Grid row-->
                            <div class="row mt-4">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/photo1.jpg" class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-8 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Sed ut in perspiciatis unde omnis</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">At vero eos et accusamus et </a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                    <div class="view overlay z-depth-1 mb-3">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/photo4.jpg" class="img-fluid" alt="Post">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Nemo enim ipsam voluptatem</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>July 22, 2017</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
            </div>

        </section>
        <!--/Latest posts-->


@endsection