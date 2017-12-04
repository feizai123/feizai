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
		<form action="<?php echo Url::to(['login/lists']) ?>" method="post">
			<table>
				<tr>
					<td>标题</td>
					<td><input type="text" name="t_title" value=""></td>
				</tr>
				<tr>
					<td>内容</td>
					<td>
						<input type="text" name="t_cont" value="">
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="提交"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>