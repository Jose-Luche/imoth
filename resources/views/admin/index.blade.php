@extends('admin.master')
@section('admin')
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Dashboard</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex mr-3 ml-2">
                    <div class="chart-text mr-2">
                        <h6 class="mb-0"><small>THIS MONTH</small></h6>
                        <h4 class="mt-0 text-info">$58,356</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex ml-2">
                    <div class="chart-text mr-2">
                        <h6 class="mb-0"><small>LAST MONTH</small></h6>
                        <h4 class="mt-0 text-primary">$48,356</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Sales Overview</h3>
                                        <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline">
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-success"><i
                                                        class="fa fa-circle font-10 mr-2 "></i>Ample</h6>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-info"><i
                                                        class="fa fa-circle font-10 mr-2"></i>Pixel</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="amp-pxl" style="height: 360px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Our Visitors </h3>
                        <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                        <div id="visitor" style="height:290px; width:100%;"></div>
                    </div>
                    <div class="card-body text-center border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-2">
                                <h6 class="text-info"><i class="fa fa-circle font-10 mr-2 "></i>Mobile</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-primary"><i class="fa fa-circle font-10 mr-2"></i>Desktop</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-success"><i class="fa fa-circle font-10 mr-2"></i>Tablet</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card blog-widget">
                    <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/big/img1.jpg" alt="img"
                                                     class="img-fluid blog-img-height w-100" /></div>
                        <h3>Business development new rules for 2020</h3>
                        <label class="badge badge-pill badge-success py-1 px-2">Technology</label>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="read"><a href="javascript:void(0)" class="link font-medium">Read
                                    More</a></div>
                            <div class="ml-auto">
                                <a href="javascript:void(0)" class="link mr-2" data-toggle="tooltip"
                                   title="Like"><i class="mdi mdi-heart-outline"></i></a> <a
                                    href="javascript:void(0)" class="link" data-toggle="tooltip"
                                    title="Share"><i class="mdi mdi-share-variant"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Newsletter Campaign</h3>
                                <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                            </div>
                            <div class="ml-auto align-self-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-success"><i class="fa fa-circle font-10 mr-2 "></i>Open
                                            Rate</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 mr-2"></i>Recurring
                                            Payments</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="campaign ct-charts"></div>
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 font-weight-light">5098</h1><small>Total Sent</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 font-weight-light">4156</h1><small>Mail Open Rate</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 font-weight-light">1369</h1><small>Click Rate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-3 align-self-center">
                                <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                            </div>
                            <div>
                                <h3 class="card-title text-white">Bandwidth usage</h3>
                                <h6 class="card-subtitle text-white op-5">March 2020</h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4 align-self-center">
                                <h2 class="font-weight-light text-white text-nowrap">50 GB</h2>
                            </div>
                            <div class="col-8 pb-3 pt-2 align-self-center">
                                <div class="usage chartist-chart" style="height:65px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card bg-success">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-3 align-self-center">
                                <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                            </div>
                            <div>
                                <h3 class="card-title text-white">Download count</h3>
                                <h6 class="card-subtitle text-white op-5">March 2020</h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4 align-self-center">
                                <h2 class="font-weight-light text-white text-nowrap text-truncate">35487</h2>
                            </div>
                            <div class="col-8 pb-3 pt-2 text-right">
                                <div class="spark-count" style="height:65px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <img class="rounded-top" src="../assets/images/background/weatherbg.jpg"
                         alt="Card image cap">
                    <div class="card-img-overlay" style="height:110px;">
                        <div class="d-flex align-items-center">
                            <h3 class="card-title text-white mb-0 d-inline-block">New Delhi</h3>
                            <div class="ml-auto">
                                <small class="card-text text-white font-weight-light">Sunday 15
                                    march</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 weather-small">
                        <div class="row">
                            <div class="col-8 border-right align-self-center">
                                <div class="d-flex">
                                    <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                                    <div class="ml-3">
                                        <h1 class="font-weight-light text-info mb-0">32<sup>0</sup></h1>
                                        <small>Sunny Rainy day</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h1 class="font-weight-light mb-0">25<sup>0</sup></h1>
                                <small>Tonight</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-md-12">
                <!-- Column -->
                <div class="card">
                    <img class="card-img-top w-100 profile-bg-height"
                         src="../assets/images/background/profile-bg.jpg" alt="Card image cap">
                    <div class="card-body little-profile text-center">
                        <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="user"
                                                  class="rounded-circle shadow-sm" width="128" /></div>
                        <h3 class="mb-0">Angela Dominic</h3>
                        <p>Web Designer &amp; Developer</p>
                        <a href="javascript:void(0)"
                           class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                        <div class="row text-center mt-3 justify-content-center">
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 font-weight-light">1099</h3><small>Articles</small>
                            </div>
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 font-weight-light">23,469</h3><small>Followers</small>
                            </div>
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 font-weight-light">6035</h3><small>Following</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card">
                    <div class="card-body bg-info rounded-top">
                        <h4 class="text-white card-title">My Contacts</h4>
                        <h6 class="card-subtitle text-white mb-0 op-5">Checkout my contacts here</h6>
                    </div>
                    <div class="card-body">
                        <div class="message-box contact-box position-relative">
                            <h2 class="add-ct-btn position-absolute"><button type="button"
                                                                             class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button>
                            </h2>
                            <div class="message-widget contact-widget position-relative">
                                <!-- Message -->
                                <a href="#" class="py-3 px-2 border-bottom d-flex align-items-center text-decoration-none">
                                    <div class="user-img position-relative d-inline-block mr-2"> <img
                                            src="../assets/images/users/1.jpg" alt="user"
                                            class="rounded-circle w-100">
                                        <span
                                            class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                    </div>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="my-1">Pavan kumar</h5> <span
                                            class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">info@wrappixel.com</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#" class="py-3 px-2 border-bottom d-flex align-items-center text-decoration-none">
                                    <div class="user-img position-relative d-inline-block mr-2"> <img
                                            src="../assets/images/users/2.jpg" alt="user"
                                            class="rounded-circle w-100">
                                        <span
                                            class="profile-status pull-right d-inline-block position-absolute bg-danger rounded-circle"></span>
                                    </div>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="my-1">Sonu Nigam</h5> <span
                                            class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">pamela1987@gmail.com</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#" class="py-3 px-2 border-bottom d-flex align-items-center text-decoration-none">
                                    <div class="user-img position-relative d-inline-block mr-2"> <span
                                            class="round text-white d-inline-block text-center rounded-circle bg-info">A</span>
                                        <span
                                            class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                    </div>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="my-1">Arijit Sinh</h5> <span
                                            class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">cruise1298.fiplip@gmail.com</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="#" class="py-3 px-2 d-flex align-items-center text-decoration-none">
                                    <div class="user-img position-relative d-inline-block mr-2"> <img
                                            src="../assets/images/users/4.jpg" alt="user"
                                            class="rounded-circle w-100">
                                        <span
                                            class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                    </div>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="my-1">Pavan kumar</h5> <span
                                            class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">kat@gmail.com</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"
                                                 role="tab"><span class="d-none d-md-block">Activity</span><span class="d-block d-md-none"><i class="mdi mdi-bulletin-board"></i></span></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
                                                 role="tab"><span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-face-profile"></i></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings"
                                                 role="tab"><span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-settings"></i></a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline position-relative">
                                    <div class="sl-item mt-2 mb-3">
                                        <div class="sl-left float-left mr-3"> <img
                                                src="../assets/images/users/1.jpg" alt="user"
                                                class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex">
                                                    <h5 class="mb-0 font-weight-light">
                                                        <a href="#" class="link">John Doe</a>
                                                    </h5>
                                                    <span class="sl-date text-muted ml-1">5 minutes ago</span>
                                                </div>

                                                <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img1.jpg" alt="user"
                                                            class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img2.jpg" alt="user"
                                                            class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img3.jpg" alt="user"
                                                            class="img-fluid rounded"></div>
                                                    <div class="col-lg-3 col-md-6 mb-3"><img
                                                            src="../assets/images/big/img4.jpg" alt="user"
                                                            class="img-fluid rounded"></div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <a href="javascript:void(0)" class="link mr-2">2 comment</a>
                                                    <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item mt-2 mb-3">
                                        <div class="sl-left float-left mr-3"> <img
                                                src="../assets/images/users/2.jpg" alt="user"
                                                class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex">
                                                    <h5 class="mb-0 font-weight-light"><a href="#"
                                                                                          class="link">John Doe</a></h5>
                                                    <span class="sl-date text-muted ml-1">5
                                                                minutes ago</span>
                                                </div>
                                                <div class="mt-3 row">
                                                    <div class="col-md-3 col-xs-12"><img
                                                            src="../assets/images/big/img1.jpg" alt="user"
                                                            class="img-fluid rounded"></div>
                                                    <div class="col-md-9 col-xs-12 mt-3 mt-md-0">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Integer nec odio. Praesent libero. Sed cursus
                                                            ante dapibus diam. </p> <a href="#"
                                                                                       class="btn btn-success">
                                                            Design weblayout</a>
                                                    </div>
                                                </div>
                                                <div class="text-nowrap mt-3"> <a href="javascript:void(0)"
                                                                                  class="link mr-2">2 comment</a> <a
                                                        href="javascript:void(0)" class="link mr-2"><i
                                                            class="fa fa-heart text-danger"></i>
                                                        5 Love</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item mt-2 mb-3">
                                        <div class="sl-left float-left mr-3"> <img
                                                src="../assets/images/users/3.jpg" alt="user"
                                                class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex">
                                                    <h5 class="mb-0 font-weight-light"><a href="#"
                                                                                          class="link">John Doe</a></h5>
                                                    <span class="sl-date text-muted ml-1">5
                                                                minutes ago</span>
                                                </div>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Integer nec odio. Praesent libero. Sed
                                                    cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                                                    elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                                                    Fusce nec tellus sed augue semper </p>
                                            </div>
                                            <div class="text-nowrap mt-3"> <a href="javascript:void(0)"
                                                                              class="link mr-2">2
                                                    comment</a> <a href="javascript:void(0)"
                                                                   class="link mr-2"><i class="fa fa-heart text-danger"></i>
                                                    5 Love</a> </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item mt-2 mb-3">
                                        <div class="sl-left float-left mr-3"> <img
                                                src="../assets/images/users/4.jpg" alt="user"
                                                class="rounded-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex">
                                                    <h5 class="mb-0 font-weight-light"><a href="#"
                                                                                          class="link">John Doe</a></h5>
                                                    <span class="sl-date text-muted ml-1">5
                                                                minutes ago</span>
                                                </div>
                                                <blockquote class="mt-2">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">Johnathan Deo</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">(123) 456 7890</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">johnathan@admin.com</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                        <br>
                                        <p class="text-muted">London</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="mt-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                    arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                                    ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries </p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop publishing
                                    software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h4 class="font-medium mt-4">Skill Set</h4>
                                <hr>
                                <h5 class="mt-4">Wordpress <span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">
                                        <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="mt-4">HTML 5 <span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;">
                                        <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="mt-4">jQuery <span class="pull-right">50%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                        <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="mt-4">Photoshop <span class="pull-right">70%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;">
                                        <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe"
                                                   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com"
                                                   class="form-control form-control-line" name="example-email"
                                                   id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password"
                                                   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890"
                                                   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                                    <textarea rows="5"
                                                              class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

