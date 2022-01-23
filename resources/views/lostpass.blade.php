@extends('layouts.main')

@section('lss')
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="lostform">
                    <div class="text-center pt-3 pb-3">
                        <h1 style="color: white">Mini CRM Virgo</h1>
                        {{-- <span class="db"><img src="/assets/images/logo.png" alt="logo" /></span> --}}
                    </div>
                    <div id="recoverform">
                        <div class="text-center">
                            <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                        </div>
                        <div class="row mt-3">
                            <!-- Form -->
                            <form class="col-12" action="index.html">
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white h-100" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <!-- pwd -->
                                <div class="row mt-3 pt-3 border-top border-secondary">
                                    <div class="col-12">
                                        <a class="btn btn-success text-white" href="/login" id="to-login" name="action">Back To Login</a>
                                        <button class="btn btn-info float-end" type="button" name="action">Recover</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
            <!-- ============================================================== -->
            <!-- Footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Laravel Mini CRM. Designed and Developed by Virgo Stevanus.
            </footer>
            <!-- ============================================================== -->
            <!-- End Footer -->
            <!-- ============================================================== -->
           
        </div>
        
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>

        $(".preloader").fadeOut();
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $('#to-login').click(function(){
            
            $("#recoverform").hide();
            $("#loginform").fadeIn();
        });
        </script>
@endsection