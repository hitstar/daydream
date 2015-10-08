<?php
	include("header.php");
	set_header("Daydream","personal");
?>



<div class="container min-height tabbable" style="background-image:url(./img/banner.png)">	
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tw" data-toggle="tab"><strong class="text-success"><i class="icon-retweet"></i>回复我</strong></a></li>
			<li><a href="#mytw" data-toggle="tab"><strong class="text-info"><i class="icon-reply"></i>我评论</strong></a></li>
			<li><a href="#li" data-toggle="tab"><strong class="text-error"><i class="icon-heart"></i>喜欢</strong></a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tw">			
				<h4 class="text-success"><ul class="breadcrumb">
					<li>新评论<span class="divider">/</span></li>									
					<li>读过<span class="divider">/</span></li>
					<li>未读</li>
				</ul></h4>
				<div class="alert alert-success span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">马森</a>在话题</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i>[<small>2012年3月25日 12:30</small>] <a class="badge badge-success pull-right">去看看</a>
				</div>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">cjq</a>在视频</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i> <a class="badge badge-success pull-right">去看看</a>
				</div>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">cjq</a>在视频</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i> <a class="badge badge-success pull-right">去看看</a>
				</div>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">cjq</a>在视频</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i> <a class="badge badge-success pull-right">去看看</a>
				</div>
			</div>
			<div class="tab-pane" id="mytw">			
				<h4 class="text-success"></h4>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">马森</a>在话题</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i><small>[2012年3月25日 12:30]</small> <a class="badge badge-success pull-right">去看看</a>
				</div>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">cjq</a>在视频</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i> <a class="badge badge-success pull-right">去看看</a>
				</div>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">cjq</a>在视频</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i> <a class="badge badge-success pull-right">去看看</a>
				</div>
				<div class="alert alert-info span10">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">cjq</a>在视频</strong>中给你了评论 
					<i class="icon-quote-left"></i> 
						你说的很对，我也这么觉得，真的何赞
					<i class="icon-quote-right"></i> <a class="badge badge-success pull-right">去看看</a>
				</div>
			</div>
			
			<div class="tab-pane" id="li">		
				<h3 class="text-error"><i class="icon-heart">被喜欢+4</i></h3>	
				<div class="alert span3 ">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">xh</a></strong> <i class="icon-heart"></i> 你的活动<br />			
					<img src="./img/tuan.jpg" class="likimg">
					<a class="badge badge-important pull-right">去看看</a>
				</div>
				<div class="alert span3 ">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">xh</a></strong> <i class="icon-heart"></i> 你的照片<br />			
						<img src="./img/tuan.jpg" class="likimg">
					<a class="badge badge-important pull-right">去看看</a>
				</div>
				<div class="alert span3 ">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">xh</a></strong> <i class="icon-heart"></i> 你的视频<br />			
						<img src="./img/tuan.jpg" class="likimg">
					<a class="badge badge-important pull-right">去看看</a>
				</div>
				<div class="alert span3 ">
					<a class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</a>
					<img src="./img/guan.jpg" class="size40 img-circle"> 
					<strong><a href="#">谢昊</a></strong> <i class="icon-heart"></i> 你的话题<br />			
						<i class="icon-quote-left"></i> 没有人能让我认输，当然除了我自己没有人能让我认输，当然除了我自己没有人能让我认输，当然除了我自己··· 最多80个字<i class="icon-quote-right"></i>
			
					<a class="badge badge-important pull-right">去看看</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include_once("footer.php");
?>
