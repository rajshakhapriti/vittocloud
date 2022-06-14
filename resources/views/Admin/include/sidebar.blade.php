<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->


            <li class="{{ request()->is('admin/dashboard') ? 'start active open' : '' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="{{ request()->is('admin/dashboard') ? 'selected' : '' }}"></span>
                </a>
            </li>
            <li class="heading"><h3 class="uppercase">User management</h3></li>
              <li class="{{ request()->is('admin/Employee/PMS') || request()->is('admin/Employee/PMS/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">App Users</span>
                    <span class="{{ request()->is('admin/PMS') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                      <li class="{{ (request()->is('admin/Employee/PMS') || request()->is('admin/Employee/PMS/edit/*')) && !request()->is('admin/Employee/PMS/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/Employee/PMS') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/Employee/PMS/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/Employee/PMS/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
           <!--  <li class="heading"><h3 class="uppercase">User management</h3></li> -->
           <!--  <li class="{{ request()->is('admin/user') || request()->is('admin/user/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-users"></i>
                    <span class="title">App Users</span>
                    <span class="{{ request()->is('admin/user') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/user') || request()->is('admin/user/edit/*')) && !request()->is('admin/user/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/user') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/user/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/user/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li> -->
            <li class="{{ request()->is('admin/list') || request()->is('admin/list/*') || request()->is('admin/role') || request()->is('admin/role/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-user"></i>
                    <span class="title">Admin User</span>
                    <span class="{{ request()->is('admin/list') || request()->is('admin/list/*') || request()->is('admin/role') || request()->is('admin/role/*') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ request()->is('admin/list') || request()->is('admin/list/*') ? 'active' : '' }}">
                        <a href="{{ url('admin/list') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/role') || request()->is('admin/role/*') ? 'active' : '' }}">
                        <a href="{{ url('admin/role') }}">
                            <i class="icon-user-follow"></i>
                            Role
                        </a>
                    </li>

                </ul>
            </li>
            <li class="{{ request()->is('admin/usertype') || request()->is('admin/usertype/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-directions"></i>
                    <span class="title">User Types</span>
                    <span class="{{ request()->is('admin/usertype') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/usertype') || request()->is('admin/usertype/edit/*')) && !request()->is('admin/usertype/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/usertype') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/usertype/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/usertype/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/usertype/role')  ? 'active' : '' }}">
                        <a href="{{ url('admin/usertype/role') }}">
                            <i class="icon-user-follow"></i>
                            Role
                        </a>
                    </li>

                </ul>
            </li>
            
            <!--      request report menu   start      -->
            <li class="heading"><h3 class="uppercase">Request</h3></li>
             <li class="{{ request()->is('admin/Request') || request()->is('admin/Request/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Request</span>
                    <span class="{{ request()->is('admin/Request') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/Request') || request()->is('admin/Request/edit/*')) && !request()->is('admin/Request/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/Request') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                </ul>
            </li>
            <!--      request report menu   end      -->
            <li class="heading"><h3 class="uppercase">Masters</h3></li>
            <li class="{{ request()->is('admin/shipentry') || request()->is('admin/shipentry/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Ship Entry Master</span>
                    <span class="{{ request()->is('admin/shipentry') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/shipentry') || request()->is('admin/shipentry/edit/*')) && !request()->is('admin/shipentry/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/shipentry') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/shipentry/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/shipentry/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
             <li class="{{ request()->is('admin/workmaster') || request()->is('admin/workmaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Work(Report Type) Mas...</span>
                    <span class="{{ request()->is('admin/workmaster') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/workmaster') || request()->is('admin/workmaster/edit/*')) && !request()->is('admin/workmaster/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/workmaster') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/workmaster/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/workmaster/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
             <li class="{{ request()->is('admin/PPEmaster') || request()->is('admin/PPEmaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">PPE Master</span>
                    <span class="{{ request()->is('admin/PPEmaster') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/PPEmaster') || request()->is('admin/PPEmaster/edit/*')) && !request()->is('admin/PPEmaster/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/PPEmaster') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/PPEmaster/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/PPEmaster/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
              <li class="{{ request()->is('admin/contaminant') || request()->is('admin/contaminant/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Contaminant</span>
                    <span class="{{ request()->is('admin/contaminant') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/contaminant') || request()->is('admin/contaminant/edit/*')) && !request()->is('admin/contaminant/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/contaminant') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/contaminant/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/contaminant/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
             <li class="{{ request()->is('admin/Assessmentmaster') || request()->is('admin/Assessmentmaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Assessment Master</span>
                    <span class="{{ request()->is('admin/Assessmentmaster') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/Assessmentmaster') || request()->is('admin/Assessmentmaster/edit/*')) && !request()->is('admin/Assessmentmaster/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/Assessmentmaster') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/Assessmentmaster/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/Assessmentmaster/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
            <li class="{{ request()->is('admin/multigasdetector') || request()->is('admin/multigasdetector/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Multi Gas Detector Ma...</span>
                    <span class="{{ request()->is('admin/multigasdetector') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/multigasdetector') || request()->is('admin/multigasdetector/edit/*')) && !request()->is('admin/multigasdetector/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/multigasdetector') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/multigasdetector/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/multigasdetector/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
            <li class="{{ request()->is('admin/ERKmaster') || request()->is('admin/ERKmaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Emergency Response Kit </span>
                    <span class="{{ request()->is('admin/ERKmaster') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/ERKmaster') || request()->is('admin/ERKmaster/edit/*')) && !request()->is('admin/ERKmaster/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/ERKmaster') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/ERKmaster/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/ERKmaster/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
            <li class="{{ request()->is('admin/workdetailsmaster') || request()->is('admin/workdetailsmaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Work Details Master </span>
                    <span class="{{ request()->is('admin/workdetailsmaster') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/workdetailsmaster') || request()->is('admin/workdetailsmaster/edit/*')) && !request()->is('admin/workdetailsmaster/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/workdetailsmaster') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/workdetailsmaster/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/workdetailsmaster/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
            <li class="{{ request()->is('admin/communication') || request()->is('admin/communication/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Communication</span>
                    <span class="{{ request()->is('admin/communication') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/communication') || request()->is('admin/communication/edit/*')) && !request()->is('admin/communication/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/communication') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/communication/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/communication/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
             <li class="{{ request()->is('admin/GasParametermaster') || request()->is('admin/GasParametermaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Gas Parameter Master</span>
                    <span class="{{ request()->is('admin/GasParametermaster') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/GasParametermaster') || request()->is('admin/GasParametermaster/edit/*')) && !request()->is('admin/GasParametermaster/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/GasParametermaster') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/GasParametermaster/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/GasParametermaster/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
              <li class="{{ request()->is('admin/luxmeter') || request()->is('admin/luxmeter/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Lux Meter</span>
                    <span class="{{ request()->is('admin/luxmeter') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/luxmeter') || request()->is('admin/luxmeter/edit/*')) && !request()->is('admin/luxmeter/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/luxmeter') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/luxmeter/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/luxmeter/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
             <li class="{{ request()->is('admin/othergasesmeter') || request()->is('admin/othergasesmeter/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Other Gases Meter</span>
                    <span class="{{ request()->is('admin/othergasesmeter') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/othergasesmeter') || request()->is('admin/othergasesmeter/edit/*')) && !request()->is('admin/othergasesmeter/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/othergasesmeter') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/othergasesmeter/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/othergasesmeter/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
             <li class="{{ request()->is('admin/temperaturemeter') || request()->is('admin/temperaturemeter/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Temperature Meter</span>
                    <span class="{{ request()->is('admin/temperaturemeter') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/temperaturemeter') || request()->is('admin/temperaturemeter/edit/*')) && !request()->is('admin/temperaturemeter/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/temperaturemeter') }}">
                            <i class="icon-list"></i>
                            Listing
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/temperaturemeter/create')  ? 'active' : '' }}">
                        <a href="{{ url('admin/temperaturemeter/create') }}">
                            <i class="icon-plus"></i>
                            Create
                        </a>
                    </li>

                </ul>
            </li>
            
            <li class="{{ request()->is('admin/training') || request()->is('admin/training/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Training management</span>
                    <span class="{{ request()->is('admin/permanentemployee') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/training/type') || request()->is('admin/training//type/edit/*')) && !request()->is('admin/training/type/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/training/type') }}">
                            <i class="icon-list"></i>
                            Training super type
                        </a>
                    </li>
                    <li class="{{ (request()->is('admin/training') || request()->is('admin/training/edit/*')) && !request()->is('admin/training/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/training') }}">
                            <i class="icon-list"></i>
                              Training sub type
                        </a>
                    </li>
                   <!--  <li class="{{ (request()->is('admin/training/worker') || request()->is('admin/training/worker/edit/*')) && !request()->is('admin/training/worker/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/training/worker') }}">
                            <i class="icon-list"></i>
                            Training worker 
                        </a>
                    </li> -->
                     <li class="{{ (request()->is('admin/training/editworkerpermition')) ? 'active' : '' }}">
                        <a href="{{ url('admin/training/editworkerpermition') }}">
                            <i class="icon-list"></i>
                            Training Matrix
                        </a>
                    </li>

                </ul>
            </li>

              <li class="{{ request()->is('admin/ddmaster/*') ? 'start active open' : '' }}">
                <a href="javascript:;"> 
                    <i class="icon-anchor"></i>
                    <span class="title">Department Designation management</span>
                    <span class="{{ request()->is('admin/permanentemployee') ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (request()->is('admin/ddmaster/department') || request()->is('admin/ddmaster/department/edit/*')) && !request()->is('admin/ddmaster/department/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/ddmaster/department') }}">
                            <i class="icon-list"></i>
                            Department
                        </a>
                    </li>
                    <li class="{{ (request()->is('admin/ddmaster/designation') || request()->is('admin/ddmaster/designation/edit/*')) && !request()->is('admin/ddmaster/designation/create') ? 'active' : '' }}">
                        <a href="{{ url('admin/ddmaster/designation') }}">
                            <i class="icon-list"></i>
                            Designation type
                        </a>
                    </li>

                </ul>
            </li>

            
            <li class="heading"><h3 class="uppercase">Site settings</h3></li>
            <li class="{{ request()->is('admin/module') || request()->is('admin/module/*') ? 'start active open' : '' }}">
                <a href="{{ url('admin/module') }}"> 
                    <i class="icon-link"></i>
                    <span class="title">Module</span>
                    <span class="{{ request()->is('admin/module') ? 'selected' : '' }}"></span>
                </a>
            </li>
            

            <li class="{{ Request::segment(2) == 'email' ? 'start active open' : '' }}">
                <a href="javascript:;">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span class="title">Email</span>
                    <span class="{{ Request::segment(2) == 'email' ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ request()->is('admin/email/template') ? 'active' : '' }}">
                        <a href="{{ url('admin/email/template') }}">
                            Email Template
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/email/log') ? 'active' : '' }}">
                        <a href="{{ url('admin/email/log') }}">
                        Email Log</a>
                    </li>

                </ul>
            </li>

            <li class="{{ Request::segment(2) == 'setting' ? 'start active open' : '' }}">
                <a href="javascript:;">
                    <i class="icon-settings"></i>
                    <span class="title">Setting</span>
                    <span class="{{ Request::segment(2) == 'setting' ? 'selected' : '' }}"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ request()->is('admin/setting/site') ? 'active' : '' }}">
                        <a href="{{ url('admin/setting/site') }}">
                            Site Setting
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/setting/email') ? 'active' : '' }}">
                        <a href="{{ url('admin/setting/email') }}">
                        Email Setting</a>
                    </li>

                </ul>
            </li>
            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
