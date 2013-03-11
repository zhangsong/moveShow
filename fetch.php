<?php
// vim: set et sw=4 ts=4 sts=4 fdm=marker ff=unix fenc=utf8
/**
 * fetch.php
 *
 * @author
 * @date 2013/03/09
 * @link
 */

require_once('./define.inc.php');
include($app_path . '/header.html');
if ($_POST && !empty($_POST['furl'])) {
    require_once($lib_path . '/get.php');
    $get = new get();
    if ($get->fetch($_POST['furl'])) {
        echo 'success';

    } else {
        echo 'error';
    }
} else {
?>
<div class="container">
<form method="post" action="/<?php echo basename(__FILE__);?>">
<label>
抓取地址：
<input type="text" name="furl" />
<input type="submit" value="抓取" />
</label>
</form>
</div>
<?php
    include($app_path . '/footer.html');
}
?>
