<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">

function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div id="site-nav">
  <div id="sn-bd">
    <div class="sn-container">
       <div style="width:430px; float:left">
      <p id="login-info" class="sn-login-info">


      <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
        <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,ecmoban_common.js')); ?>
        <p class="sn-back-home"><span class="mui-iconfont"></span><a href="index.php">返回商城首页</a></p>
        <font id="ECS_MEMBERZONE" style="float:left;height: 26px;
line-height: 26px;"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font> </p></div>
      <ul class="sn-quick-menu">

        <li class="sn-cart mini-cart menu"><i class="mui-iconfont"></i> <a class="sn-cart-link" href="flow.php" id="mc-menu-hd" ><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a> </li>
        <li class="sn-separator"></li>
        <li class="sn-mobile" > <a   class="sn-mobile-link" href="http://shop.aishoubao.com/user.php?act=order_list" >我的订单</a>
          <div class="sn-qrcode">
            <div class="sn-qrcode-content"></div>
            <b></b></div>
        </li>
        <li class="sn-separator"></li>
        <li class="sn-sitemap menu-item" style="width:72px;" >
          <div class="sn-menu J_DirectPromo" > <a class="menu-hd" href="http://kefu.qycn.com/vclient/chat/?websiteid=113372&visitorid=697966020&newver=1&opctwdTime=1459920871&m=pc&originPageTitle=%E7%88%B1%E6%94%B6%E5%AE%9D&originPageUrl=http%3A%2F%2Fwww.aishoubao.com%2F&originPageReferrer=http%3A%2F%2Fwww.aishoubao.com%2F&sessionid=visitor-1457320241&winmode=0" >在线客服</a>
        </li>
      </ul>
      <div class="sn-mcate-bd j_MallCateHoverTrigger " style="top: 27px;">
        <div class="sn-mcate-ctn-con" id="J_MallCateCtnCon" data-spm="a2226n2">
          <ul class="sn-mcate-ctn" id="J_MallCateCtn">

            <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
            <li class="cat_<?php echo $this->_foreach['foo']['iteration']; ?>">
              <h4 class="sn-mcate-item-hd"><span><?php echo htmlspecialchars($this->_var['cat']['name']); ?></span></h4>
              <p class="sn-mcate-item-bd">
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                <a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </p>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="header" >
  <div></div>
  <div class="headerLayout">
    <div class="headerCon ">
      <h1 id="mallLogo" class="mall-logo"> <a class="fp-logo" href="index.php"><img src="themes/tianmao/images/logo.gif" style="margin-top:20px;"/></a> </h1>
      <div class="header-extra">

        <div id="mallSearch" class="mall-search">

          <form class="mallSearch-form" id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >


              <div class="mallSearch-input clearfix">
                   <div class="s-combobox-input-wrap">
                    <input type="text" name="keywords" id="mq" tabindex="9"  class="s-combobox-input"  value="搜索  商品/品牌" onclick="javascript:if(this.value=='搜索  商品/品牌')this.value=''">
                  </div>

                <input name="imageField" type="submit" value="搜索" class="sub_ss" />

                <input type="hidden" name="user_action" value="initiative">
                <input type="hidden" name="at_topsearch" value="1">
                <input type="hidden" name="sort" value="st">
                <input id="J_Type" type="hidden" name="type" value="p">
                <input id="J_Cat" type="hidden" name="cat" value="all">
                <input type="hidden" name="vmarket" value="">
              </div>

          </form>
          <ul class="hot-query">
            <script type="text/javascript">
                        
                        <!--
                        function checkSearchForm()
                        {
                            if(document.getElementById('keyword').value)
                            {
                                return true;
                            }
                            else
                            {
                                alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                                return false;
                            }
                        }
                        -->
                        
                        </script>
            <?php if ($this->_var['searchkeywords']): ?>
            <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
            <li class="hot-query-highlight"><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="Floatright_nav">
  <div class="Floatright_box">

     <ul class="mui-tab">

        <li class="mui-mbar-tab-cart"><a href="flow.php"><i class="i_sbar_cat"></i><p class="sbar_cart_text">购物袋</p><i class="i_sbar_nub" id="ECS_CARTINFO3"><?php 
$k = array (
  'name' => 'cart_info_num',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></i></a></li>
        <a href="http://shop.aishoubao.com/user.php?act=account_log"><li class="mui-mbar-tab-logo-asset"><div class="left_conts">我的资产<span class="mui-mbar-arr">◆</span></div> </li></a>
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


