<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="{{url('Goods1/do_update')}}" method='post'>
		@csrf
		<input type="hidden" name="id" value="{{$res->id}}">
		<table border='1'>
			<tr>
				<td>商品名称</td>
				<td><input type="text" name="goods_name" value="{{$res->goods_name}}"></td>
			</tr>
			<tr>
				<td>商品库存量</td>
				<td><input type="text" name="goods_num" value="{{$res->goods_num}}"></td>
			</tr>
			<tr>
				<td>商品添加</td>
				<td><input type="text" name="create_time" value="{{$res->create_time}}"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="修改"></td>
			</tr>
		</table>
	</form>
</body>
</html>