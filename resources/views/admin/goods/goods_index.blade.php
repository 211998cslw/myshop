@extends('layout.goods')
@section('content')
<table border=1>
	<tr>
		<td>id</td>
		<td>商品名称</td>
		<td>商品图片链接</td>
		<td>商品价格</td>
		<td>添加时间</td>
		<td>操作</td>
	</tr>
	@foreach($data as $v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->goods_name}}</td>
		<td><img src="{{$v->goods_pic}}" width="40"></td>
		<td>{{$v->goods_price}}</td>
		<td>{{$v->add_time}}</td>
		<td>
			<a href="{{url('Goods/goods_del')}}?id={{$v->id}}">删除</a>
			 <a href="{{url('Goods/goods_update')}}?id={{$v->id}}">修改</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection