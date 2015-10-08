<?php
	include("header.php");
	set_header("Daydream","activities");
?>
<div class="container row-fluid min-height" >
	<form class="form-horizontal"style="margin:50px 20px;" >
		<h3>建立圈子<i class="icon-map-marker"></i> 哈尔滨工业大学</h3>
		<div class="span7 shadow pull-left" style="padding:30px 30px;height:400px;box-shadow:#aaa 3px 3px 3px">
			<label ><big class="label label-info">名称</big></label><input type="text" class="span7">
			<label><big class="label label-info">标签</big></label><input type="text" class="span7" ><span class="help-block "><small class="text-info">热门标签：nba 摄影···</small></span>
			
			<label ><big class="label label-info">类型</big></label>					
			<label class="radio inline"><input  type="radio"  checked="checked"><strong>兴趣圈</strong></label>
			<label class="radio inline"><input type="radio"><strong>社团</strong></label>
			<label class="radio inline"><input  type="radio"><strong>学院</strong></label>
			<label class="radio inline"><input  type="radio"><strong>其他</strong></label>
			<label><big class="label label-info">描述</big></label>
			<textarea class="input-block-level"rows="3"></textarea>
		</div>
		<div class="pull-left" style="position:absolute;z-index:2;width:250px;padding:5px;margin-top:210px;margin-left:560px;">		
			<a class="btn btn-large btn-inverse input-block-level " style="margin-top:20px"><strong>创建</strong></a>
		</div>
		<div></div>
	</form>
	<form class="">
		<div class="shadow pull-right" style="position:absolute;z-index:2;width:250px;height:200px;margin-left:580px;margin-top:-30px;padding:5px">
			<label><a class="btn btn-large btn-danger input-block-level">上传头像</a></label>
		</div>
	</form>
</div>
<?php
	include("footer.php");
?>

