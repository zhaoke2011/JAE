<?php include $this->admin_tpl('head');

			
?>

<form name="myform" id="myform" action="/admin.php?m=admin&c=menu&a=edit" method="post">
<table width="100%" class="table_form contentWrap">

      <tbody><tr>
        <th width="200">�ϼ��˵���</th>
        <td><select name="info[parentid]">
        <option value="0">��Ϊһ���˵�</option>
        <?php echo $select_categorys;?>
        
</select></td>
      </tr>
      <tr>
        <th> ��Ӧ�������������ƣ�</th>
        <td><input type="text" name="info[name]" id="language" class="input-text" value="<?php echo $name;?>"><div id="languageTip" class="onShow">�������Ӧ��������������</div></td>
      </tr>
      <tr>
        <th>�˵�Ӣ�����ƣ�</th>
        <td><input type="text" name="info[language]" id="name" class="input-text" value="<?php echo $language;?>"><div id="nameTip" class="onShow">������˵�Ӣ������</div></td>
      </tr>
	<tr>
        <th>ģ������</th>
        <td><input type="text" name="info[m]" id="m" class="input-text" value="<?php echo $m;?>"><div id="mTip" class="onShow">������ģ����</div></td>
      </tr>
	<tr>
        <th>�ļ�����</th>
        <td><input type="text" name="info[c]" id="c" class="input-text" value="<?php echo $c;?>"><div id="cTip" class="onShow">�������ļ���</div></td>
      </tr>
	<tr>
        <th>��������</th>
        <td><input type="text" name="info[a]" id="a" class="input-text" value="<?php echo $a;?>"> <span id="a_tip" class="onShow">�����뷽����</span>ͨ��AJAX ���ݵķ�������ʹ�� ajax_��ͷ������Ϊ�޸Ļ�ɾ������ʱ�����Ӧд�ɣ�ajax_edit_myaction/ajax_delete_myaction</td>
      </tr>
	<tr>
        <th>���Ӳ�����</th>
        <td><input type="text" name="info[data]" class="input-text" value="<?php echo $data;?>"></td>
      </tr>
	<tr>
        <th>�Ƿ���ʾ�˵���</th>
        <td><input type="radio" name="info[display]" value="1" <?php if($display==1) echo "checked";?>> ��<input type="radio" name="info[display]" value="0" <?php if($display==0) echo "checked";?>> ��</td>
      </tr>
	  <tr>
        <th>�ڴ�ģʽ����ʾ��</th>
        <td><input type="checkbox" name="info[project1]" value="1"> ����ģʽ</td>
      </tr>
</tbody></table>
<!--table_form_off--><input name="id" type="hidden" value="<?php echo $id?>">
<div class="btns"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="�ύ"></div>

</form>
<?php include $this->admin_tpl('foot');?>