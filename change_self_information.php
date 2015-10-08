<?php
	include("header.php");
	set_header("Daydream","");
?>
<div class="container row-fluid min-height" style="background-image:url(./img/banner.png)">
<form>  
       <h2>修改密码</h2>	
        <!-- Appended input-->
        <span class="pull-left span3"><label >原始密码</label>           
        <input  placeholder="placeholder" type="text"></span>
		<span class="pull-left span3"><label class="">新密码</label>           
        <input placeholder="placeholder" type="text"></span>
		<span class="pull-left span3"><label class="control-label">确认密码</label>           
        <input placeholder="placeholder" type="text"></span>
		<button class="btn btn-large btn-inverse" style="margin:25px ">确定</button>
</form>
<form style="background-color:#FBEED5;padding:10px">
    <fieldset >     
		<h2 >修改资料</h2>	
        <!-- Appended input-->
		<div class="span5"> 
			<img src="./img/na.jpg" class="size100"><a href="#"><strong>修改头像</strong></a>
			<label class="">姓名</label>           
			<input class="span8" placeholder="placeholder" type="text">           
			<p class="help-block"></p>      
			
			<label class="">性别</label>          
			<!-- Inline Radios -->
			<label class="radio inline">
			<input type="radio" value="男" name="sex" checked="checked">
				男
			</label>
			<label class="radio inline">
				<input type="radio" value="女" name="sex">
				女
			</label>
          
			<!-- Appended input-->
			<label class="">大学</label>          
              <input class="span8" placeholder="placeholder"  type="text">            
            <p class="help-block"></p>
			
			<!-- Textarea -->
			<label class="">兴趣</label>
            <textarea type="" class="span8" rows="4"> </textarea> 
			
		</div>
       	
		<div class="span6">
          <!-- Appended input-->
			<label class="">入学时间</label>           
			<input class="span8" placeholder="placeholder" type="text">           
            <p class="help-block"></p>          
     
		
			<!-- Appended input-->
			<label class="">生日</label>           
            <input class="span8" placeholder="placeholder" type="text">           
            <p class="help-block"></p>          
       
		
			<!-- Appended input-->
			<label class="">感情状况</label>           
            <input class="span8" placeholder="placeholder" type="text">           
            <p class="help-block"></p> 
    
			<!-- Appended input-->
			<label class="">家乡</label>            
            <input class="span4" placeholder="省" value="省" type="text">
            <input class=" offset2 span4" placeholder="市" type="text" />
            <p class="help-block"></p>
        
			<!-- Textarea -->
			<label>自我介绍</label>
			<textarea type="" class="span8" rows="4"> </textarea>
			<div><button class="btn btn-large btn-inverse pull-right">保存修改</button></div>		
		</div>	
	</fieldset>
</form> 
</div> 
 <?php 
	include("footer.php")
 ?>
