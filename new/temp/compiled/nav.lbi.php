<div class="module" >
   <h2 class="fp-slide-title">商品服务分类</h2>
  <ul id="J_FpMainNav" class="fp-main-nav">
       <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="current"<?php endif; ?>> <a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
            <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
            <li <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> 
              <?php if ($this->_var['nav']['cat_list']): ?> 
              
              <?php endif; ?> 
              
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
  </ul>
</div>