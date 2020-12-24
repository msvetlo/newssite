<?php

use yii\db\Migration;

/**
 * Class m201121_154723_add_test_users
 */
class m201121_154723_add_test_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        echo "Add test users\n";
        $this->insert(
            '{{%user}}', 
            [
                'username' => 'test',
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('test'),
                'email' => 'test@test.test',
                'created_at' => time(),
                'updated_at' => time(),
            ]
        );
        $this->insert(
            '{{%user}}', 
            [
                'username' => 'admin',
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('secret'),
                'email' => 'admin@test.test',
                'created_at' => time(),
                'updated_at' => time(),
            ]
        );
        $this->insert(
            '{{%user}}', 
            [
                'username' => 'inactive',
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('inactive'),
                'email' => 'inactive@test.test',
                'created_at' => time(),
                'updated_at' => time(),
                'status' => 9,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "Delete test users\n";
        $this->delete(
            '{{%user}}', 
            'username IN (:test, :admin, :noactive)', 
            [':test'=>'test', ':admin' => 'admin', ':noactive' => 'noactive',]
            );
    }
}
