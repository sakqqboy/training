<?php

namespace app\controllers;

use Yii;
use app\models\science\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex() {
        /* $model = new User();
          if (isset($_POST["User"]["user_id"])) {
          $model = \app\models\science\User::find()->where("user_id='" . $_POST["User"]["user_id"] . "'")->one();
          if (isset($model->user_id)) {
          if ($model->user_pass == $_POST["User"]["user_pass"]) {
          $messageAlert = "คุณ" . $model->user_name . " " . $model->user_lastname;
          return $this->render('../site/index', [
          //'model' => $model,
          //'messageAlert' => $messageAlert,
          'userId' => $model->user_id,
          ]);
          /* $dataProvider = new ActiveDataProvider([
          'query' => \app\models\science\Request::find()->where("userId='" . $model->user_id . "'"),
          ]);
          return $this->render('../request/index', [
          'dataProvider' => $dataProvider,
          'userId' => $model->user_id,
          ]);
          } else {
          $messageAlert = "รหัสผ่านผิด";
          return $this->render('index', [
          'model' => $model,
          'messageAlert' => $messageAlert,
          ]);
          }
          } else if (!isset($model->user_id)) {
          $model = new User();
          $messageAlert = "ไม่พบข้อมูลผู้ใช้งาน";
          return $this->render('index', [
          'model' => $model,
          'messageAlert' => $messageAlert,
          ]);
          } else {
          return $this->render('index', [
          'model' => $model,]);
          }
          } else {

          return $this->render('index', [
          'model' => $model,]);
          }
          /* $dataProvider = new ActiveDataProvider([
          'query' => User::find(),
          ]);

          return $this->render('index', [
          'dataProvider' => $dataProvider,
          ]); */
        return $this->render('index', [
                    'model' => $model,]);
    }

    /**
     * Displays a single User model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
