<?php

use yii\db\Migration;

/**
 * Class m230519_171116_budget
 */
class m230519_171116_budget extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		
		$this->createTable('budget', [
            'id' => $this->primaryKey(),
            'title' => $this->text()->notNull(),
			'category' => $this->text()->notNull(),
            'type' =>"ENUM('Gelir','Gider')",
			'amount' => $this->integer(11)->notNull(),
			'date' => $this->dateTime(),
            'author' => $this->integer(11)->defaultValue(1),
        ], $tableOptions);
       

    }

    public function down()
    {
        $this->dropTable('budget');
    }
}
