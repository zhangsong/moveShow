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
        //create dir
        $dir = 'D:\code\moveshow/move/1362578399';
        $res = array();
        $res['cate']= array('name'=>'she', 'path'=>$dir);
        $res['list'] = array();
        $r = array('name'=>'jj', 'url'=>'dd');
        $res['list'][] = $r;
        $this->record($res);
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
        echo error_log(serialize($res), 3, $fileName);

    }
} // END class








?>
