<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="au theme template">
      <meta name="author" content="Hau Nguyen">
      <meta name="keywords" content="au theme template">
      <!-- Title Page-->
      <title>OTT By Hareem</title>
      <!-- Fontfaces CSS-->
      <link href="{{asset('cool-assets/css/font-face.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
      <!-- Bootstrap CSS-->
      <link href="{{asset('cool-assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
      <!-- Vendor CSS-->
      <link href="{{asset('cool-assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
      <link href="{{asset('cool-assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
      <link href="{{asset('cool-assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
      <!-- Main CSS-->
      <link href="{{ asset('cool-assets/css/theme.css') }}" rel="stylesheet" media="all">
   </head>
   <body class="animsition">
      <div class="page-wrapper">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop3 d-none d-lg-block">
         <div class="section__content section__content--p35">
            <div class="header3-wrap">
               <div class="header__logo">
                  <a href="#">
                  <img src="{{ asset('cool-assets/images/icon/ott_logo.png') }}" alt="CoolAdmin" width="100" />
                  </a>
               </div>
               <div class="header__navbar">
                  <ul class="list-unstyled">
                     <li class="has-sub">
                        <a href="{{ url('/') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                        <span class="bot-line"></span>
                        </a>
                     </li>
                     <li class="has-sub">
                        <a href="#">
                        <i class="fas fa-tachometer-alt"></i>Emp & Cust.
                        <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                           <li>
                              <a href="{{ url('dashboard/employes') }}">Employees</a>
                           </li>
                           <li>
                              <a href="{{ url('dashboard/customers') }}">Customers</a>
                           </li>
                           <li>
                              <a href="{{ url('dashboard/clients') }}">Client Images</a>
                           </li>
                        </ul>
                     </li>
                     <li class="has-sub">
                        <a href="#">
                        <i class="fas fa-tachometer-alt"></i>Expenses & Miscellaneous
                        <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                           <li>
                              <a href="{{ url('dashboard/expenses/expenseType') }}">Expenses Type</a>
                           </li>
                           <li>
                              <a href="{{ url('dashboard/expenses') }}">Expenses</a>
                           </li>
                           <li>
                              <a href="{{ url('dashboard/miscellaneouses') }}">Miscellaneous</a>
                           </li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="{{ url('dashboard/packages') }}">
                        <i class="fas fa-trophy"></i>
                        <span class="bot-line"></span>Add Services</a>
                     </li>

                     <li class="has-sub">
                        <a href="#">
                        <i class="fas fa-tachometer-alt"></i>Reports
                        <span class="bot-line"></span>
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                           <li>
                              <a href="{{ url('dashboard/reports/summaryReports') }}">Summary Reports</a>
                           </li>
                           <li>
                              <a href="{{ url('dashboard/reports/dailyReport') }}">Daily Report</a>
                           </li>
                           <li>
                              <a href="{{ url('dashboard/reports/monthlyReport') }}">Monthly Report</a>
                           </li>
                        </ul>
                     </li>

                     <li>
                        <a href="{{ url('dashboard/pos') }}">
                        <i class="fas fa-trophy"></i>
                        <span class="bot-line"></span>POS</a>
                     </li>
                     
                     
                  </ul>
               </div>
               <div class="header__tool">
                  <div class="header-button-item has-noti js-item-menu">
                     <i class="zmdi zmdi-notifications"></i>
                     <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                           <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                           <div class="bg-c1 img-cir img-40">
                              <i class="zmdi zmdi-email-open"></i>
                           </div>
                           <div class="content">
                              <p>You got a email notification</p>
                              <span class="date">April 12, 2018 06:50</span>
                           </div>
                        </div>
                        <div class="notifi__item">
                           <div class="bg-c2 img-cir img-40">
                              <i class="zmdi zmdi-account-box"></i>
                           </div>
                           <div class="content">
                              <p>Your account has been blocked</p>
                              <span class="date">April 12, 2018 06:50</span>
                           </div>
                        </div>
                        <div class="notifi__item">
                           <div class="bg-c3 img-cir img-40">
                              <i class="zmdi zmdi-file-text"></i>
                           </div>
                           <div class="content">
                              <p>You got a new file</p>
                              <span class="date">April 12, 2018 06:50</span>
                           </div>
                        </div>
                        <div class="notifi__footer">
                           <a href="#">All notifications</a>
                        </div>
                     </div>
                  </div>
                  {{--<div class="header-button-item js-item-menu">
                     <i class="zmdi zmdi-settings"></i>
                     <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                              <a href="#">
                              <i class="zmdi zmdi-account"></i>Account</a>
                           </div> 
                           <div class="account-dropdown__item">
                              <a href="{{url('dashboard/userAccounts/edit/'.Auth::id())}}">
                              <i class="zmdi zmdi-settings"></i>Setting</a>
                           </div>
                            <div class="account-dropdown__item">
                              <a href="#">
                              <i class="zmdi zmdi-money-box"></i>Billing</a>
                           </div> 
                        </div>
                          <div class="account-dropdown__body">
                           <div class="account-dropdown__item">
                              <a href="#">
                              <i class="zmdi zmdi-globe"></i>Language</a>
                           </div>
                           <div class="account-dropdown__item">
                              <a href="#">
                              <i class="zmdi zmdi-pin"></i>Location</a>
                           </div>
                           <div class="account-dropdown__item">
                              <a href="#">
                              <i class="zmdi zmdi-email"></i>Email</a>
                           </div>
                           <div class="account-dropdown__item">
                              <a href="#">
                              <i class="zmdi zmdi-notifications"></i>Notifications</a>
                           </div>
                        </div> 
                     </div>
                  </div>--}}
                  <div class="account-wrap">
                     <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                           <img src="{{ asset('cool-assets/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                        </div>
                        <div class="content">
                           <a class="js-acc-btn" href="#">{{@Auth::user()->first_name}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                           <div class="info clearfix">
                              <div class="image">
                                 <a href="#">
                                 <img src="{{ asset('cool-assets/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                 </a>
                              </div>
                              <div class="content">
                                 <h5 class="name">
                                    <a href="#">{{@Auth::user()->first_name}}</a>
                                 </h5>
                                 <span class="email">{{@Auth::user()->email}}</span>
                              </div>
                           </div>
                           <div class="account-dropdown__body">
                              <div class="account-dropdown__item">
                                 <a href="#">
                                 <i class="zmdi zmdi-account"></i>Account</a>
                              </div>
                              <div class="account-dropdown__item">
                                 <a href="{{url('dashboard/userAccounts/edit/'.Auth::id())}}">
                                 <i class="zmdi zmdi-settings"></i>Setting</a>
                              </div>
                              <div class="account-dropdown__item">
                                 <a href="#">
                                 <i class="zmdi zmdi-money-box"></i>Billing</a>
                              </div>
                           </div>
                           <div class="account-dropdown__footer">
                              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                              <i class="zmdi zmdi-power"></i>{{ __('Logout') }}</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- END HEADER DESKTOP-->
      <!-- HEADER MOBILE-->
      <header class="header-mobile header-mobile-2 d-block d-lg-none">
         <div class="header-mobile__bar">
            <div class="container-fluid">
               <div class="header-mobile-inner">
                  <a class="logo" href="index.html">
                  <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                  </a>
                  <button class="hamburger hamburger--slider" type="button">
                  <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                  </span>
                  </button>
               </div>
            </div>
         </div>
         <nav class="navbar-mobile">
            <div class="container-fluid">
               <ul class="navbar-mobile__list list-unstyled">
                  <li class="has-sub">
                     <a class="js-arrow" href="#">
                     <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                           <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                           <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                           <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                           <a href="index4.html">Dashboard 4</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="chart.html">
                     <i class="fas fa-chart-bar"></i>Charts</a>
                  </li>
                  <li>
                     <a href="table.html">
                     <i class="fas fa-table"></i>Tables</a>
                  </li>
                  <li>
                     <a href="form.html">
                     <i class="far fa-check-square"></i>Forms</a>
                  </li>
                  <li>
                     <a href="calendar.html">
                     <i class="fas fa-calendar-alt"></i>Calendar</a>
                  </li>
                  <li>
                     <a href="map.html">
                     <i class="fas fa-map-marker-alt"></i>Maps</a>
                  </li>
                  <li class="has-sub">
                     <a class="js-arrow" href="#">
                     <i class="fas fa-copy"></i>Pages</a>
                     <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                           <a href="login.html">Login</a>
                        </li>
                        <li>
                           <a href="register.html">Register</a>
                        </li>
                        <li>
                           <a href="forget-pass.html">Forget Password</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-sub">
                     <a class="js-arrow" href="#">
                     <i class="fas fa-desktop"></i>UI Elements</a>
                     <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                           <a href="button.html">Button</a>
                        </li>
                        <li>
                           <a href="badge.html">Badges</a>
                        </li>
                        <li>
                           <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                           <a href="card.html">Cards</a>
                        </li>
                        <li>
                           <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                           <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                           <a href="modal.html">Modals</a>
                        </li>
                        <li>
                           <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                           <a href="grid.html">Grids</a>
                        </li>
                        <li>
                           <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                           <a href="typo.html">Typography</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="sub-header-mobile-2 d-block d-lg-none">
         <div class="header__tool">
            <div class="header-button-item has-noti js-item-menu">
               <i class="zmdi zmdi-notifications"></i>
               <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                  <div class="notifi__title">
                     <p>You have 3 Notifications</p>
                  </div>
                  <div class="notifi__item">
                     <div class="bg-c1 img-cir img-40">
                        <i class="zmdi zmdi-email-open"></i>
                     </div>
                     <div class="content">
                        <p>You got a email notification</p>
                        <span class="date">April 12, 2018 06:50</span>
                     </div>
                  </div>
                  <div class="notifi__item">
                     <div class="bg-c2 img-cir img-40">
                        <i class="zmdi zmdi-account-box"></i>
                     </div>
                     <div class="content">
                        <p>Your account has been blocked</p>
                        <span class="date">April 12, 2018 06:50</span>
                     </div>
                  </div>
                  <div class="notifi__item">
                     <div class="bg-c3 img-cir img-40">
                        <i class="zmdi zmdi-file-text"></i>
                     </div>
                     <div class="content">
                        <p>You got a new file</p>
                        <span class="date">April 12, 2018 06:50</span>
                     </div>
                  </div>
                  <div class="notifi__footer">
                     <a href="#">All notifications</a>
                  </div>
               </div>
            </div>
            <div class="header-button-item js-item-menu">
               <i class="zmdi zmdi-settings"></i>
               <div class="setting-dropdown js-dropdown">
                  <div class="account-dropdown__body">
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-account"></i>Account</a>
                     </div>
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-settings"></i>Setting</a>
                     </div>
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                     </div>
                  </div>
                  <div class="account-dropdown__body">
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-globe"></i>Language</a>
                     </div>
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-pin"></i>Location</a>
                     </div>
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-email"></i>Email</a>
                     </div>
                     <div class="account-dropdown__item">
                        <a href="#">
                        <i class="zmdi zmdi-notifications"></i>Notifications</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="account-wrap">
               <div class="account-item account-item--style2 clearfix js-item-menu">
                  <div class="image">
                     <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                  </div>
                  <div class="content">
                     <a class="js-acc-btn" href="#">john doe</a>
                  </div>
                  <div class="account-dropdown js-dropdown">
                     <div class="info clearfix">
                        <div class="image">
                           <a href="#">
                           <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                           </a>
                        </div>
                        <div class="content">
                           <h5 class="name">
                              <a href="#">john doe</a>
                           </h5>
                           <span class="email">johndoe@example.com</span>
                        </div>
                     </div>
                     <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                           <a href="#">
                           <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                           <a href="#">
                           <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                           <a href="#">
                           <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                     </div>
                     <div class="account-dropdown__footer">
                        <a href="#">
                        <i class="zmdi zmdi-power"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END HEADER MOBILE -->
