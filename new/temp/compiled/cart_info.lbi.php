购物车<span class="mc-count mc-pt3"><?php echo $this->_var['str']; ?></span>件



<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
  }
}

$(function(){
	$("#ECS_CARTINFO li.shopWhite").mouseenter(function(){
		$(this).removeClass("shopWhite");
		$(this).addClass("shopGray");
	});

	$("#ECS_CARTINFO li.shopWhite").mouseleave(function(){
		$(this).removeClass("shopGray");
		$(this).addClass("shopWhite");
	});	
})
</script>

