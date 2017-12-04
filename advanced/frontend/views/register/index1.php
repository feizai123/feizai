<?php 
    use yii\helpers\Url;
?>

</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<h2>注册页面</h2>
		<form action="<?php echo Url::to(['register/add']) ?>" method="post">
			<table border="1">
				<tr>
					<td>昵称</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>生日</td>
					<td><input type="password" name="shengri" value=""></td>
				</tr>
				<tr>
					<td>工作地址</td>
					<td><input type="password" name="addr" value=""></td>
				</tr>
				<tr>
					<td ><a href="" class="submit">上一步</a></td>
					<td><input type="submit" class="submit" name="" value="下一步"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
