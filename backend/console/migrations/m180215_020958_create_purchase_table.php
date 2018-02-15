<?php

use yii\db\Migration;

/**
 * Handles the creation of table `purchase`.
 */
class m180215_020958_create_purchase_table extends Migration
{
    const TABLE_CATEGORY = "category";
    const TABLE_PURCHASE = "purchase";

    const FOREIGN_KEY_CATEGORY = "FK_" . self::TABLE_PURCHASE . "_" . self::TABLE_CATEGORY;

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(self::TABLE_PURCHASE, [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(256),
            'price' => $this->integer(),
            'transaction_date' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'place' => $this->string(256),
            'rating' => $this->integer(),
        ]);

        $this->addForeignKey(
            self::FOREIGN_KEY_CATEGORY,
            self::TABLE_PURCHASE, "category_id",
            self::TABLE_CATEGORY, "id",
            "CASCADE",
            "CASCADE"
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(self::FOREIGN_KEY_CATEGORY, self::TABLE_PURCHASE);
        $this->dropTable(self::TABLE_PURCHASE);
    }
}
