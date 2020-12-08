<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Recipe - Easy recipes';
?>
<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link href="<?php echo $this->Url->webroot('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo $this->Url->webroot('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?php echo $this->Url->webroot('css/recipe.css') ?>" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Recipe</a> -->
  <?php echo $this->Html->link('Recipe', '/recipe', ['class' => 'navbar-brand'])?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <?php echo $this->Html->link('Home', '/recipe', ['class' => 'nav-item nav-link active'])?>
  
    <?php echo $this->Html->link('Logout', '/logout', ['class' => 'nav-item nav-link float-right ml-auto mr-0 color-red'])?>
    </div>
  </div>
</nav>

<div class="row justify-content-center" style= "font-size: 10px; ">
  <div class="col-md-6" style = "font-size: 10px; ">
  <?php echo $this->Flash->render(); ?>
  </div>
</div>

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
    </div>
</div>


<script src="<?php echo $this->Url->webroot('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo $this->Url->webroot('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo $this->Url->webroot('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo $this->Url->webroot('assets/js/sb-admin-2.min.js'); ?>"></script>
<script src="<?php echo $this->Url->webroot('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php echo $this->Url->webroot('assets/js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo $this->Url->webroot('assets/js/demo/chart-pie-demo.js'); ?>"></script>
</body>
</html>
