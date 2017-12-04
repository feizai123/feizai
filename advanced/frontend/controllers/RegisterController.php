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
use app\models\Register;
/**
* 
*/
class RegisterController extends Controller
{
	//关闭CSRF攻击
	public $enableCsrfValidation = false;

	public function actionIndex()
	{
		return $this->render('index');
	}
	public function actionAdd()
	{
		$data['phone'] = Yii::$app->request->post('phone');
		$data['pwd']   = Yii::$app->request->post('pwd');
		$pwd1   = Yii::$app->request->post('pwd1');
		if ($data['pwd'] != $pwd1) {
			echo "两次密码不一致";die;
		}
		$obj = new Register();
		$res = $obj->save($data);
		return $this->render('index1');
	}
}
