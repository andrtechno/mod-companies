<?php

/**
 * Generation migrate by PIXELION CMS
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 *
 * Class m190320_104153_companies
 */

use panix\engine\db\Migration;
use panix\mod\companies\models\Companies;

class m190320_104153_companies extends Migration
{

    public function up()
    {

        $this->createTable(Companies::tableName(), [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(255),
            'address'=>$this->string(255),
            'phone' => $this->string(25),
            'edrpou' => $this->integer()->unsigned()->defaultValue(null),
            'active' => $this->boolean()->defaultValue(false),
            'width' => $this->string(5)
        ], $this->tableOptions);
    }

    public function down()
    {
        $this->dropTable(Companies::tableName());
    }

}
