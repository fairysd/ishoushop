<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="content_c">
  <div class="searchBody block">
    
    <div class="crumbSlide ">
      <div class="title_left">
        <div id="ur_here">
		<?php echo $this->fetch('library/ur_here.lbi'); ?>
         </div>
      </div>
      <div class="title_right">共 <?php echo $this->_var['pager']['record_count']; ?> 件相关商品 </div>
    </div>
    
    <div class="block clearfix" style="margin:0 auto">
      
      <div class="">
	  <?php echo $this->fetch('library/zuhesousuo.lbi'); ?>
	  
<?php echo $this->fetch('library/goods_list.lbi'); ?>


<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

      </div>
      
    </div>
  </div>
  <?php echo $this->fetch('library/botm_sou.lbi'); ?>

</div>
<div class="blank5"></div>


<?php echo $this->fetch('library/page_footer2.lbi'); ?>

</body>
</html>

