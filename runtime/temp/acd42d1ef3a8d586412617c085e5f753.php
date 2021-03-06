<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:73:"D:\project\www.shop.com\public/../application/home\view\goods\detail.html";i:1535860517;s:64:"D:\project\www.shop.com\application\home\view\public\topnav.html";i:1535510672;s:64:"D:\project\www.shop.com\application\home\view\public\header.html";i:1535510651;s:63:"D:\project\www.shop.com\application\home\view\public\viewd.html";i:1535249002;s:67:"D:\project\www.shop.com\application\home\view\public\bottomnav.html";i:1535245783;s:64:"D:\project\www.shop.com\application\home\view\public\footer.html";i:1535245889;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>商品页面</title>
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/base.css" type="text/css">
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/global.css" type="text/css">
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/header.css" type="text/css">
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/goods.css" type="text/css">
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/common.css" type="text/css">
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/bottomnav.css" type="text/css">
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/footer.css" type="text/css">
	
	<!--引入jqzoom css -->
	<link rel="stylesheet" href="<?php echo config('static_home'); ?>/style/jqzoom.css" type="text/css">

	<script type="text/javascript" src="<?php echo config('static_home'); ?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo config('static_home'); ?>/js/header.js"></script>
	<script type="text/javascript" src="<?php echo config('static_home'); ?>/js/goods.js"></script>
	<script type="text/javascript" src="<?php echo config('static_home'); ?>/js/jqzoom-core.js"></script>
	<script language="JavaScript" src="/plugins/PoPlayer/layer.js"></script>
	<!-- jqzoom 效果 -->
	<script type="text/javascript">
		$(function(){
			$('.jqzoom').jqzoom({
	            zoomType: 'standard',
	            lens:true,
	            preloadImages: false,
	            alwaysOn:false,
	            title:false,
	            zoomWidth:400,
	            zoomHeight:400
	        });
		})
	</script>
</head>
<body>
	<!-- 顶部导航 start -->
		<div class="topnav">
		<div class="topnav_bd w1210 bc">
			<div class="topnav_left">
				
			</div>
			<div class="topnav_right fr">
				<ul id='nav_login'>
				<!-- >
					<li>
						您好，<?php echo session('username'); ?>欢迎来到Ori！
						[<a href="<?php echo url('/home/public/loginout'); ?>">退出</a>] 
						[<a href="<?php echo url('/home/public/register'); ?>">免费注册</a>]
						<li class="line">|</li>
						<li>我的订单</li>
						<li class="line">|</li>
						<li>客户服务</li>
					</li> -->
					<?php if(!session('username')){ ?>
					<li>
						您好，欢迎来到Ori！
						[<a href="<?php echo url('/home/public/login'); ?>">登录</a>]
						[<a href="javascript:;" class='login'>登录(弹框)</a>]
						[<a href="<?php echo url('/home/public/register'); ?>">免费注册</a>]
					</li>
					<li class="line">|</li>
					<li>我的订单</li>
					<li class="line">|</li>
					<li>客户服务</li>
					<?php }else{ ?>
					<li>
						您好，<?php echo session('username'); ?>欢迎来到Ori！
						[<a href='javascript:;' id='loginout'>退出</a>]
						<li class='line'>|</li><a href='<?php echo url("/home/order/selforder"); ?>' ><li>我的订单</li></a>
						<li class='line'>|</li><li>客户服务</li>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部导航 end -->
	
	<div style="clear:both;"></div>

	<!-- 头部 start -->
		<div class="header w1210 bc mt15">
		<!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
		<div class="logo w1210">
			<h1 class="fl"><a href="index.html"><img src="<?php echo config('static_home'); ?>/images/web_ico.jpg" alt="京西商城" width='259' height='50'></a></h1>
			<!-- 头部搜索 start -->
			<div class="search fl">
				<div class="search_form">
					<div class="form_left fl"></div>
					<form action="" name="serarch" method="get" class="fl">
						<input type="text" class="txt" value="请输入商品关键字" /><input type="submit" class="btn" value="搜索" />
					</form>
					<div class="form_right fl"></div>
				</div>
				
				<div style="clear:both;"></div>

				<div class="hot_search">
					<strong>热门搜索:</strong>
					<a href="">D-Link无线路由</a>
					<a href="">休闲男鞋</a>
					<a href="">TCL空调</a>
					<a href="">耐克篮球鞋</a>
				</div>
			</div>
			<!-- 头部搜索 end -->

			<!-- 用户中心 start-->
			<div class="user fl">
				<dl>
					<dt>
						<em></em>
						<a href="">用户中心</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt" id='person_login'>
						<?php if(session('member_id')){ ?>
							您好，<?php echo session('username'); ?>&nbsp;&nbsp;<a href='javascript:;'>个人中心</a>
						<?php }else{ ?>
							您好，请<a href="javascript:;" class="login" >登录</a>
						<?php } ?>
						</div>
						<div class="uclist mt10">
							<ul class="list1 fl">
								<li><a href="">用户信息></a></li>
								<li><a href="">我的订单></a></li>
								<li><a href="">收货地址></a></li>
								<li><a href="">我的收藏></a></li>
							</ul>

							<ul class="fl">
								<li><a href="">我的留言></a></li>
								<li><a href="">我的红包></a></li>
								<li><a href="">我的评论></a></li>
								<li><a href="">资金管理></a></li>
							</ul>

						</div>
						<div style="clear:both;"></div>
						<div class="viewlist mt10">
							<h3>最近浏览的商品：</h3>
							<ul>
								<li><a href=""><img src="<?php echo config('static_home'); ?>/images/view_list1.jpg" alt="" /></a></li>
								<li><a href=""><img src="<?php echo config('static_home'); ?>/images/view_list2.jpg" alt="" /></a></li>
								<li><a href=""><img src="<?php echo config('static_home'); ?>/images/view_list3.jpg" alt="" /></a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<!-- 用户中心 end-->

			<!-- 购物车 start -->
			<div class="cart fl">
				<dl>
					<dt>
						<a href="<?php echo url('/home/cart/list'); ?>">去购物车结算</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							功能待加
						</div>
					</dd>
				</dl>
			</div>
			<!-- 购物车 end -->
		</div>
		<!-- 头部上半部分 end -->
		
		<div style="clear:both;"></div>

		<!-- 导航条部分 start -->
		<div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
			<div class="category fl cat1"> <!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd off">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>
				
				<div class="cat_bd none">
				<?php if(is_array($pid[0]) || $pid[0] instanceof \think\Collection || $pid[0] instanceof \think\Paginator): $i = 0; $__LIST__ = $pid[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?>	
					<div class="cat item1">
						<h3><a href="<?php echo url('/home/category/list',['cat_id'=>$cats[$one]['cat_id']]); ?>"><?php echo $cats[$one]['cat_name']; ?></a> <b></b></h3>				
						<div class="cat_detail">
						<?php if(is_array($pid[$one]) || $pid[$one] instanceof \think\Collection || $pid[$one] instanceof \think\Paginator): $i = 0; $__LIST__ = $pid[$one];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$two): $mod = ($i % 2 );++$i;?>
							<dl class="dl_1st">							
								<dt><a href="<?php echo url('/home/category/list',['cat_id'=>$cats[$two]['cat_id']]); ?>"><?php echo $cats[$two]['cat_name']; ?></a></dt>
							<?php if(is_array($pid[$two]) || $pid[$two] instanceof \think\Collection || $pid[$two] instanceof \think\Paginator): $i = 0; $__LIST__ = $pid[$two];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$three): $mod = ($i % 2 );++$i;?>
								<dd>
									<a href="<?php echo url('/home/category/list',['cat_id'=>$cats[$three]['cat_id']]); ?>"><?php echo $cats[$three]['cat_name']; ?></a>					
								</dd>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							</dl>
						<?php endforeach; endif; else: echo "" ;endif; ?>	
						</div>
					
					</div>				
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>

			</div>
			<!--  商品分类部分 end--> 

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="">首页</a></li>
					<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<li><a href="<?php echo url('/home/index/list'),['cat_id'=>$v['cat_id']]; ?>"><?php echo $v['cat_name']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="right_corner fl"></div>
			</div>
		</div>
		<!-- 导航条部分 end -->
	</div>
	<!-- 头部 end-->

	<div style="clear:both;"></div>


	<!-- 商品页面主体 start -->
	<div class="main w1210 mt10 bc">
		<!-- 面包屑导航 start -->
		<div class="breadcrumb">
			<h2>
			当前位置：<a href="/">首页</a>
			<?php if(is_array($parent) || $parent instanceof \think\Collection || $parent instanceof \think\Paginator): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			  > <a href="<?php echo url('/home/category/list',['cat_id'=>$v['cat_id']]); ?>"><?php echo $v['cat_name']; ?></a>
			 <?php endforeach; endif; else: echo "" ;endif; ?>
			  > <?php echo $goodsinfo['goods_name']; ?>
			</h2>
		</div>
		<!-- 面包屑导航 end -->
		
		<!-- 主体页面左侧内容 start -->
		<div class="goods_left fl">
			<!-- 相关分类 start -->
			<div class="related_cat leftbar mt10">
				<h2><strong>相关分类</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li><a href="">笔记本</a></li>
						<li><a href="">超极本</a></li>
						<li><a href="">平板电脑</a></li>
					</ul>
				</div>
			</div>
			<!-- 相关分类 end -->

			<!-- 相关品牌 start -->
			<div class="related_cat	leftbar mt10">
				<h2><strong>同类品牌</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li><a href="">D-Link</a></li>
						<li><a href="">戴尔</a></li>
						<li><a href="">惠普</a></li>
						<li><a href="">苹果</a></li>
						<li><a href="">华硕</a></li>
						<li><a href="">宏基</a></li>
						<li><a href="">神舟</a></li>
					</ul>
				</div>
			</div>
			<!-- 相关品牌 end -->

			<!-- 热销排行 start -->
			<div class="hotgoods leftbar mt10">
				<h2><strong>热销排行榜</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
			<!-- 热销排行 end -->


			<!-- 浏览过该商品的人还浏览了  start 注：因为和list页面newgoods样式相同，故加入了该class -->
			<div class="related_view newgoods leftbar mt10">
				<h2><strong>浏览了该商品的用户还浏览了</strong></h2>
				<div class="leftbar_wrap">
					<ul>
					<?php foreach($history_data as $k=>$v){ ?>
						<li <?php echo $k==5 ? 'class="last"' :'' ?> >
							<dl>
								<dt><a href="<?php echo url('/home/detail'),['goods_id'=>$v['goods_id']]; ?>"><img src="/uploads/<?php echo json_decode($v['goods_middle'])[0]; ?>" alt="" /></a></dt>
								<dd><a href="<?php echo url('/home/detail'),['goods_id'=>$v['goods_id']]; ?>"><?php echo $v['goods_name']; ?></a></dd>
								<dd><strong>￥<?php echo $v['goods_price']; ?></strong></dd>
							</dl>
						</li>	
					<?php } ?>
					</ul>
				</div>
			</div>
			<!-- 浏览过该商品的人还浏览了  end -->

			<!-- 最近浏览 start -->
			<div class="viewd leftbar mt10">
				<h2><a href="javascript:;"  class='clearlookgoods'>清空</a><strong>最近浏览过的商品</strong></h2>
				<div class="leftbar_wrap">
					<?php foreach($history_data as $k=>$v){ ?>
						<li <?php echo $k==5 ? 'class="last"' :'' ?> style='list-style:none'>
							<dl>
								<dt><a href="<?php echo url('/home/goods/detail',['goods_id'=>$v['goods_id']]); ?>"><img src="/uploads/<?php echo json_decode($v['goods_middle'])[0]; ?>" alt="" /></a></dt>
								<dd><a href="<?php echo url('/home/goods/detail',['goods_id'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></dd>
								<dd><strong>￥<?php echo $v['goods_price']; ?></strong></dd>
							</dl>
						</li>	
					<?php } ?>
				</div>
			</div>
			<!-- 最近浏览 end -->

		</div>
		<!-- 主体页面左侧内容 end -->
		
		<!-- 商品信息内容 start -->
		<div class="goods_content fl mt10 ml10">
			<!-- 商品概要信息 start -->
			<div class="summary">
				<h3><strong><?php echo $goodsinfo['goods_name']; ?></strong></h3>
				
				<!-- 图片预览区域 start -->
				<div class="preview fl">
					<div class="midpic">
						<a href="/uploads/<?php echo json_decode($goodsinfo['goods_img'])[0]; ?>" class="jqzoom" rel="gal1">   <!-- 第一幅图片的大图 class 和 rel属性不能更改 -->
							<img aa='' src="/uploads/<?php echo json_decode($goodsinfo['goods_middle'])[0]; ?>" alt="" />               <!-- 第一幅图片的中图 -->
						</a>
					</div>
	
					<!--使用说明：此处的预览图效果有三种类型的图片，大图，中图，和小图，取得图片之后，分配到模板的时候，把第一幅图片分配到 上面的midpic 中，其中大图分配到 a 标签的href属性，中图分配到 img 的src上。 下面的smallpic 则表示小图区域，格式固定，在 a 标签的 rel属性中，分别指定了中图（smallimage）和大图（largeimage），img标签则显示小图，按此格式循环生成即可，但在第一个li上，要加上cur类，同时在第一个li 的a标签中，添加类 zoomThumbActive  -->

					<div class="smallpic">
						<a href="javascript:;" id="backward" class="off"></a>
						<a href="javascript:;" id="forward" class="on"></a>
						<div class="smallpic_wrap">
							<ul>
							<?php foreach($goods_img['goods_middle'] as $k=>$v){ ?>
								<li <?php echo $k==0 ? 'class="cur"' :'' ?>  >
									<a <?php echo $k==0 ? 'class="zoomThumbActive"' : ''?> href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '/uploads/<?php echo $v; ?>',largeimage: '/uploads/<?php echo $goods_img['goods_img'][$k]; ?>' }"><img src="/uploads/<?php echo $goods_img['goods_thumb'][$k]; ?>"></a>
								</li>
							<?php } ?>
							</ul>
						</div>
						
					</div>
				</div>
				<!-- 图片预览区域 end -->

				<!-- 商品基本信息区域 start -->
				<div class="goodsinfo fl ml10">
					<ul>
						<li><span>商品编号： </span><?php echo $goodsinfo['goods_sn']; ?></li>
						<li class="market_price"><span>定价：</span><em>￥<?php echo $goodsinfo['goods_price']*1.2; ?></em></li>
						<li class="shop_price"><span>本店价：</span> <strong>￥<?php echo $goodsinfo['goods_price']; ?></strong> <a href="">(降价通知)</a></li>
						<li><span>上架时间：</span><?php echo $goodsinfo['createtime']; ?></li>
						<li class="star"><span>商品评分：</span> <strong></strong><a href="">(已有21人评价)</a></li> <!-- 此处的星级切换css即可 默认为5星 star4 表示4星 star3 表示3星 star2表示2星 star1表示1星 -->
					</ul>
					<form action="" method="post" class="choose">
						<ul>
						<!-- 单选属性 -->
						<?php foreach($oneChose as $k=>$attr){  ?>
							<li class="product">
								<dl>
									<dt><?php echo $attr[0]['attr_name']; ?></dt>
									<dd>
									<?php foreach($attr as $k=>$v){ ?>
										<a <?php echo $k==0 ? 'class="selected"' : '' ?> href="javascript:;"><?php echo $v['attr_value']; ?> <input type="radio" name="goods_attr_id" value="<?php echo $v['goods_attr_id']; ?>" checked="checked"/>
										</a>
									<?php } ?>
									</dd>
								</dl>
							</li>
						<?php } ?>	
							
							<!-- 购买数量 -->
							<li>
								<dl>
									<dt>购买数量：</dt>
									<dd>
										<a href="javascript:;" id="reduce_num"></a>
										<input type="text" name="amount" value="1" class="amount"/>
										<input type='hidden' name='goods_id' value="<?php echo $goodsinfo['goods_id']; ?>"/>
										<a href="javascript:;" id="add_num"></a>
									</dd>
								</dl>
							</li>

							<li>
								<dl>
									<dt>&nbsp;</dt>
									<dd>
										<input type="button" value="" class="add_btn" />
									</dd>
								</dl>
							</li>

						</ul>
					</form>
				</div>
				<!-- 商品基本信息区域 end -->
			</div>
			<!-- 商品概要信息 end -->
			
			<div style="clear:both;"></div>

			<!-- 商品详情 start -->
			<div class="detail">
				<div class="detail_hd">
					<ul>
						<li class="first on"><span>商品介绍</span></li>
						<!-- <li class="on"><span>商品评价</span></li> -->
						<li><span>售后保障</span></li>
					</ul>
				</div>
				<div class="detail_bd">
					<!-- 商品介绍 start -->
					<div class="introduce detail_div ">
						<div class="attr mt15">
						<!-- 唯一属性 -->
							<ul>
							<?php foreach($onlyChose as $k => $attr){  ?>
								<li>
									<span><?php echo $attr['attr_name']; ?>：</span><?php echo $attr['attr_value']; ?>
								</li>
							<?php } ?>
							</ul>
						</div>

						<div class="desc mt10">
							<!-- 此处的内容 一般是通过在线编辑器添加保存到数据库，然后直接从数据库中读出 -->
							<?php echo $goodsinfo['goods_desc']; ?>
						</div>
					</div>
					<!-- 商品介绍 end -->
					
					<!-- 商品评论 start -->
					<!-- <div class="comment detail_div mt10">
                        <div class="comment_summary">
                            <div class="rate fl">
                                <strong><em>90</em>%</strong> <br />
                                <span>好评度</span>
                            </div>
                            <div class="percent fl">
                                <dl>
                                    <dt>好评（90%）</dt>
                                    <dd><div style="width:90px;"></div></dd>
                                </dl>
                                <dl>
                                    <dt>中评（5%）</dt>
                                    <dd><div style="width:5px;"></div></dd>
                                </dl>
                                <dl>
                                    <dt>差评（5%）</dt>
                                    <dd><div style="width:5px;" ></div></dd>
                                </dl>
                            </div>
                            <div class="buyer fl">
                                <dl>
                                    <dt>买家印象：</dt>
                                    <dd><span>屏幕大</span><em>(1953)</em></dd>
                                    <dd><span>外观漂亮</span><em>(786)</em></dd>
                                    <dd><span>系统流畅</span><em>(1091)</em></dd>
                                    <dd><span>功能齐全</span><em>(1109)</em></dd>
                                    <dd><span>反应快</span><em>(659)</em></dd>
                                    <dd><span>分辨率高</span><em>(824)</em></dd>
                                </dl>
                            </div>
                        </div>
                    
                        <div class="comment_items mt10">
                            <div class="user_pic">
                                <dl>
                                    <dt><a href=""><img src="<?php echo config('static_home'); ?>/images/user1.gif" alt="" /></a></dt>
                                    <dd><a href="">乖乖</a></dd>
                                </dl>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <span>2013-03-11 22:18</span>
                                    <strong class="star star5"></strong> star5表示5星级 start4表示4星级，以此类推
                                </div>
                                <div class="comment_content">
                                    <dl>
                                        <dt>心得：</dt>
                                        <dd>东西挺好，挺满意的！</dd>
                                    </dl>
                                    <dl>
                                        <dt>优点：</dt>
                                        <dd>反应速度开，散热性能好</dd>
                                    </dl>
                                    <dl>
                                        <dt>不足：</dt>
                                        <dd>暂时还没发现缺点哦！</dd>
                                    </dl>
                                    <dl>
                                        <dt>购买日期：</dt>
                                        <dd>2013-11-24</dd>
                                    </dl>
                                </div>
                                <div class="btns">
                                    <a href="" class="reply">回复(0)</a>
                                    <a href="" class="useful">有用(0)</a>
                                </div>
                            </div>
                            <div class="cornor"></div>
                        </div>
                    
                        <div class="comment_items mt10">
                            <div class="user_pic">
                                <dl>
                                    <dt><a href=""><img src="<?php echo config('static_home'); ?>/images/user2.jpg" alt="" /></a></dt>
                                    <dd><a href="">小宝贝</a></dd>
                                </dl>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <span>2013-10-01 14:10</span>
                                    <strong class="star star4"></strong> star5表示5星级 start4表示4星级，以此类推
                                </div>
                                <div class="comment_content">
                                    <dl>
                                        <dt>心得：</dt>
                                        <dd>外观漂亮同，还在使用过程中。</dd>
                                    </dl>
                                    <dl>
                                        <dt>型号：</dt>
                                        <dd>i5 8G内存版</dd>
                                    </dl>
                                    <dl>
                                        <dt>购买日期：</dt>
                                        <dd>2013-11-20</dd>
                                    </dl>
                                </div>
                                <div class="btns">
                                    <a href="" class="reply">回复(0)</a>
                                    <a href="" class="useful">有用(0)</a>
                                </div>
                            </div>
                            <div class="cornor"></div>
                        </div>
                    
                        <div class="comment_items mt10">
                            <div class="user_pic">
                                <dl>
                                    <dt><a href=""><img src="<?php echo config('static_home'); ?>/images/user3.jpg" alt="" /></a></dt>
                                    <dd><a href="">天使</a></dd>
                                </dl>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <span>2013-03-11 22:18</span>
                                    <strong class="star star5"></strong> star5表示5星级 start4表示4星级，以此类推
                                </div>
                                <div class="comment_content">
                                    <dl>
                                        <dt>心得：</dt>
                                        <dd>挺好的，物超所值，速度挺好，WIN8用起来也不错。</dd>
                                    </dl>
                                    <dl>
                                        <dt>优点：</dt>
                                        <dd>散热很好，配置不错</dd>
                                    </dl>
                                    <dl>
                                        <dt>不足：</dt>
                                        <dd>暂时还没发现缺点哦！</dd>
                                    </dl>
                                    <dl>
                                        <dt>购买日期：</dt>
                                        <dd>2013-11-24</dd>
                                    </dl>
                                </div>
                                <div class="btns">
                                    <a href="" class="reply">回复(0)</a>
                                    <a href="" class="useful">有用(0)</a>
                                </div>
                            </div>
                            <div class="cornor"></div>
                        </div>
                    
                        分页信息 start
                        <div class="page mt20">
                            <a href="">首页</a>
                            <a href="">上一页</a>
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="" class="cur">3</a>
                            <a href="">4</a>
                            <a href="">5</a>
                            <a href="">下一页</a>
                            <a href="">尾页</a>
                        </div>
                        分页信息 end
                    
                        评论表单 start
                        <div class="comment_form mt20">
                            <form action="">
                                <ul>
                                    <li>
                                        <label for=""> 评分：</label>
                                        <input type="radio" name="grade"/> <strong class="star star5"></strong>
                                        <input type="radio" name="grade"/> <strong class="star star4"></strong>
                                        <input type="radio" name="grade"/> <strong class="star star3"></strong>
                                        <input type="radio" name="grade"/> <strong class="star star2"></strong>
                                        <input type="radio" name="grade"/> <strong class="star star1"></strong>
                                    </li>
                    
                                    <li>
                                        <label for="">评价内容：</label>
                                        <textarea name="" id="" cols="" rows=""></textarea>
                                    </li>
                                    <li>
                                        <label for="">&nbsp;</label>
                                        <input type="submit" value="提交评论"  class="comment_btn"/>                                        
                                    </li>
                                </ul>
                            </form>
                        </div>
                        评论表单 end
                        
                    </div> -->
					<!-- 商品评论 end -->

					<!-- 售后保障 start -->
					<div class="after_sale mt15 none detail_div">
						<div>
							<p>本产品全国联保，享受三包服务，质保期为：一年质保 <br />如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7日内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</p>
							<p>售后服务电话：800-898-9006 <br />品牌官方网站：http://www.lenovo.com.cn/</p>

						</div>

						<div>
							<h3>服务承诺：</h3>
							<p>本商城向您保证所售商品均为正品行货，京东自营商品自带机打发票，与商品一起寄送。凭质保证书及京东商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由本商城联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。本商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！</p> 
							
							<p>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p>

						</div>
						
						<div>
							<h3>权利声明：</h3>
							<p>本商城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东商城重要的经营资源，未经许可，禁止非法转载使用。</p>
							<p>注：本站商品信息均来自于厂商，其真实性、准确性和合法性由信息拥有者（厂商）负责。本站不提供任何保证，并不承担任何法律责任。</p>

						</div>
					</div>
					<!-- 售后保障 end -->

				</div>
			</div>
			<!-- 商品详情 end -->

			
		</div>
		<!-- 商品信息内容 end -->
		

	</div>
	<!-- 商品页面主体 end -->
	

	<div style="clear:both;"></div>

	<!-- 底部导航 start -->
	<div class="bottomnav w1210 bc mt10">
		<div class="bnav1">
			<h3><b></b> <em>购物指南</em></h3>
			<ul>
				<li><a href="">购物流程</a></li>
				<li><a href="">会员介绍</a></li>
				<li><a href="">团购/机票/充值/点卡</a></li>
				<li><a href="">常见问题</a></li>
				<li><a href="">大家电</a></li>
				<li><a href="">联系客服</a></li>
			</ul>
		</div>
		
		<div class="bnav2">
			<h3><b></b> <em>配送方式</em></h3>
			<ul>
				<li><a href="">上门自提</a></li>
				<li><a href="">快速运输</a></li>
				<li><a href="">特快专递（EMS）</a></li>
				<li><a href="">如何送礼</a></li>
				<li><a href="">海外购物</a></li>
			</ul>
		</div>

		
		<div class="bnav3">
			<h3><b></b> <em>支付方式</em></h3>
			<ul>
				<li><a href="">货到付款</a></li>
				<li><a href="">在线支付</a></li>
				<li><a href="">分期付款</a></li>
				<li><a href="">邮局汇款</a></li>
				<li><a href="">公司转账</a></li>
			</ul>
		</div>

		<div class="bnav4">
			<h3><b></b> <em>售后服务</em></h3>
			<ul>
				<li><a href="">退换货政策</a></li>
				<li><a href="">退换货流程</a></li>
				<li><a href="">价格保护</a></li>
				<li><a href="">退款说明</a></li>
				<li><a href="">返修/退换货</a></li>
				<li><a href="">退款申请</a></li>
			</ul>
		</div>

		<div class="bnav5">
			<h3><b></b> <em>特色服务</em></h3>
			<ul>
				<li><a href="">夺宝岛</a></li>
				<li><a href="">DIY装机</a></li>
				<li><a href="">延保服务</a></li>
				<li><a href="">家电下乡</a></li>
				<li><a href="">京东礼品卡</a></li>
				<li><a href="">能效补贴</a></li>
			</ul>
		</div>
	</div>
	<!-- 底部导航 end -->

	<div style="clear:both;"></div>
	<!-- 底部版权 start -->
	<div class="footer w1210 bc mt10">
		<p class="links">
			<a href="">关于我们</a> |
			<a href="">联系我们</a> |
			<a href="">人才招聘</a> |
			<a href="">商家入驻</a> |
			<a href="">千寻网</a> |
			<a href="">奢侈品网</a> |
			<a href="">广告服务</a> |
			<a href="">移动终端</a> |
			<a href="">友情链接</a> |
			<a href="">销售联盟</a> |
			<a href="">京西论坛</a>
		</p>
		<p class="copyright">
			 © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
		</p>
		<p class="auth">
			<a href=""><img src="<?php echo config('static_home'); ?>/images/xin.png" alt="" /></a>
			<a href=""><img src="<?php echo config('static_home'); ?>/images/kexin.jpg" alt="" /></a>
			<a href=""><img src="<?php echo config('static_home'); ?>/images/police.jpg" alt="" /></a>
			<a href=""><img src="<?php echo config('static_home'); ?>/images/beian.gif" alt="" /></a>
		</p>
	</div>
	<!-- 底部版权 end -->

	<script type="text/javascript">
		document.execCommand("BackgroundImageCache", false, true);
	</script>
</body>
<script type="text/javascript">
	//点击清除浏览记录
	$('.clearlookgoods').click(function(){
		layer.confirm('确认清除浏览记录?', {icon: 1, title:'清除浏览记录'}, function(index){
 			$.post("<?php echo url('/home/goods/clearlookgoods'); ?>",{goods_id:<?php echo $goodsinfo['goods_id']; ?>},function(result){
 				if(result.code==200){
 					console.log($('.viewlist').children('ul'));
  					$('.clearlookgoods').html('');
 					layer.msg(result.msg);
 					return;
 				}
 					layer.msg(result.msg);
 			},'json')
 			
  			layer.close(index);
		});
	});

	//加入购物车按钮
	 $('.add_btn').click(function(){
	 	//获取参数
	 	var goods_num=$('input[name=amount]').val();
	 	var goods_id=$('input[name=amount]').next().val();
	 	var attr=$('.selected').children('input');
	 	var goods_attr_ids=[];
	 	for(var i=0;i<attr.length;i++){
	 		goods_attr_ids.push(attr[i].value);
	 	}
	 	goods_attr_ids=goods_attr_ids.join(',',goods_attr_ids);
	 	console.log(goods_id,goods_num,goods_attr_ids);
	 	$parm={'goods_id':goods_id,'goods_attr_ids':goods_attr_ids,'goods_num':goods_num};
	 	//ajax发送数据添加购物车
	 	$.post("<?php echo url('/home/cart/addgoodscart'); ?>",$parm,function(result){
	 		if(result.code==200){
	 			layer.msg(result.msg);
	 			return;
	 		}
	 		//确认是否登录
	 		layer.confirm('请先登录！', {
	 			  title:'',
				  btn: ['登录', '暂不登录'], //可以无限个按钮
				  yes: function(index, layero){
				 		//弹框登录
				 		layer.open({
			                type: 2,
			                title: '用户登录',
			                //fix: false,
			                //maxmin: true,
			                //shadeClose: true,
			                skin:'layui-layer-lan',
			                shadeClose: true,
			                area: ['1000px', '500px'],
			                content: '<?php echo url("/home/public/login1"); ?>',
			               	success:function(){
			               		layer.close(index);
			               	}
			               });
				    	
				  },
				 btn2:function(index, layero){
				 		layer.close(index);
				  },
			});

	 	},'json');
	 });

	 		//弹框无刷新回显
			function loginchange(username){
				var html="<li>您好，"+username+"欢迎来到Ori！"+"[<a href='javascript:;' id='loginout'>退出</a>]"+"<li class='line'>|</li>"+"<li>我的订单</li><li class='line'>|</li><li>客户服务</li></li>";
				var person_html="您好，"+username+"&nbsp;&nbsp;<a href='javascript:;'>个人中心</a>";
				$('#nav_login').html('').html(html);
				$('#person_login').html(person_html);
			}

			//点击事件，退出确认
			$(document).on('click','#loginout',function(){
					layer.confirm('确定要退出吗?',{icon: 1,title:'退出'},function(index){
				 	location.href="<?php echo url('/home/public/loginout'); ?>";
				  	layer.close(index);
				});
			});
</script>
</html>