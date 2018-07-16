<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@backendUrlManager', dirname(dirname(__DIR__)) . '/backend/config/urlManager.php');
Yii::setAlias('@frontendUrlManager', dirname(dirname(__DIR__)) . '/frontend/config/urlManager.php');
