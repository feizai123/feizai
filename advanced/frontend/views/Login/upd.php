<?php 
	use yii\helpers\Url;
?>
<center>
	<form action="<?php echo Url::to(['login/upd_do']) ?>" method="post">
	<table border="1">
		<input type="hidden" name="t_id" value="<?php echo $arr['t_id'] ?>">
		
		<tr>
			<td>标题</td>
			<td><input type="text" name="t_title" value="<?php echo $arr['t_title'] ?>"></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><input type="text" name="t_cont" value="<?php echo $arr['t_cont'] ?>"></td>
		</tr>
		<tr><td><input type="submit" name="" value="修改"></td></tr>
	</table>
	</form>
</center>