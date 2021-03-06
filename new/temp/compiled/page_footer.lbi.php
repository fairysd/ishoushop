<style>
  /* footer */
.footer_nav {
    display: flex;
    font-size: 12px;
    padding-bottom: 30px;
    width:1200px;
    margin:auto;
    }
.footer_nav a {color: #717171;text-decoration:none;}
.footer_nav > ul {
    padding-right: 70px;
    line-height: 28px;
    }
.footer_nav  ul li{list-style:none;}
.footer_nav > ul:first-child {padding-left: 15px;}
.footer_nav > ul li:first-child {font-weight: bold;}
.nav_r {padding-left: 30px;}
.nav_r span {display: block;}
.nav_r span i {font-style: normal;}
.nav_r span:nth-child(2) {
    font-size: 20px;
    line-height: 53px;
    color:#b50202;
    }
.nav_r span:last-child {
    font-family: '黑体', 'SimHei', Arial, Helvetica, sans-serif;
    }
.footer_fix {
    min-width: 1201px;
    background-color: #000;
    height: 40px;
    font-size: 12px;
    color: #fff;
    line-height: 40px;
    }
.footer_fix ul {
    display: flex;
    margin-left: 120px;
    margin-top: 0;
    }
.footer_fix li {
    position: relative;
    padding-left: 141px;
    list-style:none;
    }
.footer_fix li:before {
    content: '';
    display: block;
    position: absolute;
    left: 104px;
    top: 4px;
    width: 35px;
    height: 35px;
    background: url("themes/tianmao/images/icon.png") no-repeat 0 0;
    }
.footer_fix li:nth-child(2):before {
    background-position-y: -44px;
    }
.footer_fix li:nth-child(3):before {
    background-position-y: -91px;
    }
.footer_fix li:nth-child(4):before {
    background-position-y: -137px;
    }
.footer_fix li:nth-child(5):before {
    background-position-y: -183px;
    }
.footer_bottom {
    min-width: 1201px;
    background-color: #f1f1f1;
    font-size: 12px;
    color: #717171;
    line-height: 32px;
    }
.footer_bottom a {
    color: #717171;
    }
.footer_bottom .out_box {
    display: flex;
    padding-top: 20px;
    padding-bottom: 30px;
    width:1200px;
    margin:auto;
    }
.footer_bottom .out_box > div:first-child {
    padding-left: 13px;
    width: 755px;
    }
.footer_bottom .out_box > div div:first-child a {padding-right: 28px;text-decoration:none;}
.footer_bottom .out_box > div div:nth-child(3) a {padding-right: 15px; text-decoration:none;}
.footer_bottom .out_box > div div img {margin: 10px 20px 0 0;}
.nav_r_1{margin-top: 16px;}
.red{color:red;}
</style>
<div class="j_LazyloadCon fp-lazyload-con">
  <div id="footer">
    <div class="tmall-ensure"><a href="http://www.aishoubao.com/help/zpbz"> <a href="http://www.aishoubao.com/help/wlth"></a> <a href="http://www.aishoubao.com/luxury"></a> <a href="http://www.aishoubao.com/help/gmzd"></a> </div>
    <div class="footer-info" >
      <?php if ($this->_var['helps']): ?>
      <!-- <div class="tmall-desc"> -->

        <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
        <!-- <dl>
          <dt  class="foot_help foot_help_<?php echo $this->_foreach['no']['iteration']; ?> "><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt> -->
          <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
         <!--  <dd><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></dd> -->
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <!-- </dl> -->
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <!-- <dl class="tmall-mobile">
          <dt>手机天猫</dt>
          <dd><a href="#" class="join"><img src="themes/tianmao/images/foot_weixin.jpg" width="116" height="116" alt="手机天猫"></a> </dd>
        </dl>
      </div> -->
      <footer class = "Global_footer">
    <div class = "out_box footer_nav">
        <ul>
            <li>关于我们</li>
            <li><a href = "http://www.aishoubao.com/help/gsjj">公司简介</a></li>
            <li><a href = "http://www.aishoubao.com/help/fzlc">发展历程</a></li>
            <li><a href = "http://www.aishoubao.com/help/zsjm">招商加盟</a></li>
            <li><a href = "http://www.aishoubao.com/help/lxwm">联系我们</a></li>
        </ul>
        <ul>
            <li>新手指南</li>
            <li><a href = "http://www.aishoubao.com/help/zczh">注册新用户</a></li>
            <li><a href = "http://www.aishoubao.com/help/hszn">回收指南</a></li>
            <li><a href = "http://www.aishoubao.com/help/gmzd">购买指导</a></li>
        </ul>
        <ul>
            <li>配送服务</li>
            <li><a href = "http://www.aishoubao.com/help/shzn">收货指南</a></li>
            <li><a href = "http://www.aishoubao.com/help/ddzt">到店自提</a></li>
            <li><a href = "http://www.aishoubao.com/help/pswl">配送物流</a></li>
            <li><a href = "http://www.aishoubao.com/help/wlcx">物流查询</a></li>
        </ul>
        <ul>
            <li>售后服务</li>
            <li><a href = "http://www.aishoubao.com/help/wlth">七天无理由退换</a></li>
            <li><a href = "http://www.aishoubao.com/help/sqtk">如何申请退款</a></li>
            <li><a href = "http://www.aishoubao.com/help/bjsm">维修补件说明</a></li>
        </ul>
        <ul>
            <li>购物保障</li>
            <li><a href = "http://www.aishoubao.com/help/zpbz">正品保障</a></li>
            <li><a href = "http://www.aishoubao.com/help/zcxy">注册协议</a></li>
            <li><a href = "http://www.aishoubao.com/help/bzys">保护隐私</a></li>
            <li><a href = "http://www.aishoubao.com/help/mzsm">免责声明</a></li>
        </ul>
        <div class = "nav_r" style="margin-left: 150px;">
            <span class = "nav_r_1">全国服务热线</span>
            <span class = "red1">400-086-1131</span>
            <span>在全国范围内已有体验店近<i class = "red">百家</i></span>
        </div>
    </div>
    <div class = "footer_fix">
        <ul class = "out_box">
            <li>回收价格公道</li>
            <li>100%正品保证</li>
            <li>权威宝贝鉴定</li>
            <li>服务贴心周到</li>
            <li>售后全国联保</li>
        </ul>
    </div>
    <div class = "footer_bottom">
        <div class = "out_box">
            <div>
                <div><a href = "http://www.aishoubao.com/?cityId=856">爱收宝网</a> <a href = "http://www.aishoubao.com/?cityId=856">爱收宝金融</a> <a href = "http://www.aishoubao.com/luxury">爱收宝奢侈品养护</a> <a href = "http://www.aishoubao.com/help/zsjm">爱收宝招商</a>
                    <a href = "http://www.aishoubao.com/?cityId=856">爱收宝商学院</a> <a href = "http://www.aishoubao.com/luxury/hotkey/A">奢侈品热词</a></div>
                <div>统一社会信用代码91320506MA1M96GQ9G ICP备案苏ICP备15052824号-1</div>
                <div>友情链接：<a href = "http://www.aishoubao.com/product/8fa078e445184f1f9041ea1be763a5e8?ptype=gjs&goldType=gold">黄金回收</a> <a href = "http://www.aishoubao.com/product/diamond">钻石回收</a> <a href = "http://www.aishoubao.com/category/08d2d4cbf3974d8i8d56b26ba29266aa/0">名包回收</a> <a href = "http://www.aishoubao.com/category/08d2d4cbff6j48f08d56b26ba29266aa/0">名表回收</a> <a
                        href = "http://www.aishoubao.com/">奢侈品回收</a> <a href = "http://www.aishoubao.com/">购物卡回收</a></div>
                <div>Copyright ©2015 苏州爱收宝网络科技有限公司 版权所有</div>
                <div><img src = "themes/tianmao/images/down1.jpg"><img src = "themes/tianmao/images/down2.jpg"><img src = "themes/tianmao/images/down3.jpg"><img
                        src = "themes/tianmao/images/down4.jpg"></div>
            </div>
            <div><img src = "themes/tianmao/images/down_l2.png"></div>
        </div>
    </div>
</footer>


    </div>

  </div>
</div>





  <?php endif; ?>
  <div></div>

<div class="blank"></div>

<div id="footer" style="height:1px; width:1px; overflow:hidden; background:none;">
  <div class="text"> <?php echo $this->_var['copyright']; ?><br />
    <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?>
    <?php if ($this->_var['service_phone']): ?>
    Tel: <?php echo $this->_var['service_phone']; ?>
    <?php endif; ?>
    <?php if ($this->_var['service_email']): ?>
    E-mail: <?php echo $this->_var['service_email']; ?><br />
    <?php endif; ?>
    <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <?php if ($this->_var['im']): ?>
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <?php if ($this->_var['im']): ?>
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <?php if ($this->_var['im']): ?>
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/tianmao/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <?php if ($this->_var['im']): ?>
    <img src="themes/tianmao/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <?php if ($this->_var['im']): ?>
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
    <?php if ($this->_var['icp_number']): ?>
    <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
    <?php endif; ?>
    <?php 
$k = array (
  'name' => 'query_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><br />
    <?php if ($this->_var['stats_code']): ?>
    <div align="left"><?php echo $this->_var['stats_code']; ?></div>
    <?php endif; ?>
    <div align="left"  id="rss"><a href="<?php echo $this->_var['feed_url']; ?>"><img src="themes/tianmao/images/xml_rss2.gif" alt="rss" /></a></div>
  </div>
</div>
<div id="topcontrol" class="mui-lift"  style=" display:none; overflow: visible; width: 35px; height: 430px; margin-left: -632px; z-index: 999998;">
  <div class="sn-nav-wrapper" style="position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; margin: auto; display: block; width: 35px; height: 437px; -webkit-transform: scale(1); opacity: 1; -webkit-transition: all 0.3s ease; ">
      <a href="javascript:void(0)" id="J_FloorNvzNav" class="mui-lift-nav mui-lift-two-line"> <b class="mui-lift-nav-num">黄金<br>白银</b> <em class="mui-lift-nav-name">黄金<br>珠宝</em> <s class="mui-lift-nav-line"></s> </a>
  <a href="javascript:void(0)" id="J_FloorHwNav" class="mui-lift-nav mui-lift-two-line">
      <b class="mui-lift-nav-num">名包<br>名表</b> <em class="mui-lift-nav-name">名包<br>名表</em> <s class="mui-lift-nav-line"></s> </a>

  <a href="javascript:void(0)" id="J_FloorNzNav" class="mui-lift-nav mui-lift-two-line"> <b class="mui-lift-nav-num">手机<br>
    数码</b> <em class="mui-lift-nav-name">手机<br>
    数码</em> <s class="mui-lift-nav-line"></s> </a>

    <a href="javascript:void(0)" id="J_FloorHwNav" class="mui-lift-nav mui-lift-two-line">
      <b class="mui-lift-nav-num">钻石<br>珠宝</b> <em class="mui-lift-nav-name">钻石<br>珠宝</em> <s class="mui-lift-nav-line"></s> </a>

     <a href="javascript:void(0)" id="J_FloorHwNav" class="mui-lift-nav mui-lift-two-line">
      <b class="mui-lift-nav-num">玉石<br>文玩</b> <em class="mui-lift-nav-name">玉石<br>文玩</em> <s class="mui-lift-nav-line"></s> </a>




    <a id="sider_returntop" class="mui-lift-top fp-iconfont" href="javascript:void(0);"  title="回到顶部" style="display: block;"> 㑫</a> </div>
</div>
<script>
$(function(){
	isIe6 = false;

	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}

	var offset = $("#topcontrol").offset();
	var bottom = $("#topcontrol").css("bottom");
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);

			if(isIe6)
			{
				$("#topcontrol").css("position","absolute")
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}

	});

	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});


	(function(){
		$(".mui-lift-nav").click(function(){
			$(".mui-lift-nav").removeClass("active");
			$(this).addClass("active");
			var index=$(".mui-lift-nav").index(this);
			var top=$(".floor-title").eq(index).offset().top-50;
			$("body,html").stop().animate({scrollTop:top});
		});


		var arr=[];
		$(".floor-title").each(function(i){
			arr[i]=$(this).offset().top-100;
		});
		//alert(arr);
		$(window).scroll(function(){

			var top=$(document).scrollTop();
			for(var i=0;i<arr.length;i++){
				if(top>=arr[i] && top<arr[i]+100){
					$(".mui-lift-nav").removeClass("active");
					$(".mui-lift-nav").eq(i).addClass("active");
				}
			}
		});





	})();


})
</script>




<div id="Floatright_nav">
  <div class="Floatright_box">

     <ul class="mui-tab">

        <li class="mui-mbar-tab-cart"><a href="flow.php"><i class="i_sbar_cat"></i><p class="sbar_cart_text">购物袋</p><i class="i_sbar_nub" id="ECS_CARTINFO3"><?php 
$k = array (
  'name' => 'cart_info_num',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></i></a></li>
        <a href="http://shop.aishoubao.com/user.php?act=account_log
"><li class="mui-mbar-tab-logo-asset"><div class="left_conts">我的资产<span class="mui-mbar-arr">◆</span></div> </li></a>
        <a href="brand.php"><li class="tab-logo-brand"><div class="left_conts">我的足迹<span class="mui-mbar-arr">◆</span></div> </li></a>
        <a href="user.php?act=collection_list"><li class="mui-mbar-favor"><div class="left_conts">我的收藏<span class="mui-mbar-arr">◆</span></div> </li></a>


        <li class="tab-logo-top"  id="topcontrol2" style="display:none; overflow: visible;"><a href="javascript:void(0);" id="sider_returntop2" style="display:block"><div class="left_conts">返回顶部<span class="mui-mbar-arr">◆</span></div></a></li>
     </ul>

</div>

</div>


<script type="text/javascript">
	$(function(){

		$(".mui-tab li").hover(function(){
			$(this).addClass("on");
			$(this).find(".left_conts").css("display","block").stop(true,false).animate({"right":35,"opacity":1},200);
		},function(){

			$(this).removeClass("on");
			$(this).find(".left_conts").stop(true,false).animate({"right":70,"opacity":0},200,function(){
				$(this).hide();
			});


		});

		$(".logo-qrcode").hover(function(){
			$(this).children(".mui-mbarp-qrcode-tip").css("visibility","visible");
		},function(){
			$(this).children(".mui-mbarp-qrcode-tip").css("visibility","hidden");
		});

	});
	//
	var h=$(".Floatright_box").height();
	$(".Floatright_box").css({"margin-top":-h/2});
</script>

<script>
$(function(){
	isIe6 = false;

	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}

	var offset = $("#topcontrol2").offset();
	var bottom = $("#topcontrol2").css("bottom");
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol2").fadeIn(800);

			if(isIe6)
			{
				$("#topcontrol2").css("position","absolute")
				$("#topcontrol2").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol2").fadeOut(500);
		}

	});

	$("#topcontrol2,#sider_returntop2").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});

})
</script>
<script src="http://kefu.qycn.com/vclient/state.php?webid=113372" language="javascript" type="text/javascript"></script>
<script language="javascript">var qykf_userinfo_url='http://shop.aishoubao.com/userheader.php?kf=1'</script><script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=113372";s.parentNode.insertBefore(c,s);})();</script>












