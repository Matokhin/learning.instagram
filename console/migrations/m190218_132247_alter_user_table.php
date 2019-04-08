<?php

use yii\db\Migration;

/**
 * Class m190218_132247_alter_user_table
 */
class m190218_132247_alter_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'about', $this->text());
        $this->addColumn('{{%user}}', 'type', $this->integer(3));
        $this->addColumn('{{%user}}', 'nickname', $this->string(70));
        $this->addColumn('{{%user}}', 'picture', $this->string());
        $this->addColumn('{{%user}}', 'password', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('{{%user}}', 'picture');
        $this->dropColumn('{{%user}}', 'nickname');
        $this->dropColumn('{{%user}}', 'type');
        $this->dropColumn('{{%user}}', 'about');
        $this->dropColumn('{{%user}}', 'password');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190218_132247_alter_user_table cannot be reverted.\n";

        return false;
    }
    */
}
