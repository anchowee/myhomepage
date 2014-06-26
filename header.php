<!DOCTYPE HTML>
<!--

  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___

Welcome !
源代码请联系：QQ529238084
                                                       
-->
<!--copyright anchowee 2014-->
<!--design based on typecho-->
<!--欢迎来到我的博客！-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="keywords" content="Anchowee,Linux,Linux,JavaScript,Web,blog">
<!--<meta http-equiv="refresh" content="120">-->
<meta name="author" content="Designer:anchowee">
<meta name="description" content="Anchowee blog devote my mind to open-source.">
<title><?php $this->archiveTitle(" &raquo; ",""," - "); ?><?php $this->options->title(); ?></title>
<link rel="shorcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-ico" />

<!--bootstrap-->
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<script src="http://cdn.bootcss.com/Snowstorm/20131208/snowstorm-min.js"></script>
<!--self-->
<!--effects.js-->

<script src="http://qdownloads.qiniudn.com/effect.js"></script>
<!--snowstorm-->
<script type="text/javascript">
snowStorm.snowColor = '#99ccff'; // blue-ish snow!?
snowStorm.flakesMaxActive = 45;  // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
snowStorm.followMouse = true;
snowStorm.freezeOnBlur = true;
</script>

<!--[if lt IE 9]>
  <script src="http://qdownloads.qiniudn.com/html5.js"></script>
<![endif]-->

<!--[if IE 6]>
<link href="./css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="container">
<header>
<a href="<?php $this->options->siteurl(); ?>">
<img id="rota" src="http://anchowee.qiniudn.com/psb.png"  class="img-circle"/><h1><span class="label label-info">欢迎！这里是Anchowee个人博客</span></h1>
</a>
<br>

<!--nav bar -->
<nav class="navbar navbar-inverse" role="navigation">
<ul class="nav nav-tabs">
<li class="active">
<a href="<?php $this->options->siteUrl(); ?>">
主页
</a>
   </li> 
   <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
   <?php while($pages->next()): ?>
   <li <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> >
      <a href="<?php $pages->permalink(); ?>">
      <?php $pages->title(); ?>
      </a>
   </li>
   <?php endwhile; ?>
   <li>
      <a href="<?php $this->options->feedUrl(); ?>">RSS订阅</a>
   </li>
</ul>
</nav>
</header>