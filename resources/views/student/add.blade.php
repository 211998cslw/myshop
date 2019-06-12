<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>学生添加</title>
</head>
<body>
	<form action="{{url('do_add')}}" method="post">
		@csrf
		<table>
			姓名:<input type="text" name="username"></br>
			性别:<input type="radio" name="sex" value="1">女
				<input type="radio" name="sex" value="2">男</br>
			年龄:<input type="text" name="age"></br>
			添加时间:<input type="text" name="create_time"></br>
			<input type="submit" value="提交">
		</table>
	</form>
</body>
</html>