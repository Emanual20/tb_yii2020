<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'userphone' => $this->integer()->notNull(),
            'userRealName' => $this->string(30) ->notNull(),
            'isAdmin' => $this->boolean()->defaultValue(false)->notNull()
        ], $tableOptions);
        $pw1 = Yii::$app->security->generatePasswordHash('123456');
        $aut1 = Yii::$app->security->generateRandomString();
        $aut2 = Yii::$app->security->generateRandomString();
        $time = time();
        $sql = "INSERT INTO user VALUES (DEFAULT, 'admin1', '$aut1', '$pw1', DEFAULT, '123@qq.com', 10, 1391885313, 1391885313, 123456, '王刚' ,1),
                                        (DEFAULT, 'admin2', '$aut2', '$pw1', DEFAULT, '1234@qq.com', 10, 1391885313, 1391885313, 654321, '李达' , 1);";

        $this->db->createCommand($sql)->execute();                               
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
