<?php
	include("header.php");
	set_header("Daydream","activities");
?>
<div class="container min-height" >
<form class="form-horizontal">
    <fieldset class="pull-left" style="height:400px;width:550px;">
    <div id="legend" class="">
        <legend class="">创建活动</legend>
    </div>
	<div class="shadow"style="margin-left:00px;">
    <div class="control-group" >
		<label class="control-label" for="input01">名称</label>
          <!-- Text input--> 
        <div class="controls">
            <input type="text" placeholder="活动名称" class="input-xlarge shadow">
        </div>
    </div>
	<div class="control-group">
          <!-- Text input-->
        <label class="control-label" for="input01">标签</label>
        <div class="controls">
            <input type="text" placeholder="用逗号隔开，不要超过3个" class="input-xlarge">
        </div>
    </div>
	<div class="control-group">
        <label class="control-label">类型</label>
        <div class="controls">
      <!-- Inline Radios -->
		<label class="radio inline">
			<input type="radio" value="线上" name="group" >
			线上
		</label>
		<label class="radio inline">
			<input type="radio" value="线下" name="group" checked="checked">
			线下
		</label>
		</div>
    </div>	
	<div class="control-group">
          <!-- Text input-->
        <label class="control-label" for="input01">开始时间</label>
        <div class="controls controlls-row">
            <input type="text" placeholder=""class="span3" > 
			<input type="text" placeholder=""class="span1" >
        </div>
    </div>
	<div class="control-group">
         <!-- Text input-->
        <label class="control-label" for="input01">结束时间</label>
        <div class="controls controlls-row">
            <input type="text" placeholder=""class="span3" > 
			<input type="text" placeholder=""class="span1" >   
        </div>
    </div>
	<div class="control-group">
          <!-- Textarea -->
        <label class="control-label">描述</label>
		<div class="controls">
            <div class="textarea">
                  <textarea type="" class="input-xlarge"> </textarea>
            </div>
        </div>
    </div>
	<div class="control-group">
        <label class="control-label"></label>
         <!-- Button -->
        <div class="controls">
			<button class="btn btn-inverse pull-right">发起</button>
        </div>
    </div>
	</div>
	</fieldset>
  </form>
  <div style="height:250px;width:200px;border:2px #000 solid;float:left;margin-top:100px">
  
</div>
</div>

</div>

<?php
	include("footer.php");
?>
