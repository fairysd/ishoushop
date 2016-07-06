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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script>
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>

<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'left_goodslist.js,miqi_goods.js,magiczoomplus.js')); ?>

<script>
$(function(){
	/*放大镜缩略图左右切换效果*/
	$("#detail_img_slider").slide({
			mainCell:"#J_tabSlider ul",
			vis:5,
			prevCell:".pre_btn",
			nextCell:".next_btn",
			effect:"leftLoop"
	})
	/*放大镜缩略图点击选中效果*/
	$("#J_tabSlider ul li a").click(function(){
		$("#J_tabSlider ul li").removeClass("cur");
		$(this).parent().addClass("cur");
	})
})
</script>

<div class="detail_bg">



<div class="content_title">
  <div class="block" style="margin:0 auto">
    <div id="ur_here"> <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
  </div>
</div>


<div class="detail_main">
    <div class="tm-detail-meta">
      <div id="goodsInfo" class="clearfix">
       <?php echo $this->fetch('library/goods_gallery.lbi'); ?>

        <div class="textInfo" style="float:right">
          <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
            <div class="center_title"><a><?php echo $this->_var['goods']['goods_style_name']; ?></a></div>
            <div class="brief"><?php echo $this->_var['goods']['goods_brief']; ?></div>
            <div class="detail_center">
              <div class="center_txt">
                <div class="center_text">
                  <?php if ($this->_var['promotion']): ?>
                   <p style="display:none">
                    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                    <?php echo $this->_var['lang']['activity']; ?>
                    <?php if ($this->_var['item']['type'] == "snatch"): ?>
                    <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#FF4560; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a><br/>
                    <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
                    <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#FF4560; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
                    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                  <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#FF4560; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
                    <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                    <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#FF4560; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
                    <?php endif; ?>
                   <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#FF4560;"><?php echo $this->_var['item']['act_name']; ?></a> <br/>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                 </p>
                  <?php endif; ?>

                  <?php if ($this->_var['cfg']['show_goodssn']): ?>
                  <p><?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?> </p>
                  <?php endif; ?>

                  <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                  <p> <?php echo $this->_var['lang']['goods_brand']; ?><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a> </p>
                  <?php endif; ?>

                  <?php if ($this->_var['cfg']['show_goodsweight']): ?>
                  <p> <?php echo $this->_var['lang']['goods_weight']; ?><?php echo $this->_var['goods']['goods_weight']; ?></p>
                  <?php endif; ?>

                  <?php if ($this->_var['cfg']['show_addtime']): ?>
                  <p><?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?></p>
                  <?php endif; ?>

                  
                  <p style="display:none" > <?php echo $this->_var['lang']['goods_click_count']; ?>：<?php echo $this->_var['goods']['click_count']; ?> </p>

                  <b style="display:none">
                  
                  <?php echo $this->_var['lang']['shop_price']; ?><font  id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></font> </b>

                <ul class="tm-fcs-panel">
                   <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      <li>
        <strong class="attr_cx"> 促销价</strong> <span class="shop_price" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['promote_price']; ?></span>
      </li>
      <?php else: ?>
      <li>
        <strong class="attr"> 本店价</strong> <span class="shop_price"   id="ECS_GOODS_AMOUNT" ><?php echo $this->_var['goods']['shop_price_formated']; ?></span>
      </li>
       <?php endif; ?>

          <li class="tm-price-panel">
                <?php if ($this->_var['cfg']['show_marketprice']): ?>
                     <span>价格</span> <font class="tm-price"><?php echo $this->_var['goods']['market_price']; ?></font>
                <?php endif; ?>
          </li>

           </ul>

                <ul class="tm-ind-panel">
                  <li><span style="font-size:18px;">所在地：苏州</span></li>
                   <!-- <Li class="tm-ind-item tm-ind-sellCount"><p class="tm-count"><?php echo $this->_var['goods']['sales_volume']; ?></p><p class="tm-label">月销量</p></Li>
                   <li class="tm-ind-item tm-ind-reviewCount"><p class="tm-count"><?php echo $this->_var['goods']['comments_number']; ?></p><p class="tm-label">累计评价</p>
                   <p class="tm-rate"><span class="c-value-no"><img src="themes/tianmao/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /><font class="tm-rate">4.8</font></span></p></li>
                   <li class="tm-ind-item tm-ind-emPointCount">
                     <a href="#"><p class="tm-count"><?php echo $this->_var['goods']['give_integral']; ?></p><p class="tm-label">送积分</p></a>
                   </li> -->
                </ul>

                  <p style="display:none">
                    <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
                    <?php echo $this->_var['rank_price']['rank_name']; ?>：<font  id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </p>

                  <p style="display:none">节&nbsp;&nbsp;&nbsp;省：¥<?php echo $this->_var['goods']['jiesheng']; ?>（<?php echo $this->_var['goods']['zhekou']; ?>折）</p>

                  <?php if ($this->_var['volume_price_list']): ?>
                  <div style="display:none"> <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font><br />
                  <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
                    <tr>
                      <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
                      <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
                    </tr>
                    <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                    <tr>
                      <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
                      <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </table>

                  </div>
                  <?php endif; ?>
      			<div class="clearfix"></div>
                  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                  <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
                  <p style="display:none"> <?php echo $this->_var['lang']['promote_price']; ?><?php echo $this->_var['goods']['promote_price']; ?>
                    <?php echo $this->_var['lang']['residual_time']; ?> <font  id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font> </p>
                  <?php endif; ?>
                  <p style="display:none" > <?php echo $this->_var['lang']['amount']; ?>：<font id="ECS_GOODS_AMOUNT" class="shop"></font> </p>
                  <p style="display:none">
                    <?php if ($this->_var['goods']['give_integral'] > 0): ?>
                    <?php echo $this->_var['lang']['goods_give_integral']; ?><font class="f4"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font>
                    <?php endif; ?>

                  </p>
                  <?php if ($this->_var['goods']['bonus_money']): ?>
                  <p style="display:none"> <?php echo $this->_var['lang']['goods_bonus']; ?><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
                  </p>
                  <?php endif; ?>
                </div>
              </div>
              


               
              <div class="center_txt clearfix" style="margin:0 0; overflow:hidden; clear:both;">

                <?php if ($this->_var['cfg']['use_integral']): ?>
                <p style="display:none"><strong><?php echo $this->_var['lang']['goods_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></font></p>
                <?php endif; ?>

                <?php if ($this->_var['goods']['is_shipping']): ?>
                <p> <?php echo $this->_var['lang']['goods_free_shipping']; ?> </p>
                <?php endif; ?>
                  

                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
               <dl class="catt" >
                <dt style=""><?php echo $this->_var['spec']['name']; ?></dt>
               <dd>
                    
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>

                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>

                      <a style=" text-decoration:none" <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"><?php echo $this->_var['value']['label']; ?>
                      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a>

                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php else: ?>
                    <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
                    <?php else: ?>
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
                  </dd>
                 </dl>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                
              </div>

                <div class="center_add"><p class="shuliang_tit">数量</p>
                  <div class="center_add_left">

                    <a onclick="buyNumber.minus()" href="javascript:;" class="jian"><img src="themes/tianmao/images/jian.gif" ></a>
                    <input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num">
					<a onclick="buyNumber.plus()" href="javascript:;" class="jia"><img src="themes/tianmao/images/jia.gif" /></a> </div>
                  <span style="float:left; height:28px; line-height:28px;margin-right:10px;">件</span>
                  <p class=""><?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>

                    <?php if ($this->_var['goods']['goods_number'] == 0): ?>
                    <?php echo $this->_var['lang']['goods_number']; ?>
                    <?php echo $this->_var['lang']['stock_up']; ?>
                    <?php else: ?>
                    库存<?php echo $this->_var['goods']['goods_number']; ?><?php echo $this->_var['goods']['measure_unit']; ?>件
                    <?php endif; ?>

                    <?php endif; ?></p>
                </div>
                <script>

                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 100,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },

                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){
                                            return $('#product_num').val(num);
                                        }else{
                                            return parseInt($('#product_num').val());
                                        }

                                    },
                                    plus : function(){
                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                        if(num <= buyNumber.maxNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    },
                                    minus : function(){
                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                        if(num >= buyNumber.minNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    }

                                }
                            </script>

                <div class="center_btn">
                  <div class="center_pop_btn" style="width:167px;height:33px;float:none; margin-right:10px;float:left"><a href="javascript:bool =1;addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" style="
                  width:167px;height:33px;background-repeat: no-repeat;float:none;
background-position: 0 0;background:url(themes/tianmao/images/que_g.png); display:block; margin-bottom:10px;"></a> </div>
                  <div class="center_shop_btn"> <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>)"></a> </div>


                </div>
                <div class="center_pop" id="addtocartdialog" style="display:none;">
               <div class="center_pop_close"><a href="javascript:void(0)"></a></div>
              <div class="center_pop_txt">

              </div>
<div class="center_pop_btn">
    <a href="flow.php"></a>
</div>

                        </div>

              <?php echo $this->fetch('library/goods_m.lbi'); ?>
            </div>

          </form>
        </div>
      </div>

    </div>

    <div class="ald-skuRight">
       <div class="ald-hd "><s></s><span>看了又看</span> </div>
       <?php echo $this->fetch('library/history.lbi'); ?>
        
    </div>

</div>
</div>



<div class="content_detailed">

  <div class="detail_middle ">
  
      <?php echo $this->fetch('library/goods_fittings.lbi'); ?>

    <div class="block clearfix">
      
      <div class="AreaL" style=" width:190px;">
         

          <?php echo $this->fetch('library/recommend_new.lbi'); ?>

        <script type="text/javascript">
//<![CDATA[

  var cycleList = ['ECS_tree1','ECS_tree2'];
  var tabFront = 'tabFront';
  var tabBack = 'tabBack';
  function cycleShow(obj)
  {
    var curObj;
    var curBody;
    for (i=0; i < cycleList.length; i++)
    {
      curObj = document.getElementById(cycleList[i]);
      curBody = document.getElementById(cycleList[i] + '_BODY');
      if (obj.id == curObj.id)
      {
        curObj.className = tabFront;
        curBody.style.display = "";
      }
      else
      {
        curObj.className = tabBack;
        curBody.style.display = "none";
      }
    }
  }

  // 添加事件
  for (i=0; i< cycleList.length; i++)
  {
    document.getElementById(cycleList[i]).onmousemove = function()
    {
      cycleShow(this);
    };
  }

//]]>
</script>

<?php echo $this->fetch('library/bought_goods.lbi'); ?>
<?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>


        

      </div>
      
      
      <div class="AreaR_goods">


        
        <div class="inDetail_boxOut ">
          <DIV class="inDetail_box">
            <div class="fixed_out ">
              <div  id="inner" class="fixed" style="background-color:#fff; border-bottom:2px solid #B10005">
                <ul class="inLeft_btn">

                  <!-- <li ><a id="detail-id" href="#shangp"  class="current">商品属性</a></li> -->
<li ><a id="detail-id" href="#current"  class="current">商品属性</a></li>
                  <!-- <li><a id="coms1-id" href="#coms1">买家评论</a></li> -->
                  <li><a id="coms1-id" href="#current">买家评论</a></li>
                  <!-- <li class="advantage"><a id="good-id" href="#bought_note">成交记录</a></li> -->
                  <li class="advantage"><a id="good-id" href="#current">成交记录</a></li>
                </ul>
              </div>
            </div>
            <script type="text/javascript">
var obj11 = document.getElementById("inner");
var top11 = getTop(obj11);
var isIE6 = /msie 6/i.test(navigator.userAgent);
window.onscroll = function(){
var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
if (bodyScrollTop > top11){
obj11.style.position = (isIE6) ? "absolute" : "fixed";
obj11.style.top = (isIE6) ? bodyScrollTop + "px" : "0px";
} else {
obj11.style.position = "static";
}
}
function getTop(e){
var offset = e.offsetTop;
if(e.offsetParent != null) offset += getTop(e.offsetParent);
return offset;
}
</script>

            <div  id="no_try_record">


              <div class="inLeft_attributes clearfix" style="margin:0;">

                <div class="inLeft_attributes_1">
                    
              <div class="inLeft_title property_title" style="margin-top:55px;" >
              <div class="t" id="shangp">基本参数：</div>
              </div>
                  <ul class="inLeft_attributes">
                      <li>商品名称:  <span  class="fit_people ">&nbsp;&nbsp;<?php echo $this->_var['goods']['goods_style_name']; ?></span></li>
                      <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                      <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                      <li>
                       <?php echo htmlspecialchars($this->_var['property']['name']); ?>：
                        <span  class="fit_people "><?php echo $this->_var['property']['value']; ?></span>
                      </li>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                  </ul>
                </div>
                  <div style="margin-top:20px"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
              </div>

              
                    

                    
                             <div class="inLeft_comment" id="coms1">

                              
                            <div id="i-comment"  style="margin-top:20px;">
                <div class="rate"> <strong><?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</strong> <br> 好评度 </div>
                <div class="percent">
                  <dl>
                    <dt>好评</dt>
                    <dd class="d1">
                      <div style="width: <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%;"> </div>
                    </dd>
                    <dd class="d2"> <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</dd>
                  </dl>
                  <dl>
                    <dt>中评</dt>
                    <dd class="d1">
                      <div style="width: <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%;"> </div>
                    </dd>
                    <dd class="d2"> <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%</dd>
                  </dl>
                  <dl>
                    <dt>差评</dt>
                    <dd class="d1">
                      <div style="width: <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%;"> </div>
                    </dd>
                    <dd class="d2"> <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%</dd>
                  </dl>
                </div>
                <div class="actor">
                 <a href="<?php echo $this->_var['goods']['url']; ?>"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="" style="width:100px;height:100px;"></a>
                </div>
                <div class="btns">
                  <div>购买过<?php echo $this->_var['goods']['goods_name']; ?>的顾客，在收到商品才可以对该商品发表评论</div>
                  <a href="javascript:void(0);" class="btn-comment" id="showcommentform">我要评价</a>
                </div>
                <div class="clear"></div>
              </div>
               



              <div class=" " >

                <?php echo $this->fetch('library/comments.lbi'); ?>
                </div>



                </div>
                 
                 <div id="bought_note">
                 <?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
                      </div>



            </DIV>
          </div>
        </div>
        <div class="blank"></div>
        
        
 </div>
      
    </div>
  </div>
</div>


<div class="blank5"></div>
   <?php echo $this->fetch('library/page_footer2.lbi'); ?>




</body>
<script type="text/javascript">

var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}



</script>
</html>
