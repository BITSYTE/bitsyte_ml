@extends('layouts.base')


@section('body')
 <body data-open="click" data-menu="horizontal-menu" data-col="2-columns" class="horizontal-layout horizontal-menu 2-columns ">

   
    <nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-light navbar-border navbar-brand-center bg-blue">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a href="#" class="navbar-brand"><img alt="stack admin logo" src="{{ asset('app-assets/images/logo/stack-logo.png')}}" class="brand-logo">
                <h2 class="brand-text">Stack</h2></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container container center-layout">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
              <li class="dropdown nav-item mega-dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> News</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img src="{{ asset('app-assets/images/slider/slider-2.png')}}" alt="First slide" class="rounded img-fluid mb-1"><a href="#" class="news-title mb-0">Poster Frame PSD</a>
                        <p class="news-content"><span class="font-small-2">January 26, 2016</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-random"></i> Drill down menu</h6>
                    <ul class="drilldown-menu">
                      <li class="menu-list">
                        <ul>
                          
                          <li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                            <ul>
                              <li><a href="#" class="dropdown-item"><i class="fa fa-bookmark-o"></i>  Second level</a></li>
                              <li><a href="#"><i class="fa fa-lemon-o"></i> Second level menu</a>
                                <ul>
                                  <li><a href="#" class="dropdown-item"><i class="fa fa-heart-o"></i>  Third level</a></li>
                                  <li><a href="#" class="dropdown-item"><i class="fa fa-file-o"></i> Third level</a></li>
                                  
                                </ul>
                              </li>
                              
                            </ul>
                          </li>
                          <li><a href="color-palette-primary.html" class="dropdown-item"><i class="ft-camera"></i> Color pallet system</a></li>
                          
                          
                          <li><a href="http://support.pixinvent.com/" class="dropdown-item"><i class="fa fa-life-ring"></i> Customer support center</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-list-ul"></i> Accordion</h6>
                    <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card no-border box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div id="headingOne" role="tab" class="card-header p-0 pb-2 no-border"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                        <div id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" class="card-collapse collapse in">
                          <div class="card-body">
                            <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope-o"></i> Contact Us</h6>
                    <form>
                      <fieldset class="form-group">
                        <label for="inputName1" class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="inputName1" placeholder="Usuario" class="form-control">
                            <div class="form-control-position"><i class="fa fa-user-o pl-1"></i></div>
                          </div>
                        </div>
                      </fieldset>
                   
                      <div class="col-sm-12 mb-1">
                        <button type="button" class="btn btn-primary float-xs-right"><i class="fa fa-paper-plane-o"></i> Send</button>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input type="text" placeholder="Explore Stack..." class="input">
                </div>
              </li>
            </ul>

            
            <!-- menu perfil -->
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                <div aria-labelledby="dropdown-flag" class="dropdown-menu"><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a></div>
              </li>
              
              
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i>
              </span><span class="user-name"> @yield('user') </span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                    <a href="#" class="dropdown-item"><i class="ft-check-square"></i> Task</a>
                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul> <!-- fin menu perfil -->
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- Horizontal navigation-->
    <div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-bordered navbar-shadow menu-border">
      <!-- Horizontal menu content-->
      <div data-menu="menu-container" class="navbar-container main-menu-content container center-layout">
        <!-- include ../../../includes/mixins-->
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
          <li data-menu="dropdown" class="dropdown nav-item"><a href="index.html" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-home"></i>
          <span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">eCommerce</a>
              </li>
            </ul>
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-monitor">
          </i><span>Templates</span></a>
            <ul class="dropdown-menu">
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu">
              <a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Vertical</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Semi Light</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Horizontal</a>
                
              </li>
            </ul>
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-layout"></i><span>Layouts</span></a>
            <ul class="dropdown-menu">
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Page Layouts<i class="icon-stack-2"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">1 column</a>
                  </li>
                  <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Content Det. Sidebar</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Detached left sidebar</a>
                      </li>
                      <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Detached sticky left sidebar</a>
                      </li>
                  
                    </ul>
                  </li>
                  
                  
                  
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Navbars<i class="icon-navicon2"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Navbar Light</a>
                  </li>
                  
                   
                   
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Vertical Nav</a>
                <ul class="dropdown-menu">
                  <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Navigation Types</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a href="#" class="dropdown-item">Semi Light</a>
                      </li>
                                  
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Horizontal Nav</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" class="dropdown-item">Left Icon Navigation</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Page Headers<i class="icon-header"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="headers-breadcrumbs-basic.html" data-toggle="dropdown" class="dropdown-item">Breadcrumbs basic</a>
                  </li>
                 
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Footers<i class="icon-vertical_align_bottom"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="footer-light.html" data-toggle="dropdown" class="dropdown-item">Footer Light</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-zap"></i><span>Starter kit</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">1 column</a>
              </li>

 
              <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Dark layout</a>
              </li>
              <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li data-menu="megamenu" class="dropdown mega-dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-box"></i><span>Apps</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                                 
                      <li><a href="#" class="dropdown-item"><i class="ft-share"></i>Timelines</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Timelines Center</a>
                          </li>
                          
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="ft-user"></i>Users</a>
                        <ul class="mega-menu-sub">
                          
                          <li><a href="#" class="dropdown-item"><i class="ft-user-plus"></i>Users Cards</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="ft-plus-square"></i>Calender</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Full Calender Basic</a>
                          </li>
                          
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="ft-image"></i>Gallery</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Gallery Grid</a>
                          </li>
                          
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="ft-search"></i>Search</a>
                        <ul class="mega-menu-sub">
                          <li><a href="search-page.html" class="dropdown-item"><i class="undefined"></i>Search Page</a>
                          </li>
                                                  
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="ft-unlock"></i>Authentication</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Login Simple</a>
                          </li>
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Login with Bg</a>
                          </li>
                         
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="ft-alert-triangle"></i>Error</a>
                        <ul class="mega-menu-sub">
                          <li><a href="error-400.html" class="dropdown-item"><i class="undefined"></i>Error 400</a>
                          </li>
                         
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="ft-watch"></i>Coming Soon</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i></i>Flat</a>
                          </li>
                          
                          
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="ft-cloud-off"></i>Maintenance</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-droplet"></i><span>UI</span></a>
            <ul class="dropdown-menu">
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Content</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Grid</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Cards</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Bootstrap</a>
                  </li>
                 
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Advance Cards</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Statistics</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Color Palette</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Primary palette</a>
                  </li>
                  
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Red palette</a>
                  </li>
                 
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Icons</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Feather</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-briefcase"></i><span>Components</span></a>
            <ul class="dropdown-menu">
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Bootstrap Components</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Alerts</a>
                  </li>
                  <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Buttons</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Basic Buttons</a>
                      </li>
                      
                    </ul>
                  </li>
                
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Extra Components</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Sweet Alerts</a>
                  </li>
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Forms</a>
                <ul class="dropdown-menu">
                  <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Form Elements<i class="icon-wpforms"></i></a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Form Inputs</a>
                      </li>
                    
                    </ul>
                  </li>
                  <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Form Layouts<i class="icon-wpforms"></i></a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Basic Forms</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Form Wizard<i class="icon-paste"></i></a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-grid"></i><span>Tables</span></a>
            <ul class="dropdown-menu">
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Bootstrap Tables<i class="icon-table2"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Basic Tables</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">DataTables<i class="icon-th"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Basic Initialisation</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">DataTables Ext.<i class="icon-th-large"></i></a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">AutoFill</a>
                  </li>
                  <li data-menu="dropdown-submenu" class="dropdown dropdown-submenu"><a href="#" data-toggle="dropdown" class="dropdown-item dropdown-toggle">Buttons</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Basic Buttons</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Column Reorder</a>
                  </li>
                  
                </ul>
              </li>
              <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">jsGrid<i class="icon-table"></i></a>
              </li>
            </ul>
          </li>
          <li data-menu="megamenu" class="dropdown mega-dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-bar-chart-2"></i><span>Charts &amp; Maps</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="icon-bubble_chart"></i>Echarts</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Line &amp; Area charts</a>
                          </li>
                                                                              
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="icon-stats-dots"></i>Chartjs</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Line charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="icon-graphic_eq"></i>Morris Charts</a>
                      </li>
                      <li><a href="#" class="dropdown-item"><i class="icon-pie-graph2"></i>Flot Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Line charts</a>
                          </li>
                          
                          
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="icon-stats-bars"></i>Chartist</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>Line charts</a>
                          </li>
                          
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-mega-col="col-md-3" class="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a href="#" class="dropdown-item"><i class="undefined"></i>Maps</a>
                        <ul class="mega-menu-sub">
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>google Maps</a>
                            <ul class="mega-menu-sub">
                              <li><a href="#" class="dropdown-item"><i class="undefined"></i>Maps</a>
                              </li>                            
                            </ul>
                          </li>
                          <li><a href="#" class="dropdown-item"><i class="undefined"></i>jVector Map</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /horizontal menu content-->
    </div>
    <!-- Horizontal navigation-->

    <div >
        
           
                @section('userContent')
                
                @show
            
    </div>


    <footer class="footer footer-static footer-light navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 
      <a href="https://bitsyte.mxcorp.net/" target="_blank" class="text-bold-800 grey darken-2">BitSyte </a>, All rights reserved. </span>
      <span class="float-md-right d-xs-block d-md-inline-block"> MX </span></p>
    </footer>

    @endsection