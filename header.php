<!DOCTYPE HTML>
<!--

  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___    generator:Anchowee core module.

Welcome !
--beta version--
源代码请联系：QQ529238084
                                                       
-->
<!--copyright anchowee 2014-->
<!--design based on typecho-->
<!--欢迎来到我的博客！-->
<html>
<head>
<!--global varible-->
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="keywords" content="Anchowee,Linux,Linux,JavaScript,Web,blog">
<!--<meta http-equiv="refresh" content="120"> every 120s refresh again-->
<meta name="author" content="Designer:anchowee@163.com">
<Meta name="Robots" Content="All|Follow">
<Meta http-equiv="Webkit/Firefox/Chrome/IE9" Content="Generator">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Anchowee blog devote my mind to open-source.">
<Meta name="Generator" Content="Vim|FrontPage|Bash shell|Emacs">

<title><?php $this->archiveTitle(" &raquo; ",""," - "); ?><?php $this->options->title(); ?></title>
<link rel="shorcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-ico" />

<!--bootstrap and jquery-->
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<script src="http://cdn.bootcss.com/Snowstorm/20131208/snowstorm-min.js"></script>
<!--fonts-->
<!--effects.js-->
<link href='http://fonts.useso.com/css?family=Open+Sans|Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Andada|Baumans|Courgette|Crete+Round' rel='stylesheet' type='text/css'>
<script src="http://anchowee.qiniudn.com/effect.js"></script>
<!--snowstorm configuration-->
<script type="text/javascript">
snowStorm.snowColor = '#99ccff'; // blue-ish snow!?
snowStorm.flakesMaxActive = 45;  // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
snowStorm.followMouse = true;
snowStorm.freezeOnBlur = true;
</script>
<script type="text/javascript"> 
var browser=navigator.appName 
var b_version=navigator.appVersion 
var version=b_version.split(";"); 
var trim_Version=version[1].replace(/[ ]/g,""); 
if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE6.0") { 
alert("浏览器版本过低！建议换上IE9及以上版本！"); 
} 
else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE7.0") { 
alert("浏览器版本过低！建议换上IE9及以上版本！"); 
} 
else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0") { 
alert("浏览器版本过低！建议换上IE9及以上版本！"); 
} 
else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE9.0") { 
alert("浏览器版本过低！建议换上IE9及以上版本！");
} 
</script>
<!--IE  support,but the effect are so bad-->
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
   <li class="lstnav" <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> >
      <a href="<?php $pages->permalink(); ?>">
      <?php $pages->title(); ?>
      </a>
   </li>
   <?php endwhile; ?>

</ul>
</nav>
</header>