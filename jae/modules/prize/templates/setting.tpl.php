<?php include $this->admin_tpl('head','admin');
	
?>

<form name="myform" id="myform" action="/admin.php?m=prize&c=prize&a=setting" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
    
        <th width="150">启用抽奖模块：</th>
       <td><input type="radio" name="setting[enable]" value="1" <?php if($enable==1) echo "checked"?>> 是&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio" name="setting[enable]" value="0" <?php if($enable==0) echo "checked"?>> 否</td>
      </tr>
        <tr>
        <th> 活动名称：</th>
        <td><input style="width:300px;" type="text" name="setting[title]"  value="<?php echo $title?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th> 活动描述：</th>
        <td><input style="width:300px;" type="text" name="setting[description]"  value="<?php echo $description?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
       <tr>
        <th> 活动图片：</th>
        <td><input style="width:300px;" type="text" name="setting[picture]"  value="<?php echo $picture?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
       <tr>
       <th> 抽奖一次消耗的积分：</th>
        <td><input style="width:30px;" type="text" name="setting[point]"  value="<?php echo $point?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
        <tr>
        <th> 背景颜色：</th>
        <td><input style="width:100px;" type="text" name="setting[bg_color]"  value="<?php echo $bg_color?>" class="input-text"><div id="languageTip" class="onShow">#D91B38</div></td>
      </tr>
        <tr>
        <th> 背景图片：</th>
        <td><input style="width:300px;" type="text" name="setting[bg_img]"  value="<?php echo $bg_img?>" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
     
     
            <tr>
        <th>抽奖规则：</th>
        <td> <textarea style="width:600px;;height: 200px;" name="setting[rules]"><?php echo $rules;?></textarea><div id="nameTip" class="onShow"></div></td>
      </tr>      
      
     
      
	
	

	
</tbody></table>
<!--table_form_off-->
<div class="btns">
<input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot','admin');?>