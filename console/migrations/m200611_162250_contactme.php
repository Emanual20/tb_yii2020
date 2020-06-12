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
		$sql = "CREATE TABLE `contactme` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `request_time` char(30) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `contactme` (`id`, `name`, `request_time`, `content`) VALUES
(1, '1', '1', '1'),
(2, '2', '22', '2'),
(3, '3', '3', '3')";
		$this->db->createCommand($sql)->execute();
		$sql="ALTER TABLE `contactme`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;";
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
