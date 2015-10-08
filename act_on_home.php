<?php
	include("header.php");
	set_header("Daydream","");
?>
<div class="container min-height" style="background-image:url(./img/banner.png)">
	<div class=" act-home" >
	<h4> <i class="icon-fire"></i> 线上活动</h4>
	<div class="row-fluid"style="padding:10px 30px">
		<div>
			<div class="pull-left span6  "><img src="./img/1.jpg" height="300px" width="500px"></div>
			<div  class=" pull-left span5 " >	
				<h4>校园十大歌手</h4><h5>发起者 哈尔滨工业大学学生会</h5>	<h5>2012-3-24-6:30</h5><h5>活动中心201</h5>
				<p>这是一个属于你的舞台，是一个你放飞梦想的舞台，只要你敢唱，你就有机会，我们在等你来参加，灯光音响都好了，现在需要的就是你。这是一个属于你的舞台，是一个你放飞梦想的舞台，只要你敢唱，你就有机会，我们在等你来参加，灯光音响都好了，现在需要的就是你。这是一个属于你的舞台，是一个你放飞梦想的舞台，只要你敢唱，你就有机会，我们在等你来参加，灯光音响都好了，现在需要的就是你。</p>
				<span>
					<a class="badge badge-important"><i class="icon-heart icon-white"></i> 喜欢</a>	
					<a class="btn btn-danger btn-large pull-right" data-toggle="modal" data-backdrop="true" href="#join">传照片</a>
				</span>
			</div>
		</div>
		<div id="join" class="modal hide fade" tabindex="-1">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" >×</button>
				<h4 class="text-info">参加活动</h4>
			</div>
			<div class="modal-body">						             
				选择图片<br /><input type="text" class="input-block-level"></textarea>
				描述<br /><textarea  class="input-block-level"></textarea>							
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-primary">确定</button>
			</div>
		</div>
	</div>
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li ><a href="#pic" data-toggle="tab"><strong>相片池</strong></a></li>
			<li class="active"><a href="#liuyan" data-toggle="tab"><strong>贴纸墙</strong></a></li>
		</ul>
	<div class="tab-content">
		<div class="row-fluid tab-pane " id="pic">			
		<div class="accordion span3 shadow" id="act1">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act1" href="#act-det1">
						<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det1" class="accordion-body collapse in">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						
					</div>
				</div>
			</div>
		</div>
		<div class="accordion span3 shadow" id="act2">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act2" href="#act-det2">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det2" class="accordion-body collapse">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div><div class="accordion span3 shadow" id="act3">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act3" href="#act-det3">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det3" class="accordion-body collapse ">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div><div class="accordion span3 shadow" id="act4">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act4" href="#act-det4">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det4" class="accordion-body collapse">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div><div class="accordion span3 shadow" id="act5">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act5" href="#act-det5">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det5" class="accordion-body collapse">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div><div class="accordion span3 shadow" id="act6">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act6" href="#act-det6">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det6" class="accordion-body collapse">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div><div class="accordion span3 shadow" id="act7">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act7" href="#act-det7">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det7" class="accordion-body collapse ">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left" title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div>
		<div class="accordion span3 shadow" id="act8">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#act8" href="#act-det8">
					<img src="./img/nba.jpg" height="200px" width="200px">
					</a>
				</div>
				<div id="act-det8" class="accordion-body collapse ">
					<div class="accordion-inner">						
						<img src="./img/nba.jpg" class="size40 pull-left " title="masen"><small class="muted pull-right">2018/3/23</small>
						<p class="pull-left">描述//这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人这是我的奇葩的舍友，好男人</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="tab-pane row-fluid active"  style="background-color:#f7f7f7" id="liuyan">		
		<div class="span11" style="background-color:#ddd;height:100px;margin:10px 10px 30px 10px">
			<h3 class="pull-left offset1" style="margin:10px 40px;">写贴纸</h3>
			<span class="span7 "><textarea type="text" rows="3" class="input-block-level"></textarea></span>
			<span><button class="btn btn-large btn-primary span2" style="margin:15px 30px">贴吧</button></span>
		</div>
		<div class="span11" style="background-color:#f7f7f7">
			<div class="liuyan shadow">
				<img src="./img/may.jpg" class="size60 img-circle pull-left">	
				
					<p><small class="muted ">2012-12-24 15:30</small><br />a </p>	
				
				<div class="liuyan-footer">
					<strong><a href="#">马森森马森森</a></strong>说</strong>
					<div class="pull-right"><i class="icon-retweet icon-white"></i> 评论</div>
				</div>
				<hr />
				<textarea rows="5"></textarea><button class="btn btn-info btn-mini pull-right">回复</button>
			</div>
			<div class="liuyan shadow">
				<img src="./img/may.jpg" class="size60 img-circle pull-left">	
				
					<p><small class="muted">2012-12-24 15:30</small><br />这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节</p>	
						
				<div class="liuyan-footer">
					<strong><a href="#">马森森马森森</a></strong>回复<strong><a href="#">陈嘉琦</a></strong>
					<span class="pull-right"><i class="icon-retweet icon-white"></i> 评论</span>
				</div>
			</div>
			<div class="liuyan shadow">
				<img src="./img/may.jpg" class="size60 img-circle pull-left">	
				<blockquote >
					<p><small class="muted ">2012-12-24 15:30</small>这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节这是十个字的测试环节</p>	
				</blockquote>			
				<div class="liuyan-footer">
					<strong><a href="#">马森森马森森</a></strong>回复<strong><a href="#">陈嘉琦</a></strong>
					<span class="pull-right"><i class="icon-retweet icon-white"></i> 评论</span>
				</div>
			</div>
			<div class="liuyan shadow">
				<img src="./img/may.jpg" class="size60 img-circle pull-left">	
				<blockquote >
					<p><small class="muted ">2012-12-24 15:30</small>班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团</p>	
				</blockquote>			
				<div class="liuyan-footer">
					<strong><a href="#">马森森马森森</a></strong>回复<strong><a href="#">陈嘉琦</a></strong>
					<span class="pull-right"><i class="icon-retweet icon-white"></i> 评论</span>
				</div>
			</div>
			<div class="liuyan shadow">
				<img src="./img/may.jpg" class="size60 img-circle pull-left">	
				<blockquote >
					<p><small class="muted ">2012-12-24 15:30</small>班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团</p>	
				</blockquote>			
				<div class="liuyan-footer">
					<strong><a href="#">马森森马森森</a></strong>回复<strong><a href="#">陈嘉琦</a></strong>
					<span class="pull-right"><i class="icon-retweet icon-white"></i> 评论</span>
				</div>
			</div>
			<div class="liuyan shadow">
				<img src="./img/may.jpg" class="size60 img-circle pull-left">	
				<blockquote >
					<p><small class="muted ">2012-12-24 15:30</small>班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团班长和和团</p>	
				</blockquote>			
				<div class="liuyan-footer">
					<strong><a href="#">马森森马森森</a></strong>回复<strong><a href="#">陈嘉琦</a></strong>
					<span class="pull-right"><i class="icon-retweet icon-white"></i> 评论</span>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<div id="repeat" class="modal hide fade" >
		<div class="modal-header">
			<button class="close" data-dismiss="modal">x</button>
			<h3>回复马森</h3>
		</div>
		<div class="modal-body">
			<textarea rows="3" class="input-block-level" style="font-weight:bold"></textarea>
		</div>
		<div class="modal-footer">
			<span class="label pull-left"><big>80</big></span>
			<button class="btn btn-large" data-dismiss="modal"><strong>关闭</strong></button>
			<button class="btn btn-large btn-inverse"><strong>回复</strong></button>
		</div>
	</div>
</div>

<?php
	include("footer.php");
?>