<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');
?>
<link href="/statics/css/table_form.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>我的资料</dt>
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
        <!-- point .summary END -->
        <?php echo $msg?>
        <form method="post" >
          <table class="table_form" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <th>旺旺:</th>
                <td>
                  <input  class="input-text" style="width:95%;" type="text" name="info[wangwang]" value="<?php echo $wangwang?>" size="80"></td>
              </tr>
              <tr>
                <th>收货人姓名:</th>
                <td>
                  <input  class="input-text" style="width:95%;" type="text" name="info[nickname]"  value="<?php echo $nickname?>"  size="80"></td>
              </tr>
              <tr>
                <th>收货地址:</th>
                <td>
                  <input  class="input-text" style="width:95%;" type="text" name="info[address]" value="<?php echo $address?>"  size="80"></td>
              </tr>
              <tr>
                <th>手机:</th>
                <td>
                  <input  class="input-text" style="width:95%;" type="text" name="info[mobile]" value="<?php echo $mobile?>" size="80"></td>
              </tr>
              
              <tr>
                <th>E-mail:</th>
                <td>
                  <input  class="input-text" style="width:95%;" type="text" name="info[email]"  value="<?php echo $email?>"  size="80"></td>
              </tr>
        <?php if($memberinfo['groupid']==2) {?>      <tr>
                <th>店铺名称:</th>
                <td>
                   <input  class="input-text" style="width:95%;" type="text" name="info[shop_title]"  value="<?php echo $shop_title?>"  size="80">
                  </td>
              </tr>
              <tr>
                <th>店铺简介:</th>
                <td> <input  class="input-text" style="width:95%;" type="text" name="info[shop_profile]"  value="<?php echo $shop_profile?>"  size="80">
                  </td>
              </tr>
              <tr>
                <th>店铺地址:</th>
                <td><input  class="input-text" style="width:95%;" type="text" name="info[shop_url]"  value="<?php echo $shop_url?>"  size="80">
                </td>
              </tr><?php }?>
              <tr>
                <th colspan="2" style="text-align:center;vertical-align:middle;">
                  <input class="button" name="dopost" type="submit" value="提交"></th>
              </tr>
            </tbody>
          </table>
        </form>

        <!-- point .detail END --> </div>
      <div class="blank"></div>
      <div class="m_main"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<div class="blank"></div>