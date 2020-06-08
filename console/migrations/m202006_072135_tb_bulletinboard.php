<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m202006_072135_tb_bulletinboard
 */
/*
*
sakura 20200607
*
*/
class m202006_072135_tb_bulletinboard extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_bulletinboard` (
            `tb_bId` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '公告编号',
            `tb_bContent` varchar(200) DEFAULT NULL COMMENT '公告内容',
			`tb_bUserid` int(10) DEFAULT NULL COMMENT '公告发布者',
		    `tb_bPosttime` datetime DEFAULT NULL COMMENT '公告发布时间',
            PRIMARY KEY (`tb_bId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='公告表';";
        $this->db->createCommand($sql)->execute();

        $sql = "INSERT INTO tb_bulletinboard VALUES (DEFAULT, '浙江温州浙江温州江南皮革厂倒闭啦', 1811425, '2020-06-07 21:41:00'),
												 (DEFAULT, '窝窝头一块钱四个嘿嘿', 1811425, '2020-06-07 21:41:01'),
												 (DEFAULT, 'WOW熔火之心副本大螺丝掉落武器概率翻倍', 9999999, '2010-10-10 10:10:10');";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_bulletinboard}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_bulletinboard
        
    // }

    // public function down()
    // {
    //     echo "m202006_072135_tb_bulletinboard cannot be reverted.\n";

    //     return false;
    // }
    
}
