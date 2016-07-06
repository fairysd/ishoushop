

<?php if ($this->_var['hot_goods']): ?>

<div class="category">
  <p class="cate_title">掌柜热卖</p> 
  <dl class="hot_list01">
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_01611200_1467785547');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_01611200_1467785547']):
        $this->_foreach['hot_goods']['iteration']++;
?>
    <dd  <?php if ($this->_foreach['hot_goods']['iteration'] % 5 == 0): ?> 
      style='margin: 0 0px 0px 5px;' 
      <?php endif; ?> >
      <div class="hot_img">
        <div class="pic"><a href="<?php echo $this->_var['goods_0_01611200_1467785547']['url']; ?>"><img src="<?php echo $this->_var['goods_0_01611200_1467785547']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_01611200_1467785547']['name']); ?>" class="goodsimg" /></a></div>
        <div class="text">
          <p class="name"><a href="<?php echo $this->_var['goods_0_01611200_1467785547']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_01611200_1467785547']['name']); ?>"><?php echo $this->_var['goods_0_01611200_1467785547']['short_style_name']; ?></a></p>
          
          <p class="price" > <font class="aa"> 
            <?php if ($this->_var['goods_0_01611200_1467785547']['promote_price'] != ""): ?> 
            <?php echo $this->_var['goods_0_01611200_1467785547']['promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['goods_0_01611200_1467785547']['shop_price']; ?> 
            <?php endif; ?> 
            
            </font> <font class="bb"><?php echo $this->_var['goods_0_01611200_1467785547']['market_price']; ?></font> </p>
            <div class="xiao_cat">
              销量：<em><?php echo $this->_var['goods_0_01611200_1467785547']['sales_volume']; ?>笔</em>
            </div>
            
        </div>
      </div>
      
      <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods_0_01611200_1467785547']['id']; ?>_hot"></div>
    </dd>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </dl>
</div>

<?php endif; ?>