
<div class="searchRight_title">
  <div class="rightTitle_left"> 
    <form method="GET" class="sort" name="listform">
      <div class="f_l"> 
      
       <a style="border-right:#ccc solid 1px; height:22px; float:left; width:44px;"  href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img style="margin-left:0px" src="themes/tianmao/images/goods_id_<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['goods_id']; ?>"></a> 
        <a  style="border-right:#ccc solid 1px; height:22px; float:left; width:44px;"  href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/tianmao/images/last_update_<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['last_update']; ?>"></a> 
       <a  style="border-right:#ccc solid 1px; height:22px; float:left; width:44px;"  href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img style="margin-left:0px"  src="themes/tianmao/images/sales_<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="按销量排序"></a>

         <a  style="border-right:#ccc solid 1px; height:22px; float:left; width:44px;"  href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><img src="themes/tianmao/images/shop_price_<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['shop_price']; ?>"></a> 
        
         </div>   
         
         
         
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
    </form>
  </div>
  <div class="search_list">
     
      <a href="javascript:;" style=" height:22px; float:left; border-right:#ccc solid 1px" onClick="javascript:display_mode('grid')"><img src="themes/tianmao/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
      
      <a href="javascript:;"" onClick="javascript:display_mode('list')"><img src="themes/tianmao/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a> 
  
  </div>
  <div class="rightTitle_right">
    
    <dl>
      <dt class="rightTitle_prev" style="margin-right:4px;"> 
        <?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="activity_prev"><</a><?php else: ?><a href="javascript:void(0);" class="activity_prev2"><</a><?php endif; ?> 
      </dt>
      <dt class="rightTitle_next"> 
        <?php if ($this->_var['pager']['page_next']): ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="activity_next">></a><?php else: ?><a href="javascript:void(0);" class="activity_next2">></a><?php endif; ?> 
      </dt>
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
    </dl>
    <div class="yeshu"> 
      <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?> 
      <span><?php echo $this->_var['key']; ?></span> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>/<?php echo $this->_var['pager']['page_count']; ?> </div>
  </div>
</div>
<?php if ($this->_var['category'] > 0): ?>
<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
  <?php endif; ?> 
  <?php if ($this->_var['pager']['display'] == 'list'): ?>
  <div class="goodsList"> 
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?> 
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li> <br>
      <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="f6">比较</a> </li>
    <li class="thumb"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
    <li class="goodsName"> <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6"> 
      <?php if ($this->_var['goods']['goods_style_name']): ?> 
      <?php echo $this->_var['goods']['goods_style_name']; ?><br />
      <?php else: ?> 
      <?php echo $this->_var['goods']['goods_name']; ?><br />
      <?php endif; ?> 
      </a> 
      <?php if ($this->_var['goods']['goods_brief']): ?> 
      <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
      <?php endif; ?> 
    </li>
    <li> 
      <?php if ($this->_var['show_marketprice']): ?> 
      <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font><br />
      <?php endif; ?> 
      <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
      <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
      <?php else: ?> 
      <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods']['shop_price']; ?></font><br />
      <?php endif; ?> 
    </li>
    <li class="action"> <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="abg f6"><?php echo $this->_var['lang']['favourable_goods']; ?></a> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/tianmao/images/bnt_buy_1.gif"></a> </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
  <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
  <div class=" searchRight_body">
    <ul class="y_searchList clearfix" >
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?> 
      <?php if ($this->_var['goods']['goods_id']): ?> 
      <li  class="li <?php if ($this->_foreach['goods_list']['iteration'] % 5 == 0): ?>Last<?php endif; ?>">
      <div class="item clearfix">
        <Div class="p_img"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"  width="210" height="210" class="item_hd_<?php echo $this->_var['goods']['goods_id']; ?>"/></a> </Div>
        
        
      
    <?php if ($this->_var['goods']['goods_id']): ?>
    
     <div class="goodsItem"  style="margin-bottom:10px" id="goods_item<?php echo $this->_foreach['goods_list']['iteration']; ?>">
            <a href="###" class="proThumb-prev ui-slide-arrow-s"></a>
            
           <?php if ($this->_var['goods']['pictures']): ?>
           <div class="hds">
            <ul>
            <?php $_from = $this->_var['goods']['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['picture'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['picture']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['picture']['iteration']++;
?>
           
             <li<?php if (($this->_foreach['picture']['iteration'] - 1) == 0): ?> class="on"<?php endif; ?> data="hd_<?php echo $this->_var['goods']['goods_id']; ?>"><a href="javascript:void(0);"><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="42" border="0" title="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
           
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
		   </div>
			<script type="text/javascript">
            $(function(){
               var hd_tab = $('.hds ul li');
               hd_tab.hover(function(){
				   var hd_tab = $(this).attr('data');				   
				   var hd_img = $('.item_' + hd_tab);
				   var hd_goodsimg = $(this).find('img').attr('src');				   
                   hd_img.attr('src', hd_goodsimg);
				   $(this).addClass('on').siblings('li').removeClass('on');
               })
            })
            </script>
           <?php endif; ?>
             <a href="###" class="proThumb-next ui-slide-arrow-s"></a>
           <div>
       
            </div>
        </div>
        
    <?php endif; ?>


          <p class="y_price">     
          <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
          <em><?php echo $this->_var['goods']['promote_price']; ?></em> 
          <?php else: ?> 
          <em><?php echo $this->_var['goods']['shop_price']; ?></em> 
          <?php endif; ?> 
          <?php if ($this->_var['show_marketprice']): ?> 
          <font class="market_s"><?php echo $this->_var['goods']['market_price']; ?></font> 
          <?php endif; ?> 
        </p>
        <p class="y_proName"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></p>
         <p class="productStatus">
            <span>成交 <em><?php echo $this->_var['goods']['sales_volume']; ?>笔</em></span>
            <span style="border-right:0px;">评价 <a href="#"><?php echo $this->_var['goods']['comments_number']; ?></a></span>
         </p>       
      </div>
      </li>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
  <div class="goodsList"> 
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?> 
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li style="margin-right:15px;"> <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')" class="f6"><?php echo $this->_var['lang']['compare']; ?></a> </li>
    <li class="goodsName"> <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6 f5"> 
      <?php if ($this->_var['goods']['goods_style_name']): ?> 
      <?php echo $this->_var['goods']['goods_style_name']; ?><br />
      <?php else: ?> 
      <?php echo $this->_var['goods']['goods_name']; ?><br />
      <?php endif; ?> 
      </a> 
      <?php if ($this->_var['goods']['goods_brief']): ?> 
      <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
      <?php endif; ?> 
    </li>
    <li> 
      <?php if ($this->_var['show_marketprice']): ?> 
      <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font><br />
      <?php endif; ?> 
      <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
      <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
      <?php else: ?> 
      <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods']['shop_price']; ?></font><br />
      <?php endif; ?> 
    </li>
    <li class="action"> <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="abg f6"><?php echo $this->_var['lang']['favourable_goods']; ?></a> <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/tianmao/images/bnt_buy_1.gif"></a> </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
  <?php endif; ?> 
  <?php if ($this->_var['category'] > 0): ?>
</form>
<?php endif; ?>

<div class="blank5"></div>

<script>
	$(function(){
		function Scroll2(id,l,r,auto){
			this.id=$("#"+id);
			this.ul=this.id.find("ul");
			this.li=this.ul.find("li");
			this.l=this.id.find("."+l);
			this.r=this.id.find("."+r);
			this.auto=auto;
			this.done=true;
			var _this=this;
			this.init.apply(this,arguments);
			
		}
	
		Scroll2.prototype={
			init:function(){
				this.ul.css("width",this.li.outerWidth()*this.li.length);
				this.event();
			},
			event:function(){
				var me=this;
				this.l.click(function(){
					if(!me.done || me.li.length<5) return;
					me.done=!me.done;
					me.ul.animate({left:-me.li.outerWidth()},"fast",function(){
						
						me.ul=me.id.find("ul");
						me.li=me.id.find("li");
						me.ul.append(me.li.eq(0));
						me.ul.css("left",0);
						me.done=!me.done;
					});
					
				});
				this.r.click(function(){
						if(!me.done || me.li.length<5) return;
						me.done=!me.done;
						me.ul=me.id.find("ul");
						me.li=me.id.find("li");
						me.li.eq(me.li.length-1).insertBefore(me.li.eq(0));
						me.ul.css("left",-me.li.outerWidth()).animate({left:0},"fast",function(){
							me.done=!me.done;
						});
					});
			}
		}
		$("li.li").each(function(i){
			new Scroll2("goods_item"+(i+1),"proThumb-next","proThumb-prev",false);
		});
		

	});
</script>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>