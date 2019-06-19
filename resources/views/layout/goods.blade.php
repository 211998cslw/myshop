<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" href="/css/goods/page.css" />
		<script type="text/javascript" src="/js/goods/jquery.min.js" ></script>
		<script type="text/javascript" src="/js/goods/index.js" ></script>
	</head>

	<body>
		<div class="left">
			<div class="bigTitle">商圈后台管理系统</div>
			<div class="lines">
				<div class="active"><img src="/img/icon-1.png" /><a href="/Goods/goods_add">商品添加</a></div>
				<div onclick="pageClick(this)"><img src="/img/icon-2.png" /><a href="/Goods/goods_index">商品列表</a></div>
				<div onclick="pageClick(this)"><img src="/img/icon-3.png" />个人信息管理\</div>
				<div onclick="pageClick(this)"><img src="/img/icon-4.png" />收货地址管理</div>
				<div onclick="pageClick(this)"><img src="/img/icon-5.png" />在售门店管理</div>
			</div>
		</div>
		<div class="content">
		@section('content')
		@show
		</div>
		<div style="text-align:center;">
<p>更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
		
	</body>

</html>