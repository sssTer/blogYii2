<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 * Has foreign keys to the tables:
 *
 * - `user`
 * - `post`
 * - `comment`
 */
class m180716_081702_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'post_id' => $this->integer()->notNull(),
            'content' => $this->string(1000)->notNull(),
            'parent_id' => $this->integer(),
            'karma' => $this->integer(),
            'date' => $this->datetime(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-comment-author_id',
            'comment',
            'author_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-comment-author_id',
            'comment',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );

        // creates index for column `post_id`
        $this->createIndex(
            'idx-comment-post_id',
            'comment',
            'post_id'
        );

        // add foreign key for table `post`
        $this->addForeignKey(
            'fk-comment-post_id',
            'comment',
            'post_id',
            'post',
            'id',
            'CASCADE'
        );

        // creates index for column `parent_id`
        $this->createIndex(
            'idx-comment-parent_id',
            'comment',
            'parent_id'
        );

        // add foreign key for table `comment`
        $this->addForeignKey(
            'fk-comment-parent_id',
            'comment',
            'parent_id',
            'comment',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-comment-author_id',
            'comment'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-comment-author_id',
            'comment'
        );

        // drops foreign key for table `post`
        $this->dropForeignKey(
            'fk-comment-post_id',
            'comment'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            'idx-comment-post_id',
            'comment'
        );

        // drops foreign key for table `comment`
        $this->dropForeignKey(
            'fk-comment-parent_id',
            'comment'
        );

        // drops index for column `parent_id`
        $this->dropIndex(
            'idx-comment-parent_id',
            'comment'
        );

        $this->dropTable('comment');
    }
}
