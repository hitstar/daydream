<?php
	include("header.php");
	set_header("Daydream","activities");
?>
<div class="container row-fluid min-height" style="background-image:url(./img/banner.png)">
	<form class="form-horizontal"style="margin:50px 20px;" >
		<h3>发起活动<i class="icon-map-marker"></i> 哈尔滨工业大学</h3>
		<div class="span7 shadow pull-left" style="padding:30px 30px;height:350px;box-shadow:#aaa 3px 3px 3px">
			<label ><big class="label label-inverse">名称</big></label><input type="text" class="span7">
			<label><big class="label label-inverse">标签</big></label><input type="text" class="span7" > <small class="text-info pull-right">热门标签：团支书，同桌，nba</small>
			<div class="control-group">
				<label class="control-label">活动类型</label>
					<div class="controls">
						<label class="radio inline">
						<input id="online_action" type="radio" value="线上" name="activity_type" checked="checked">
								线上
						</label>
						<label class="radio inline">
							<input id="underline_action" type="radio" value="线下" name="activity_type">
							线下
						</label>
					</div>
			</div>
			<label><big class="label label-inverse">描述</big></label>
			<textarea class="input-block-level"rows="3"></textarea>
		</div>
		<div class="pull-left" style="position:absolute;z-index:2;width:250px;padding:5px;margin-top:210px;margin-left:560px;">		
			<label><big class="label label-inverse">开始时间</big></label>
			<div class="controlls-row">
				<input type="text" placeholder="年-月-日" class="span9" > 
				<input type="text" placeholder="时：分"class="span3" >   
			</div>
			<label><big class="label label-inverse">结束时间</big></label>
			<div class="controlls-row">
				<input type="text" placeholder="年-月-日"class="span9" > 
				<input type="text" placeholder="时：分" class="span3" >   
			</div>
		</div>
		<div ><a class="btn btn-large btn-inverse pull-left span4" style="margin-left:250px;margin-top:20px">发起</a></div>
	</form>
	<form class="">
		<div class="shadow pull-right" style="position:absolute;z-index:2;width:250px;height:200px;margin-left:580px;margin-top:-30px;padding:5px">
			<label><a class="btn btn-large btn-danger input-block-level">传海报</a></label>
		</div>
	</form>
</div>
<?php
	include("footer.php");
?>
