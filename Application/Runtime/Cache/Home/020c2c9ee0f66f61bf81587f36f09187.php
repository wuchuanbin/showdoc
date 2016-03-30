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
<link rel="stylesheet" href="/apidoc/Public/css/login.css" />
    <div class="container">

      <form class="form-signin" method="post">
        <h3 class="form-signin-heading">请输入访问密码</h3>
        <input type="password" class="input-block-level" name="password" placeholder="密码">
        <input type="text" class="input-block-level"  name="v_code" placeholder="验证码">
      <input type="hidden" id="item_id" name="item_id" value="<?php echo ($item_id); ?>">

        <div class="control-group">
          <div class="controls">
            <img src="" id="v_code_img">
          </div>
        </div>
        <button class="btn btn-large btn-primary" type="submit">提交</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Home/User/login');?>">登录/注册</a>      </form>

    </div> <!-- /container -->


    
	<script src="/apidoc/Public/js/common/jquery.min.js"></script>
    <script src="/apidoc/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/apidoc/Public/js/common/showdoc.js"></script>
  </body>
</html> 

 <script type="text/javascript">
 $(function(){
    $("#v_code_img").attr("src" , DocConfig.pubile+'/verifyCode.php');
    $("#v_code_img").click(function(){
      var v_code_img = $("#v_code_img").attr("src");
      $("#v_code_img").attr('src' ,v_code_img+'?'+Date.parse(new Date()) );
    }); 
 });
</script>