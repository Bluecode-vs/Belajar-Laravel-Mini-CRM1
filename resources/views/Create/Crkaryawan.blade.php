@extends('layouts.main')

@section('lss')
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            {{-- <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" /> --}}

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            {{-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> --}}
                            <h3>Mini CRM Virgo</h3>
                        </span>
                         
                         
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> 
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)" style="color-adjust:white "> 
                                Hallo {{ auth()->user()->name }}
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                    
                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            
                                <p class="dropdown-item" href="" ><i class="me-1 ms-1"></i> 
                                    {{ auth()->user()->name }}
                                </p>
                                
                                <a class="dropdown-item" href="{{ route('postlogout') }}" ><i
                                        class="fa fa-power-off me-1 ms-1"></i>{{ __('logout') }}</a>
                                
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('id') }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                
                                <a href="{{ url('locale/id') }}" class="dropdown-item">{{__('indonesian') }}</a>
                                <a href="{{ url('locale/en') }}" class="dropdown-item">{{__('english') }}</a>

                            </ul>
        
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">{{ __('dashboard') }}</span></a></li>
                      
                    
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/company" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">{{ __('Table Company') }}</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/karyawan" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">{{ __('Table Employee') }}</span></a></li>    

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/profile" aria-expanded="false"><i
                                    class="mdi mdi-relative-scale"></i><span class="hide-menu">{{ __('Profile') }}</span></a></li>
                        </li>
                            
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">{{ __('Input Your Employee') }}</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><p>{{ __('employee') }}</p></li>
                                   
                                </ol>
                            </nav>
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
                <!-- ============================================================== -->
                <!-- FORM INPUT EMPLOYEE  -->
                <!-- ============================================================== -->
                <form class="row g-3 "  action="{{ route('submitkaryawan') }}" method="post" > 
                    {{ csrf_field() }}
                   
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">{{ __('First Name') }}</label>
                        <input type="text" class="form-control" id="inputEmail4" name="FirstName" required autofocus value="{{ old('FirstName') }}">
                        <div class="alert-danger">{{  $errors->first('FirstName') }}</div>
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">{{ __('Last Name') }}</label>
                      <input type="text" class="form-control" id="inputPassword4" name="LastName" required value="{{ old('LastName') }}">
                      <div class="alert-danger">{{  $errors->first('lastName') }}</div>
                      
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">{{ __('companies') }}</label>
                      <select class="form-control select2" placeholder="Pilih Company" style= "width: 100%" name="company_id" id="company_id" value="{{ old('company_id') }}">
                        <option disabled value>{{ __('Choose Company') }}</option>
                        @foreach ($comp as $cp)
                            @if (old('company_id')== $cp->id)

                            <option value="{{ $cp->id }}" selected>{{ $cp->name }}</option>
                            @else
                            <option value="{{ $cp->id }}" >{{ $cp->name }}</option>
                                
                            @endif
                        @endforeach

                        </select>
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">{{ __('email') }}</label>
                      <input type="text" class="form-control " id="inputAddress2" name="Email"  value="{{ old('Email') }}">
                      <div class="alert-danger">{{  $errors->first('Email') }}</div>
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">{{ __('phone') }}</label>
                      <input type="text" class="form-control  " id="inputCity" name="Phone" value="{{ old('Phone') }}">
                      <div class="alert-danger">{{  $errors->first('Phone') }}</div>
                    </div>
            
                  
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">{{ __('submit') }}</button>
                    </div>
                </form>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Laravel Mini CRM. Designed and Developed by Virgo Stevanus
            </footer>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="/assets/libs/flot/excanvas.js"></script>
    <script src="/assets/libs/flot/jquery.flot.js"></script>
    <script src="/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="/dist/js/pages/chart/chart-page-init.js"></script>

</body>

@endsection