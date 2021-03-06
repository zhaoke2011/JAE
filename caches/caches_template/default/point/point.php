<?php defined('IN_JAE') or exit('No permission resources.'); ?><?php  
include template('content','head');
?>
<link href="/statics/css/member.css" rel="stylesheet" type="text/css" />
<div class="blank"></div>
<div class="wrap">
  <dl class="ui-tab clearfix" id="">
    <dt>我的积分</dt>
    <dd data-type="all" class="j_nativeHistory all <?php if($trad=='all') echo "select"?> " data-template=""><a href="/index.php?m=point&c=index&a=sign&trad=all">积分明细</a></dd>
    <dd data-type="income" class="j_nativeHistory income  <?php if($trad=='income') echo "select"?>" data-template="/point/detail/income"><a href="/index.php?m=point&c=index&a=sign&trad=income ">积分收入</a></dd>
    <dd data-type="used" class="j_nativeHistory used  <?php if($trad=='used') echo "select"?>" data-template="/point/detail/used"><a href="/index.php?m=point&c=index&a=sign&trad=used">积分支出</a></dd>
  <dd data-type="expired" class="j_nativeHistory expired" data-template="/point/detail/expired"><a href="/index.php?m=point&c=index&a=point_task" target="_blank">积分任务说明</a></dd>
     <!-- <dd data-type="freezed" class="j_nativeHistory freezed" data-template="/point/detail/freezed">冻结积分</dd>-->
  </dl>
  <div class="border">
    <div class="pd20">
      <div class="content">
        <div id="J_pointSummary">
          <div class="summary clearfix">
            <div class="item valid"><span class="desc">可用的积分</span><span class="point" style="color:#C00"><?php echo $memberinfo['point']?></span></div>
            <div class="item expired-soon"><span class="desc">已经消耗的积分</span><span class="point"><?php if($pointeds['point'])echo $pointeds['point']; else echo 0 ?></span><span class="date"><!--2014年12月31日--></span></div>
            <div class="item exchange"><?php echo $msg?><a href="/index.php?m=point&c=index&a=sign" >签到 赢积分</a></div>
          </div>
        </div>
        <?php if (!empty($invite_sum)){?>
        <div class="check_tips"><?php echo $tips="您已邀请了<b style='color:#f00; font-size:14px; '>".$invite_sum. "</b>位好友成为会员，正在审核中……。由于近期有大量用户邀请自己的小号会员刷积分，我们将会通过淘宝大数据与人工来做双重审核，次日内审核完毕（遇非工作日，时间顺延）。";?></div>
        <?php }?>
        
        <!-- point .summary END -->
        <div class="detail">
          <div class="masthead clearfix"><span class="why">来源/用途</span><span class="what">积分变化</span><span class="when">日期</span><span class="notes">备注</span></div>
          <div id="J_pointDetail">
            <ul class="item-list" id="J_item-list">
            
            <?php foreach ($data as $v){?>
              <li class="item clearfix">
                <div class="why"><a class="img" href="javascript:void(0);"><img src="<?php echo $v['picture']?>" width="60" height="60" alt="小积分抽大奖"></a><a class="title" href="javascript:void(0);"><?php echo $v['title']?></a><span class="order-number">编号：<?php echo $v['id']?></span></div>
                <div class="what"><span class=" <?php if ($v['point']>0) echo "plus"; else echo "minus";?> "><?php echo $v['point']?></span></div>
                <div class="when"><?php echo date('Y-m-d H:i:s',$v['date'])?></div>
                <div class="notes"><?php echo $v['description']?></div>
              </li>
              <?php }?>
              
            </ul>
          </div>
          <div id="J_pointError" class="hidden error"></div>
          <div id="J_pointPager" class="pages">
            <?php echo $pages;?>
          </div>
        </div>
        <!-- point .detail END --></div>
      <div class="blank"></div>
      <div class="m_main"> </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
<div class="blank"></div>
