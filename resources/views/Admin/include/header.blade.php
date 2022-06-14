<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<h3 style="color: white;" class="logo-default setWhiteColor"><b>{{ Cache::get('site_name') }}</b></h3>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<!-- <div class="page-logo" >
			<a href="#"  style="align: left;margin-left:500px;margin-top:-10px;">
            <img style="height:40px;width:100px;" src="{{ URL::asset('public/upload/AdminLogo/') }}/{{ Cache::get('logoName') }}" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div> -->
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="{{ URL::asset('public/upload/ProfileAdmin/') }}" />
						<span class="username username-hide-on-mobile">

						</span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="{{ url('admin/profile') }}">
								<i class="icon-user"></i> Profile </a>
						</li>
						<li>
							<a href="{{ url('admin/logo') }}">
								<i class="icon-user"></i> Change Logo </a>
						</li>
						<li>
							<a href="{{ url('admin/change-password') }}">
								<i class="icon-lock"></i> Change Password </a>
						</li>
						<li>
							<a href="{{ url('admin/logout') }}">
								<i class="icon-logout"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>