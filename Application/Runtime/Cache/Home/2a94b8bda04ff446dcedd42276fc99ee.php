<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HandyBest Team Api Doc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/apidoc/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    @charset "utf-8";
	body {
		font:14px/1.5 "Microsoft Yahei","微软雅黑",Tahoma,Arial,Helvetica,STHeiti;
	}
    </style>
      <script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          pubile:"/apidoc/Public",
      }

      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
      </script>

  </head>
  <body>
<link rel="stylesheet" href="/apidoc/Public/css/index.css" />

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <?php if($login_user): ?><li ><a href="<?php echo U('Home/Item/index');?>">我的项目</a></li>
            <?php else: ?>
            <li ><a href="<?php echo U('Home/User/login');?>">登录/注册</a></li><?php endif; ?>
          
        </ul>
        <h3 class="muted">研发接口文档</h3>
      </div>

      <hr>

		
		<p class="lead " > 
			<small>
				第一出行文档中心
			</small>
		</p>
		<p class="text-center">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="btn btn-primary  btn-large" style="margin: 15px;" href="/apidoc/index.php/home/item/show?item_id=<?php echo ($vo["item_id"]); ?>" target="_blank"><?php echo ($vo["item_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- <a class="btn  btn-large" href="<?php echo U('Home/item/show').'?item_id=3';?>" target="_blank" >帮助教程&nbsp;<i class="icon-circle-arrow-right"></i></a> -->
		</p>

      <hr>


      <div class="footer">
        <p>&copy; Created By <a href="http://weibo.com/18120977" target="_blank"> Tech Team</a></p>
      </div>

    </div> <!-- /container -->


    
	<script src="/apidoc/Public/js/common/jquery.min.js"></script>
    <script src="/apidoc/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/apidoc/Public/js/common/showdoc.js"></script>
  </body>
</html>