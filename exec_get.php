<?php
// vim: set et sw=4 ts=4 sts=4 fdm=marker ff=unix fenc=utf8
/**
 * fetch.php
 *
 * @author
 * @date 2013/03/09
 * @link
 */

 ignore_user_abort();
$cu = dirname(__FILe__);
 
require_once($cu . '/define.inc.php');

$time = intval($argv[1]);

if ($time>0) {//执行


//var_dump($argv);
sleep(3);



$res =  "php " . __FILE__ . ' '. $time . "\n";

 $fileName = $cu . '/test/info.ini';
        //echo serialize($res);
        //echo $fileName;
 error_log($res, 3, $fileName);
exec("php " . __FILE__ . ' '. ($time-1) . " &");
}
?>
