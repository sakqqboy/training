<?php

namespace app\controllers;

use Yii;
use app\models\science\Request;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use backend\models\Standard;

/**
 * RequestController implements the CRUD actions for Request model.
 */
class RequestController extends Controller {

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
     * Lists all Request models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Request::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Request model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Request model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Request();
        $requestDetail = new \app\models\science\RequestDetail();
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\science\Parcel::find(),
        ]);

//        if (isset($_POST["Request"])) {
//            $model->attributes = $_POST["Request"];
//            $model->dateApp = new \yii\db\Expression('NOW()');
//            throw new \yii\base\Exception(print_r($_POST["RequestDetail"], true));
//            if ($model->save()) {
//                $requestId = Yii::$app->db->lastInsertID;
//                foreach ($_POST["selection"] as $selectItem) {
//                    if ($selectItem == $_POST["RequestDetail"][$selectItem]) {
//                        $requestDetail = new \app\models\science\RequestDetail();
//                        $requestDetail->requestId = $requestId;
//                    }
//                }
//                return $this->redirect(['view', 'id' => $model->requestId]);
//            } else {
//                throw new \yii\base\Exception(print_r($model->errors, true));
//            }
//        }

        if (isset($_REQUEST['Request'])) {
            throw new \yii\base\Exception('aaa');
//            $model = \app\models\science\Parcel::find()->where("par_name= '" . $_POST["Request"]["searchText"] . "'");
        }
        return $this->render('create', [
                    'model' => $model, 'requestDetail' => $requestDetail, 'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Updates an existing Request model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->requestId]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Request model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Request model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Request the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Request::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
