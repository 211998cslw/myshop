<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>学生添加</title>
</head>
<body>
	<form action="{{url('do_update')}}" method="post">
		<input type="hidden" name="id" value="{{$res->id}}">
		@csrf
		<table>
			姓名:<input type="text" name="username" value="{{$res->username}}"></br>
			性别:<input type="radio" name="sex" value="1" @if($res->sex==1) checked @endif>女
				<input type="radio" name="sex" value="2" @if($res->sex==2) checked @endif>男</br>
			年龄:<input type="text" name="age" value="{{$res->sex}}"></br>
			添加时间:<input type="text" name="create_time" value="{{$res->create_time}}"></br>
			<input type="submit" value="提交">
		</table>
	</form>
</body>
</html>