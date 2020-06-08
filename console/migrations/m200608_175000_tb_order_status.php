<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m200608_175000_tb_order_status
 */
/*
*
sakura
*
*/
class m200608_175000_tb_order_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `tb_order_status` (
            `tb_osId` int(5) NOT NULL COMMENT '订单状态编号',
			`tb_osRemark` varchar(50) NOT NULL COMMENT '订单状态名称',
            PRIMARY KEY (`tb_osId`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='订单状态名称对应表';";
        $this->db->createCommand($sql)->execute();
		$sql = "INSERT INTO tb_order_status VALUES (1, '进行中'),
		                                           (2, '未支付'),
												   (3, '已支付'),
												   (4, '未发货'),
												   (5, '已发货'),
												   (6, '已完成');";
		$this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tb_order_status}}');
    }

    
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {
    //     //创建数据表tb_order_status
        
    // }

    // public function down()
    // {
    //     echo "m200608_175000_tb_order_status cannot be reverted.\n";

    //     return false;
    // }
    
}
