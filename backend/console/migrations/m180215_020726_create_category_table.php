<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180215_020726_create_category_table extends Migration
{

    const TABLE_NAME = "category";

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string(256),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
