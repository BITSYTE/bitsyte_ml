@extends('layouts.base')



@section('body')
 <body data-open="click" data-menu="horizontal-menu" data-col="2-columns" class="horizontal-layout horizontal-menu 2-columns ">

   
    <nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-light navbar-border navbar-brand-center bg-blue">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a href="#" class="navbar-brand"><img alt="stack admin logo" src="{{ asset('backoffice/app-assets/images/logo/stack-logo.png')}}" class="brand-logo">
                <h2 class="brand-text">Stack</h2></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container container center-layout">
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
              <i></i>              </span><span class="user-name"> {{ auth()->user()->name }} </span></a>
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

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- Horizontal navigation-->
    <div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-bordered navbar-shadow menu-border">
      <!-- Horizontal menu content-->
      <div data-menu="menu-container" class="navbar-container main-menu-content container center-layout">
        <!-- include ../../../includes/mixins-->
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
          <li  class=" nav-item"><a href="index.html" class=" nav-link"><i class="ft-home"></i>
          <span>Dashboard</span></a>
           
          </li>
          <li  class=" nav-item"><a href="#" class=" nav-link"><i class="ft-monitor">
          </i><span>Wallets</span></a>
           
          </li>
         
         
         
          <li  class="dropdown "><a href="#"  class=" nav-link"><i class="ft-droplet"></i><span>Network</span></a>
            
          </li>
          <li  class=" nav-item"><a href="#"  class=" nav-link"><i class="ft-briefcase"></i><span>Profile</span></a>
            
          </li>
          <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-grid"></i><span>Setting</span></a>
            <ul class="dropdown-menu">
              <a href="#" data-toggle="dropdown" class="dropdown-item ">User Setting<i class="icon-table2"></i></a>
                
              <a href="#"  class="dropdown-item ">Advance Setting<i class="icon-th"></i></a>
               
              </li>
              
              
            </ul>
          </li>
          
        </ul>  <!-- menu-->
      </div>
      <!-- /horizontal menu content-->
    </div>
    <!-- Horizontal navigation-->

    <div class="contenido">
        
           
               
                
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

                @show
            
    </div>


    <footer class="footer footer-static footer-light navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 
      <a href="https://bitsyte.mxcorp.net/" target="_blank" class="text-bold-800 grey darken-2">BitSyte </a>, All rights reserved. </span>
      <span class="float-md-right d-xs-block d-md-inline-block"> MX </span></p>
    </footer>





    @endsection


