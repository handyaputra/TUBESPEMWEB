<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
			['label' => 'Database', 'url' => ['/site/database'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Data Bencana', 'url' => ['/data-master-bencana']],
			//['label' => 'Dt. Bencana', 'url' => ['/data-detail-bencana'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Permintaan', 'url' => ['/data-master-permintaan']],
			//['label' => 'Dt. Permintaan', 'url' => ['/site/database'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Pemberian', 'url' => ['/data-master-bantuan']],
			//['label' => 'Dt. Pemberian', 'url' => ['/site/database'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Peta GIS', 'url' => ['/site/peta']],
            ['label' => 'About', 'url' => ['/site/about'],'visible' => Yii::$app->user->isGuest],
            ['label' => 'Contact', 'url' => ['/site/contact'],'visible' => Yii::$app->user->isGuest],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer" style="background-color: #dee2e8; height: 35%;">
    <div class="container">
        <div class="body-content">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Alamat</h4>
					<p>Pandawa I Corp.</p>
                    <p>Jalan Surya Utama, RT 1 RW 23, Jebres, Kecamatan Jebres, Kota Surakarta. Kodepos: 57126</p>
                </div>
                <div class="col-lg-4">
                    <h4>Kontak</h4>
                    <span class="glyphicon glyphicon-envelope"></span><a href="#"> myBencana@gmail.com</a><br>
                    <span class="glyphicon glyphicon-phone"></span><a href="#"> +6281 234 567 899</a>
                </div>
                <div class="col-lg-4">
					<span class="pull-left">
						<a href="https://www.facebook.com/bencana" target="_blank" class="fa fa-facebook"></a>
						<a href="https://www.twitter.com/bencana" target="_blank" class="fa fa-twitter"></a>
						<a href="https://www.instagram.com/bencana" target="_blank" class="fa fa-instagram"></a>
						<a href="https://google.co.id/" target="_blank" class="fa fa-google"></a>
						<a href="https://youtube.com/" target="_blank" class="fa fa-youtube"></a>
					</span>
                </div>
            </div>
        <hr style="border-color: black;">
		<h4 style="text-align : center">Mybencana &copy;</h4>
            <div>
            <style>
                 .fa {
                    padding: 10px;
                    font-size: 25px;
                    text-align: center;
                    text-decoration: none;
                    margin: 5px auto;
                }

                .fa:hover {
                    opacity: 0.7;
                }
                .fa-facebook {
                    background: #3B5998;
                    color: white;
                }

                .fa-twitter {
                    background: #55ACEE;
                    color: white;
                }

                .fa-google {
                    background: #dd4b39;
                    color: white;
                }
                .fa-youtube {
                    background: #bb0000;
                    color: white;
                }

                .fa-instagram {
                    background: #125688;
                    color: white;
                }
            </style>          
        </div>
    </div>
</div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
