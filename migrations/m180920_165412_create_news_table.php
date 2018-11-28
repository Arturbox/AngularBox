<?php
use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180920_165412_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(400),
            'keywords' => $this->string(400),
            'content' => $this->text(),
            'status' => $this->boolean()->defaultValue(0),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->dateTime(),
            'deleted_at' => $this->dateTime()
        ], $tableOptions);



        $data = [
            ["title 1","content 1"],
            ["title 2","content 2"],
            ["title 3","content 3"]
        ];
        $this->batchInsert('news', ['title','content'],$data);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
