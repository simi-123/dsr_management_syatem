 <div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>Adminator</span></a>
    </div>

    <div class="clearfix"></div>

    <br />

    <!-- sidebar menu -->
       
       @include('admin.includes.navigation')


    <!-- /sidebar menu -->
  </div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <nav class="nav navbar-nav">
      <ul class=" navbar-right">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/images/logo.jpeg') }}" alt=""><b>Admin</b>
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                  <a class="dropdown-item"  href="javascript:;">Report</a>
                  <a class="dropdown-item"  href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                        </a>
             <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
              </form>
          </div>
        </li>

       
         
           
          
            
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->