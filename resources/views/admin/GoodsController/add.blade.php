<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>微商城  添加商品</title>
</head>
<body>
	<h1>添加商品</h1>
	<form action="{{url('do_add_good')}}" method='post' enctype="multipart/form-data">
		@csrf
		<input type="file" name="goods_name">
		<input type="submit" value="添加">
	</form>
</body>
</html>