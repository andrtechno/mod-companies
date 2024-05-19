<?php

namespace panix\mod\companies\models;

use Yii;
use panix\engine\db\ActiveRecord;

/**
 * Class Companies
 *
 * @property integer $id
 * @property string $phone
 * @property string $address
 * @property string $name
 * @property integer $edrpou
 * @property boolean $active
 *
 * @package panix\mod\companies\models
 */
class Companies extends ActiveRecord
{

    const MODULE_ID = 'companies';


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%companies}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'trim'],
            [['active'], 'boolean'],
            [['edrpou'], 'integer'],
            [['address','name','phone'], 'string', 'max' => 255],
        ];
    }


}
