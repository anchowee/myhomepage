<!--designed by anchowee 2014-->
<!--
  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___
                                                       
-->
<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
			<h4><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?> &raquo;</h4>
            
            <?php $comments->pageNav(); ?>
            
            <?php $comments->listComments(); ?>
            
            <?php endif; ?>

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
			<h4 id="response"><span class="glyphicon glyphicon-thumbs-up"></span>
<button type="button" class="btn btn-info"><?php _e('添加新评论'); ?> &raquo;</button>
</h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
				<p>
<span class="label label-primary">当前登陆为</span>
<a href="<?php $this->options->profileUrl(); ?>"><span class="label label-danger"><?php $this->user->screenName(); ?></span></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
<button type="button" class="btn btn-danger"><?php _e('退出'); ?> &raquo;</button>
</a></p>
                <?php else: ?>
				<p>
                    <label for="author"><?php _e('您的称呼'); ?><span class="required">*</span></label>
					<input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" />
				</p>
				<p>
                    <label for="mail"><?php _e('电子邮件'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?></label>
					<input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" />
				</p>
				<p>
                    <label for="url"><?php _e('您的主页'); ?><?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?></label>
					<input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" />
				</p>
                <?php endif; ?>
				<p><textarea rows="5" cols="50" name="text" class="textarea"><?php $this->remember('text'); ?></textarea></p>
				<p><input type="submit" value="<?php _e('提交评论'); ?>" class="submit btn" /></p>
			</form>
            </div>
            <?php else: ?>
             <span class="label label-danger"><h4><?php _e('评论功能貌似在打盹！请稍候再试.'); ?></h4>
             </span>
            <?php endif; ?>
		</div>
