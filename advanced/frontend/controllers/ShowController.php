<?php 
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\Good;
/**
* 
*/
class ShowController extends Controller
{
	

	//关闭CSRF攻击
	public $enableCsrfValidation = false;
	//展示首页
	public function actionShow()
	{
		//渲染页面
		return $this->render('show');
	}
	//添加
	public function actionAdd()
	{
		//接受表单页面的值
		$data = Yii::$app->request->post();
		//实例化model
		$obj = new Good();
		//执行添加动作
		$obj->name = $data['name'];
		$arr = $obj->save();
		//判断
		if ($arr) {
			//成功跳转到展示的控制器
			 $this->redirect(['show/add_do']);
		}else{
			echo "222";
		}

	}
	//展示
	public function actionAdd_do()
	{
		//实例化model
		$obj = new Good();
		//查询所有数据、输出结果为对象和数组的集合
		$arr = $obj->find()->asArray()->all();
		//把值渲染到页面上
		return $this->render('list',['arr'=>$arr]);		

	}
	//删除
	public function actionDel()
	{
		//接受删除链接传的id
		$id = Yii::$app->request->get('id');
		//实例化model
		$obj = new Good();
		//根据传过来的id做删除
		$data = $obj->find()->where(['id'=>$id])->one()->delete(); 	
		//判断
		if ($data) {
			//成功跳转到展示的控制器
			$this->redirect(['show/add_do']);
		}else{
			echo "失败";
		}
		
	}
	//修改页面
	public function actionUpd()
	{
		//接受修改链接传的id
		$id = Yii::$app->request->get('id');
		//实例化model
		$obj = new Good();
		//根据id查询单条数据
		$arr = $obj->find()->where(['id'=>$id])->asArray()->one();
		//渲染页面
		return $this->render('upd',['arr'=>$arr]);
	}
	//执行修改动作
	public function actionUpd_do()
	{
		//接受修改页面传过来的数据
		$data = Yii::$app->request->post();
		//实例化model
		$obj = new Good();
		//根据id查询单条数据
		$res = $obj->find()->where(['id'=>$data['id']])->one();
		//执行添加动作
		$res->name = $data['name'];
		//判断
		if ($res->save()) {
			//成功跳转到展示的控制器
			$this->redirect(['show/add_do']);
		}else{
			echo "修改失败";
		}
	}

}
