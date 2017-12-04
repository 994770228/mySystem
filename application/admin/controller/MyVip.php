<?php
/**
 * tpAdmin [a web admin based ThinkPHP5]
 *
 * @author yuan1994 <tianpian0805@gmail.com>
 * @link http://tpadmin.yuan1994.com/
 * @copyright 2016 yuan1994 all rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

//------------------------
// 客户管理
//-------------------------

namespace app\admin\controller;
use think\Controller;


class MyVip extends Controller
{

    public function index(){
    	
        $list = db('wxuser')->select();
        $count = db('wxuser')->count();
    	$this->assign('list',$list);
        $this->assign('count',$count);
        // dump($list);
        return $this->fetch();
    }

    

    //ajax批量删除
    public function ajax_del_c(){
        $ids = explode(',',$_POST['ids']);
        foreach($ids as $k=>$val){
            db('wxuser')->where('id',$val)->delete();
        }
        echo 1;
    }
   
}