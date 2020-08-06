<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Carousel;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-light bg-light',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/demo']],
        ['label' => 'About', 'url' => ['/demo/about']],
        ['label' => 'Contact', 'url' => ['/demo/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/demo/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/demo/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();

    echo Carousel::widget([
        'items' => [
            // the item contains only the image
            '<img src="https://wallpapercave.com/wp/wp5203256.png"/>',
            // equivalent to the above
            ['content' => '<img src="https://i.pinimg.com/originals/1e/11/4f/1e114f1d36f5bce0b2859be5d68cf82f.png"/>'],
            // the item contains both the image and the caption
            [
                'content' => '<img src="https://i.pinimg.com/originals/69/70/0b/69700bebb1308a284e6854713eddb2e5.jpg"/>',
                'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                'captionOptions' => ['class' => ['d-none', 'd-md-block']]
            ],
        ]
    ]);
?>
</body>
</html>