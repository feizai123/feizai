<?php 
	use yii\helpers\Url;
?>
<center>
	<form action="<?php echo Url::to(['show/upd_do']) ?>" method="post">
	<table>
		<input type="hidden" name="id" value="<?php echo $arr['id'] ?>">
		<th>姓名</th>
		<tr>
			<td><input type="text" name="name" value="<?php echo $arr['name'] ?>"></td>
		</tr>
		<tr><td><input type="submit" name="" value="修改"></td></tr>
	</table>
	</form>
</center>