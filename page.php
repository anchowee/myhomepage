<!--designed by anchowee-->
<!--
  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___
                                                       
-->
<?php $this->need('header.php'); ?>
<!--Page-->
    <div id="content">
    <!--page.php file-->
        <section class="post">
                         <div class="page-header">
<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                         </div>
			
			<p class="entry_data">
				<span class="label label-danger"><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span class="label label-primary><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
                        </p>


			<div class="con">
                         
                             <!--share div-->
                             <blockquote>
			     <p class="text-muted"><?php $this->content(); ?></p>
                             
                             </blockquote>
                         <div class="bshare-custom icon-medium"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span>             

                         </div>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
 <?php $this->need('comments.php'); ?>
<div class="more">显示余下全文</div> 
            </div>
           </section>
                 

                
         <?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

		
                
		
       