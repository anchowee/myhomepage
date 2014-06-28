<!--designed by anchowee2014-->
<!--
  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___
                                                       
-->
<?php $this->need('header.php'); ?>
	<div id="content">
	 <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <section class="post">
        <div class="page-header">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><h1><?php $this->title() ?></h1></a></h2></div>
			<p class="entry_data">
				<span class="label label-danger"><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span class="label label-primary"><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<span class="label label-primary"><?php _e('分类：'); ?><?php $this->category(','); ?></span>

			</p>
			<div class="con">
			    <?php $this->content('阅读剩余部分...'); ?>
			</div>
		</section>
	<?php endwhile; ?>
    <?php else: ?>
        <section class="post">
            <h2><?php _e('该内容可能从地球消失了！^~^'); ?></h2>
        </section>
    <?php endif; ?>
      <ol class="pages clearfix">
            <?php $this->pageNav(); ?>
      </ol>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>