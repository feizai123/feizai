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

use app\models\User;
use app\models\Biaoqian;
/**
 * Site controller
 */

class RegisterController extends Controller
{

    public $enableCsrfValidation = false;
    public function actionRegister(){
        $obj = new User();
        $data = $obj->find()->asArray()->one();

        return $this->render('register',['data'=>$data]);
    }
    public function actionAdd(){
       $obj = new User();
       $post = yii::$app->request->post();
       if($post['password']==$post['passwords']){
            $obj->phone = $post['phone'];
            $obj->password = $post['password'];
            $obj->save();
            $this->redirect(array('/register/zhang'));
        }else{
        echo "密码不正确";
       
        }
    }
    public function actionZhang(){
        $obj = new Biaoqian();
        $data = $obj->find()->asArray()->one();
        
       return $this->render('register_2',['data'=>$data]);

    }
    public function actionZhu(){
         $obj = new Biaoqian();
          $post = yii::$app->request->post();
             $obj->nickname = $post['nickname'];
             $obj->shengri = $post['shengri'];
             $obj->dizhi = $post['dizhi'];
             $data = $obj->save();
              
            $this->redirect(array('/register/biao'));
    }
    public function actionBiao(){
        $obj = new Biaoqian();
        $data = $obj->find()->asArray()->one();


        return $this->render('register_3',['data'=>$data]);
    }
    public function actionWan(){
        echo "完成";
    }

}
