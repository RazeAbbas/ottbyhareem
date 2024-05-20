</div>

<!-- Jquery JS-->
<script src="{{asset('cool-assets/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('cool-assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('cool-assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('cool-assets/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('cool-assets/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('cool-assets/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('cool-assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('cool-assets/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('cool-assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('cool-assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('cool-assets/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('cool-assets/js/main.js')}}"></script>

</body>

</html>
<script type="text/javascript" src="{{env('GLOBAL_SCRIPT')}}"></script>
<script type="text/javascript" src="https://dixeam.com/cdn/basejs/3.0/base.js"></script>
<script type="text/javascript">
    baseJS.init(
    {
        "site_url": "{{url('/')}}",
        "current_url":"{{URL::current()}}",
        "voice_input":true,
        "lang":"en",
        "notif": {"type":"toastr", "options":[]},
        "inputMasking": "YES"
    }
    );
</script>
<!-- end document-->
