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
use app\models\Demo;
/**
* 
*/
class DemoController extends Controller
{
	//关闭CSRF攻击
	public $enableCsrfValidation = false;
	
	
	public $layout = false;

	public function actionIndex()
	{
		$obj = new Demo();
		$data = $obj->find()->asArray()->all();
		//渲染页面
		return $this->render('index',['data'=>$data]);
	}
	public function actionAdd()
	{
		//渲染页面
		return $this->render('add');
	}
	public function actionAdd_do()
	{
		$post = Yii::$app->request->post();
		$obj = new Demo();
		$obj->name = $post['name'];
		$obj->give = $post['give'];
		$obj->type = $post['type'];
		$obj->option = $post['option'];
		$obj->options = $post['options'];
		$obj->ok =  isset($post['ok'])  ? $post['ok'] : '0' ;
		$obj->rule = $post['rule'];
		$obj->r_scope = $post['r_scope'];
		$obj->l_scope = $post['l_scope'];
		$data = $obj->save();
		if ($data) {
			$this->redirect(['demo/index']);
		}else{
			echo "添加失败";
		}
	}
	public function actionDel()
	{

		$id = Yii::$app->request->get('id');


		$obj  = new Demo();

		$data = $obj->find()->where(['id'=>$id])->one()->delete();
		if ($data) {
		 	$this->redirect(['demo/index']);
		 } 	
	}
	public function actionUpd()
	{
		$obj = new Demo();
		$id = Yii::$app->request->get('id');
		$data = $obj->find()->where(['id'=>$id])->asArray()->one();
		// var_dump($data);die;
		return $this->render('upd',['data'=>$data]);
	}
	public function actionUpd_do()
	{
			$obj = new Demo();
			$post = Yii::$app->request->post();
			$res = $obj->find()->where(['id'=>$post['id']])->one();


			$res->name = $post['name'];
			$res->give = $post['give'];
			$res->type = $post['type'];
			$res->option = $post['option'];
			$res->options = $post['options'];
			$res->ok =  isset($post['ok'])  ? $post['ok'] : '0' ;
			$res->rule = $post['rule'];
			$res->r_scope = $post['r_scope'];
			$res->l_scope = $post['l_scope'];

			

			if ($res->save()) {
		 	$this->redirect(['demo/index']);
		 } 	
	}
}