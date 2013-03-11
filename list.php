<?php
require_once('./define.inc.php');

//文件操作类
require_once($lib_path . '/yii/CFileHelper.php');
require_once($lib_path . '/yii/mimeTypes.php');


//$fileHelper = new CFileHelper();
$files = CFileHelper::findFiles($move_path);
//var_dump($files);
//echo __FILE__;
include($app_path . '/header.html');
?>
<div class="container">
目录文件
<ul>
<?php
foreach ($files as $file) {
?>
	<li><a href="/index.php?mf=<?php echo urlencode(basename($file));?>"><?php echo $file;?></a></li>
<?php
}
?>



</ul>
</div>
<?php
include($app_path . '/footer.html');
?>
