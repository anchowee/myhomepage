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
				<span class="label label-primary"><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<span class="label label-primary"><?php _e('分类：'); ?><?php $this->category(','); ?></span>

			</p>


			<div class="con">
                         
                             <!--share div-->
                             <blockquote>
			     <p class="text-muted"><?php $this->content(); ?></p>
                             
                             </blockquote>
                        
 <?php $this->need('comments.php'); ?>
            </div>

           </section>
                 
           </div>
         
         <?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

		
                
		
       