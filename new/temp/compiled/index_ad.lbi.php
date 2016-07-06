
<div id="slideBox" class="slideBox">
  <div class="hd ">
    <ul>
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
    </ul>
  </div>
  <div class="bd">
    <ul>
      <li class="li_1" >
        <div class="banner_main_con"> <a href="http://shop.aishoubao.com/category.php?id=150 " target="_blank" class="main_banner_a"></a>
          <div class="mall_banner_ad">
		   <a href="http://shop.aishoubao.com/goods.php?id=253  " target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a1.jpg"></a>
           <b class="banner-separator"></b>
		   <a href="http://shop.aishoubao.com/goods.php?id=233" target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a2.jpg"> </a>

		  </div>
        </div>
      </li>
     <li class="li_2">
	  <div class="banner_main_con"> <a href="http://shop.aishoubao.com/category.php?id=148 " target="_blank" class="main_banner_a"></a>
          <div class="mall_banner_ad">
		   <a href="http://shop.aishoubao.com/category.php?id=376 " target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a3.jpg"><s></s> <i></i> </a>
           <b class="banner-separator"></b>
		   <a href="http://shop.aishoubao.com/category.php?id=377" target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a4.jpg"><s></s> <i></i> </a>
		  </div>
        </div>
		</li>
      <li class="li_3" >
	 <div class="banner_main_con"> <a href="http://shop.aishoubao.com/category.php?id=350" target="_blank" class="main_banner_a"></a>
          <div class="mall_banner_ad">
		   <a href="http://shop.aishoubao.com/goods.php?id=181 " target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a5.jpg"><s></s> <i></i> </a>
           <b class="banner-separator"></b>
		   <a href="http://shop.aishoubao.com/goods.php?id=257" target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a6.jpg"> <s></s><i></i> </a>
		  </div>
        </div>
	  </li>

      <li class="li_4" >
	 <div class="banner_main_con"> <a href="http://shop.aishoubao.com/category.php?id=292" target="_blank" class="main_banner_a"></a>
          <div class="mall_banner_ad">
		   <a href="http://shop.aishoubao.com/goods.php?id=185 " target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a7.jpg"><s></s> <i></i> </a>
           <b class="banner-separator"></b>
		   <a href="http://shop.aishoubao.com/goods.php?id=222" target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a8.jpg"> <s></s><i></i> </a>
		  </div>
        </div>
	  </li>

      <li class="li_5" >
	     <div class="banner_main_con"> <a href="http://shop.aishoubao.com/category.php?id=352" target="_blank" class="main_banner_a"></a>
          <div class="mall_banner_ad">
		   <a href="http://shop.aishoubao.com/goods.php?id=259 " target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a9.jpg"><s></s> <i></i> </a>
           <b class="banner-separator"></b>
		   <a href="http://shop.aishoubao.com/goods.php?id=256" target="_blank" class="mall_ban"> <img width="190" height="240" src="themes/tianmao/images/a10.jpg"> <s></s><i></i> </a>
		  </div>
        </div>
	  </li>
    </ul>
  </div>
</div>
<script type="text/javascript">
		$(function(){
			jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,delayTime:700});

			$(".mall_banner_ad").find("a").each(function(){
				$(this).hover(function(){
					$(this).stop().animate({left:-5},"200");
				},function(){
					$(this).stop().animate({left:0},"200");
				});
			});
		});



</script>
