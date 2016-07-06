<?php if ($this->_var['new_goods']): ?>


<div class="skin-box-hd">
            <i class="hd-icon"></i>

            <h3><span>新品</span> </h3>
                   
            <!--<div class="skin-box-act">
                <a href="search.php?intro=new" class="more" target="_blank">更多</a>
            </div>-->
</div>
 <div class="news_left">       
<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_82737500_1467785244');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_82737500_1467785244']):
?>

<dl class="item1line1">

  <div class="pic"> <a href="<?php echo $this->_var['goods_0_82737500_1467785244']['url']; ?>"><img src="<?php echo $this->_var['goods_0_82737500_1467785244']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_82737500_1467785244']['name']); ?>" class="goodsimg" /></a></div>
    <div class="text">
      <p class="name"><a href="<?php echo $this->_var['goods_0_82737500_1467785244']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_82737500_1467785244']['name']); ?>"><?php echo $this->_var['goods_0_82737500_1467785244']['short_style_name']; ?></a></p>
      <div class="attribute" >
        <div class="cprice-area">
      <span class="c-price">
        <?php if ($this->_var['goods_0_82737500_1467785244']['promote_price'] != ""): ?> 
        <?php echo $this->_var['goods_0_82737500_1467785244']['promote_price']; ?> 
        <?php else: ?> 
        <?php echo $this->_var['goods_0_82737500_1467785244']['shop_price']; ?> 
        <?php endif; ?> 
        </span>
        
        </div>
         </div>
    </div>
    

</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>
<?php endif; ?> 
