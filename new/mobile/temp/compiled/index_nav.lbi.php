<div class="region row row_category">
  <ul class="flex flex-f-row">
  	<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
    <?php if (($this->_foreach['nav_middle_list']['iteration'] - 1) < 4): ?>
    <li class="flex_in"> <a href="<?php echo $this->_var['nav']['url']; ?>" title="<?php echo $this->_var['nav']['name']; ?>"> <img src="data/icon/<?php echo $this->_var['nav']['icon']; ?>"/> </a>
      <p><?php echo $this->_var['nav']['name']; ?></p>
    </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <ul class="flex flex-f-row">
  	<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
    <?php if (($this->_foreach['nav_middle_list']['iteration'] - 1) > 3): ?>
    <li class="flex_in"> <a href="<?php echo $this->_var['nav']['url']; ?>" title="<?php echo $this->_var['nav']['name']; ?>"> <img src="data/icon/<?php echo $this->_var['nav']['icon']; ?>"/> </a>
      <p><?php echo $this->_var['nav']['name']; ?></p>
    </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
