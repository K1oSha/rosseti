<?php

namespace app\controllers;

use app\models\Contributor;
use app\models\UserRecord;
use Yii;
use app\models\Request;
use app\models\Message;
use app\models\RequestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\User;

/**
 * RequestController implements the CRUD actions for Request model.
 */
class RequestController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionIndex()
    {
        Yii::$app->session['subdiv']=UserRecord::getSubdivisions();
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionChat($request_id = 1, $count = 99999999)
    {
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
            $users = \app\models\UserIdentity::getUsers($request_id);

        }
        // Yii::$app->session['test'] = $users;
        $model = $this->findModel($request_id);
        $messages = Message::find()->where(['like','request_id' , $request_id])->all();
        if ($count > count($messages))
        {
            $count = count($messages);
        }
        return $this->render('chat', ['messages'=>$messages, 'model'=>$model,'users'=>$users, 'count'=>$count]);
    }

    /**
     * Displays a single Request model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $count = 99999999)
    {
        $model=$this->findModel($id);
        $users;
        $message = new Message();
        // $count = Yii::$app->request->post('count');
        if($model->load(Yii::$app->request->post()))
        {
            $model->comment=Yii::$app->request->post('content');
            $model->save();
            return $this->redirect('index');
        }
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
            $users = \app\models\UserIdentity::getUsers($request_id);

        }
        // Yii::$app->session['test'] = $users;
        // $model1 = $this->findModel($request_id);
        $messages = Message::find()->where(['like','request_id' , $id])->all();
        if ($count > count($messages))
        {
            $count = count($messages);
        }

        $contributor=Contributor::find()->where(['and',['user_id'=>Yii::$app->user->getId(),'request_id'=>$id]])->one();
        if(Yii::$app->user->getId()==$model->author_id)
        {
        return $this->render('view_author', [
            'messages'=>$messages, 'model'=>$model,'users'=>$users, 'count'=>$count

        ]);
        }else{

        if($contributor==!null)
        {

        return $this->render('view_member', [
            'messages'=>$messages, 'model'=>$model,'users'=>$users, 'count'=>$count

        ]);
        }
        else{
        if(UserRecord::find()->where(['id'=>Yii::$app->user->getId()])->one()->id_role==1)
        {
        return $this->render('view_check', [
            'messages'=>$messages, 'model'=>$model,'users'=>$users, 'count'=>$count

        ]);
        }else{
        return $this->render('view', [
        'messages'=>$messages, 'model'=>$model,'users'=>$users, 'count'=>$count
        
        
        ]);
        }

        }
    }
}


    /**
     * Creates a new Request model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->solution=Yii::$app->request->post('content');
            $model->creation_time=date('Y-m-d');
            $model->author_id=Yii::$app->user->getId();
            $model->id_subdivision=UserRecord::find()->where(['id'=>$model->author_id])->one()->subdivision_id;
            $model->id_state=0;
            $model->save();
            $model_member=new Contributor();
            $model_member->user_id=Yii::$app->user->getId();
            $model_member->request_id=$model->id;
            $model_member->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Request model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->solution=Yii::$app->request->post('content');
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Request model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Request model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Request the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Request::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionEnter($id)
    {
        $model = new Contributor();
        $model->user_id= Yii::$app->user->getId();
        $model->request_id=$id;
        if($model->save())
        {
            return $this->redirect(['view', 'id' => $id]);
        }
        return $this->redirect(['view', 'id' => $id]);
    }
}
