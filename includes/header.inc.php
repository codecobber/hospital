<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Carstairs theme for GetSimple CMS
* @Author:    Code Cobber
*****************************************************/
?>

<!doctype html>

<!--
=============================================
  Developed by Code Cobber for your enjoyment
  http://www.codecobber.co.uk
  Free for personal and commercial use under the CCA 4.0 license:  (see www.codecobber.co.uk/license)
=============================================
-->

<html class="no-js" lang="en">

  <head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!-- Site Title -->
  	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
  	<?php get_header(); ?>

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/effects.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/push.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/skeleton_display.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/myCss.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/rowData.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" />


    <!-- Google Fonts -->
   <?php include('css/fonts.txt'); ?>
   <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/cssFonts.css" />


    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Comfortaa&display=swap" rel="stylesheet">


    <!-- Javascript -->
    <script src="<?php get_theme_url(); ?>/js/jquery.js"></script>
    <script id="scrollCheck" src="<?php get_theme_url(); ?>/js/scrollCheck.js"></script>


    <!-- Google Analytics below -->
    <link rel="canonical" href="http://www.yoursite.co.uk/" >


    <!-- Facebook og settings -->
    <meta property="og:title" content="title" />
    <meta property="og:url" content="http://www.yoursite.co.uk" />
    <meta property="og:image" content="http://www.yoursite.co.uk/images/logo.png" />
    <meta property="og:type" content="company" />



    <!-- twitter code below -->



  </head>
  <body id="<?php get_page_slug();?>">


<!-- SideNav content -->



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div id="navMiniLogo" class="nav s1 columns"><a class="sideNHSLogo" href="<?php get_site_url(); ?>">
    <img src="<?php get_theme_url(); ?>/img/nhsScotlandWhiteLogo.png" alt="NHS Scotland Icon" title="NHS Scotland Icon" class="header-icon"></a>
  </div>


  <ul id="nav">
    <li class="navDivider"></li>
    <?php get_navigation(return_page_slug()); ?>
  </ul>
</div>

<div id="main">
  <div id="homePage">
    <div class="container">
      <div class="row">
        <div id="navLogo" class="nav s1 columns"><a class="novartLogo" href="<?php get_site_url(); ?>">
          <img src="<?php get_theme_url(); ?>/img/nhsScotlandWhiteLogo.png" alt="NHS Scotland Icon" title="NHS Scotland Icon" class="header-icon"></a>
        </div>

        <div id="navName" class="nav s10 columns">The State Hospital
          <span id="navSearchBar">
            <?php get_i18n_search_form(array('slug'=>'search','showTags'=>0)); ?>
            </span>
          </div>
        <div id="navBurger" class="s1 columns">
          <div id="nav-icon1">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- ==================================================================================== -->
