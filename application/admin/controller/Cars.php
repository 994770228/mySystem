<?php
/*
* @author wcj
* @use for:page list,include curd
* @ data:2017/8/2
*/

namespace app\admin\controller;

use think\Controller;

/**
* 车辆管理
*/
class Cars extends Controller
{
	
	public function index(){
		$info = db('cars')->select();
		$this->assign('info',$info);
		return $this->fetch();
	}

	public function add(){
		
		return $this->fetch();
	}
	//ajax新增
	public function ajax_add_c(){
		$data['car_num'] = $_POST['name1'];
		$data['province'] = $_POST['province'];
		$data['city'] = $_POST['city'];
		$data['district'] = $_POST['district'];
		$data['status'] = $_POST['optionsRadios'];
		$data['checkbox1'] = $_POST['checkbox1'];
		$data['account'] = $_POST['account'];
		$data['time1'] = strtotime($_POST['time1']);
		$time2 = explode('/', $_POST['time2']);
		$data['time2'] = strtotime($time2['0']);
		$data['time3'] = strtotime($time2['1']);
		$data['create_time'] = time();
		$add = db('cars')->insert($data);
		if($add){
			echo 1;
		}else{
			echo 2;
		}
	}
	//ajax批量删除
	public function ajax_del_c(){
		$ids = explode(',',$_POST['ids']);
		foreach($ids as $k=>$val){
			db('cars')->where('id',$val)->delete();
		}
		echo 1;
	}

	//修改
	public function edit(){
		$id = $_GET['id'];
		$info = db('cars')->where('id',$id)->find();
		$this->assign('info',$info);
		return $this->fetch();
	}

	//ajax修改
	public function ajax_edit_c(){
		$c_id = $_POST['c_id'];
		$data['car_num'] = $_POST['name1'];
		$data['province'] = $_POST['province'];
		$data['city'] = $_POST['city'];
		$data['district'] = $_POST['district'];
		$data['status'] = $_POST['optionsRadios'];
		$data['checkbox1'] = $_POST['checkbox1'];
		$data['account'] = $_POST['account'];
		$data['time1'] = strtotime($_POST['time1']);
		$time2 = explode('/', $_POST['time2']);
		$data['time2'] = strtotime($time2['0']);
		$data['time3'] = strtotime($time2['1']);
		$data['create_time'] = time();
		$add = db('cars')->where('id',$c_id)->update($data);
		if($add){
			echo 1;
		}else{
			echo 2;
		}
	}
}