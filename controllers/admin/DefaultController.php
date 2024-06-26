<?php

namespace panix\mod\companies\controllers\admin;

use Yii;
use panix\mod\companies\models\Companies;
use panix\mod\companies\models\CompaniesSearch;
use panix\engine\controllers\AdminController;

/**
 * Class DefaultController
 * @package panix\mod\companies\controllers\admin
 */
class DefaultController extends AdminController
{
    public $icon = 'home';

    public function actions()
    {
        return [
            'delete' => [
                'class' => 'panix\engine\actions\DeleteAction',
                'modelClass' => Companies::class,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->pageName = Yii::t('companies/default', 'MODULE_NAME');
        if (Yii::$app->user->can("/{$this->module->id}/{$this->id}/*") || Yii::$app->user->can("/{$this->module->id}/{$this->id}/create")) {
            $this->buttons[] = [
                'label' => Yii::t('app/default', 'CREATE'),
                'url' => ['create'],
                'icon' => 'add',
                'options' => ['class' => 'btn btn-success']
            ];
        }
        $this->view->params['breadcrumbs'] = [
            $this->pageName
        ];

        $searchModel = new CompaniesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    public function actionUpdate($id = false)
    {
        $model = Companies::findModel($id);


        $isNew = $model->isNewRecord;


        if ($isNew) {
            $this->pageName = Yii::t('app/default', 'CREATE');
        } else {
            $this->pageName = Yii::t('companies/default', 'UPDATE', ['name' => $model->name]);
        }

        $this->view->params['breadcrumbs'] = [
            [
                'label' => Yii::t('companies/default', 'MODULE_NAME'),
                'url' => ['/admin/companies'],
            ],
            $this->pageName
        ];


        //$model->setScenario("admin");
        $post = Yii::$app->request->post();
        if ($model->load($post) && $model->validate()) {
            $model->save();
            return $this->redirectPage($isNew, $post);

        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionCreate()
    {
        return $this->actionUpdate(false);
    }
}
