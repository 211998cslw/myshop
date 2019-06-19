<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="{{url('Goods1/gadd')}}" enctype="multipart/form-data" method="post">
		<table border='1'>
			@csrf
			<tr>
				<td>商品名称</td>
				<td><input type="text" name="goods_name"></td>
			</tr>

			<tr>
				<td>商品图片</td>
				<td><input type="file" name="goods_img"></td>
			</tr>
			<tr>
				<td>商品库存数量</td>
				<td><input type="text" name="goods_num"></td>
			</tr>

			<tr>
				<td>商品添加时间</td>
				<td><input type="text" name="create_time"></td>
			</tr>

			<tr>
				<td><input type="submit" value='提交'></td>
			</tr>
		</table>
	</form>
</body>
</html>