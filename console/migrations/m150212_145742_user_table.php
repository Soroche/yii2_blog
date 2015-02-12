<?php

use yii\db\Schema;
use yii\db\Migration;

class m150212_145742_user_table extends Migration
{
    public function up()
    {
    	$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createIndex('idx_users_username', '{{%users}}', 'username');

    }

    public function down()
    {
         $this->dropTable('{{%users}}');
    }
}
