
     <div class="box">
     <div class="box_1">
      <h3 class="hd">成交记录<?php echo $this->_var['pager']['record_count']; ?>件</h3>
      <div class="boxCenterList">
       <?php if ($this->_var['notes']): ?>
       <table width="100%" cellpadding="4">
       <tr style="text-align:center; height:35px; line-height:35px;background-color: #F7F7F7;font-weight:bold;"><td width="25%" align="left" style="padding-left:20px">买家</td><td width="10%"><?php echo $this->_var['lang']['number']; ?></td><td width="45%">成交时间</td><td width="20%"><?php echo $this->_var['lang']['order_status']; ?></td></tr>
       <?php $_from = $this->_var['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'note');if (count($_from)):
    foreach ($_from AS $this->_var['note']):
?>
       <tr align="center" style="height:30px; line-height:30px;"><td align="left" style="padding-left:20px;border-bottom: 1px dotted #EEF1F4;"><?php if ($this->_var['note']['user_name']): ?><?php echo htmlspecialchars($this->_var['note']['user_name']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></td><td style="border-bottom: 1px dotted #EEF1F4;"><?php echo $this->_var['note']['goods_number']; ?></td><td style="border-bottom: 1px dotted #EEF1F4;"><?php echo $this->_var['note']['add_time']; ?></td><td style="border-bottom: 1px dotted #EEF1F4;"><?php if ($this->_var['note']['order_status']): ?><?php echo $this->_var['lang']['turnover']; ?><?php else: ?><?php echo $this->_var['lang']['is_cancel']; ?><?php endif; ?></td></tr>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </table>
        <?php else: ?>
        <?php echo $this->_var['lang']['no_notes']; ?>
        <?php endif; ?>
       
       <div id="buy_pagebar" class="f_r  page_info" style="margin-top:10px; margin-right:10px">
        <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php if ($this->_var['pager']['styleid'] == 0): ?>
        <div id="buy_pager">
         <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_10171000_1467787607');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_10171000_1467787607']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_10171000_1467787607']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php else: ?>

        
         <div id="buy_pager" class="pagebar  page_info">
          <span class="f_l f6" style="margin-right:10px;"><?php echo $this->_var['lang']['total']; ?> <b><?php echo $this->_var['pager']['record_count']; ?></b> <?php echo $this->_var['lang']['user_comment_num']; ?></span>
          <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>">1 ...</a><?php endif; ?>
          <?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
          <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_10198500_1467787607');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_10198500_1467787607']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                <span class="page_now"><?php echo $this->_var['key']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['item_0_10198500_1467787607']; ?>">[<?php echo $this->_var['key']; ?>]</a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>">...<?php echo $this->_var['pager']['page_count']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_kbd']): ?>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_10229900_1467787607');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_10229900_1467787607']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_10229900_1467787607']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
            <?php endif; ?>
        </div>
        

        <?php endif; ?>
        </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
      <div class="blank5"></div>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
  