@include('section.header')


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                    @yield('content')

            </div>
            <!-- End row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer">
        آقای ادمین2016 ©.
    </footer>

</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

@include('section.footer')
@yield('script')