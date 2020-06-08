<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m199906_072151_tb_user_authority
 */
/*
*
sakura 20200607
*
*/
class m199906_072151_tb_user_authority extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_user_authority` (
            `tb_uaId` int(4) unsigned NOT NULL COMMENT '权限编号',
            `tb_uaRemark` varchar(100) DEFAULT NULL COMMENT '权限说明',
			`tb_uaIsmanager` tinyint(1) DEFAULT NULL COMMENT '是否为管理员',
            PRIMARY KEY (`tb_uaId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户权限表';";
        $this->db->createCommand($sql)->execute();

        $sql = "INSERT INTO tb_user_authority VALUES (1, '管理员权限', 1),
												     (2, '用户权限', 0),
												     (3, '游客权限', 0);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_user_authority}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_user_authority
        
    // }

    // public function down()
    // {
    //     echo "m199906_072151_tb_user_authority cannot be reverted.\n";

    //     return false;
    // }
    
}
