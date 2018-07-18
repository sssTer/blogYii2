<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field(Category::getInstance(), 'id')->dropDownList(
        ArrayHelper::map(
            Category::find()->all(),
            'id',
            'name'
        ),

        [
            'label'=> "Категория",
            'prompt' => 'Выбрать категорию...',
//            'value' =>
            'onchange' => '$.post(
                "' . Url::toRoute('user-place-status/list') . '",
                {id : $(this).val()},
                function(data) {
                    $("select#category").html(data).attr("id")
                }
            )'
        ])
    ?>

<!--    <?//= $form->field($model, 'category_id')->textInput() ?>-->

    <?= $form->field($model, 'comment_status')->textInput() ?>

    <?php

        $model->date = strtotime('Now');

    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
