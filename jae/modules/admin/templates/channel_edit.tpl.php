<?php include $this->admin_tpl('head');?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=channel&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="250"> 频道名称（唯一）：</th>
        <td><input style="width:300px;" type="text" name="info[name]" value="<?php echo $name?>" id="language"  class="input-text"></td>
      </tr>
      <tr>
        <th> 系统调用别名（英文 系统识别用 唯一）：</th>
        <td><input style="width:300px;" type="text" name="info[alias]" value="<?php echo $alias?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      
       <tr>
        <th> URL链接：</th>
        <td> <input style="width:300px;" type="text" name="info[url]" value="<?php echo $url?>" id="language" class="input-text"><div id="languageTip" class="onShow"></div></td>
      </tr>
      <tr>
        <th>状态：</th>
        <td><input   type="checkbox" name="info[status]" value="1" <?php if( $status==1){echo "checked='checked'";}?>  ><div id="nameTip" class="onShow"></div></td>
      </tr>

	

	
</tbody></table>
<!--table_form_off-->
<div class="btns"><input name="id" type="hidden" value="<?php echo $id?>"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"></div>

</form>
<?php include $this->admin_tpl('foot');?>