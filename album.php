<?php
	include("header.php");
	set_header("Daydream","club_all");
?>
<div class="container min-height" style="background-image:url(./img/banner.png)">
	<h3 class="text-success">欢迎来到我们的相册<button class="btn pull-right"  data-toggle="modal" data-backdrop="true" href="#album">建立新相册</button></h3>
	<div id="album" class="modal hide fade" tabindex="-1">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" >×</button>
			<h4 class="text-info">建立新相册</h4>
		</div>
		<div class="modal-body">						             
			相册名称<br /><input type="text" class="input-block-level"></textarea>
			描述<br /><textarea  class="input-block-level"></textarea>							
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">取消</button>
			<button class="btn btn-danger">创建</button>
		</div>
	</div>
	<div id="chuan" class="modal hide fade" tabindex="-1">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" >×</button>
			<h4 class="text-info">上传到 我们的相册</h4>
		</div>
		<div class="modal-body">						             
			选择图片<br /><input type="text" class="input-block-level"></textarea>
			描述<br /><textarea  class="input-block-level"></textarea>							
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal">取消</button>
			<button class="btn btn-danger">确定</button>
		</div>
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">我们的相册</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<small>113张</small>
			<small class="pull-right">2012年3月22日更新</small>	
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>	
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">所有的活动</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			113张
			<small class="pull-right">2012年3月22日更新</small>	
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			113张
			<small class="pull-right">2012年3月22日更新</small>	
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			113张
			<small class="pull-right">2012年3月22日更新</small>		
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			113张
			<small class="pull-right">2012年3月22日更新</small>			
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			113张
			<small class="pull-right">2012年3月22日更新</small>			
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			113张
			<small class="pull-right">2012年3月22日更新</small>			
			<a class="text-info pull-right" data-toggle="modal" data-backdrop="true" href="#chuan">上传照片</a>
		</div>		
	</div>
	
</div>
<?php
	include("footer.php");
?>