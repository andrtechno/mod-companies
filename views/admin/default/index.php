<?php

use panix\engine\widgets\Pjax;
use panix\engine\grid\GridView;

Pjax::begin([
    'dataProvider'=>$dataProvider
]);
echo GridView::widget([
    'tableOptions' => ['class' => 'table table-striped'],
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'layoutOptions' => ['title' => $this->context->pageName],
    'columns' => [
        'name',
        'address',
        'edrpou',
        'active',
        [
            'class' => 'panix\engine\grid\columns\ActionColumn',
        ],
    ],
]);
Pjax::end();

