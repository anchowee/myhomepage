<!--designed by anchowee 2014-->
<!--
  ___  __  __   ___ __  __   ___   __    __  ____  ____
 // \\ ||\ ||  //   ||  ||  // \\  ||    || ||    ||   
 ||=|| ||\\|| ((    ||==|| ((   )) \\ /\ // ||==  ||== 
 || || || \||  \\__ ||  ||  \\_//   \V/\V/  ||___ ||___
                                                       
-->
<!--footer-->	
<footer>
<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Contact</h4>
  </a>
  <p class="text-center">        

  <strong>联系方式：QQ：529238084  Email:anchowee@163.com</strong>
   </p>
  <p class="text-center">
   QQ联系：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=529238084&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:529238084:52" alt="QQ留言" title="点击这里给我发消息"/></a>
  </p>
  <p class="text-left">
  <a class="contacts" href="https://twitter.com/anchoweecn">twitter</a>
  </p>
    <p class="text-left">
  <a class="contacts" href="https://www.facebook.com/rnchong.wei">Facebook</a>
  </p>
  <p class="text-left">
  <a class="contacts" href="http://weibo.com/anchowee">Weibo</a>
  </p>
  <div class="description">
  <p class="text-left">
  <span class="glyphicon glyphicon-thumbs-up"></span>吾日弎省吾身,为涅槃而坚持。
  </p>
  <p class="text-left">
  <span class="description"><?php $this->options->description() ?>
  <script type="text/javascript">
   var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F80d2c001f94db28c2ad7e1d2e236b501'    type='text/javascript'%3E%3C/script%3E"));
  </script>
  </span>
  <?php $this->footer(); ?>
  <a id="today"></a>
  <a><?php
function getip() {
    if (getenv ( "http_client_ip" ) && strcasecmp ( getenv ( "http_client_ip" ), "unknown" ))
        $ip = getenv ( "http_client_ip" );
    else if (getenv ( "http_x_forwarded_for" ) && strcasecmp ( getenv ( "http_x_forwared_for" ), "unknown" ))
        $ip = getenv ( "http_x_forwarded_for" );
    else if (getenv ( "remote_addr" ) && strcasecmp ( getenv ( "remote_addr" ), "unknown" ))
        $ip = getenv ( "remote_addr" );
    else if (isset ( $_SERVER ["REMOTE_ADDR"] ) && $_SERVER ["REMOTE_ADDR"] && strcasecmp ( $_SERVER ["REMOTE_ADDR"], "unknown" ))
        $ip = $_SERVER ["REMOTE_ADDR"];
    else
        $ip = "unknown";
    return ($ip);
}
function num(){
$user_online = 'count.txt';
touch ( $user_online );
$timeout = 30;
$user_arr = file_get_contents ( $user_online );
$user_arr = explode ( '#', rtrim ( $user_arr, '#' ) );
$temp = array ();
foreach ( $user_arr as $value ) {
    $user = explode ( ",", trim ( $value ) );
    if (($user [0] != getip ()) && ($user [1] > time ())) {
        array_push ( $temp, $user [0] . "," . $user [1] );
    }
}
array_push ( $temp, getip () . "," . (time () + ($timeout)) . '#' );
$user_arr = implode ( "#", $temp );
$fp = fopen ( $user_online, "w" );
flock ( $fp, LOCK_EX );
fputs ( $fp, $user_arr );
flock ( $fp, LOCK_UN );
fclose ( $fp );
echo "当前有" . count ( $temp ) . "人在线";    
}
?></a>
  </p>
  </div>
  <div class="tdscanle">
<img src="http://qdownloads.qiniudn.com/anchowee.png" width="250" height="250" alt="anchowee" class="img-rounded">  
  </div>
 </footer>
<!--------------------繁简互换脚本------------------------------   
	<script type="text/javascript"
	src="http://gamux.org/wp-content/themes/gamuxtheme-0.1alpha/js/tw_cn.js"></script>
	<script type="text/javascript">
	var defaultEncoding = 0; //默认是否繁体，0-简体，1-繁体
	var translateDelay = 0; //延迟时间,若不在前, 要设定延迟翻译时间, 如100表示100ms,默认为0
	var cookieDomain = "http://www.gamux.org"; //Cookie地址, 一定要设定, 通常为你的网址
	var msgToTraditionalChinese = "正體中文（港澳臺，海外）"; //默认切换为繁体时显示的中文字符
	var msgToSimplifiedChinese = "简体中文（中国大陆）"; //默认切换为简体时显示的中文字符
	var translateButtonId = "translateLink"; //默认互换id
	translateInitilization();
	</script>
--> 
</body>
</html>