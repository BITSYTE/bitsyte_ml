<nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a href="#" class="navbar-brand"><img alt="stack admin logo" src="{{ asset('backoffice/app-assets/images/logo/stack-logo.png')}}" class="brand-logo">
                        <h2 class="brand-text">Stack</h2></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>

                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input type="text" placeholder="Explore BitSyte..." class="input">
                        </div>
                    </li>
                </ul>


                <!-- menu perfil -->
                <ul class="nav navbar-nav float-xs-right">

                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
              <span class="avatar avatar-online"><img src="{{ asset('backoffice/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar">
              <i></i>              </span><span class="user-name"> User </span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>

                            <div class="dropdown-divider"></div>



                            <a class="dropdown-item"  href="{{ route('logout') }}"   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                <i class="ft-power"></i> Logout</a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>


                        </div>
                    </li>
                </ul> <!-- fin menu perfil -->
            </div>
        </div> <!-- navbar container -->
    </div> <!-- navbar wrapper -->
</nav> <!-- navbar -->