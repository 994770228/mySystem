<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\my\public/../application/admin\view\my_vip\index.html";i:1503041249;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="__STATIC__/my/news/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="__STATIC__/my/news/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="__STATIC__/my/news/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="__STATIC__/my/news/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/my/news/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>
<style type="text/css">
th{
    text-align: center;
}
</style>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <!-- <h5>基本 <small>分类，查找</small></h5> -->
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

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>昵称</th>
                                    <th>姓名</th>
                                    <th>手机</th>
                                    <th>头像</th>
                                    <th>性别</th>
                                    <th>城市</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($list as $k=>$val):?>
                                <tr class="gradeX">
                                    <td><?php echo $val['nickname']; ?></td>
                                    <td><?php echo $val['name']; ?></td>
                                    <td><?php echo $val['mobile']; ?></td>
                                    <td><img src="http://wx.qlogo.cn/mmopen/<?php echo $val['imgurl']; ?>" style="width:60px;height:60px;"></td>
                                    <td><?php echo !empty($val['sex']) && $val['sex']==1?'男':'女'; ?></td>
                                    <td><?php echo $val['city']; ?></td>
                                    <td>X</td>
                                </tr>
                                <?php endforeach;?>
                                

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>渲染引擎</th>
                                    <th>浏览器</th>
                                    <th>平台</th>
                                    <th>引擎版本</th>
                                    <th>CSS等级</th>
                                </tr>
                            </tfoot>
                        </table>

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
    <script>
        $(document).ready(function(){$(".dataTables-example").dataTable();var oTable=$("#editable").dataTable();oTable.$("td").editable("../example_ajax.php",{"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);oTable.fnUpdate(sValue,aPos[0],aPos[1])},"submitdata":function(value,settings){return{"row_id":this.parentNode.getAttribute("id"),"column":oTable.fnGetPosition(this)[2]}},"width":"90%","height":"100%"})});function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>

</html>