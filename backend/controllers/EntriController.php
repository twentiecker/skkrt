<?php 

namespace backend\controllers;

use Yii;
use backend\models\Entri;
use backend\models\EntriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EntriController implements the CRUD actions for Entri model.
 */
class EntriController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        if (Yii::$app->user->identity->username == 'superadmin') {
            return [
                'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'only' => ['index', 'create', 'update'],
                    'rules' => [
                    // allow all POST requests
                        [
                            'allow' => true,
                            'verbs' => ['POST']
                        ],
                    // allow authenticated users
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ];

        } else {
            if(date('y-m-d') < '2020-07-07'){
                return [
                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'create', 'update'],
                        'rules' => [
                    // allow all POST requests
                            [
                                'allow' => true,
                                'verbs' => ['POST']
                            ],
                    // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                        ],
                    ],
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];
            } else {
              return [
                'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'rules' => [
                    // allow all POST requests
                        [
                            'allow' => true,
                            'verbs' => ['POST']
                        ],
                    // allow authenticated users
                        [
                            'actions' => ['index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ];  
        }
        
    }
}

    /**
     * Lists all Entri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EntriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Entri model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Entri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $q = substr(Yii::$app->user->identity->username, 0, 2);
        $w = substr(Yii::$app->user->identity->username, 2, 2);

        $query_kab = Entri::find()
        ->where(['b1r1' => $q, 'b1r2' => $w])
        ->count();

        if ($w == '00' || Yii::$app->user->identity->username == 'superadmin' || ($w != '00' && $query_kab >= 30)){
            return $this->redirect(['error']);
        } else {
            $model = new Entri();
            $model->b1r1 = $q;
            $model->b1r2 = $w;    
        }
        
        if (Yii::$app->request->isAjax && $model->load($_POST))
        {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Entri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->created_at = date('y-m-d h:i:s');

        if (Yii::$app->request->isAjax && $model->load($_POST))
        {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Entri model.
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
     * Finds the Entri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Entri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Entri::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
