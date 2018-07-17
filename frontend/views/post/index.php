<?php

use common\models\User;
use common\models\Post;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'label' => 'User',
                'value' => function (Post $post) {
                    $user = User::findOne($post->author_id);
                    return ($user->username);
                },
                'filter' => ArrayHelper::map(
                    User::find()->all(),
                    'id',
                    'username'),
            ],
//                'author_id',
            'title',
            [
                'attribute' => 'content',
                'value' => function (Post $post) {
                    $length = 200;
                    $str = substr($post->content, 0, $length);
                    if (strlen($post->content) > $length) {
                        $str .= '...';
                    }
                    return $str;
                },
                'contentOptions' => [
                    'style' => "white-space: normal; max-width: 500px;"
                ],
            ],

            //'category_id',
            //'comment_status', //закрыт-открыт для комментирвоания
            //'karma',
            'date',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}',
            ],
        ],
    ]);
    ?>
</div>
