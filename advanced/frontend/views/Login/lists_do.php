<?php 
	use yii\helpers\Url;
    use yii\widgets\LinkPager;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<table border="1">
			<th>发布人</th>
			<th>标题</th>
			<th>内容</th>
			<th>操作</th>
			<?php foreach($models as $k=>$v): ?>
			<tr>
				<td><?php echo $v['t_name'] ?></td>
				<td><?php echo $v['t_title'] ?></td>
				<td><?php echo $v['t_cont'] ?></td>
				<td>
					<a href="<?= Url::toRoute(['login/del','t_id'=>$v['t_id']])?>">删除</a>
					<a href="<?= Url::toRoute(['login/upd','t_id'=>$v['t_id']])?>">修改</a>
				</td>
			</tr>
		<?php endforeach; ?>


		</table>
		<?= LinkPager::widget([
	     'pagination' => $pages,
	     'nextPageLabel' => '下一页',
	     'prevPageLabel' => '上一页',
	     'firstPageLabel' => '首页',
	     'lastPageLabel' => '尾页',
	 ]); ?>

	</center>
</body>
</html>