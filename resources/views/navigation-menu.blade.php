<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
    <a href="index-2.html" class="app-brand-link">
        <img src="{{asset('assets/img/logo.png')}}"/>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <li class="menu-item {{request()->routeIs('dashboard') ? 'active' : ''}}">
            <a href="{{route('dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        @if(Auth::user()->hasRole('Student'))
        <li class="menu-item {{request()->routeIs('student.payment') ? 'active' : ''}}">
            <a href="{{route('student.payment')}}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Payments">Payments</div>
            </a>
        </li>

            <li class="menu-item {{request()->routeIs('result.*') ? 'active open' : ''}}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div data-i18n="Results">Results</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{request()->routeIs('result.list') ? 'active' : ''}}">
                        <a href="{{route('result.list')}}" class="menu-link">
                        <div data-i18n="All Results">All Results</div>
                        </a>
                    </li>

                    <li class="menu-item {{request()->routeIs('result.create') ? 'active' : ''}}">
                        <a href="{{route('result.create')}}" class="menu-link">
                        <div data-i18n="Add Result">Add Result</div>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="menu-item {{request()->routeIs('ticket.student.*') ? 'active open' : ''}}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div data-i18n="Complains">Complains</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{request()->routeIs('ticket.student.list') ? 'active' : ''}}">
                        <a href="{{route('ticket.student.list')}}" class="menu-link">
                        <div data-i18n="All Complains">All Complains</div>
                        </a>
                    </li>

                    <li class="menu-item {{request()->routeIs('ticket.student.create') ? 'active' : ''}}">
                        <a href="{{route('ticket.student.create')}}" class="menu-link">
                        <div data-i18n="Make a Complain">Make a Complain</div>
                        </a>
                    </li>

                </ul>
            </li>
        @endif


    @if(Auth::user()->hasRole('Admin'))
    <!-- Applications -->
    <li class="menu-item {{request()->routeIs('applications.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
        <div data-i18n="Applications">Applications</div>
        </a>

        <ul class="menu-sub">

        <li class="menu-item {{request()->routeIs('applications.list') ? 'active' : ''}}">
            <a href="{{route('applications.list')}}" class="menu-link">
            <div data-i18n="All Applications">All Applications</div>
            </a>
        </li>
        <li class="menu-item {{request()->routeIs('applications.active') ? 'active' : ''}}">
            <a href="{{route('applications.active')}}" class="menu-link">
            <div data-i18n="Active Applications">Active Applications</div>
            </a>
        </li>
        <li class="menu-item {{request()->routeIs('applications.interviewing') ? 'active' : ''}}">
            <a href="{{route('applications.interviewing')}}" class="menu-link ">
            <div data-i18n="Interviewing">Interviewing</div>
            </a>
        </li>
        <li class="menu-item {{request()->routeIs('applications.rejected') ? 'active' : ''}}">
            <a href="{{route('applications.rejected')}}" class="menu-link " >
            <div data-i18n="Rejected Applications">Rejected Applications</div>
            </a>
        </li>
        </ul>
    </li>
    <!-- Front Pages -->
    <li class="menu-item {{request()->routeIs('scholarship.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons ti ti-files'></i>
        <div data-i18n="Scholarship">Scholarship</div>
        </a>
        <ul class="menu-sub">
        <li class="menu-item {{request()->routeIs('scholarship.active') ? 'active' : ''}}">
            <a href="{{route('scholarship.active')}}" class="menu-link" >
            <div data-i18n="Active Scholarship">Active Scholarship</div>
            </a>
        </li>
        <li class="menu-item {{request()->routeIs('scholarship.paused') ? 'active' : ''}}">
            <a href="{{route('scholarship.paused')}}" class="menu-link" >
            <div data-i18n="Paused Scholarship">Paused Scholarship</div>
            </a>
        </li>
        </ul>
    </li>
    @endif

    @if(Auth::user()->hasRole('Admin'))
    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text" data-i18n="Apps & Tools">Apps &amp; Tools</span>
    </li>

    <li class="menu-item {{request()->routeIs('users.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Users">Users</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{request()->routeIs('users.list') ? 'active' : ''}}">
                <a href="{{route('users.list')}}" class="menu-link">
                <div data-i18n="All Users">All Users</div>
                </a>
            </li>

            <li class="menu-item {{request()->routeIs('users.create') ? 'active' : ''}}">
                <a href="{{route('users.create')}}" class="menu-link">
                <div data-i18n="Create User">Create User</div>
                </a>
            </li>

            <li class="menu-item {{request()->routeIs('users.admin_users') ? 'active' : ''}}">
                <a href="{{route('users.admin_users')}}" class="menu-link">
                <div data-i18n="Admin Users">Admin Users</div>
                </a>
            </li>
        </ul>
    </li>
    @endif

    <li class="menu-item {{request()->routeIs('profile.show')? 'active': ''}}">
        <a href="{{route('profile.show')}}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-id"></i>
        <div data-i18n="Profile">Profile</div>
        </a>
    </li>

    <!-- e-commerce-app menu start -->

    <!-- e-commerce-app menu end -->
    @if(Auth::user()->hasRole('Admin'))
    <!-- Academy menu start -->
    <li class="menu-item {{request()->routeIs('academy.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons ti ti-book'></i>
          <div data-i18n="Academies">Academies</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{request()->routeIs('academy.result.list')? 'active': ''}}">
            <a href="{{route('academy.result.list')}}" class="menu-link">
              <div data-i18n="All Results">All Results</div>
            </a>
          </li>


          <li class="menu-item {{request()->routeIs('academy.result.two.*') ? 'active open' : ''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="200 Level Results">200 Level Results</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{request()->routeIs('academy.result.two.level_first')? 'active': ''}}">
                <a href="{{route('academy.result.two.level_first')}}" class="menu-link">
                  <div data-i18n="First Semester">First Semester</div>
                </a>
              </li>
              <li class="menu-item {{request()->routeIs('academy.result.two.level_second')? 'active': ''}}">
                <a href="{{route('academy.result.two.level_second')}}" class="menu-link">
                  <div data-i18n="Second Semester">Second Semester</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item {{request()->routeIs('academy.result.three.*') ? 'active open' : ''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="300 Level Results">300 Level Results</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{request()->routeIs('academy.result.three.level_first')? 'active': ''}}">
                <a href="{{route('academy.result.three.level_first')}}" class="menu-link">
                  <div data-i18n="First Semester">First Semester</div>
                </a>
              </li>
              <li class="menu-item {{request()->routeIs('academy.result.three.level_second')? 'active': ''}}">
                <a href="{{route('academy.result.three.level_second')}}" class="menu-link">
                  <div data-i18n="Second Semester">Second Semester</div>
                </a>
              </li>
            </ul>
          </li>


          <li class="menu-item {{request()->routeIs('academy.result.four.*') ? 'active open' : ''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="400 Level Results">400 Level Results</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{request()->routeIs('academy.result.four.level_first')? 'active': ''}}">
                <a href="{{route('academy.result.four.level_first')}}" class="menu-link">
                  <div data-i18n="First Semester">First Semester</div>
                </a>
              </li>
              <li class="menu-item {{request()->routeIs('academy.result.four.level_second')? 'active': ''}}">
                <a href="{{route('academy.result.four.level_second')}}" class="menu-link">
                  <div data-i18n="Second Semester">Second Semester</div>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item {{request()->routeIs('academy.result.five.*') ? 'active open' : ''}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <div data-i18n="500 Level Results">500 Level Results</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{request()->routeIs('academy.result.five.level_first')? 'active': ''}}">
                <a href="{{route('academy.result.five.level_first')}}" class="menu-link">
                  <div data-i18n="First Semester">First Semester</div>
                </a>
              </li>
              <li class="menu-item {{request()->routeIs('academy.result.five.level_second')? 'active': ''}}">
                <a href="{{route('academy.result.five.level_second')}}" class="menu-link">
                  <div data-i18n="Second Semester">Second Semester</div>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </li>
    <!-- Academy menu end -->

    <!-- Finance -->
    <li class="menu-item {{request()->routeIs('finance.payment.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons ti ti-file-dollar'></i>
          <div data-i18n="Finance">Finance</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{request()->routeIs('finance.payment.list')? 'active': ''}}">
            <a href="{{route('finance.payment.list')}}" class="menu-link">
              <div data-i18n="Payment List">Payment List</div>
            </a>
          </li>
          <li class="menu-item">

          <li class="menu-item {{request()->routeIs('finance.payment.create')? 'active': ''}}">
            <a href="{{route('finance.payment.create')}}" class="menu-link">
              <div data-i18n="Create Payment">Create Payment</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- end of finance-->

      <!-- start of tickets -->
      <!-- Finance -->
    <li class="menu-item {{request()->routeIs('ticket.*') ? 'active open' : ''}}">

        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons ti ti-file-dollar'></i>
          <div data-i18n="Complains">complains</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{request()->routeIs('ticket.index')? 'active': ''}}">
            <a href="{{route('ticket.index')}}" class="menu-link">
              <div data-i18n="Complain List">Complain List</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- end of tickets-->
      @endif


    </ul>
</aside>


