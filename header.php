<?php
	function set_header($title="Daydream",$current_page)
	{
?>
		<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta  http-equiv="Content-Type" content="text/html;charset=UTF-8"  />
				<title><?php echo $title;?></title>
				
				<!-- Bootstrap -->
				
				<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
				<link href="./css/font-awesome.min.css" rel="stylesheet" media="screen">
				<link href="css/main.css" rel="stylesheet" media="screen">				
				<script src="js/jquery-1.8.3.min.js"></script>
				<script src="js/bootstrap.js"></script>
				<script>					
						$(function(){
								$("i[rel=tooltip]").tooltip(													
								);
								$('button[rel=tooltip]').tooltip(  						
								);
								$('a').tooltip();								
								$(".icon-retweet").parent().click(function(){
									$(this).parent().parent().parent().children(".reply").toggle()								
								});							
								$(".popover").hover(function(){
								$(this).find("#like").css("display","block")
								},
								function(){
									$(this).find("#like").css("display","none")									
								})
								$("i").parent().mouseenter(function(){
									$(this).parent().css("cursor","pointer")
								})
								
								$(".hobby .club-show").hover(function(){
									$(this).find(".popover").css("display","block")
								},
								function(){
									$(this).find(".popover").css("display","none")
								});
								$('#myCarousel').carousel({interval:'3000'});								
								$('#act').scrollspy();
							})						
				</script>
			</head>
			<body data-spy='scroll' data-target="#act" data-offset="20">
				<?php set_navbar($current_page);?>
				<div class="container" >
<?php }
	function set_navbar($current_page)
	{
?>
					<div class="navbar navbar-inverse navbar-fixed-top " style="background: #000">
						<div class="container">									
								<ul class="nav" >
									<li class="<?php if($current_page=="home") echo "active";?>"><a href="index.php">趣事儿</a></li>
									<li class="divider-vertical"></li>					
									<li class="<?php if($current_page=="acts") echo "active";?>"><a href="new_act_all.php">活动</a></li>
									<li class="divider-vertical"></li>
									<li class="<?php if($current_page=="club_all") echo "active";?>"><a href="club_all.php">找组织</a></li>	
									<li class="divider-vertical"></li>						
								</ul>				
								<ul class="nav pull-right" >					
									<li class="dropdown pull-right"><a href="" class="dropdown-toggle" data-toggle="dropdown"><small>马森</small><b class="caret"></b></a>
										<ul class="dropdown-menu pull-right">
											<li><a href="like.php" class="text-success"><i class="icon-heart"></i> <small>我喜欢</small></a></li>
											<li><a href="#"><i class="icon-heart"></i> <small>被喜欢555</small></a></li>
											<li><a href="change_self_information.php"><i class="icon-pencil"></i> <small>个人设置</small></a></li>
											<li class="divider"></li>
											<li><a href="./signup.php"><strong class="offset1">退出</strong></a></li>
										</ul>
									</li>
									<li><div style="position:absolute;top:10px;left:-45px;background-color:#fff;width:48px;height:48px;border-radius:48px;"><img src="./img/may.jpg" height="40px" width="40px" class="img-circle" style="margin:4px"></div>
									</li>					
										<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"><small>消息</small><b class="caret"></b></a>
											<ul class="dropdown-menu pull-right">								
												<li><a href="message.php"><i class="icon-retweet"></i> <small>4条评论</small></a></li>													
												<li><a href="new_like.php"><i class="icon-heart"></i> <small>2个喜欢</small></a><small class="offset1">关闭</small></li>													
											</ul>
										</li>
										
								</ul>			
								
						</div>						
					</div>
				</div>
<?php
	}
 ?>