<?php

/** @var yii\web\View $this */
/** @var common\models\User $user */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Assalomu alaykum  <?= $user->username ?>,

Quyidagi giper-havola orqali parolingizni yangilashingiz mumkin:

<?= $resetLink ?>
