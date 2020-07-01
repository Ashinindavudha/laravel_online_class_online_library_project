@extends('layouts.user')

@section('content')

<div class="works" id="work">
                <div class="container">
                    <!-- default heading -->
                    <div class="default-heading">
                        <!-- heading -->
                        <h2>Our Works</h2>
                        <!-- paragraph -->
                        <p>There are now a set available here in three<br>colours and in a banner sizes.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- work item -->
                            <div class="work-item">
                                <!-- work details image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/work/1.jpg') }}" alt="" />
                                <!-- heading -->
                                <h3><a href="#">Anglicising Edit</a></h3>
                                <!-- brand org -->
                                <span class="org">Commercial</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- team -->
            <div class="team" id="team">
                <div class="container">
                    <!-- default heading -->
                    <div class="default-heading">
                        <!-- heading -->
                        <h2>Our Team</h2>
                        <!-- paragraph -->
                        <p>There are now a set available here in three<br>colours and in a banner sizes.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <!-- team member -->
                            <div class="member">
                                <!-- team member image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/team/1.jpg') }}" alt="" />
                                <!-- member details / heading -->
                                <h4><a href="#">John Doe</a></h4>
                                <!-- paragraph -->
                                <p>Short description about how cool John Doe is!</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- team member -->
                            <div class="member">
                                <!-- team member image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/team/2.jpg') }}" alt="" />
                                <!-- member details / heading -->
                                <h4><a href="#">John Doe</a></h4>
                                <!-- paragraph -->
                                <p>Short description about how cool John Doe is!</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- team member -->
                            <div class="member">
                                <!-- team member image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/team/1.jpg') }}" alt="" />
                                <!-- member details / heading -->
                                <h4><a href="#">John Doe</a></h4>
                                <!-- paragraph -->
                                <p>Short description about how cool John Doe is!</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- team member -->
                            <div class="member">
                                <!-- team member image -->
                                <img class="img-responsive" src="{{ asset('user/theme/img/team/2.jpg') }}" alt="" />
                                <!-- member details / heading -->
                                <h4><a href="#">John Doe</a></h4>
                                <!-- paragraph -->
                                <p>Short description about how cool John Doe is!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- contact -->
            <div class="contact" id="contact">
                <div class="container">
                    <!-- default heading -->
                    <div class="default-heading">
                        <!-- heading -->
                        <h2>Contact Us</h2>
                        <!-- paragraph -->
                        <p>There are now a set available here in three<br>colours and in a banner sizes.</p>
                    </div>
                    <!-- contact container -->
                    <div class="contact-container"> 
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <!-- heading -->
                                <h3>Contact Form</h3>
                                <form role="form" id="contactForm" method="post">
                                    <div class="form-group">
                                        <label for="contactName">Name</label>
                                        <input class="form-control" type="text" id="contactName" name="contactName"placeholder="Enter Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="contactEmail">Email</label>
                                        <input class="form-control" type="email" id="contactEmail" name="contactEmail" placeholder="Enter Email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="contactMessage">Message</label>
                                        <textarea class="form-control" id="contactMessage" name="contactMessage" rows="3" placeholder="Enter Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" id="submit" class="btn btn-default">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- heading -->
                                <h3>Address</h3>
                                <!-- paragraph -->
                                <p class="address">#91/56 New Road Building,<br>
                                    Near Land-Mark Society,<br>
                                    London Uk - 234322</p>
                                    <br>
                                <!-- heading -->
                                <h3>Phone</h3>
                                <!-- paragraph -->
                                <p class="address">+91 (233)-233-23333</p>
                                    <br>
                                <!-- heading -->
                                <h3>Email</h3>
                                <!-- paragraph -->
                                <p class="address"><a href="#">example@brando.uk</a></p>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive map" src="img/map.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection