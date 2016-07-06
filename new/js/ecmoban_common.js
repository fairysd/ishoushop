$(function(){
	/*if(screen.width > 1210 && $(window).width() > 1210)
	{
		$("body").addClass("w1190");
	}*/

	//判断是否IE6
	var isIE6 = false;
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIE6 = true;
	}
	
	//头部关注MIQI伸缩	   
	$(".background_pay").mouseenter(function(){
		$(this).find(".bookmail_more").show();
	  	$(this).addClass("background_pay_hover");
	});
	
	$(".background_pay").mouseleave(function(){
		$(this).find(".bookmail_more").hide();
	  	$(this).removeClass("background_pay_hover");
	});
	
	//头部主导航鼠标经过效果	   
	$(".subNav ul li ").mouseenter(function(){
		$(this).find(".sub_nav").show();
	});
	
	$(".subNav ul li ").mouseleave(function(){
		$(this).find(".sub_nav").hide();
	});
	
	//购物车切换效果
	$("#ECS_CARTINFO").mouseenter(function(){
		$(this).find(".shopBody").fadeIn();
	  	$(this).find(".shop_txt").addClass("shop_txt_hover");
	});
	
	$("#ECS_CARTINFO").mouseleave(function(){
		$(this).find(".shopBody").fadeOut();
	  	$(this).find(".shop_txt").removeClass("shop_txt_hover");
	});
	
	//顶部全部商品分类
	(function(){
		var timer=null;
		$("#J_MallCate").hover(function(){
			clearTimeout(timer);
			$(".sn-mcate-bd").show();
		},function(){
			timer=setTimeout(function(){
				$(".sn-mcate-bd").hide();
			},100);
			
		});
		$(".sn-mcate-bd").hover(function(){
			clearTimeout(timer);
			$(".sn-mcate-bd").show();
		},function(){
			timer=setTimeout(function(){
				$(".sn-mcate-bd").hide();
			},100);
		});
		
		
		
		$(".cat-small-banner").find("img").each(function(){
			var left=$(this).offset().left;
			$(this).hover(function(){
				$(this).stop().animate({left:0},"slow");
			},function(){
				$(this).stop().animate({left:5},"slow");
			});
		});

	})();
	
	//商品分类下的右侧广告效果
	$(".mall_banner_ad").find("a").each(function(){
			var left=$(this).offset().left;
			$(this).hover(function(){
				$(this).stop().animate({left:-5},"200");
			},function(){
				$(this).stop().animate({left:0},"200");
			});
		});

	//商品分类树
	/*$(".leftNav ul li").mouseenter(function(){
		$(this).find(".leftSubNav_list").show();
	  	$(this).addClass("current");
	});
	
	$(".leftNav ul li").mouseleave(function(){
		$(this).find(".leftSubNav_list").hide();
	  	$(this).removeClass("current");
	});*/
	
	(function(){
		//$(".leftSubNav:first").show();
		
		var li=$(".cat-slide-nav").find("li.cat-nav");
		li.eq(0).addClass("current");
		li.hover(function(){
			var index=li.index(this);
			li.removeClass("current");
			$(this).addClass("current");
			$(".leftSubNav").hide();
			$(".leftSubNav").eq(index).show().stop().animate({left:190,opacity:1});
		},function(){
			
			var index=li.index(this);
			li.removeClass("current");
			$(".leftSubNav").eq(index).css({left:170,opacity:0}).hide();
			
		});
		
	})();
	
	//品牌
	$(".brand-item").mouseenter(function(){
		$(this).find(".brand-status").show();
	});
	
	$(".brand-item").mouseleave(function(){
		$(this).find(".brand-status").hide();
	  
	});
	
	
	//商品分类树右侧切换效果
	$(".slideBox").mouseenter(function(){
		$(this).find(".banner_btn_left").show();
	  	$(this).addClass("banner_btn_left_hover");
	});
	
	$(".slideBox").mouseleave(function(){
		$(this).find(".banner_btn_left").hide();
	  	$(this).removeClass("banner_btn_left_hover");
	});
	
	$(".slideBox").mouseenter(function(){
		$(this).find(".banner_btn_right").show();
	  	$(this).addClass("banner_btn_right_hover");
	});
	
	$(".slideBox").mouseleave(function(){
		$(this).find(".banner_btn_right").hide();
	  	$(this).removeClass("banner_btn_right_hover");
	});
     
	  //除首页商品分类鼠标移上去效果
	 $(".classNav ").mouseenter(function(){
		$(this).find(".left_nav").show();
	  	
	}); 
	
	$(".classNav ").mouseleave(function(){
		$(this).find(".left_nav").hide();
	  	
	});
	  
	  
	 //轮播广告下侧图片上下浮动
	 
    $("#banner_01 .big_txt ").mouseenter(function(){
		$("#banner_01 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_01 .big_txt ").mouseleave(function(){
		$("#banner_01 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})
	
	 $("#banner_02 .big_txt ").mouseenter(function(){
		$("#banner_02 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_02 .big_txt ").mouseleave(function(){
		$("#banner_02 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})
	
	$("#banner_03 .big_txt ").mouseenter(function(){
		$("#banner_03 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_03 .big_txt ").mouseleave(function(){
		$("#banner_03 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})
	
	$("#banner_04 .big_txt ").mouseenter(function(){
		$("#banner_04 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_04 .big_txt ").mouseleave(function(){
		$("#banner_04 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})


//本周热推鼠标移上去的效果	   
	$(".hot_list01 dd").mouseenter(function(){
		$(this).find(".hot_btn").show();
		$(this).find(".hot_line").show();
	});
	
	$(".hot_list01 dd").mouseleave(function(){
		$(this).find(".hot_btn").hide();
		$(this).find(".hot_line").hide();
	});
	
	
	$(".hot_list02 dt").mouseenter(function(){
		$(this).find(".hot_btn").show();
		$(this).find(".hot_line").show();
	});
	
	$(".hot_list02 dt").mouseleave(function(){
		$(this).find(".hot_btn").hide();
		$(this).find(".hot_line").hide();
	});
	
	$(".hot_list02 dd").mouseenter(function(){
		$(this).find(".hot_btn").show();
		$(this).find(".hot_line").show();
	});
	
	$(".hot_list02 dd").mouseleave(function(){
		$(this).find(".hot_btn").hide();
		$(this).find(".hot_line").hide();
	});


	//列表页商品分类左侧导航点击切换
	$("#cate h1").click(function(){
		if($(this).next("ul").is(":visible"))
		{
			$(this).next("ul").hide();	
		}
		else
		{
			$("#cate ul").hide();	
			$(this).next("ul").show();	
		}
	})
	
	//列表页商品分类	   
	$(".y_searchList .li").mouseenter(function(){
		$(this).find(".y_hide").show();
	  	$(this).addClass("li_hover");
	});
	
	$(".y_searchList .li").mouseleave(function(){
		$(this).find(".y_hide").hide();
	  	$(this).removeClass("li_hover");
	});
	
	//详情页会员等级弹出框	   
	$(".center_collect_help ").mouseenter(function(){
		$(this).find(".center_collect_pop").show();
	  	
	});
	
	$(".center_collect_help ").mouseleave(function(){
		$(this).find(".center_collect_pop").hide();
	  	
	});
	 
	 //详情页切换点击事件	 
	$("#inner .inLeft_btn a").click(function(){
		$("#inner .inLeft_btn a").removeClass("current");
		$(this).addClass("current");
	})


	//详情页放大镜切换
	$(".imgInfo").slide({mainCell:".imgInfo_img ul",effect:"left",titCell:".picture img",titOnClassName:"onbg",prevCell:"#goodsPicPrev",nextCell:"#goodsPicNext",trigger:"click"});
	
	//详情页添加购物车弹出层点击关闭
	$("#addtocartdialog .center_pop_close a").click(function(){
		$("#addtocartdialog").hide();	
	})
	
	
	//商品详情页评价弹出层关闭
	$("#commentform .close").click(function(){
		$("#commentform").hide();
		$("#boxOverlay").hide();
	})
	
	
	//商品详情页评价弹出层显示
	
	$("#showcommentform").click(function(){
		$("#commentform").show();
		$("#boxOverlay").show();
		if(isIE6)
		{	
			$("#boxOverlay").css({height:$(window).height(),width:$(window).width(),left:-$(".inDetail_box").offset().left});	
		}
	})
	
	//IE6下商品详情页评价弹出层以及半透明遮罩层兼容设置
	
	$(window).scroll(function(){
		if($(".inDetail_box").length > 0)
		{
			if(isIE6)
			{	
				var a = $(window).scrollTop();
				var b = $(".inDetail_box").offset();
				var c = b.top;
				var d = a-c;
				var e = d+150;
	
				$("#commentform").css({position:"absolute",top:e});	
				$("#boxOverlay").css({position:"absolute",top:d});	
			}
		}
	})
	
	$(".floor-banner2").find("img").each(function(){
		$(this).hover(function(){
			$(this).stop().animate({left:-5});
		},function(){
			$(this).stop().animate({left:0});
		});
	});
	
	
})

/****************************函数部分***************************/

//首页页添加购物车弹出层点击关闭
function close_div(goods_id,goods_recommend)
{
	if(goods_recommend && goods_recommend!='')
	{
		$("#addtocartdialog_retui_"+goods_id+"_"+goods_recommend).hide();
	}
	else
	{
		$("#addtocartdialog_retui_"+goods_id).hide();
	}
}

//商品评论
function showrank(obj,num,rankid,commentrank){
	$(obj).parent().removeClass();
	$(obj).parent().addClass("cmtRank");
	$(obj).parent().addClass("fen"+num);
	$(rankid).html(num+".0分");
	if($(commentrank))
	{
		 $(commentrank).val(num);
	}
}
function hiddenrank(obj,rankid,commentrank){
	if($(commentrank).val())
	{
		showrank(obj,$(commentrank).val(),'#Rank','#commentrank');
	}
	else 
	{
		showrank(obj,1,'#Rank','#commentrank');
	}
}
function show_del(a)
{
	$(a).removeClass("shopWhite");
	$(a).addClass("shopGray");
}

function hide_del(a)
{
	$(a).removeClass("shopGray");
	$(a).addClass("shopWhite");
}

//天猫品牌切换
function Options(id,cName,model){
	this.id=$("#"+id);
	this.li=this.id.find("."+cName).find("li");
	this.model=this.id.find("."+model);
	this.init();
}
Options.prototype.init=function(){
	var that=this;
	this.model.eq(0).css("display","block");
	this.li.eq(0).addClass("selected");
	this.li.mouseover(function(){
		var index=that.li.index(this);
		that.li.removeClass("selected");
		that.li.eq(index).addClass("selected");
		that.model.css("display","none");
		that.model.eq(index).css("display","block");
	});	
}

$(function(){
	new Options("model_one","brand-rec-nav","j_FirstBrandWallPannel");
	
	new Options("models_one","subject-slide-nav","subject-slide-pannel");
	$(".j_BrandWallSlide").each(function(){
		var index=0;
		var l=$(this).children(".brand-trigger-next");
		var r=$(this).children(".brand-trigger-prev");
		var div=$(this).find(".brand-wall-pannel");
		div.eq(index).show();
		
		l.click(function(){
			
			index++;
			if(index>=div.length){
				index=0;
			}
			
			div.stop(false,true).fadeOut();
			div.eq(index).stop().fadeIn();
		});
		r.click(function(){
			index--;
			if(index<0){
				index=div.length-1;
			}
			div.stop(false,true).fadeOut();
			div.eq(index).stop().fadeIn();
		});
	});
	

	
});
//cat_good.lbi  

	$(function(){
		function Scroll(id,className){
			this.id=$("#"+id);
			this.className=this.id.find("."+className);
			this.li=this.className.find(".rank-slide-pannel");
			this.index=0;
			this.timer=null;
			this.lbtn=this.id.find(".rank-trigger-prev");
			this.rbtn=this.id.find(".rank-trigger-next");
			this.init.apply(this,arguments);
			
		}
		Scroll.prototype={
			init:function(){
				this.resize();
				this.btn_click();
				this.event();
			},
			resize:function(){
				this.ul=this.id.find(".rank-slide-content");
				this.ul.css({width:this.li.length*this.li.width()});
			},
			event:function(){
				this.btn=this.id.find("ul.rank-slide-nav>li");
				var me=this;
				this.btn.click(function(){
					me.index=me.btn.index(this);
					//alert(index);
					me.run();
				});
			},
			run:function(){
				var me=this;
				this.ul.stop(true,false).animate({left:-(this.index*this.li.width())},"slow");
				this.btn.removeClass("selected");
				this.btn.eq(this.index).addClass("selected");
			},
			btn_click:function(){
				var me=this;
				this.lbtn.click(function(){
					me.index--;
					if(me.index<0){
						me.index=me.li.length-1;
					}
					me.run();
				});
				
				this.rbtn.click(function(){
					me.index++;
					if(me.index>=me.li.length){
						me.index=0;
					}
					me.run();
				});
				
			}
		}
		new Scroll("floor-rank-slide","rank_box");
		
		//悬浮效果
		if($("#block_w").size() > 0)
		{
			var top_distance=$("#block_w").offset().top;
			
			$(window).scroll(function(){
				var scrTop=$(document).scrollTop();
				//alert(scrTop);
				if(scrTop>=top_distance){
					//alert("1");
					$(".as-total-container").stop(true,false).animate({top:0});
				}else{
					//alert("");
					$(".as-total-container").stop(true,false).animate({top:-50});
				}
			});
		}
		


	});



