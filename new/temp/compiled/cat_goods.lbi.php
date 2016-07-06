<div class="fp-floor fp-floor-nvz">
  
  <div class="floor-content grid-container-1190">
    <div class="grid-col-190 floor-show">
      <ul class="floor-show-top floor-title"> 
        <li> <a href="<?php echo $this->_var['goods_cat']['url']; ?>"> <span class="floor-icon fp-iconfont"></span>  
        <span class="floor-key">
        <?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></span> </a> </li> 
       </ul>
      
         <div class="picScroll-left-g">
			<div class="hd">
				<a class="next fp-iconfont">㑤</a>
				<a class="prev fp-iconfont">㑥</a>
			</div>
			<div class="bd">
				<ul class="picList">
        <?php $_from = $this->_var['goods_cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['brands']):
        $this->_foreach['foo']['iteration']++;
?>
                   <?php if ($this->_foreach['foo']['iteration'] > 0 && $this->_foreach['foo']['iteration'] < 7): ?>
                  <li>
                   <div class="pic"><a href="<?php echo $this->_var['brands']['url']; ?>" target="_blank" title="<?php echo $this->_var['brands']['brand_name']; ?>"> <?php if ($this->_var['brands']['logo'] != 'data/brandlogo/'): ?><img width="90" height="135" border="0" alt="<?php echo $this->_var['brands']['brand_name']; ?>" src="<?php echo $this->_var['brands']['logo']; ?>"><?php else: ?><?php echo $this->_var['brands']['brand_name']; ?><?php endif; ?></a></div>
                 </li>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  
                
				</ul>
			</div>
		</div>
     <script type="text/javascript">
			jQuery(".picScroll-left-g").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,scroll:1,vis:1});
	 </script>

    <div class="floor-show-bottom">
       <ul class="floor-label-list">
          <?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_82017600_1467785105');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_82017600_1467785105']):
        $this->_foreach['foo']['iteration']++;
?>
          <li> <a href="<?php echo $this->_var['cat_0_82017600_1467785105']['url']; ?>" target="_blank" title="<?php echo $this->_var['cat_0_82017600_1467785105']['name']; ?>"><?php echo $this->_var['cat_0_82017600_1467785105']['name']; ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
    </div>

    </div>
    

    <div class="floor-banner-container">
    
    <div class="grid-col-400 floor-banner"> <?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
    
      <div class="grid-col-199 floor-banner floor-banner2">
      	<?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
        
      <div class="grid-col-199 floor-banner floor-banner2"> <?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        
        <div class="grid-col-199 floor-banner floor-banner2"> <p class="floor_imgs"><?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告6',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></p>
        <?php 
$k = array (
  'name' => 'get_ad',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '右侧广告7',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
    </div>
    </div>
   
  
  
  </div>

