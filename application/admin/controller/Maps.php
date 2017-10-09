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
// 地图管理
//-------------------------

namespace app\admin\controller;
use think\Controller;


class Maps extends Controller{

    public function index(){
    	
        return $this->fetch();
    }

   public function map_data(){
   	$data = array(
   			array("name"=>"江苏","value"=>12),
   			array("name"=>"江西","value"=>0.8),
   			array("name"=>"安徽","value"=>18),
   			array("name"=>"北京","value"=>3),
   			array("name"=>"上海","value"=>6),
   			array("name"=>"台湾","value"=>2.4),
   			array("name"=>"新疆","value"=>5.4)
   		);
   	echo json_encode($data);
   }
   
}