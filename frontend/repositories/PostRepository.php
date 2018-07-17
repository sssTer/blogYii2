<?php

namespace frontend\repositories;

use common\models\Post;

class PostRepository
{
    /**
     * @param Post $model
     * @param $id
     * @throws \Exception
     */

    public function FindUser(Post $model, $id)
    {

        $posts = $model->find()->where(
            ['author_id' => $id]
        )->all();

        if (empty($posts)) {
            return false;
        }
        else {
            return $posts;
        }

    }

}