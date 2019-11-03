<?php
/**
 * header.php
 *
 * Author: chidimez
 *
 * The header of each page (Backend)
 *
 */
?>


<!--footer part starts-->
<!-- Modal fullscreen -->

<!--footer part starts-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                                                                     target="_blank">FarmChainVille </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hx</span>
    </p>
</footer>

<!--footer part  ends-->

<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<!-- CORE JS FRAMEWORK - START -->
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('dashboard/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN MODERN JS-->
<script src="{{ asset('dashboard/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('dashboard/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('dashboard/js/scripts/customizer.js') }}" type="text/javascript"></script>
<script src="{{ asset('dashboard/vendors/js/extensions/toastr.min.js') }}" type="text/javascript"></script>
<!-- END MODERN JS-->

<!-- CORE JS FRAMEWORK - END -->

<script language="javascript" type="text/javascript">

    var url = '{{  env('APP_URL') }}';

</script>

<!-- CORE TEMPLATE JS - START -->

<!-- END CORE TEMPLATE JS - END -->

<!--footer part  ends-->

