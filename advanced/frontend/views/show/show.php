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
		<form action="<?php echo Url::to(['show/add']) ?>" method="post">
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="提交"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>