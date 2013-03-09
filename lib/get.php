<?php
/**
 * get manager
 *
 * @packaged tool
 * @author song
 **/
class get
{
    /**
     * undocumented function
     *
     * @return void
     * @author 闲耘™ (hotoo.cn[AT]gmail.com)
     **/
    public function fetch($url)
    {
		global $lib_path, $move_path, $app_path;
        //create dir
        $dir = 'D:\code\moveshow/move/1362578399';
		$dir = $this->createDir($app_path . '/fetch');
        $res = array();
        $res['cate']= array('name'=>'she', 'path'=>$dir);
        $res['list'] = array();
        //$r = array('name'=>'jj', 'url'=>'dd');
        //$res['list'][] = $r;

		require_once($lib_path . '/simple_html_dom.php');
		$dom = new simple_html_dom();
		//$dom->load_file('http://v.163.com/special/opencourse/discoverpsychology.html');
		$dom->load_file($url);

		//$items = $dom->find('.m-clist tr');
		$items = $dom->find('#list2 tr');
		foreach ($items as $key=>$item) {
			if ($key>0) {
				$title = $item->find('.u-ctitle', 0);
				$down = $item->find('.u-cdown a', 0);
				$r['name'] = preg_replace('/\s/', '', trim($title->plaintext));
				$r['url'] = $down->href;
				$res['list'][] = $r;
			}
		}
		//var_dump($res);
		//return $res;
        return $this->record($res);
        //record info
    }

    /**
     * 创建存储目录并返回
     *
     * @return string
     * @author song
     **/
    public function createDir($basepath)
    {
        $dir = $basepath . '/' . time();
        mkdir($dir);
        return $dir;
    }
    /**
     * 记录文件信息
     *
     * @return void
     * @author 闲耘™ (hotoo.cn[AT]gmail.com)
     **/
    public function record($res)
    {
        //echo '<pre>';
        //var_dump($res);
        $fileName = $res['cate']['path'] . '/info.ini';
        //echo serialize($res);
        //echo $fileName;
        return error_log(serialize($res), 3, $fileName);

    }
} // END class








?>
