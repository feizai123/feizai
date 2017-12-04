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
		<table>
			<th>name</th>
			<th>操作</th>
			<?php foreach($arr as $k=>$v): ?>
			<tr>
				<td><?php echo $v['name'] ?></td>
				<td>
					<a href="<?= Url::toRoute(['show/del','id'=>$v['id']])?>">删除</a>
					<a href="<?= Url::toRoute(['show/upd','id'=>$v['id']])?>">修改</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</center>
</body>
</html>