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
<!-- <div class="j_LazyloadCon fp-lazyload-con" style="border-top:#ccc solid 1px; margin-top:20px">
  <div id="footer">


     <div id="mall-desc" style="padding-left:100px"> -->
         <?php if ($this->_var['helps']): ?>
         <!-- <div class=""> -->

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
    <!-- <dd><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></dd> -->
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <!-- </dl> -->
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

         <!-- </div> -->
          <?php endif; ?>

          <!-- <div class="tmall-intro" style="border-top:none;background:none">
             <p class="tmall-info"> -->
                  <?php if ($this->_var['navigator_list']['bottom']): ?>
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
      <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
            <!--  </p>



          </div>




     </div>


  </div>

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
                <div><a href = "">爱收宝网</a> <a href = "">爱收宝金融</a> <a href = "">爱收宝奢侈品养护</a> <a href = "">爱收宝招商</a>
                    <a href = "">爱收宝商学院</a> <a href = "">奢侈品热词</a></div>
                <div>统一社会信用代码91320506MA1M96GQ9G ICP备案苏ICP备15052824号-1</div>
                <div>友情链接：<a href = "">黄金回收</a> <a href = "">钻石回收</a> <a href = "">名包回收</a> <a href = "">名表回收</a> <a
                        href = "">奢侈品回收</a> <a href = "">购物卡回收</a></div>
                <div>Copyright ©2015 苏州爱收宝网络科技有限公司 版权所有</div>
                <div><img src = "themes/tianmao/images/down1.jpg"><img src = "themes/tianmao/images/down2.jpg"><img src = "themes/tianmao/images/down3.jpg"><img
                        src = "themes/tianmao/images/down4.jpg"></div>
            </div>
            <div><img src = "themes/tianmao/images/down_l2.png"></div>
        </div>
    </div>
</footer>








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

})
</script>
<script src="http://kefu.qycn.com/vclient/state.php?webid=113372" language="javascript" type="text/javascript"></script>
<script language="javascript">var qykf_userinfo_url='http://shop.aishoubao.com/userheader.php?kf=1'</script><script>(function(){var c=document.createElement("script"),s=document.getElementsByTagName("script")[0];c.src="//kefu.qycn.com/vclient/state.php?webid=113372";s.parentNode.insertBefore(c,s);})();</script>



