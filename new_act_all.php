<?php
	include("header.php");
	set_header("Daydream","acts");
?>
<form class="form-search row-fluid " style="margin:30px 0">
	<div class="input-append span7" >
		<input class="span6" value="哈尔冰工业大学" id="appendedInputButton" type="text" style="margin-top:0px;height:44px;font-weight:bold;font-size:20px;padding-bottom:0px">
		<button class="btn btn-large" type="button">Go!</button>
	</div>
	<a class="btn btn-large btn-inverse pull-right" style="margin-right:-30px"><strong><i class="icon-plus icon-white"></i> 创建活动</strong></a>
</form> 
<div class="min-height row-fluid" style="background-image:url(./img/banner.png)">	
	<div id="act" class="shadow" style="position:fixed;padding:0px 10px;top:150px;left:4%;">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#hotty">同校最火</a></li>
			<li><a href="#ving">正在进行</a></li>
			<li><a href="#will">即将进行</a></li>
			<li><a href="#ved">刚刚过去</a></li>			
		</ul>
	</div>
	<h2 class="active">同校最火HOT</h2>
	<div style="height:310px;width:860px;position:relative;padding:20px 40px;margin-bottom:40px" class="shadow"><div id="hotty"></div>
	<div id="myCarousel" data-pause="hover" class="carousel slide span6  pull-left"> 		
        <div class="carousel-inner">
            <div class="item active">
                    <img src="./img/222.jpg"/>
					<div class="carousel-caption">
                      <h4>校园十大歌手</h4>
                     </div>
                  </div>
                  <div class="item">
                    <img src="./img/mom.jpg"/>
                    <div class="carousel-caption">
                      <h4>母亲节的三行情书</h4>
                      </div>
                  </div>
                  <div class="item" >
                    <img src="./img/222.jpg"/>
                    <div class="carousel-caption">
                      <h4>smile哈工大</h4>
                      </div>
					</div>
                  <div class="item " >
                    <img src="./img/222.jpg"/>
                    <div class="carousel-caption">
                      <h4>职场新人讲座</h4>
                      </div>
					</div>
                  <div class="item " >
                    <img src="./img/banfu.jpg"/>
                    <div class="carousel-caption">
                      <h4>班级全家福</h4>
                      </div>
					</div>
                  <div class="item " >
                    <img src="./img/banhui.gif"/>
                    <div class="carousel-caption">
                      <h4>班级logo设计大赛</h4>
                      </div>
					</div>
					<div class="item " >
                    <img src="./img/222.jpg"/>
                    <div class="carousel-caption">
                      <h4>最美校园风景</h4>
                      </div>
					</div>
					
                  </div> 
				<a data-slide="prev" class="left carousel-control" href="#myCarousel" >‹</a>
                <a data-slide="next" class="right carousel-control" href="#myCarousel">›</a>   
            </div>
			<div class="hero-unit pull-right" style="padding:10px 50px;width:270px">
				<h3>最热排行榜</h3>
				<p>
					<a href="./act_on_home.php"><strong class="text-min span12">NO1:<i class="icon-fire"></i> 校园十大歌手</strong></a>
					<a href="#"><strong class="text-min span12">NO2:<i class="icon-bookmark-empty"></i> 班级全家福</strong></a>
					<a href="#"><strong class="text-min span12">NO3:<i class="icon-fire"></i> 职场新人讲座</strong></a>
					<a href="#"><strong class="text-min span12">NO4:<i class="icon-bookmark-empty"></i> 母亲节，三行情书</strong></a>
					<a href="#"><strong class="text-min span11">NO5:<i class="icon-bookmark-empty"></i> 班级全家福</strong></a>
					<a href="#"><strong class="text-min span11">NO6:<i class="icon-bookmark-empty"></i> 班级logo设计大赛</strong></a>
					<a href="#"><strong class="text-min span11">NO7:<i class="icon-bookmark-empty"></i> 最美校园风景</strong></a>					
				</p>
			</div>
	</div>
	<h2>正在进行ING···</h2>
	<div  class="pull-left shadow" style="padding:30px 0px;margin-bottom:20px;margin-bottom:40px"><div id="ving"></div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/222.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/222.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/222.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/222.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/222.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	
	</div>
	<h2>即将开始 'LL</h2>
	<div class="pull-left shadow" style="padding:30px 0px;margin-bottom:40px;width:100%"><div id="will"></div>	
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	</div>
	
	
	<h2 class="pull-left">已经结束 -ED</h2>
	<div class="pull-left shadow" style="padding:10px 0px;margin-bottom:40px;width:100%"><div id="ved"></div>	
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div><div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>
	<div class="new-act shadow ">		
		<div class="text text-min"><strong><big><a href="#">校园十大歌手</a></big></strong></div>
		<img src="./img/ge.jpg" class="act-pic">
		<div class="text">
			<i class="icon-leaf"></i> <small class="muted "> 线上活动</small>
			 <a href="#" class="label label-info pull-right">去看看</a>			
		</div>		
	</div>	
	</div>
</div>

	

<?php
	include("footer.php");
?>
