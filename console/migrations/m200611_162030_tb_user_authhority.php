<?php

use yii\db\Migration;

/**
 * Class m200611_162030_tb_user_authhority
 */
class m200611_162030_tb_user_authhority extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$sql = "CREATE TABLE `tb_user_authority`  (
  `tb_uaId` int(0) UNSIGNED NOT NULL COMMENT '权限编号',
  `tb_uaRemark` varchar(100) CHARACTER SET utf8mb4  NULL DEFAULT NULL COMMENT '权限说明',
  `tb_uaIsmanager` tinyint(1) NULL DEFAULT NULL COMMENT '是否为管理员',
  PRIMARY KEY (`tb_uaId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4   COMMENT = '用户权限表' ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `tb_user_authority` VALUES (1, '管理员权限', 1);
INSERT INTO `tb_user_authority` VALUES (2, '用户权限', 0);
INSERT INTO `tb_user_authority` VALUES (3, '游客权限', 0);";
		$this->db->createCommand($sql)->execute();
    }
	
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_user_authority}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162030_tb_user_authhority cannot be reverted.\n";

        return false;
    }
    */
}
