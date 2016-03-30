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
<link href="/apidoc/Public/highlight/default.min.css" rel="stylesheet"> 
<script src="/apidoc/Public/highlight/highlight.min.js"></script> 

<style type="text/css">
body{
	overflow-x:hidden;overflow-y:hidden
}

</style>
<!-- 这里开始是内容 -->
<div class="" style="padding-top:10px;">

<?php echo ($page["page_content"]); ?>

</div>




    
	<script src="/apidoc/Public/js/common/jquery.min.js"></script>
    <script src="/apidoc/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/apidoc/Public/js/common/showdoc.js"></script>
  </body>
</html> 
<script src="/apidoc/Public/js/page/index.js"></script>