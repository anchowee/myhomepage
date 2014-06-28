<?php
/**
 * Anchowee 2014 modify
 * 
 * @package anchowee html5
 * @author anchowee
 * @version 0.1 --beta version--
 * @link http://www.overanchowee.ml
 */

 $this->need('header.php');
 ?>
	<div id="content">
	<?php while($this->next()): ?>
                
		<section class="post">
                         <div class="page-header">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><h1><?php $this->title() ?></h1></a></h2></div>

			<p class="entry_data">

				<span class="label label-danger"><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span class="label label-primary"><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<span class="label label-info"><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<a href="<?php $this->permalink() ?>#comments"><span class="label label-info"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></span></a>
			</p>
                 <!--$this->content('read more...'); to remodify excerpt() excerpt(1500, '    ..........');-->
                 <!--beta version-->
                 <div class="con"><?php $this->excerpt(1500, ''); ?><a class="label label-danger" href="<?php $this->permalink() ?>">... 阅读全文 »</a></div>
                 <div class="bshare-custom icon-medium"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span>             

                         </div>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
		</section>
	<?php endwhile; ?>
<!--next page-->
        <ul class="pager">
	<?php $this->pageNav(); ?>
        </ul>
	</div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
	
