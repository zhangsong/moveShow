<?php
require_once('./define.inc.php');

//文件操作类
require_once($lib_path . '/yii/CFileHelper.php');
require_once($lib_path . '/yii/mimeTypes.php');


//$fileHelper = new CFileHelper();
$files = CFileHelper::findFiles($move_path);
var_dump($files);
echo __FILE__;
?>
<html>

<body>
目录文件
<ul>
<?php 
foreach ($files as $file) {
?>
	<li><?php echo $file;?></li>
<?php
}
?>



</ul>

</body>


</html>
