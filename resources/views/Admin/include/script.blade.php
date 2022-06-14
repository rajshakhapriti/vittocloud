<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/resources/admin-assets/global/plugins/respond.min.js"></script>
<script src="../../assets/resources/admin-assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/js/global/jquery-3.3.1.min.js')}}"></script>
<script src="{{ URL::asset('resources/admin-assets/plugins/global/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/plugins/global/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ URL::asset('resources/admin-assets/plugins/global/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/plugins/global/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/plugins/global/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/plugins/global/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/jquery-validation/js/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script src="{{ URL::asset('resources/admin-assets/plugins/global/icheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="{{ URL::asset('resources/admin-assets/js/global/metronic.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/js/admin/layout/layout.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/js/admin/layout/quick-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/admin-assets/js/admin/pages/form-validation.js') }}"></script>
<script src="{{ URL::asset('resources/admin-assets/js/admin/pages/form-icheck.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/js/bootstrap-checkbox.min.js') }}"></script>

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<!-- <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
	$('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script> -->
    <!-- Example of checkbox https://www.jquery-az.com/boots/demo.php?ex=4.0_6-->
    <script src="{{ URL::asset('resources/admin-assets/js/customJs.js') }}"></script>
    <script type="text/javascript">
    	$(".nav>li").each(function() {
    		var navItem = $(this);
    		if (navItem.find("a").attr("href") == location.pathname) {
    			navItem.addClass("active");
    		}
    	});
    	jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
FormValidation.init();
FormiCheck.init();
});
         
</script>
@stack('scripts')

<script type="text/javascript">
   
    var base_url = "{{ url('/') }}";
</script>