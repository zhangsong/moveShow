<?php
require_once('./define.inc.php');
//$player_site_path = '/lib/f4player/';
//$move_site_path = '/move/';
$move_file = '3.mp4';
if ($_GET['mf']){
    $move_file = $_GET['mf'];
}

include($app_path . '/header.html')
?>
<div class="container">
    <div id="player">
		<object width="620" height="360" id="f4Player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
		<param name="movie" value="<?php echo $player_site_path;?>player.swf" />
		<param name="quality" value="high" />
		<param name="menu" value="false" />
		<param name="allowFullScreen" value="true" />
		<param name="scale" value="noscale" />
		<param name="allowScriptAccess" value="always" />
		<param name="swLiveConnect" value="true" />
		<param name="flashVars" value="skin=<?php echo $player_site_path;?>skins/mySkin.swf
			&thumbnail=<?php echo $player_site_path;?>video-thumbnail.jpg
			&video=<?php echo $move_site_path . $move_file; ?>
			"/>
		<!-- [if !IE] -->
		<object width="620" height="360" data="<?php echo $player_site_path;?>player.swf" type="application/x-shockwave-flash" id="f4Player">
		<param name="quality" value="high" />
		<param name="menu" value="false" />
		<param name="allowFullScreen" value="true" />
		<param name="scale" value="noscale" />
		<param name="allowScriptAccess" value="always" />
		<param name="swLiveConnect" value="true" />
		<param name="flashVars" value="skin=<?php echo $player_site_path;?>skins/mySkin.swf
			&thumbnail=<?php echo $player_site_path;?>video-thumbnail.jpg
			&video=<?php echo $move_site_path . $move_file; ?>
			"/>
		</object>
		 <!-- [endif] -->
		</object>
	</div>

	可以播放.fly、.f4v和.mp4等文件。

	<div>
<a href="/list.php">我的视频</a>
<a href="/fetch.php">我要抓取</a>
<a href="/fetchlist.php">我的抓取列表</a>
</div>
</div>


<?php
include($app_path . '/footer.html');

//phpinfo();
?>
