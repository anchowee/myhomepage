<!--the sidebar-->
<!--
  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___
                                                       
-->
<aside>
<!---egine for global , useless for php url("jack wee")-->
<!--copright 2014 by anchowee lts-->
<!--based on typecho-->
<!--creat all widget for sidebar-->
<!--sougou or 360 search egine-->
		<div class="section search">

<!----sougou--
<script>function verifyquery(form){if(form.range.value==1){form.insite.value='';}else{form.insite.value=form.insite2.value}}</script>
<table height=30 cellSpacing=0 cellPadding=0 width=230 border=0>
<form action="http://www.sogou.com/web" target="_blank" onsubmit='javascript:verifyquery(this)' >
<tr style='font-size:12px;color:#000000'>
<td align="center" width=100><input  type="text" name="query" size=20 style='BORDER-RIGHT: #999 1px solid; BORDER-TOP: #999 1px solid; BORDER-LEFT: #999	1px	solid; BORDER-BOTTOM: #999 1px solid; HEIGHT: 25px; BACKGROUND-COLOR: #fff'>
<input type="hidden" name="insite" value="overanchowee.ml">
<input type="hidden" name="insite2" value="overanchowee.ml"></td>
<td align="left" width=45><input class="btn btn-info" type="submit" name="sogou_submit" value="搜一下">
</td></tr><tr align="center"><td colspan="3" align="center"><div id="rangeid"><input type="radio" name="range" value="1" checked="checked"/>互联网<input type="radio" name="range" value="2" />本站搜索</div></td></tr>
</form>
</table>
--end---->

<style type="text/css">
#so360{white-space:nowrap}
#so360 form{margin:0;padding:0}
#so360_keyword{width:150px;height:24px;line-height:24px;font:14px arial;padding:2px 5px;margin-right:5px;
border:2px solid #3FB30E;outline:0;vertical-align:middle}
#so360_keyword{ no-repeat right center}
font-weight:bold;font:bold 14px arial;padding:0;padding-top:3px\9;cursor:pointer;
vertical-align:middle}
</style>
<div id="so360">
    <form action="http://www.so.com/s" target="_blank" id="so360form">
   <input type="text" autocomplete="off" name="q" id="so360_keyword">
        <input class="btn btn-info" type="submit" id="so360_submit" value="搜一下">
        <input type="hidden" name="ie" value="utf8">
        <input type="hidden" name="src" value="zz">
        <input type="hidden" name="site" value="overanchowee.ml">
        <input type="hidden" name="rg" value="1">
    </form>
</div>
<script type="text/javascript">
(function() {
   function $(id) {
      return document.getElementById(id);
   }
   function addEvent(node , type , fn) {
       if(node.addEventListener) {
           node.addEventListener(type , fn , false);
       } else if(node.attachEvent){
           node.attachEvent("on" + type , fn);
       } else {
           node["on" + type] = fn;
       }
   };
   var form = $("so360form");
   if(!form) {
       return;
   }
   addEvent(form , "submit" , function() {
       form.src.value = "zz_" + window.location.host.replace(/\./g , "_");
       return true;
   });
})();
</script>
<!--end-->
</div>
<!--calendar-->
<div class="section highlight" >
<h2><span class="label label-success"><?php _e('打更人报时'); ?></span></h2>
<ul>
<li class="list-group-item"><p class="label label-warning" id="today"></p></li>
</ul>
</div>

<!--/*statistic the all tags*/-->
<div class="section highlight" >
<h2><span class="label label-success"><?php _e('云标签'); ?></span></h2>
<ul>
<?php $this->widget('Widget_Metas_Tag_Cloud')->parse('<a href="{permalink}">{name}{{count}}</a>'); ?>
</ul>
</div>
        <!--/*the recently post*/-->
		<div class="section highlight" >
			<h2><span class="label label-success"><?php _e('最新文章'); ?></span></h2>
            <ul>
                <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li class="list-group-item"><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
		</div>

		<div class="section highlight" >
			<h2><span class="label label-warning"><?php _e('最近回复'); ?></span></h2>
            <ul>
            <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li class="list-group-item"><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(50, '...'); ?></li>
            <?php endwhile; ?>
            </ul>
		</div>
<!--/*category for global website*/-->
               <div class="section highlight" >
               <h2><span class="label label-success"><?php _e('分类归档'); ?></span></h2>
               <ul>
                <?php $this->widget('Widget_Metas_Category_List')->parse('<li class="list-group-item"><a href="{permalink}">{name}</a> ({count})</li>'); ?>
               </ul>
               </div>



<!--global webabout-->
                 <div class="section highlight">
		<ul class="list-group">
		<a href="" title="Anchowee工作室"><img src="<?php $this->options->themeUrl('images/light.gif'); ?>" width="250" height="250" alt="anchowee" class="img-rounded"></a>
		
		
		<!--<h3><span class="label label-default"><?php $this->options->description() ?></span></h3>-->
			<h2><span class="label label-success"><?php _e('应用中心'); ?></span></h2>
			<ul>
                <?php if($this->user->hasLogin()): ?>
                                     
					<li class="list-group-item"><a href="<?php $this->options->adminUrl(); ?>"><span class="
glyphicon glyphicon-arrow-right"></span><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                    <li class="list-group-item"><a href="<?php $this->options->logoutUrl(); ?>"><span class="glyphicon glyphicon-remove-circle"></span><?php _e('退出'); ?></a></li>
                <?php else: ?>
                    <li class="list-group-item"><a href="<?php $this->options->adminUrl('login.php'); ?>"><span class="glyphicon glyphicon-user"></span><?php _e('用户登陆'); ?></a></li>
                <?php endif; ?>
                <li class="list-group-item"><a href="http://www.anchowee.nets.hk">Anchowee</a></li>
                <li class="list-group-item"><a href="http://www.ubuntu.com">Ubuntu</a></li>
                <li class="list-group-item"><a title="博客可能造成消极影响" href="http://www.awflasher.com/blog/archives/1048"><img src="http://aw.awflasher.com/b/dangerblog.gif"
/></a></li>
            </ul>
		
             </div>
</aside><!-- end #sidebar sidebar.php-->