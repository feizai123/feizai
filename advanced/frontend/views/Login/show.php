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
		<form action="<?php echo Url::to(['login/add']) ?>" method="post">
			<table>
				<tr>
					<td>账号</td>
					<td><input type="text" name="l_name" value=""></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="text" name="l_pwd" value=""></td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="提交"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>