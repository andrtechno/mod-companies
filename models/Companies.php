<?php

namespace panix\mod\companies\models;

use panix\lib\google\maps\overlays\Animation;
use Yii;
use panix\mod\contacts\models\MarkersQuery;
use panix\mod\contacts\models\Maps;
use panix\engine\db\ActiveRecord;

/**
 * Class Markers
 *
 * @property integer $id
 * @property integer $map_id
 * @property float $opacity
 * @property string $name
 * @property string $content_body
 * @property boolean $draggable
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
            [['address','name'], 'string', 'max' => 255],
        ];
    }


}
