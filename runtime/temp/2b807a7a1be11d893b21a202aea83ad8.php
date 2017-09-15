<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\phpStudy\WWW\my\public/../application/admin\view\cars\index.html";i:1505355546;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="__STATIC__/my/news/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="__STATIC__/my/news/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="__STATIC__/my/news/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="__STATIC__/my/news/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/my/news/css/style.min.css?v=4.0.0" rel="stylesheet">
    <link href="__STATIC__/my/news/css/wcj.css" rel="stylesheet">
    <link href="__STATIC__/my/layui/css/layui.css">
   
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <!-- <h5>基本 <small>分类，查找</small></h5> -->
                        <a href="#" class="btn btn-primary add">新增</a>
                        <a href="#" class="btn btn-info" onclick="edit()">修改</a>
                        <a href="#" class="btn btn-success">审核</a>
                        <a href="#" class="btn btn-danger" onclick="del()">删除</a>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                       
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example" id='example'>
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="all" id='all'></th>
                                    <th>ID</th>
                                    <th>车牌号</th>
                                    <th>图片</th>
                                    <th>开始时间</th>
                                    <th>结束时间</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($info as $k=>$val):?>
                                <tr>
                                    <td><input type="checkbox" name="one" value="<?php echo $val['id']; ?>"></td>
                                    <td><?php echo $val['id']; ?></td>
                                    <td><?php echo $val['car_num']; ?></td>
                                    <td><?php echo $val['img']; ?></td>
                                    <td><?php echo date("Y-m-d",$val['time2']); ?></td>
                                    <td><?php echo date("Y-m-d",$val['time3']); ?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                         
                        </table>
                        <input type="hidden" class="mark">
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <script src="__STATIC__/my/news/js/jquery.min.js?v=2.1.4"></script>
    <script src="__STATIC__/my/news/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="__STATIC__/my/news/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="__STATIC__/my/news/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="__STATIC__/my/news/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="__STATIC__/my/news/js/content.min.js?v=1.0.0"></script>
    <script src="__STATIC__/my/layui/layui.all.js"></script>
    <script>
        $(document).ready(function(){$(".dataTables-example").dataTable();});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

    <script type="text/javascript">
    //全选反选
    $('#all').click(function(){
         $("input[name='one']").prop("checked", this.checked); 
        
    })
    //获取被选中的id
    function get_ids_checked(){
      obj = document.getElementsByName("one");
          check_val = [];
          for(k in obj){
              if(obj[k].checked)
                  check_val.push(obj[k].value);
          }
          return check_val;
          alert(check_val);
          
    }
    //编辑
    function edit(){
      get_ids_checked();
    }
    //删除
    function del(){
      var ids = get_ids_checked();
      $('.mark').val(ids);
      if($('.mark').val() == ''){
        layui.use('layer', function(){
          var layer = layui.layer;
          layer.msg('您还未选择数据哦!', {icon: 5});
        }); 
      }else{
        var data = {ids:$('.mark').val()}
        console.log(ids);
        $.ajax({
          type:'post',
          url:"<?php echo url('cars/ajax_del_c'); ?>",
          dataType:'json',
          data:data,
          success:function(res){
              if(res == 1){
                  layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('删除成功', {icon: 6});
                    setTimeout("window.location.reload()",4000);//4秒后刷新
                    // location.reload();
                  }); 
              }
          }
        })
      }
      
    }
    //新增
    $('.add').click(function(){
      layui.use('layer', function(){
        var layer = layui.layer;
        
        layer.open({
          type: 2,
          title: ['新增', 'font-size:18px;'],
          closeBtn: 2,
          shadeClose: true,
          skin: 'add_form',
          area: ['70%','70%'],
          offset: ['20%', '12%'],
          content: ["<?php echo url('Cars/add'); ?>"]
        });
      });  
     
    })
    </script>
</body>

</html>