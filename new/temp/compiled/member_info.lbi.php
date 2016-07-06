
<?php if ($this->_var['user_info']): ?>

HI， <a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a>

&nbsp;&nbsp;<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>

<?php else: ?>
  爱收宝旗下购物商城
 <a class="sn-login" href="user.php" target="_top">请登录</a>
 <a class="sn-register" href="user.php?act=register" target="_top">免费注册</a>

<?php endif; ?>