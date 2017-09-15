<?php
/*
* @author wcj
* @use for:page list,include curd
* @ data:2017/8/2
*/

namespace app\admin\controller;

use think\Controller;

/**
* 新闻管理
*/
class News extends Controller
{
	
	// function __construct()
	// {
	// 	echo 111;
	// }

	public function index(){
		echo "this is the first page";
		// $this->display();
		return $this->fetch();
	}
}