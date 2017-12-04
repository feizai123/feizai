<?php 
    use yii\helpers\Url;
?>
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
					<td>手机号</td>
					<td><input type="text" name="phone" value=""></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="pwd" value=""></td>
				</tr>
				<tr>
					<td>确认密码</td>
					<td><input type="password" name="pwd1" value=""></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="" value="下一步"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
