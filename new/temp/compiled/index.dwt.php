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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body >
<?php echo $this->fetch('library/page_header_index.lbi'); ?>


<?php echo $this->fetch('library/nav.lbi'); ?>

<div id="J_CatSlide" class="cat-slide">
        <?php echo $this->fetch('library/category_tree_index.lbi'); ?>   
</div>
<div class="banner_mid">      
            <?php echo $this->fetch('library/index_ad.lbi'); ?>
          
</div>


<div class="block_w" id="block_w">
<div class="block"> 


    <div class="fp-cat-slide">
         
          <div class="fp-brand-rec"> 
             <?php echo $this->fetch('library/mid_brand.lbi'); ?>    
          </div>

      
    </div>
    
    <div class="floor-ad-banner">  
 
<?php $this->assign('ads_id','98'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>  

 
<div class="j_LazyloadCon2 floor1">

<?php $this->assign('cat_goods',$this->_var['cat_goods_150']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_150']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</div>
<div class="j_LazyloadCon2 floor2">

<?php $this->assign('cat_goods',$this->_var['cat_goods_18']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_18']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</div>

<div class="j_LazyloadCon2 floor3">

<?php $this->assign('cat_goods',$this->_var['cat_goods_292']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_292']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</div>

<div class="mid_big">  
 
<?php $this->assign('ads_id','101'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</div>  

<div class="j_LazyloadCon2 floor4">

<?php $this->assign('cat_goods',$this->_var['cat_goods_272']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_272']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</div>

<div class="j_LazyloadCon2 floor5">

<?php $this->assign('cat_goods',$this->_var['cat_goods_16']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_16']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
</div> 

<script type="text/javascript">

// 楼层"F"
$(".title_txt").each(function(i){
	$(this).find("span").text((i+1)+"F");
});

// 广告图片的文字图片滑动展示
(function($) {
    $.fn.extend({
        ad_slide: function(options) {
            var _this = this;
            _this.cur = options.current;
            _this.minwidth = options.minwidth;
            _this.maxwidth = options.maxwidth;
            _this.picstyle = options.picstyle;

            //设置
            _this.set = function(lid, obj) {
                obj.parent().children('li').removeClass(_this.cur);
                obj.parent().children('li').children('i').remove();

                obj.parent().children('li').stop(true).animate({
                    width: _this.minwidth
                }, 300);
                obj.stop(true).animate({
                    width: _this.maxwidth
                }, 300);
                obj.append('<i></i>');
                var left = 190 * (lid);
                $(_this.picstyle).stop(true).animate({
                    left: -left + 'px'
                }, 300);
            }

            //初始化
            _this.init = function() {
                var len = $(_this.picstyle + ' li').length;
                var liwidth = $(_this.picstyle + ' li').width();
                $(_this.picstyle).width(liwidth * len);

                _this.mouseover(function() {
                    _this.set($(this).attr('lid'), $(this));
                });
            }
            _this.init(); //运行
        }
    });
})(jQuery);

(function() {
	$(".ad_pic").each(function(i){
		$(this).attr("id","ad_pic"+(i+1));
	});
	$(".ad_text").each(function(i){
		$(this).attr("id","ad_text"+(i+1));
	});
	for (var i = $('.ad_text').length; i > 0; i--) {
		$('#ad_text' + i + ' li').ad_slide({
			current: "current",
			minwidth: "120px",
			maxwidth: "180px",
			picstyle: "#ad_pic" + i
		});
	};
})();
</script>

</div>


</div>

 <?php echo $this->fetch('library/page_footer.lbi'); ?> 
   


<script type="text/javascript">

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
</body>
</html>
