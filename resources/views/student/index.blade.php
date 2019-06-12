<form action ="{{('add_student')}}" method='get'>
	<input type="text" name="find_name" value="{{$find_name}}">
	<input type="submit" value="搜索">
</form>
<table border="1">
	<tr>
		<td>id</td>
		<td>姓名</td>
		<td>性别</td>
		<td>添加时间</td>
		<td>操作</td>
	</tr>
	@foreach($data as $v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->username}}</td>
		<td>{{$v->sex}}</td>
		<td>{{$v->create_time}}</td>
		<td>
			<a href="{{url('/update')}}?id={{$v->id}}">修改</a> | <a href="{{url('/del')}}?id={{$v->id}}">删除</a>
		</td>
	</tr>
	@endforeach
</table>
{{ $data->appends(['find_name'=>$find_name])->links() }}
