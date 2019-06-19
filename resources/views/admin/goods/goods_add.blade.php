@extends('layout.goods')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="{{url('Goods/do_add')}}" method="post" enctype="multipart/form-data">
		@csrf
		<table border="1">
			<tr>
				<td>商品名称</td>
				<td><input type="text" name="goods_name"></td>
			</tr>

			<tr>
				<td>商品图片链接</td>
				<td><input type="file" name="goods_pic"></td>
			</tr>

			<tr>
				<td>商品价格</td>
				<td><input type="text" name="goods_price"></td>
			</tr>

			<tr>
				<td>添加时间</td>
				<td><input type="text" name="add_time"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>
</body>
</html>
@endsection