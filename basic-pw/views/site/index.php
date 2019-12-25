<style>
        #home {
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
     display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
     align-items: left;
    position: relative;
    text-align: center;
}

.main-home {
  background: url('../web/img/background.png') no-repeat;
  height: 100vh;
  background-position: left;
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
}

#home h4 {
  color: #bfba55;
}

#home .btn {
  background: #ffffff;
  border: 2px solid #ffffff;
  border-radius: 100px;
  color: #444;
  font-family: 'Merriweather', serif;
  font-size: 10px;
  font-weight: bold;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 13px 22px;
  margin-top: 42px;
  transition: all 0.4s ease-in-out;
}

#home .btn:hover {
  background: transparent;
  border-color: #ffffff;
  color: #ffffff;
}

.overlay {
  background: rgba(0,0,0,0.2 );
  width: 100%;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.parallax-section {
  background-attachment: fixed !important;
  background-size: cover !important;
  overflow: hidden;
}

    </style>


<?php

/* @var $this yii\web\View */

$this->title = 'myBencana App';
?>
<div class="site-index">
    <div class="container">
        <section id="home" class="main-home parallax-section">
            <div class="overlay"></div>
            <div id="particles-js"></div>
        </section>
    </div>
   
</div>
