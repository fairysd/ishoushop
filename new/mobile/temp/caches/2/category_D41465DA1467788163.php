<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:57:"/home/wwwroot/shop/new/mobile/themes/default/category.dwt";i:1;s:68:"/home/wwwroot/shop/new/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1467791763;s:8:"maketime";i:1467788163;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>玉石文玩_爱收宝</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div style="right: 0px; left: 0px; display: block;" id="page">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.go(-1);"> 返回 </a> </div>
    <div id="search_box2" >
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
          <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  <div class="filter" style="position:static; top:0px; width:100%;">
    <form method="GET" class="sort" name="listform">
      <ul class="filter-inner">
        <li class="filter-cur"> <a href="category.php?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC#goods_list">综合 </a> </li>
        <li class=""> <a href="category.php?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=click_count&order=#goods_list">人气 <i class="f-ico-arrow-d"></i> </a> </li>
        <li class=""> <a href="category.php?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_count&order=DESC#goods_list">销量</a></li>
        <li class=""> <a href="category.php?category=16&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb "></i> </span> </a> </li>
        <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
      </ul>
      <input type="hidden" name="category" value="16" />
      <input type="hidden" name="display" value="grid" id="display" />
      <input type="hidden" name="brand" value="0" />
      <input type="hidden" name="price_min" value="0" />
      <input type="hidden" name="price_max" value="0" />
      <input type="hidden" name="filter_attr" value="0" />
      <input type="hidden" name="page" value="1" />
      <input type="hidden" name="sort" value="goods_id" />
      <input type="hidden" name="order" value="DESC" />
    </form>
  </div>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;">
      <div class="product flex_in single_item">
        <div class="pro-inner"></div>
      </div>
      <a href="javascript:;" class="get_more"></a> </div>
  </form>
  <div class="mr-t20">
  <div class="footer1">
    <div class="in">
      <div class="footSearch">
        <form id="searchFormfoot" name="searchForm" method="get" action="search.php">
          <input name="keywords" type="text" id="keywordfoot">
          <button type="submit" id="submitfoot"></button>
        </form>
      </div>
      <a href="index.php" class="homeBtn"><span></span></a> <a href="javascript:scroll(0,0)" class="gotop"> <span></span>
      <p>回顶部</p>
      </a> </div>
    <!--<p class="mf_o4">&copy; 2005-2016 爱收宝 版权所有，并保留所有权利。</p>-->
  </div>
</div>
<link href="themes/default/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav global-nav--current">
  <div class="global-nav__nav-wrap">
    <div class="global-nav__nav-item"> <a href="./" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i> <span class="global-nav__nav-tit">首页</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="catalog.php" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i> <span class="global-nav__nav-tit">分类</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="javascript:get_search_box();" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i> <span class="global-nav__nav-tit">搜索</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="flow.php?step=cart" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i> <span class="global-nav__nav-tit">购物车</span> <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_new|a:1:{s:4:"name";s:13:"cart_info_new";}554fcae493e564ee0dc75bdf2ebf94ca</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="user.php" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i> <span class="global-nav__nav-tit">会员中心</span> </a> </div>
  </div>
  <div class="global-nav__operate-wrap"> <span class="global-nav__yhd-logo"></span> <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_new|a:1:{s:4:"name";s:13:"cart_info_new";}554fcae493e564ee0dc75bdf2ebf94ca</span> </div>
</div>
<script type="text/javascript" src="themes/default/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
$(function() {
	$("#submitfoot").click(function() {
	if($("#keywordfoot").val()){
		$("#searchFormfoot").submit();
	} else {
		alert("请输入关键词！");
		return false;
	}
	})
});
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){          
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {           
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>
<script type="text/javascript">(function(){var s,n=document.createElement("script"),d="http://kefu.qycn.com/vclient/state.php?webid=113372";"https:"==document.location.protocol&&(d=d.replace("http:","https:")),n.src=d,s=document.getElementsByTagName("script")[0],s.parentNode.insertBefore(n,s);})();</script>
</div>
<div style="right:-275px;" class="nav" id="nav">
  <form class="hold-height" action="category.php">
    <div class="attrExtra">
      <input type="hidden" name="category" value="16"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%">
    	      <div class="attr brandAttr">
        <div class="attrKey">品牌</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
                                      <li class="av-selected"> <a href="javascript:void(0);" data="0">全部</a></li>
                                                    <li> <a href="javascript:void(0);" data="171">和田玉</a></li>
                                      <input type="hidden" name="brand" value="0" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
          	            <div class="attr brandAttr">
        <div class="attrKey">商品材质</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
                                  <li class="av-selected filter_attr"> <a href="javascript:void(0);" data="0">全部</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="385">和田玉</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="896">翡翠</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="921">黄龙玉</a></li>
                                </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
            <div class="attr brandAttr">
        <div class="attrKey">商品款式</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
                                  <li class="av-selected filter_attr"> <a href="javascript:void(0);" data="0">全部</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1467">手链</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="895">手镯</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1458">把件</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="431">挂件</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="920">牌子</a></li>
                                </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
            <div class="attr brandAttr">
        <div class="attrKey">商品品种</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
                                  <li class="av-selected filter_attr"> <a href="javascript:void(0);" data="0">全部</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="897"> 冰糯种</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="922">其它</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="904">冰种</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1478">墨翠</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1474">玻璃种</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="426">白玉</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1461">白玉籽料</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1451">碧玉</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1465">碧玉波菜绿</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="399">羊脂玉</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="421">羊脂白玉</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="1456">飘花冰种</a></li>
                                              <li class="filter_attr"> <a href="javascript:void(0);" data="391">黄玉</a></li>
                                </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
            <input type="hidden" name="filter_attr" value="0"/>
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/default/js/supertouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=16&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>