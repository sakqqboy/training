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

    public $userId;

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
        $model = new \app\models\science\Parcel();
        if (isset(Yii::$app->user->identity->user_id)) {
            $userType = \app\models\science\User::find()->where("user_id='" . Yii::$app->user->identity->user_id . "'")->one(); //role
            $myAppendage = $userType->user_appendage;
// $user = \app\models\science\User::find()->where("user_appendage='" . $myAppendage . "'")->all();
            if (isset($_GET['type'])) {
                if ($_GET['type'] == 'all') {
                    $dataProvider = new ActiveDataProvider([
                        'query' => Request::find()->where("userId='" . Yii::$app->user->identity->user_id . "' order by date")]);
                    return $this->render('index', [
                                'dataProvider' => $dataProvider]);
                }
            } else {

            }
            if ($userType->right_id == '0002') {//ถ้าเป็นหัวหน้าฝ่ายงาน
                $dataProvider = new ActiveDataProvider([
                    'query' => Request::find()
                            ->join('left join', 'user', 'user.user_id=request.userId')
                            ->where("user.user_appendage='" . $myAppendage . "'and request.status!='finished'")
                        //->where(['user.user_appendage' => $myAppendage, 'request.status' => 'finished'])
                ]);

                return $this->render('index', [
                            'dataProvider' => $dataProvider
                ]);
            } else if ($userType->right_id == '0003') {//ถ้าเป็นเจ้าหน้าที่คลังพัสดุ
                $dataProvider = new ActiveDataProvider([
                    'query' => Request::find()->where("status='approved' or status='alert' or status='inborrow' order by date")
                ]);

                return $this->render('index', [
                            'dataProvider' => $dataProvider]);
            } else {
                $dataProvider = new ActiveDataProvider([
                    'query' => Request::find()->where(['userId' => Yii::$app->user->identity->user_id])
                ]);

                return $this->render('index', [
                            'dataProvider' => $dataProvider]);
            }
        } else {
            echo "กรุณา LOGIN";

//readdir('site / index');
//return $this->render('../site / index');
// $dataProvider = new ActiveDataProvider([
//    'query' => \app\models\science\Request::find()
//  ]);//รอ
// return $this->render('create', ['dataProvider' => $dataProvider]);
        }
    }

//go to if not login yet

    /**
     * Displays a single Request model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        $model = new Request();
        $userType = \app\models\science\User::find()->where("user_id='" . Yii::$app->user->identity->user_id . "'")->one(); //role
        $right = $userType->right_id;
        $dataProvider = new ActiveDataProvider([
            'query' => \app\models\science\RequestDetail::find(),
        ]);
        $msAlert = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
        if (isset($_GET["id"])) {
            $dataProvider = new ActiveDataProvider(['query' => \app\models\science\RequestDetail::find()->where("requestId = '" . $_GET["id"] . "'and status!='finished'"),
            ]);
        } else {
            $dataProvider = new ActiveDataProvider(['query' => \app\models\science\RequestDetail::find(),
            ]);
        }
//////////////////////////////////////////////////////////////// Approve /////////////////////////////////////////////////////////////////////////////////////////////////////
        if (isset($_POST["selection"])) {
            foreach ($_POST["selection"] as $selectItem) {
                $requestDetail = \app\models\science\RequestDetail::find()->where("requestId='" . $_GET["id"] . "' and parcelId='" . $selectItem . "'")->one();
                $requestDetail->status = "approved";
                $oldtotal = \app\models\science\parcel::find()->where("par_id='" . $selectItem . "'")->one();
                $newtotal = $oldtotal->par_total - $requestDetail->numberRequest;
                $oldtotal->par_total = $newtotal;
                $oldtotal->save();
                $requestDetail->save();
                $check = \app\models\science\RequestDetail::find()->where("requestId='" . $_GET["id"] . "' and status='wait'")->one();
                if (!isset($check->status)) {
                    $model = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
                    /* if ($model->requestTypeId == 2) {//now + 10 days from date approved--->to be edit
                      //$timestamp = strtotime("+10 days");
                      //$returnDate = date('Y-m-d H:i:s', $timestamp);
                      //$model->returnDate = $returnDate;
                      } */
                    $model->approver = Yii::$app->user->identity->user_id;
                    $model->dateApp = date('Y-m-d H:i:s');
                    $model->status = "approved";
                    $model->save();
                }
            }
            $userType = \app\models\science\User::find()->where("user_id='" . Yii::$app->user->identity->user_id . "'")->one(); //role
            $myAppendage = $userType->user_appendage;
            $dataProvider = new ActiveDataProvider([
                'query' => Request::find()
                        ->join('left join', 'user', 'user.user_id=request.userId')
                        //->where(['user.user_appendage' => $myAppendage])
                        ->where("user.user_appendage='" . $myAppendage . "' and request.status!='finished'")
            ]);
            return $this->render('index', ['dataProvider' => $dataProvider, 'right' => $right, 'msAlert' => $msAlert->status]);
        }//===============================================================================================End approve function =========================================================
        if (isset($_POST["alert"])) {//แจ้งเตือนให้ พนักงานมารับของ
            $alert = \app\models\science\RequestDetail::find()->where("requestId='" . $_GET["id"] . "'")->all();
            foreach ($alert as $a) {
                $a->status = "alert";
                $a->save();
            }
            $alert2 = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
            $alert2->status = "alert";
            $alert2->save();
            $dataProvider = new ActiveDataProvider([
                'query' => \app\models\science\Request::find()->where("status='approved' or status='alert' or status='inborrow'"),
            ]);
            return $this->render('index', ['model' => $this->findModel($id), 'dataProvider' => $dataProvider, 'right' => $right, 'msAlert' => $msAlert->status]);
        } else if (isset($_POST["finish"])) {//ปิดรายการ
            $finish = \app\models\science\RequestDetail::find()->where("requestId='" . $_GET["id"] . "'")->all();
            $borrow = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
            if ($borrow->requestTypeId == 2) {//ถ้าเป็นการยืมเปลี่ยนสถานะเป็น inborrow +กำหนดวันคืน
                foreach ($finish as $q) {
                    $q->status = "inborrow";
                    $q->save();
                }
                $finish2 = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
                $timestamp = strtotime("+10 days");
                $returnDate = date('Y-m-d H:i:s', $timestamp);
                $finish2->returnDate = $returnDate;
                $finish2->status = "inborrow";
                $finish2->save();
            } else {
                foreach ($finish as $q) {
                    $q->status = "finished";
                    $q->save();
                }
                $finish2 = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
                $finish2->status = "finished";
                $finish2->dateFinish = date('Y-m-d H:i:s');
                $finish2->save();
            }
            $dataProvider = new ActiveDataProvider([
                'query' => \app\models\science\Request::find()->where("status='approved' or status='alert' or status='inborrow'"),
            ]);
            return $this->render('index', ['model' => $this->findModel($id), 'dataProvider' => $dataProvider, 'right' => $right, 'msAlert' => $msAlert->status]);
        } else if (isset($_POST["returned"])) {
            $returned = \app\models\science\RequestDetail::find()->where("requestId='" . $_GET["id"] . "'")->all();
            $returned2 = \app\models\science\Request::find()->where("requestId='" . $_GET["id"] . "'")->one();
            foreach ($returned as $a) {
                $a->status = "finished";
                $a->save();
            }
            $returned2->status = "finished";
            $returbed2->dateFinish = date('Y-m-d H:i:s');
            $returned2->save();
            $dataProvider = new ActiveDataProvider([
                'query' => \app\models\science\Request::find()->where("status='approved' or status='alert' or status='inborrow'"),
            ]);
            return $this->render('index', ['model' => $this->findModel($id), 'dataProvider' => $dataProvider, 'right' => $right, 'msAlert' => $msAlert->status]);
        } else {
            return $this->render('view', [
                        'model' => $this->findModel($id), 'dataProvider' => $dataProvider, 'right' => $right, 'msAlert' => $msAlert->status
            ]);
        }
    }

    /**
     * Creates a new Request model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Request();
        if (isset($_GET["type"])) {
            $model->requestTypeId = $_GET["type"];
        }

        $requestDetail = new \app\models\science\RequestDetail();
        if (isset($_POST["Request"]["searchText"]) && !empty($_POST["Request"]["searchText"])) {
            $dataProvider = new ActiveDataProvider(['query' => \app\models\science\Parcel::find()->where("par_name like '" . $_POST["Request"]["searchText"] . "%%'"),
            ]);
        } else {
            $dataProvider = new ActiveDataProvider(['query' => \app\models\science\Parcel::find()->where("par_total>'0' order by par_id"),
            ]);
        }
        if (isset(Yii::$app->user->identity->user_id)) {
//save in to request
            if (isset($_POST["Request"]["reason"]) && !empty($_POST["Request"]["reason"])) {
                if (isset($_POST["selection"])) {
                    $model = new \app\models\science\Request();
                    $model->reason = $_POST["Request"]["reason"];
                    $model->date = date('Y-m-d h:i:s');
                    $model->status = "wait";
                    $model->requestTypeId = $_GET["type"];
                    $model->userId = Yii::$app->user->identity->user_id;
                    $model->save();
                    if ($model->save()) {
                        $requestId = Yii::$app->db->lastInsertID;

                        foreach ($_POST["selection"] as $selectItem) {
                            if (isset($_POST["number"][$selectItem]) && !empty($_POST["number"][$selectItem])) {
                                $requestDetail = new \app\models\science\RequestDetail();
                                $requestDetail->requestId = $requestId;
                                $requestDetail->parcelId = $selectItem;
                                $requestDetail->numberRequest = $_POST["number"][$selectItem];
                                $detail = \app\models\science\parcel::find()->where("par_id='" . $selectItem . "'")->one();
                                $requestDetail->parcelName = $detail->par_name;
                                $requestDetail->typeId = $detail->type_id;
                                $requestDetail->parSize = $detail->par_size;
                                $requestDetail->parUnit = $detail->par_unit;
                                $requestDetail->parPrice = $detail->par_price;
                                $requestDetail->parTotal = $detail->par_total;
                                $requestDetail->status = "wait";
                                $requestDetail->requestTypeId = $_GET["type"];
                                $requestDetail->save();
                            }
                        }
                        $dataProvider = new ActiveDataProvider(['query' => \app\models\science\Parcel::find(),]);
                        $model = new \app\models\science\Request();
                    }
                } else {

                }
            }
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
            return $this->render('view', [
                        'model' => $model, 'requestDetail' => $requestDetail, 'dataProvider' => $dataProvider
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
