<?php

use yii\db\Migration;

/**
 * Class m200611_162250_contactme
 */
class m200611_162250_contactme extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `contactme`  (
  `id` char(20) CHARACTER SET utf8mb4   NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4   NOT NULL,
  `request_time` char(30) CHARACTER SET utf8mb4   NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4   NOT NULL,
  `cid` int(0) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '留言序号',
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4   ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `contactme` VALUES ('1', '1', '1', '1', 1);
INSERT INTO `contactme` VALUES ('2', '2', '22', '2', 2);";
		$this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contactme}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162250_contactme cannot be reverted.\n";

        return false;
    }
    */
}
