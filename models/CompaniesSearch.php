<?php

namespace panix\mod\companies\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * CompaniesSearch represents the model behind the search form about `app\modules\companies\models\Companies`.
 */
class CompaniesSearch extends Companies {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id','edrpou'], 'integer'],
            [['name','address','phone'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params) {
        $query = Companies::find();

        $dataProvider = new ActiveDataProvider([
                    'query' => $query,

                ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }

}
