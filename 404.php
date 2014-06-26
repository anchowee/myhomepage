<!--designed by anchowee 2014-->
<!--based on typecho-->
<?php $this->need('header.php'); ?>

    <div id="content">
        <section class="post">
        
             <div class="jumbotron">
  <h1 class="entry_title">404 - <?php _e('页面貌似从地球消失了呀！'); ?></h1>
  <p>囧………………^_^,返回上一页吧！</p>
  <p><a class="btn btn-primary btn-lg" role="button" href="http://www.overanchowee.ml/">返回！</a></p>
            </div>
            
            <p>
            <form method="post">
                <div><input type="text" name="s" class="inputbox" size="20" /> <input type="submit" class="btn" value="<?php _e('搜索'); ?>" /></div>
            </form>
            </p>
        </section>

    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
