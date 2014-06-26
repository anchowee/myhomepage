<?php
/**
 * Anchowee 2014 modify
 * 
 * @package anchowee html5
 * @author anchowee
 * @version 0.1
 * @link http://www.overanchowee.ml
 */

 $this->need('header.php');
 ?>
	<div id="content">
	<?php while($this->next()): ?>
		<section class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><div class="page-header"><h1><?php $this->title() ?></h1></div></a></h2>
			<p class="entry_data">

				<span class="label label-danger"><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span class="label label-primary"><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<span class="label label-info"><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<a href="<?php $this->permalink() ?>#comments"><span class="label label-info"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></span></a>
			</p>
                 <!--$this->content('read more...'); to remodify excerpt()-->
                 <div class="con"><?php $this->excerpt(1500, '    ..........'); ?></div>
		</section>
	<?php endwhile; ?>
<!--next page-->
        <ul class="pager">
	<?php $this->pageNav(); ?>
        </ul>
	</div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
	
