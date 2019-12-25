<style>
#about .col-md-6 {
  padding-top: 22px;
  padding-bottom: 32px;
}

#about .col-md-6 img {
  padding: 22px 0px 22px 22px;
}

#about .col-md-4 {
  padding-bottom: 32px;
}

#about .col-md-4 img {
  padding-top: 12px;
}

</style>


<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    	<section id="about">
     <div class="container">
          <div class="row">
          			 <div class="col-md-6 col-sm-6">
                         <img src="../web/img/bnpb.jpg" style="width: 525px; height: 325px;"alt="About Image">
                    </div>		
                    <div class="col-md-6 col-sm-6">
                         <h3>MyBencana!</h3>
                         <p>MyBencana adalah sebuah Lembaga Pemerintah Non Departemen yang mempunyai tugas membantu Presiden Republik Indonesia dalam: mengkoordinasikan perencanaan dan pelaksanaan kegiatan penanganan bencana dan kedaruratan secara terpadu; serta melaksanakan penanganan bencana dan kedaruratan mulai dari sebelum, pada saat, dan setelah terjadi bencana yang meliputi pencegahan, kesiapsiagaan, penanganan darurat, dan pemulihan</p>
                         <p>BNPB dibentuk berdasarkan Undang Undang no. 24 tahun 2007 tentang Penanggulangan Bencana dan Peraturan Presiden Nomor 8 Tahun 2008. Sebelumnya badan ini bernama Badan Koordinasi Nasional Penanggulangan Bencana yang dibentuk berdasarkan Peraturan Presiden Nomor 83 Tahun 2005, menggantikan Badan Koordinasi Nasional Penanggulangan Bencana dan Penanganan Pengungsi yang dibentuk dengan Keputusan Presiden Nomor 3 Tahun 2001.</p>
                    </div>
          </div>
     </div>
</section>

</div>
