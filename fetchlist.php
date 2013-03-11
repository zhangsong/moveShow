<?php
// vim: set et sw=4 ts=4 sts=4 fdm=marker ff=unix fenc=utf8
/**
 * fetchlist.php
 *
 * @author
 * @date 2013/03/09
 * @link
 */

require_once('./define.inc.php');
//文件操作类
require_once($lib_path . '/yii/CFileHelper.php');
require_once($lib_path . '/yii/mimeTypes.php');
include($app_path . '/header.html');

$handle = opendir($app_path . '/fetch');
echo '<div class="container">';
while (($file = readdir($handle))!==false){
    if ($file=='.' || $file === '..')
        continue;

    echo '<ul>';
    if (is_dir($app_path . '/fetch/' . $file)){
        echo '<li>' . date('Y-m-d', $file).'<br />';
        echo '<ul>';
        $info_file = $app_path . '/fetch/' . $file . '/info.ini';
        $json = file_get_contents($info_file);
        if ($json){
            $json = trim($json);
            $info = unserialize($json);
            if ($info) {
                foreach ($info['list'] as $list) {
                    echo '<li>' . $list['name'] . '</li>';

                }
            }

        }
        echo '</ul>';
        echo '</li>';
    }
    echo '</ul>';

}
//读取列表
?>

</div>
<?php
include($app_path . '/footer.html');
?>
