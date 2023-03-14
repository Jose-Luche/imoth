<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/assets/images/favicon')}}">
    <title>iMoth Insurance Brokers</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('backend/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">

    <link href="{{asset('backend/dist/js/pages/chartist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">

    <link href="{{asset('backend/assets/libs/c3/c3.min.css')}}" rel="stylesheet'">

    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="{{asset('backend/dist/css/style.min.css')}}" rel="stylesheet">


</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('admin.body.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('admin.body.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        @yield('admin')
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab"
                   aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                   aria-controls="pills-contact" aria-selected="false"><i
                        class="mdi mdi-star-circle font-20"></i></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="p-3 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>
                    <div class="checkbox checkbox-info mt-3">
                        <input type="checkbox" name="theme-view" class="material-inputs" id="theme-view">
                        <label for="theme-view"> <span>Dark Theme</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" class="sidebartoggler material-inputs" name="collapssidebar" id="collapssidebar">
                        <label for="collapssidebar"> <span>Collapse Sidebar</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="sidebar-position" class="material-inputs" id="sidebar-position">
                        <label for="sidebar-position"> <span>Fixed Sidebar</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="header-position" class="material-inputs" id="header-position">
                        <label for="header-position"> <span>Fixed Header</span> </label>
                    </div>
                    <div class="checkbox checkbox-info mt-2">
                        <input type="checkbox" name="boxed-layout" class="material-inputs" id="boxed-layout">
                        <label for="boxed-layout"> <span>Boxed Layout</span> </label>
                    </div>
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-logobg="skin1"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-logobg="skin2"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-logobg="skin3"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-logobg="skin4"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-logobg="skin5"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-logobg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-navbarbg="skin1"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-navbarbg="skin2"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-navbarbg="skin3"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-navbarbg="skin4"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-navbarbg="skin5"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-navbarbg="skin6"></a></li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-3 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                    <ul class="theme-color m-0 p-0">
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-sidebarbg="skin1"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-sidebarbg="skin2"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-sidebarbg="skin3"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-sidebarbg="skin4"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-sidebarbg="skin5"></a></li>
                        <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                                                        data-sidebarbg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="mailbox list-style-none mt-3">
                    <li>
                        <div class="message-center chat-scroll position-relative">
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_1' data-user-id='1'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_2' data-user-id='2'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_3' data-user-id='3'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_4' data-user-id='4'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_5' data-user-id='5'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_6' data-user-id='6'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_7' data-user-id='7'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                            <!-- Message -->
                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_8' data-user-id='8'>
                                <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                <div class="w-75 d-inline-block v-middle pl-2">
                                    <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                            </a>
                            <!-- Message -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Tab 2 -->
            <!-- Tab 3 -->
            <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h6 class="mt-3 mb-3">Activity Timeline</h6>
                <div class="steamline">
                    <div class="sl-item">
                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user"
                                                   src="../assets/images/users/2.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user"
                                                   src="../assets/images/users/1.jpg"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user"
                                                   src="../assets/images/users/4.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="rounded-circle" alt="user"
                                                   src="../assets/images/users/6.jpg"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                            </div>
                            <div class="desc">Approve meeting with tiger</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab 3 -->
        </div>
    </div>
</aside>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- apps -->
<script src="{{asset('backend/dist/js/app.min.js')}}"></script>

<script src="{{asset('backend/dist/js/app.init.js')}}"></script>

<script src="{{asset('backend/dist/js/app-style-switcher.js')}}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>

<script src="{{asset('backend/assets/extra-libs/sparkline/sparkline.js')}}"></script>

<!--Wave Effects -->
<script src="{{asset('backend/dist/js/waves.js')}}"></script>

<!--Menu sidebar -->
<script src="{{asset('backend/dist/js/sidebarmenu.js')}}"></script>

<!--Custom JavaScript -->
<script src="{{asset('backend/dist/js/custom.min.js')}}"></script>

<!--This page JavaScript -->
<!-- chartist chart -->
<script src="{{asset('backend/assets/libs/chartist/dist/chartist.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!--c3 JavaScript -->
<script src="{{asset('backend/assets/libs/d3/dist/d3.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/c3/c3.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('backend/dist/js/pages/dashboards/dashboard1.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="text/javascript">
    $(function(){
      $(document).on('click', '#delete', function(e){
          e.preventDefault();
          var link = $(this).attr("href");

            Swal.fire({
            title: 'Are you sure?',
            text: "Delete this user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete them!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Deleted!',
                'User Deleted Successfully.',
                'success'
              )
            }
          })
      });
    });

  </script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session:: get('alert-type', 'info')}}"
    switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
      break;

      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
      break;

      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
      break;

      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
      break;
    }
    @endif
</script>

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src={{asset('backend/assets/libs/popper.js/dist/umd/popper.min.js')}}></script>
    <script src={{asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}></script>
    <!-- apps -->
    <script src={{asset('backend/dist/js/app.min.js')}}></script>
    <script src={{asset('backend/dist/js/app.init.js')}}></script>
    <script src={{asset('backend/dist/js/app-style-switcher.js')}}></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src={{asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}></script>
    <script src={{asset('backend/assets/extra-libs/sparkline/sparkline.js')}}></script>
    <!--Wave Effects -->
    <script src={{asset('backend/dist/js/waves.js')}}></script>
    <!--Menu sidebar -->
    <script src={{asset('backend/dist/js/sidebarmenu.js')}}></script>
    <!--Custom JavaScript -->
    <script src={{asset('backend/dist/js/custom.min.js')}}></script>
    <!--This page plugins -->
    <script src={{asset('backend/assets/libs/datatables/media/js/jquery.dataTables.min.js')}}></script>
    <script src={{asset('backend/dist/js/pages/datatable/custom-datatable.js')}}></script>
    <script src={{asset('backend/dist/js/pages/datatable/datatable-basic.init.js')}}></script>

</body>
{{--asset('backend/js/vendors.min.js')--}}
</html>
