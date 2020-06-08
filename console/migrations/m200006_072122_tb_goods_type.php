<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200006_072122_tb_goods_type
 */
/*
*
sakura 20200607
*
*/
class m200006_072122_tb_goods_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_goods_type` (
		    `tb_gtId` int(4) unsigned NOT NULL COMMENT 'wuzi',
			`tb_gtName` varchar(100) COMMENT 'temp',
			PRIMARY KEY (`tb_gtId`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='物资类别表';";
        $this->db->createCommand($sql)->execute();

        $sql = "INSERT INTO tb_goods_type VALUES (1, '食品'),
												 (2, '药品(处方药)'),
												 (3, '药品(非处方药)'),
												 (4, '医疗用品(耗材)'),
												 (5, '个人防护用品'),
												 (6, '生活用品'),
												 (7, '其他');";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_goods_type}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_goods_type
        
    // }

    // public function down()
    // {
    //     echo "m200006_072122_tb_goods_type cannot be reverted.\n";

    //     return false;
    // }
    
}
