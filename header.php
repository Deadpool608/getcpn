<?
session_start();
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
   <title>Get Coupon</title>

   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- Bootstrap CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet" />

   <!-- Font -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
   <link href="css/elegant-font.css" rel="stylesheet" />
   <link href="css/linearicons.css" rel="stylesheet" />

   <!-- REVOLUTION STYLE SHEETS -->
   <link href="revolution/css/settings.css" rel="stylesheet" />
   <!-- REVOLUTION LAYERS STYLES -->
   <link href="revolution/css/layers.css" rel="stylesheet" />
   <!-- REVOLUTION NAVIGATION STYLES -->
   <link href="revolution/css/navigation.css" rel="stylesheet" />
   <!-- OWL CAROUSEL
         ================================================== -->
   <link href="css/owl.carousel.css" rel="stylesheet" />
   <!-- SCROLL BAR MOBILE MENU
         ================================================== -->
   <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />

   <!-- Main Style -->
   <link href="style.css" rel="stylesheet" />
   <!-- Favicons
         ================================================== -->

   <link href="images/custom/get%20coupons.png" rel="icon">

   <style type="text/css">
      .auto-style1 {
         height: 179px;
      }
   </style>
</head>

<body>

   <form id="form1" runat="server">
      <div>
         <table style="width: 100%;">
            <tr>
               <td id="header">

                  <div class="mobile-menu-first">
                     <div id="mobile-menu" class="mobile-menu">
                        <!-- Mobile Menu -->
                        <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
                           <ul>
                              <li>
                                 <a href="index.php"><i class="icon-home"></i> Home</a>
                              </li>
                              <li><a href="about.php"><span>About </span></a></li>

                              <li>
                                 <a href="shop.php"><span>Shop</span></a>
                                 <ul>
                                    <li><a href="shop.php">Store Catalog</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="contact.php"><span>Contact Us</span></a>
                              </li>

                           </ul>
                        </div>
                        <!-- /#rmm   -->
                     </div>
                  </div>
                  <!-- End Mobile Menu -->

                  <div id="page">
                     <div id="skrollr-body">
                     <header class="header-v3 header-fix header-border header-bg-white"
               data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
              
                        <?php session_start()?>
                           <div class="left-header">
                              <nav id="navi-left">
                                 <ul class="navi-level-1 main-navi">
                                    <li class="has-sub">
                                       <a href="index.php"><span>Home</span></a>
                                    </li>
                                    <li class="has-sub">
                                       <a href="about.php"><span>About </span></a>
                                    </li>

                                 </ul>
                              </nav>
                           </div>
                           <!-- End Left Header -->
                           <div class="logo">
                              <ul class="navi-level-1 main-navi">
                                 <li><a href="home.aspx" class=""><img src="images/custom/get%20coupons.png" class="img-responsive" alt="Image" /></a></li>
                                 <li>
                                    <a href="#/" class="mm-toggle hidden-lg hidden-md">
                                       <span aria-hidden="true" class="icon_menu"></span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End Logo -->
                           <div class="right-header">
                              <nav id="navi-right">
                                 <ul class="navi-level-1 main-navi">
                                    <li class="has-sub">
                                       <a href="shop.php"><span>Shop</span></a>
                                       <ul class="navi-level-2">
                                          <li><a href="shop.php">Store Catalog</a></li>
                                       </ul>
                                    </li>

                                    <li class="has-sub">
                                       <a href="contact.php"><span>Contact Us</span></a>
                                    </li>

                                    <li class="has-sub">
                                       <?php

                                       if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                          echo "
                 <li class='has-sub'>
                           <a><span>Hello $_SESSION[name]</span></a>
                           <ul class='navi-level-2'>
                           <span >
                      
                           <li> <a href='dash.php'>Dashboard</a></li>
                           <li> <a href='logout.php'>Logout</a></li>     
                           </span>
                           </ul>
                        </li>
                       
                       ";
                                       } else {
                                          echo "
                      <span>
                       <a  href='signup.php' >Login/Signin</a>
                      </span>";
                                       }
                                       ?>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                           <!-- End Right Header -->

                        </header>
                        <!-- End Header -->
                     </div>
                  </div>