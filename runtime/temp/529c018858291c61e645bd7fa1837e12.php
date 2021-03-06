<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\my\public/../application/admin\view\cars\add.html";i:1505288837;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 基本表单</title>
   

    <link rel="shortcut icon" href="favicon.ico"> <link href="__STATIC__/my/news/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="__STATIC__/my/news/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/my/news/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__STATIC__/my/news/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/my/news/css/style.min.css?v=4.0.0" rel="stylesheet">
    
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="__STATIC__/my/layui/css/layui.css">
    <link href="__STATIC__/my/layui/css/modules/laydate/default/laydate.css">
    <style type="text/css">
        #test10{
            width:50%;
        }
    </style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
      
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                   
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="" >
                            <div class="form-group">
                                <label class="col-sm-2 control-label">车牌号</label>
                                <div class="col-sm-10">
                                    <input type="text" name='name1'  placeholder="请输入车牌号" class="form-control name1">
                                </div>
                            </div>
                           
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">使用状态</label>
                                <div class="col-sm-10" id="optionsRadios">
                                    <input type="radio"  value="1" checked  name="optionsRadios" >使用中
                                    <input type="radio" value="2"  name="optionsRadios" >未使用
                                </div>
                            </div>
                          
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">复选框</label>
                                <input type="hidden" name="checkbox1" class="checkbox1">
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1" name='one'>a
                                        </label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2" name='one'>b
                                        </label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3" name='one'>c
                                        </label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">选项</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b account" name="account">
                                        <option>请选择</option>
                                        <option>选项 1</option>
                                        <option>选项 2</option>
                                        <option>选项 3</option>
                                        <option>选项 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">时间</label>
                              <div class="col-sm-10">
                                <input type="text" class="layui-input" id="test1" name="time1" value="<?php echo date('Y-m-d',time())?>">
                              </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">时间范围</label>
                              <div class="col-sm-10">
                                <input type="text" class="layui-input" id="test10" name="time2" value='<?php echo date("Y-m-d H:i:s",mktime(0,0,0,date("m",time()),date("d",time()),date("Y",time())))?>/<?php echo date("Y-m-d H:i:s",mktime(23,59,59,date("m",time()),date("d",time()),date("Y",time())))?>'>
                              </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="button" onclick="check()">提交</button>
                                </div>
                            </div>

                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="__STATIC__/my/news/js/jquery.min.js?v=2.1.4"></script>
    <script src="__STATIC__/my/news/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="__STATIC__/my/news/js/content.min.js?v=1.0.0"></script>
    <script src="__STATIC__/my/news/js/plugins/iCheck/icheck.min.js"></script>
    <script src="__STATIC__/my/layui/layui.all.js"></script>
    <!-- <script src="__STATIC__/my/news/js/wcj.js"></script> -->
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript">
    
        // 获取复选框被选中的值
        function get_ids_checked(){
          obj = document.getElementsByName("one");
              check_val = [];
              for(k in obj){
                  if(obj[k].checked)
                      check_val.push(obj[k].value);
              }
              return check_val; 
        }
        layui.use('laydate', function(){
          var laydate = layui.laydate;
              //常规用法
              laydate.render({
                  elem: '#test1'
                  ,format: 'yyyy年MM月dd日'
                });
             //日期时间范围
              laydate.render({
                elem: '#test10'
                ,type: 'datetime'
                ,range: true
              });
        })
        //表单验证
        function check(){
            var name1 = $('.name1').val();
            // if(name1 == ''){
            //     alert('请输入车牌号');return false;
            // }
            var optionsRadios = $('#optionsRadios input[name="optionsRadios"]:checked ').val();
            var one = get_ids_checked();
            // if(one == ''){
            //     alert('请选择复选框');return false;
            // }
            $('.checkbox1').val(one);
            var checkbox1 = $('.checkbox1').val();
            var account = $(".account option:selected").val();
            // if(account == '请选择'){
            //     alert('请选择下拉框');return false;
            // }
            var time1 = $('#test1').val();
            var time2 = $('#test10').val();
            var data = {
                name1:name1,
                optionsRadios:optionsRadios,
                checkbox1:checkbox1,
                account:account,
                time1:time1,
                time2:time2
            }
            $.ajax({
                type:'post',
                url:"<?php echo url('cars/ajax_add_c'); ?>",
                // dataType:'json',
                data:data,
                success:function(res){
                    if(res == 1){ 
                        layui.use('layer', function(){
                          var layer = layui.layer;
                          layer.msg('成功', {icon: 6});
                        });  
                    }else{
                        layui.use('layer', function(){
                          var layer = layui.layer;
                          layer.msg('失败', {icon: 5});
                        });  
                    }
                }
            })
        }

        
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>