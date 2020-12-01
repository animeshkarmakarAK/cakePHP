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

$cakeDescription = 'CakePHP: the rapid development php framework';
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

    <link href="<?php echo $this->Html->webroot; ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo $this->Html->webroot; ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<?= $name ?>
<div id="wrapper">
    <?= $this->element('admin/sidebar') ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?= $this->element('admin/navbar') ?>
            <?= $this->fetch('content') ?>
        </div>
        <?= $this->element('admin/footer') ?>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $this->Html->webroot; ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $this->Html->webroot; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $this->Html->webroot; ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo $this->Html->webroot; ?>assets/js/sb-admin-2.min.js"></script>
<script src="<?php echo $this->Html->webroot; ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo $this->Html->webroot; ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo $this->Html->webroot; ?>assets/js/demo/chart-pie-demo.js"></script>
</body>
</html>
