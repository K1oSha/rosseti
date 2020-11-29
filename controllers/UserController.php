<?php
namespace app\controllers;


use app\models\ImageUpload;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
use app\models\Message;
use Yii;
use app\models\UserIdentity;
use app\models\UserRecord;
use app\models\UserRecordSearch;
use yii\web\Controller;
use yii\web\UploadedFile;

class UserController extends Controller{


    public function actionJoin()
    {
        if(Yii::$app->request->isPost)
            return $this->actionJoinPost();
             $userJoinForm = new UserJoinForm();
            $userRecord = new UserRecord();
//            $userRecord->setTestUser();
            $userJoinForm->setUserRecord($userRecord);

        return $this->render('join',['userJoinForm'=>$userJoinForm]);
    }

    public function actionStatistic()
    {
        return  $this->render('statistic');
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        if ($userJoinForm->load(Yii::$app->request->post()))
            if($userJoinForm->validate())                          //Нужно для пользовательской проверки
            {
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this->redirect('/user/login');
            }
        return $this->render('join',['userJoinForm'=>$userJoinForm]);
    }



    public function actionLogin()
    {
        Yii::$app->getView()->params['url'] = "login";
        Yii::$app->getView()->params['part'] = "user";

        if(Yii::$app->request->isPost)
            return $this->actionLoginPost();
        $userLoginForm = new UserLoginForm();
        return $this->render('login',['userLoginForm'=>$userLoginForm]);
    }

    public function actionCabinet()
    {
        $request_id = 1;
        $count = 3;
        $users;
        $message = new Message();
        // $count = Yii::$app->request->post('count');
        
        if ($message->load(Yii::$app->request->post())){
            if ($message->validate())
            {
                $message->creation_time = date("Y-m-d H:i:s");
                $request_id = $message->request_id;
                $message->save();
            }            
            
        }
        else
        {
            $users = UserRecord::find()->all();
        }
        // Yii::$app->session['test'] = $users;
        $model = \app\models\Request::findOne($request_id);
        $messages = Message::find()->where(['like','request_id' , $request_id])->all();
        if ($count > count($messages))
        {
            $count = count($messages);
        }
        return $this->render('cabinet', ['messages'=>$messages, 'model'=>$model,'users'=>$users, 'count'=>$count]);
    }

    public function actionRating()
    {

        $searchModel = new UserRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);  
        return $this->render('rating', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLoginPost()
    {
        $userLoginForm = new UserLoginForm();
        if ($userLoginForm->load(Yii::$app->request->post()))
            if ($userLoginForm->validate())
            {
                $userLoginForm->login();
                return $this->redirect('/');
            }
        return $this->render('login',['userLoginForm'=>$userLoginForm]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/');
    }
    public function actionImage()
    {
        $model = new ImageUpload;

        if(Yii::$app->request->isPost)
        {

            $user =UserRecord::find()->where(['id'=>Yii::$app->user->getId()])->one();
            $file=UploadedFile::getInstanceByName('file');//Статический метод который возвращает файл
            // Yii::$app->session['data2'] = Yii::$app->request->post('filename');
            // Yii::$app->session['data'] = $file;
            


            if($user->saveImage($model->uploadFile($file,$user->avatar_url)))
            {
                // return $this->redirect(['/']);
            }
        }

        return $this->render('image',['model'=>$model]);
    }
}