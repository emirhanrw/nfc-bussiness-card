<?php 
  include_once('./lib/functions.php');
  session_start();
  if($_SESSION['loginkey'] > time()){
    $user = query_item('users',$_SESSION['idkey']);
    if(!empty($user) && $user['idkey'] == $_SESSION['idkey']){
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ensign PWA Mobile App: Profile</title>
  <meta content="Ensign PWA Mobile App" name="description" />
  <meta content="themepassion" name="author" />
  <!-- App Icons -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/images/icons/android-icon-512x512.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
  <link rel="manifest" href="assets/images/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/images/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- CORE CSS FRAMEWORK - START -->
  <link href="assets/css/preloader.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/materialize/materialize.min.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/fonts/mdi/appicon/appicon.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/fonts/mdi/materialdesignicons.min.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="modules/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen" />
  <!-- CORE CSS FRAMEWORK - END -->
  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
  <link href="modules/fancybox/jquery.fancybox.min.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="modules/flickity/flickity.min.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
  <!-- CORE CSS TEMPLATE - START -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen" id="main-style" />
  <!-- CORE CSS TEMPLATE - END -->

  <link href="./style.css" type="text/css" rel="stylesheet" media="screen" />


</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class=" menu-full  contain-hc profile-page header-image  html" data-header="light" data-footer="light"
  data-header_align="app" data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left"
  data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light">
  <div class="preloader-background">
    <div class="preloader-wrapper">
      <div class="configure-border-1">
      </div>
      <div class="configure-border-2">
      </div>
    </div>
  </div>
  <!-- SIDEBAR - START -->

  <!-- MAIN MENU - START -->



  <!-- MAIN MENU - END -->



  <!--  SIDEBAR - END --><!-- SIDEBAR - START -->

  <!-- MAIN MENU - START -->



  <!-- MAIN MENU - END -->



  <!--  SIDEBAR - END -->

  <!-- START navigation -->
   
    <nav class="fix_topscroll logo_on_fixed  topbar navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class=" brand-logo ">Ensign</a>

      <a href="#" data-target="" class="waves-effect waves-circle navicon back-button htmlmode show-on-large "><i
          class="mdi mdi-arrow-left" data-page=""></i></a>


      <a href="#" data-target="slide-nav" class="waves-effect waves-circle navicon sidenav-trigger show-on-large"><i
          class="app-icon-menu1"></i></a>

      <a href="#" data-target="slide-settings"
        class="waves-effect waves-circle navicon right sidenav-trigger show-on-large"><i
          class="app-icon-equalizer"></i></a>

      <a href="#" data-target="" class="waves-effect waves-circle navicon right nav-site-mode show-on-large"><i
          class="app-icon-contrast"></i></a>
      <!-- <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
    </div>
  </nav>
  <ul id="slide-nav" class="sidenav sidemenu">
    <li class="user-wrap">
      <div class="user-view row">
        <?php
          echo $user['picture']?'<div class="col s3 imgarea"><a href="#user" class="status available"><img class="circle" src="./appadmin/uploads/'.$user['picture'].'" alt="menu user"></a></div>':''
        ?>
        <div class="col s9 infoarea">
          <?php
            echo $user['name']?'<a href="#0"><span class="name">'.$user['name'].'</span></a>':'';
            echo $user['email']?'<a href="mailto:'.$user['email'].' target="_blank""><span class="email">'.$user['email'].'</span></a>':'';
          ?>
        </div>
      </div>
    </li>
    <li class="menulinks">
      <ul class="collapsible">
        <!-- Menu Data Start-->
        <li class="sh-wrap">
          <div class="subheader">Explore</div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-home.html">
              <i class="mdi mdi-home-outline"></i>
              <span class="title">Home Pages</span>
              <div class='lvl1-tag'>App home screens versions</div><span class="badge">11</span>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-screens.html">
              <i class="mdi mdi-script"></i>
              <span class="title">App Screens</span>
              <div class='lvl1-tag'>Commonly used App Screens</div>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-account.html">
              <i class="mdi mdi-account-search-outline"></i>
              <span class="title">User Account</span>
              <div class='lvl1-tag'>User dependent personal screens</div><span class="badge">4</span>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-userinterface.html">
              <i class="mdi mdi-flask-outline"></i>
              <span class="title">User Interface</span>
              <div class='lvl1-tag'>Styled App UI elements</div>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-elements.html">
              <i class="mdi mdi-clipboard-outline"></i>
              <span class="title">Elements</span>
              <div class='lvl1-tag'>Usable App ready sections</div>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-components.html">
              <i class="mdi mdi-cellphone-settings"></i>
              <span class="title">Components</span>
              <div class='lvl1-tag'>App inbuilt UX components </div>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect   index ">
            <a href="sub-apps-ecommerce.html">
              <i class="mdi mdi-cart-outline"></i>
              <span class="title">Shop</span>
              <div class='lvl1-tag'>Ecommerce and shopping platform</div><span class="badge">7</span>
            </a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class="waves-effect "><a href="#" data-target="slide-settings" class="sidenav-trigger"><i
                class="mdi mdi-settings-outline"></i><span class="title">Settings</span>
              <div class='lvl1-tag'>Custom App branding settings</div>
            </a>
          </div>
        </li> <!-- Menu Data End-->


      </ul>
    </li>


    <li class="sep-wrap">
      <div class="divider"></div>
    </li>
    <li class="sh-wrap">
      <div class="subheader">Recent Chats</div>
    </li>
    <li class="menu-users">




      <ul class="collection friends contacts  z-depth-1 ">


        <li class="collection-item avatar  ">

          <a href="#!" class='chatlink waves-effect  status busy'> <img src="assets/images/user-27.jpg"
              alt="Locke Harbert" title="Locke Harbert" class="circle">
            <span class="title">Locke Harbert</span>
            <p>Videographer</p>
          </a>
          <div class="secondary-content">
            <span class="badge primary-bg">5</span>
          </div>
        </li>


        <li class="collection-item avatar  ">

          <a href="#!" class='chatlink waves-effect  status busy'> <img src="assets/images/user-7.jpg"
              alt="Wyatt Dobbson" title="Wyatt Dobbson" class="circle">
            <span class="title">Wyatt Dobbson</span>
            <p>Web Designer</p>
          </a>
          <div class="secondary-content">
            <span class="badge primary-bg">5</span>
          </div>
        </li>


        <li class="collection-item avatar  ">

          <a href="#!" class='chatlink waves-effect  status offline'> <img src="assets/images/user-30.jpg"
              alt="Joella Church" title="Joella Church" class="circle">
            <span class="title">Joella Church</span>
            <p>Graphic Designer</p>
          </a>
          <div class="secondary-content">
            <span class="badge primary-bg">2</span>
          </div>
        </li>


        <li class="collection-item avatar  ">

          <a href="#!" class='chatlink waves-effect  status offline'> <img src="assets/images/user-33.jpg"
              alt="Juieta Firks" title="Juieta Firks" class="circle">
            <span class="title">Juieta Firks</span>
            <p>Tutor</p>
          </a>
          <div class="secondary-content">
            <span class="badge primary-bg">8</span>
          </div>
        </li>



      </ul>

    </li>


    <li class="copy-spacer"></li>
    <li class="copy-wrap">
      <div class="copyright">&copy; Copyright @ themepassion</div>

  </ul>
  <!-- END navigation -->


  <ul id="slide-settings" class="sidenav sidesettings ">
    <li class="menulinks">
      <ul class="collapsible">
        <!-- Menu Settings Start-->
        <li class="sh-wrap">
          <div class="subheader">Themes</div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="red">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate red-text text-lighten-2"></i>
              <span class="title">Red</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="orange">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline deep-orange-text text-lighten-2"></i>
              <span class="title">Orange</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="blue">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline blue-text text-lighten-2"></i>
              <span class="title">Blue</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="teal">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline teal-text text-lighten-2"></i>
              <span class="title">Teal</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="pink">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline pink-text text-lighten-2"></i>
              <span class="title">Pink</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="light-green">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline light-green-text text-lighten-2"></i>
              <span class="title">Light Green</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="purple">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline purple-text text-lighten-2"></i>
              <span class="title">Violet</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="green">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline green-text text-lighten-2"></i>
              <span class="title">Green</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings active" data-type="theme" data-value="deep-purple">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline deep-purple-text text-lighten-2"></i>
              <span class="title">Purple</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="amber">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline amber-text"></i>
              <span class="title">Yellow</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="indigo">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline indigo-text text-lighten-2"></i>
              <span class="title">Indigo</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="blue-grey">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline blue-grey-text text-lighten-2"></i>
              <span class="title">Blue Grey</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="brown">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline brown-text text-lighten-2"></i>
              <span class="title">Brown</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="cyan">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline cyan-text text-lighten-2"></i>
              <span class="title">Cyan</span> </a>
          </div>
        </li>
        <li class="lvl1  theme">
          <div class="waves-effect appsettings " data-type="theme" data-value="grey">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline grey-text text-darken-2"></i>
              <span class="title">Black</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Site Mode</div>
        </li>
        <li class="lvl1  site_mode">
          <div class="waves-effect appsettings active" data-type="site_mode" data-value="light">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Light Mode</span> </a>
          </div>
        </li>
        <li class="lvl1  site_mode">
          <div class="waves-effect appsettings " data-type="site_mode" data-value="dark">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Dark Mode</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Header Style</div>
        </li>
        <li class="lvl1  header">
          <div class="waves-effect appsettings active" data-type="header" data-value="light">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Light Header</span> </a>
          </div>
        </li>
        <li class="lvl1  header">
          <div class="waves-effect appsettings " data-type="header" data-value="dark">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Dark Header</span> </a>
          </div>
        </li>
        <li class="lvl1  header">
          <div class="waves-effect appsettings " data-type="header" data-value="colored">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Colored Header</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Header Alignment</div>
        </li>
        <li class="lvl1  header_align">
          <div class="waves-effect appsettings " data-type="header_align" data-value="left">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Left Align Header</span> </a>
          </div>
        </li>
        <li class="lvl1  header_align">
          <div class="waves-effect appsettings " data-type="header_align" data-value="center">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Center Align Header</span> </a>
          </div>
        </li>
        <li class="lvl1  header_align">
          <div class="waves-effect appsettings " data-type="header_align" data-value="right">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Right Align Header</span> </a>
          </div>
        </li>
        <li class="lvl1  header_align">
          <div class="waves-effect appsettings active" data-type="header_align" data-value="app">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">App Based Align Header</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Menu Style</div>
        </li>
        <li class="lvl1  menu">
          <div class="waves-effect appsettings active" data-type="menu" data-value="light">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Light Menu</span> </a>
          </div>
        </li>
        <li class="lvl1  menu">
          <div class="waves-effect appsettings " data-type="menu" data-value="dark">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Dark Menu</span> </a>
          </div>
        </li>
        <li class="lvl1  menu">
          <div class="waves-effect appsettings " data-type="menu" data-value="colored">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Colored Menu</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Menu Icons</div>
        </li>
        <li class="lvl1  menu_icons">
          <div class="waves-effect appsettings active" data-type="menu_icons" data-value="on">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Menu Icons Show</span> </a>
          </div>
        </li>
        <li class="lvl1  menu_icons">
          <div class="waves-effect appsettings " data-type="menu_icons" data-value="off">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Menu Icons Hide</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Page Footer Style</div>
        </li>
        <li class="lvl1  footer">
          <div class="waves-effect appsettings active" data-type="footer" data-value="light">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Light Footer</span> </a>
          </div>
        </li>
        <li class="lvl1  footer">
          <div class="waves-effect appsettings " data-type="footer" data-value="dark">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Dark Footer</span> </a>
          </div>
        </li>
        <li class="lvl1  footer">
          <div class="waves-effect appsettings " data-type="footer" data-value="colored">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Colored Footer</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Page Footer Type</div>
        </li>
        <li class="lvl1  footer_type">
          <div class="waves-effect appsettings " data-type="footer_type" data-value="minimal">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Minimal Footer</span> </a>
          </div>
        </li>
        <li class="lvl1  footer_type">
          <div class="waves-effect appsettings active" data-type="footer_type" data-value="left">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Left Aligned Footer</span> </a>
          </div>
        </li>
        <li class="lvl1  footer_type">
          <div class="waves-effect appsettings " data-type="footer_type" data-value="center">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Centered Footer</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Fixed Footer Menu</div>
        </li>
        <li class="lvl1  footer_menu">
          <div class="waves-effect appsettings active" data-type="footer_menu" data-value="show">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Show Fixed Footer Menu</span> </a>
          </div>
        </li>
        <li class="lvl1  footer_menu">
          <div class="waves-effect appsettings " data-type="footer_menu" data-value="hide">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Hide Fixed Footer Menu</span> </a>
          </div>
        </li>
        <li class="sep-wrap">
          <div class="divider"></div>
        </li>
        <li class="sh-wrap">
          <div class="subheader">Fixed Footer Menu Style</div>
        </li>
        <li class="lvl1  footer_menu_style">
          <div class="waves-effect appsettings active" data-type="footer_menu_style" data-value="light">
            <a href="#!">
              <i class="mdi mdi-checkbox-intermediate"></i>
              <span class="title">Light Fixed Menu</span> </a>
          </div>
        </li>
        <li class="lvl1  footer_menu_style">
          <div class="waves-effect appsettings " data-type="footer_menu_style" data-value="dark">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Dark Fixed Menu</span> </a>
          </div>
        </li>
        <li class="lvl1  footer_menu_style">
          <div class="waves-effect appsettings " data-type="footer_menu_style" data-value="colored">
            <a href="#!">
              <i class="mdi mdi-checkbox-blank-outline"></i>
              <span class="title">Colored Fixed Menu</span> </a>
          </div>
        </li> <!-- Menu Settings End-->
      </ul>
    </li>
  </ul>
  <div class="menu-close"><i class="mdi mdi-close"></i></div>
  <!-- Content START -->
  <?php
        echo'
  <div class="content-area">
    <div class="ui-profile">
      '.($user['picture']?'<div class="primg"><img src="./appadmin/uploads/'.$user['picture'].'" alt=""></div>':'').'
      <div class="prinfo card-panel">
        <div class="prname">
          <h4 class="name">'.($user['name']?$user['name']:'').'</h4>
          <div class="pos">'.($user['seniority']?$user['seniority']:'').'</div>
          <p class="company">'.($user['company']?$user['company']:'').'</p>
        </div>
      </div>
    </div>
    <div class="overlay z-depth-1 overlay-top"><!--1-->

      <div class="container transparent pr0 pl0 relative"><!--2-->

        <div class="row ">

          <div class="col s12 ">
            <ul  class="tabs z-depth-1 primary-bg colored">
                    <li class="tab col s3 "><a class=" white-text"
                  href="#tab-1822004837-0">Message</a>
              </li>
                    <li class="tab col s3 "><a class=" white-text"
                  href="#tab-1822004837-1">Profile</a>
              </li>
                    <li class="tab col s3 "><a class=" white-text"
                  href="#tab-1822004837-2">Gallery</a>
              </li>
                    <li class="tab col s3 "><a class=" white-text"
                  href="#tab-1822004837-3">Settings</a>
              </li>
                  </ul>
          </div>
            <div id="tab-1822004837-0" class="col s12   ">
              <div class="tab-content z-depth-1 primary-bg-light ">
                <ul class="subpages collection z-depth-1">
                  <li class="collection-item subtit"><div class="row ">
                    <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">İletişim Bilgileri</h5></div>
                    </div>
                  </li>
                    '.($user['phone']?'<li class="collection-item"><a href="tel:'.call($user['phone']).'" class="waves-effect"><i class="mdi mdi-phone "></i><span>'.$user['phone'].'</span><i class="arrow mdi mdi-chevron-right"></i></a></li>':'').'

                    '.($user['email']?'<li class="collection-item"><a href="mailto:'.$user['email'].'" class="waves-effect"><i class="mdi mdi-email "></i><span>'.$user['email'].'</span><i class="arrow mdi mdi-chevron-right"></i></a></li>':'').'

                    '.($user['address']?'<li class="collection-item"><a href="#0" class="waves-effect"><i class="mdi mdi-google-maps"></i><span>'.$user['address'].'</span><i class="arrow mdi mdi-chevron-right"></i></a></li>':'').'
                  </ul>  
              </div>
            </div>
        
            
            <div id="tab-1822004837-1" class="col s12   ">
              <div class="tab-content z-depth-1 primary-bg-light ">
                <p><img alt="image" class="img-wrap z-depth-1 round" style="width: 100%;" src="assets/images/blog-104.jpg"></p><p>I haven\'t bailed on writing. Look, I\'m generating a random paragraph at this very moment in an attempt to get my writing back on track. I am making an effort. I will start writing consistently again! she\'ll prove she can again. We all already know this and you will too.</p>      </div>
            </div>
        
            
            <div id="tab-1822004837-2" class="col s12   ">
              <div class="tab-content z-depth-1 primary-bg-light ">
                <p><img alt="image" class="img-wrap z-depth-1 round" style="width: 100%;" src="assets/images/blog-102.jpg"></p><p>It was a question of which of the two she preferred. On the one hand, the choice seemed simple. The more expensive one with a brand name would be the choice of most. It was the easy choice. The safe choice. But she wasn\'t sure she actually preferred it.</p>      </div>
            </div>
        
            
            <div id="tab-1822004837-3" class="col s12   ">
              <div class="tab-content z-depth-1 primary-bg-light ">
                <p><img alt="image" class="img-wrap z-depth-1 round" style="width: 100%;" src="assets/images/blog-105.jpg"></p><p>Out of another, I get a lovely view of the bay and a little private wharf belonging to the estate. There is a beautiful shaded lane that runs down there from the house. I always fancy I see people walking in these numerous paths and arbors, but John has cautioned me not to give way to fancy in the least. He says that with my imaginative power and habit of story-making a nervous weakness like mine is sure to lead to all manner of excited fancies and that I ought to use my will and good sense to check the tendency. So I try.</p>      </div>
            </div>
        
            
            
        
        </div>
        <!-- Content END -->
      </div><!--2-->
    </div><!--1-->
    <div class="spacer"></div>
    <footer class="page-footer center social-colored ">
      <div class="container footer-content">
        <div class="row">
          <div class="">
            <h5 class="logo">WimaTag</h5>
          </div>
          <div class="link-wrap">
            <ul class="social-wrap">
              <li class="social">
                <a class="" href="#!"><i class="mdi mdi-facebook"></i></a>
                <a class="" href="#!"><i class="mdi mdi-twitter"></i></a>
                <a class="" href="#!"><i class="mdi mdi-dribbble"></i></a>
                <a class="" href="#!"><i class="mdi mdi-google-plus"></i></a>
                <a class="" href="#!"><i class="mdi mdi-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          &copy; Copyright <a class="" href="https://wimateknoloji.com">wimateknoloji</a>.
          All rights reserved.
        </div>
      </div>
    </footer>
    <div class="backtotop">
      <a class="btn-floating btn primary-bg">
        <i class="mdi mdi-chevron-up"></i>
      </a>
    </div>
  </div><!--.content-area-->
  <div class="footer-menu circular">
    <ul>
      <li>
        <a href="sub-elements.html"> <i class="mdi mdi-clipboard-outline"></i>
          <span>Elements</span>
        </a>
      </li>
      <li>
        <a href="sub-account.html"> <i class="mdi mdi-account-search-outline"></i>
          <span>Account</span>
        </a>
      </li>
      <li>
        <a href="sub-home.html"> <i class="mdi mdi-home-outline"></i>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="sub-screens.html"> <i class="mdi mdi-script"></i>
          <span>Screens</span>
        </a>
      </li>
      <li>
        <a href="sub-userinterface.html"> <i class="mdi mdi-flask-outline"></i>
          <span>Interface</span>
        </a>
      </li>
    </ul>
  </div>';
  ?>
  <script src="assets/js/pwa.js"></script>
  <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
  <!-- CORE JS FRAMEWORK - START -->
  <script src="modules/jquery/jquery-2.2.4.min.js"></script>
  <script src="modules/materialize/materialize.js"></script>
  <script src="modules/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/js/variables.js"></script>
  <!-- CORE JS FRAMEWORK - END -->
  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
  <script src="modules/fancybox/jquery.fancybox.min.js"></script>
  <script src="modules/flickity/flickity.pkgd.min.js"></script>
  <script src="assets/js/common.js"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
  <!-- CORE TEMPLATE JS - START -->
  <script src="modules/app/init.js"></script>
  <script src="modules/app/settings.js"></script>
  <script src="modules/app/scripts.js"></script>
  <!-- END CORE TEMPLATE JS - END -->
  <script src="assets/js/preloader.js"></script>
  <script src="./util.js"></script>
</body>
</html>
<?php 
  }else{
    header('location:login');
  }
}else{
  session_unset();
  session_destroy();
  header('location:login');
}
?>
