<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,jquery-1.9.1.min.js,layer/layer.js')); ?>
</head>
<body>
<div class="body_user ">
<?php echo $this->fetch('library/page_header3.lbi'); ?>
</div>

<div id="container">
<div class="contentBody">
<div class="block_s">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>



<div id="content_users">
  
  <div class="accountSide">

        <?php echo $this->fetch('library/user_menu.lbi'); ?>

  </div>
  
  
  <div class="content_body2 " style="color:#666;">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
      
       <?php if ($this->_var['action'] == 'estimate_list'): ?>
       <h5><span>我的回收</span></h5>
       <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
            <td bgcolor="#ffffff">商品名称</td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
            <td bgcolor="#ffffff">产品估价</td>
            <td bgcolor="#ffffff">实际回收价格</td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['estimateOrds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><a href="user.php?act=estimate_list_detail&id=<?php echo $this->_var['item']['id']; ?>" class="f6"><?php echo $this->_var['item']['tradeNo']; ?></a></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['productName']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['createTime']; ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['item']['estimatePrice']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php if ($this->_var['item'] [ purchasePrice ] != ''): ?>￥<?php echo $this->_var['item']['purchasePrice']; ?><?php endif; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['status']; ?><?php if ($this->_var['item'] [ expressNo ] != ''): ?><br>单号:<a href="http://www.sf-express.com/cn/sc/dynamic_functions/waybill/#search/bill-number/<?php echo $this->_var['item']['expressNo']; ?>" target="_blank"><?php echo $this->_var['item']['expressNo']; ?></a><?php endif; ?></td>
            <td align="center" bgcolor="#ffffff"><font class="f6"><a href="user.php?act=estimate_list_detail&id=<?php echo $this->_var['item']['id']; ?>" class="f6">查看</a><?php if ($this->_var['item'] [ status ] == '等待验货'): ?><?php if ($this->_var['item'] [ tradeType ] == '2'): ?>&nbsp;&nbsp;<a href="#" onclick="enter_expressno('<?php echo $this->_var['item']['id']; ?>')" class="f6">输入快递单号</a><?php endif; ?>&nbsp;&nbsp;<a href="javascript:if(confirm('确定要取消订单吗?'))location.href='user.php?act=estimate_cancel&id=<?php echo $this->_var['item']['id']; ?>'">取消</a><?php endif; ?></font></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        <div class="blank5"></div>
       <?php endif; ?>
      
     
     <?php if ($this->_var['action'] == estimate_list_detail): ?>
        <h5><span><?php echo $this->_var['lang']['order_status']; ?></span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_sn']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['tradeNo']; ?>
          </td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_status']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['status']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">交易方式：</td>
          <td align="left" bgcolor="#ffffff"><?php if ($this->_var['estimateDetail']['tradeType'] == "2"): ?>快递交易 [单号:<?php echo $this->_var['estimateDetail']['expressNo']; ?>]<?php endif; ?><?php if ($this->_var['estimateDetail']['tradeType'] == "1"): ?>门店交易<?php endif; ?></td>
        </tr>
        <?php if ($this->_var['estimateDetail']['tradeType'] == "2"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">寄件地址：</td>
          <td align="left" bgcolor="#ffffff">江苏省苏州市姑苏区园林路5-2号</td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['estimateDetail']['tradeType'] == "1"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">门店信息：</td>
          <td align="left" bgcolor="#ffffff">地址：<?php echo $this->_var['estimateDetail']['orgAddress']; ?> 电话：<?php echo $this->_var['estimateDetail']['orgTel']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td align="right" bgcolor="#ffffff">支付方式：</td>
          <td align="left" bgcolor="#ffffff"><?php if ($this->_var['estimateDetail']['payType'] == "1"): ?>现金交易<?php endif; ?><?php if ($this->_var['estimateDetail']['payType'] == "2"): ?>银行转账<?php endif; ?><?php if ($this->_var['estimateDetail']['payType'] == "3"): ?>支付宝支付<?php endif; ?><?php if ($this->_var['estimateDetail']['payType'] == "4"): ?>微信支付<?php endif; ?></td>
        </tr>
        <?php if ($this->_var['estimateDetail']['payType'] == "2"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">银行名称</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['bankName']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">账户名</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['accountName']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">银行卡号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['bankCardno']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['estimateDetail']['payType'] == "3"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">支付宝帐号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['accountName']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['estimateDetail']['payType'] == "4"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">帐号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['accountName']; ?></td>
        </tr>
        <?php endif; ?>
      </table>
        <div class="blank"></div>
        <h5><span><?php echo $this->_var['lang']['goods_list']; ?></span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <th width="23%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
            <th width="29%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
            <th width="26%" align="center" bgcolor="#ffffff">产品估价</th>
            <th width="26%" align="center" bgcolor="#ffffff">实际回收价格</th>
          </tr>
          <tr>
            <td bgcolor="#ffffff"><?php echo $this->_var['estimateDetail']['productName']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo nl2br($this->_var['estimateDetail']['fullPropertyOptions']); ?> <?php echo nl2br($this->_var['estimateDetail']['diamondRemark']); ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['estimateDetail']['estimatePrice']; ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['estimateDetail']['purchasePrice']; ?></td>
          </tr>
        </table>
         <div class="blank"></div>

         
      <?php endif; ?>
    
    
       <?php if ($this->_var['action'] == 'mortgageintention_list'): ?>
       <h5><span>我的抵押</span></h5>
       <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
            <td bgcolor="#ffffff">抵押商品</td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
            <td bgcolor="#ffffff">抵押周期</td>
            <td bgcolor="#ffffff">评估价格</td>
            <td bgcolor="#ffffff">手续费(每天)</td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['mortgages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><a href="user.php?act=mortgageintention_list_detail&id=<?php echo $this->_var['item']['id']; ?>" class="f6"><?php echo $this->_var['item']['tradeNo']; ?></a></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['productName']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['createTime']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['mortgageStarttime']; ?> - <?php echo $this->_var['item']['mortgageEndtime']; ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['item']['estimatePrice']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['mortgageInterestDay']; ?>%</td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['status']; ?></td>
            <td align="center" bgcolor="#ffffff"><font class="f6"><a href="user.php?act=mortgageintention_list_detail&id=<?php echo $this->_var['item']['id']; ?>" class="f6">查看</a><?php if ($this->_var['item'] [ status ] == '等待处理'): ?>&nbsp;&nbsp;<a href="user.php?act=mortgageintention_cancel&id=<?php echo $this->_var['item']['id']; ?>">取消</a><?php endif; ?></font></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        <div class="blank5"></div>
       <?php endif; ?>
      

       
     
     <?php if ($this->_var['action'] == mortgageintention_list_detail): ?>
        <h5><span>抵押意向详情</span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_sn']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['tradeNo']; ?>
          </td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_status']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['status']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">抵押周期：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['mortgageStarttime']; ?> - <?php echo $this->_var['mortgageDetail']['mortgageEndtime']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">手续费(每天)：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['mortgageInterestDay']; ?>%</td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">交易方式：</td>
          <td align="left" bgcolor="#ffffff"><?php if ($this->_var['mortgageDetail']['tradeType'] == "2"): ?>快递交易<?php endif; ?><?php if ($this->_var['mortgageDetail']['tradeType'] == "1"): ?>门店交易<?php endif; ?></td>
        </tr>
        <?php if ($this->_var['mortgageDetail']['tradeType'] == "1"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">门店信息：</td>
          <td align="left" bgcolor="#ffffff">地址：<?php echo $this->_var['mortgageDetail']['orgAddress']; ?> 电话：<?php echo $this->_var['mortgageDetail']['orgTel']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td align="right" bgcolor="#ffffff">支付方式：</td>
          <td align="left" bgcolor="#ffffff"><?php if ($this->_var['mortgageDetail']['payType'] == "1"): ?>现金交易<?php endif; ?><?php if ($this->_var['mortgageDetail']['payType'] == "2"): ?>银行转账<?php endif; ?><?php if ($this->_var['mortgageDetail']['payType'] == "3"): ?>支付宝支付<?php endif; ?><?php if ($this->_var['mortgageDetail']['payType'] == "4"): ?>微信支付<?php endif; ?></td>
        </tr>
        <?php if ($this->_var['mortgageDetail']['payType'] == "2"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">银行名称</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['bankName']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">账户名</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['accountName']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">银行卡号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['bankCardno']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['mortgageDetail']['payType'] == "3"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">支付宝帐号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['accountName']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['mortgageDetail']['payType'] == "4"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">帐号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['accountName']; ?></td>
        </tr>
        <?php endif; ?>
      </table>
        <div class="blank"></div>
        <h5><span>抵押列表</span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <th width="23%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
            <th width="29%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
            <th width="26%" align="center" bgcolor="#ffffff">抵押评估价格</th>
          </tr>
          <tr>
            <td bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['productName']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo nl2br($this->_var['mortgageDetail']['fullPropertyOptions']); ?> <?php echo nl2br($this->_var['estimateDetail']['diamondRemark']); ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['mortgageDetail']['estimatePrice']; ?></td>
          </tr>
        </table>
         <div class="blank"></div>
      <?php endif; ?>
    

    
       <?php if ($this->_var['action'] == 'mortgage_list'): ?>
       <h5><span>我的抵押（已成交）</span></h5>
       <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
            <td bgcolor="#ffffff">抵押商品</td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
            <td bgcolor="#ffffff">抵押周期</td>
            <td bgcolor="#ffffff">抵押价格</td>
            <td bgcolor="#ffffff">手续费(每天)</td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['mortgages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><a href="user.php?act=mortgage_list_detail&id=<?php echo $this->_var['item']['id']; ?>" class="f6"><?php echo $this->_var['item']['tradeNo']; ?></a></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['productName']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['createTime']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['mortgageStarttime']; ?> - <?php echo $this->_var['item']['mortgageEndtime']; ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['item']['mortgageRealPrice']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['mortgageRealInterestDay']; ?>%</td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['status']; ?></td>
            <td align="center" bgcolor="#ffffff"><font class="f6"><a href="user.php?act=mortgage_list_detail&id=<?php echo $this->_var['item']['id']; ?>" class="f6">查看</a></font></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        <div class="blank5"></div>
       <?php endif; ?>
      

      
     
     <?php if ($this->_var['action'] == mortgage_list_detail): ?>
        <h5><span>抵押订单详情</span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_sn']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['tradeNo']; ?>
          </td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['detail_order_status']; ?>：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['status']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">抵押价格：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['mortgageRealPrice']; ?>元</td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">抵押周期：</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['mortgageStarttime']; ?> - <?php echo $this->_var['mortgageDetail']['mortgageEndtime']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">交易方式：</td>
          <td align="left" bgcolor="#ffffff"><?php if ($this->_var['mortgageDetail']['tradeType'] == "2"): ?>快递交易<?php endif; ?><?php if ($this->_var['mortgageDetail']['tradeType'] == "1"): ?>门店交易<?php endif; ?></td>
        </tr>
        <?php if ($this->_var['mortgageDetail']['tradeType'] == "1"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">门店信息：</td>
          <td align="left" bgcolor="#ffffff">地址：<?php echo $this->_var['mortgageDetail']['orgAddress']; ?> 电话：<?php echo $this->_var['mortgageDetail']['orgTel']; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td align="right" bgcolor="#ffffff">支付方式：</td>
          <td align="left" bgcolor="#ffffff"><?php if ($this->_var['mortgageDetail']['payType'] == "1"): ?>现金交易<?php endif; ?><?php if ($this->_var['mortgageDetail']['payType'] == "2"): ?>银行转账<?php endif; ?><?php if ($this->_var['mortgageDetail']['payType'] == "3"): ?>支付宝支付<?php endif; ?><?php if ($this->_var['mortgageDetail']['payType'] == "4"): ?>微信支付<?php endif; ?></td>
        </tr>
        <?php if ($this->_var['mortgageDetail']['payType'] == "2"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">银行名称</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['bankName']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">账户名</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['accountName']; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#ffffff">银行卡号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['bankCardno']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['mortgageDetail']['payType'] == "3"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">支付宝帐号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['accountName']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['mortgageDetail']['payType'] == "4"): ?>
        <tr>
          <td align="right" bgcolor="#ffffff">帐号</td>
          <td align="left" bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['accountName']; ?></td>
        </tr>
        <?php endif; ?>
      </table>
        <div class="blank"></div>
        <h5><span>抵押列表</span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <th width="23%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
            <th width="29%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
            <th width="26%" align="center" bgcolor="#ffffff">抵押评估价格</th>
          </tr>
          <tr>
            <td bgcolor="#ffffff"><?php echo $this->_var['mortgageDetail']['productName']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo nl2br($this->_var['mortgageDetail']['fullPropertyOptions']); ?> <?php echo nl2br($this->_var['estimateDetail']['diamondRemark']); ?></td>
            <td align="right" bgcolor="#ffffff">￥<?php echo $this->_var['mortgageDetail']['estimatePrice']; ?></td>
          </tr>
        </table>
         <div class="blank"></div>
        <h5><span>抵押记录</span></h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <th align="center" bgcolor="#ffffff">记录时间</th>
            <th align="center" bgcolor="#ffffff">抵押动作</th>
            <th align="center" bgcolor="#ffffff">抵押周期</th>
            <th align="center" bgcolor="#ffffff">手续费(%/天)</th>
            <th align="center" bgcolor="#ffffff">应付手续费</th>
            <th align="center" bgcolor="#ffffff">已付手续费</th>
            <th align="center" bgcolor="#ffffff">备注</th>
          </tr>
          <?php $_from = $this->_var['mortgageLogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['operateTime']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['operateCmd']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['logMortgageStarttime']; ?> - <?php echo $this->_var['item']['logMortgageEndtime']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['logMortgageRealInterestDay']; ?></td>
            <td align="center" bgcolor="#ffffff">￥<?php echo $this->_var['item']['logMortgageExpectEarnings']; ?></td>
            <td align="center" bgcolor="#ffffff">￥<?php echo $this->_var['item']['logMortgageRealEarnings']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['operateComment']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
      <?php endif; ?>
    
      </div>
     </div>
    </div>
  </div>
  
</div>

</div>
</div>
</div>
<div class="blank5"></div>

<?php echo $this->fetch('library/page_footer2.lbi'); ?>




</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

function enter_expressno(id) {
  layer.prompt({
  formType: 0,
  value: '',
  title: '请输入顺丰快递单号'
}, function(value, index, elem){
  $.ajax({  
      type : "POST",  //提交方式  
      url : "http://shop.aishoubao.com/user.php?act=estimate_update_expressno&id="+id+"&expressno="+value,  
      success : function(result) {//返回数据根据结果进行相应的处理  
          // console.log(result);
          result = $.parseJSON(result);
          if ( result.success ) {  
            layer.msg('快递单号设置成功!', {icon:1}); 
            layer.close(index);
          } else {  
            layer.msg('快递单号设置失败!', {icon:2});
          }  
      }  
  });  
});
}
</script>
</html>
