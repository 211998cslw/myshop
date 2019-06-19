<form action="{{url('goods1/index')}}" method="get">
       姓名:<input type="text" name="find_name" value="{{$find_name}}">
       <input type="submit" value="搜索">
    </form>
<table border=1>
	<tr>
		<td>id</td>
		<td>商品名称</td>
		<td>商品图片</td>
		<td>商品库存数量</td>
		<td>商品添加时间</td>
		<td>操作</td>
	</tr>
	@foreach($student_info as $v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->goods_name}}</td>
		<td><img src="{{$v->goods_img}}" width="40"></td>
		<td>{{$v->goods_num}}</td>
		<td>{{date('Y-m-d',$v->create_time)}}</td>
		<td>
			<a href="{{url('Goods1/del')}}?id={{$v->id}}">删除</a>
			 <a href="{{url('Goods1/update')}}?id={{$v->id}}">修改</a>
		</td>
	</tr>
	@endforeach
</table>
 {{ $student_info->appends(['find_name'=>$find_name])->links() }}