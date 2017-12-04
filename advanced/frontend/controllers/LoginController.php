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

use yii\data\Pagination; 
use app\models\Login;
use app\models\Title;
use DfaFilter\SensitiveHelper;

/**
* 
*/
class LoginController extends Controller
{
	//关闭CSRF攻击
	public $enableCsrfValidation = false;

	public function actionShow()
	{
		//渲染页面
		return $this->render('show');
	}

	public function actionAdd()
	{
		$obj    = new Login();
		$l_name = Yii::$app->request->post('l_name');
		$l_pwd  = Yii::$app->request->post('l_pwd');
		//查询单条数据、输出结果为对象和数组的集合
		$arr = $obj->find()->where("l_name='$l_name'&&l_pwd='$l_pwd'")->asArray()->one();
		if ($arr) {
			Yii::$app->session['name']="$l_name";
			// echo Yii::$app->session['name'];die;
			return $this->render('list');
		}else{
			echo "账号或密码错误";
		}
	}
	public function actionLists()
	{
	
		// var_dump($obj);die;
		$data = Yii::$app->request->post();	
		$obj  = new Title();
		// var_dump($data);die;
		$data['t_name']=Yii::$app->session['name'];
		$obj->t_title  = $data['t_title'];
		$obj->t_cont   = $data['t_cont'];
		$obj->t_name   = $data['t_name'];
		// 获取感词库索引数组
		$wordData = array(
		    'sb',
		    '拆迁灭',
		    '车牌隐',
		    '成人电',
		    '成人卡通',
		    'caonima',
		);

		$obj->t_title = SensitiveHelper::init()->setTree($wordData)->replace($obj->t_title, '***');
		$arr  = $obj->save();

		if ($arr) {
		    //成功跳转到展示的控制器
			$this->redirect(['login/fenye']);
		}else{
			echo "失败";
		}
	}
	public function actionLists_do()
	{
		//实例化model
		$obj = new Title();
		//查询所有数据、输出结果为对象和数组的集合
		$arr = $obj->find()->asArray()->all();
		//把值渲染到页面上
		return $this->render('lists_do',['arr'=>$arr]);		
	}
	public function actionDel()
	{
		//接受删除链接传的id
		$t_id = Yii::$app->request->get('t_id');

		//实例化model
		$obj  = new Title();
		//根据传过来的id做删除
		$data = $obj->find()->where(['t_id'=>$t_id])->one()->delete(); 	
		//判断
		if ($data) {
			//成功跳转到展示的控制器
			$this->redirect(['login/fenye']);
		}else{
			echo "失败";
		}
	}
	public function actionUpd()
	{
		//接受修改链接传的id
		$t_id = Yii::$app->request->get('t_id');
		//实例化model
		$obj  = new Title();
		//根据id查询单条数据
		$arr  = $obj->find()->where(['t_id'=>$t_id])->asArray()->one();
		//渲染页面
		return $this->render('upd',['arr'=>$arr]);
	}
	public function actionUpd_do()
	{
		//接受修改页面传过来的数据
		$data = Yii::$app->request->post();

		//实例化model
		$obj = new Title();
		//根据id查询单条数据
		$res = $obj->find()->where(['t_id'=>$data['t_id']])->one();

		$res->t_title = $data['t_title'];
		$res->t_cont = $data['t_cont'];
		//判断
		if ($res->save()) {
			//成功跳转到展示的控制器
			$this->redirect(['login/fenye']);
		}else{
			echo "修改失败";
		}
	}
	public function actionFenye(){
 		$query = Title::find();
        $countQuery = clone $query;
        $pageSize = 5;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => $pageSize]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('lists_do', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
}