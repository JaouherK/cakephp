<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Restricted Access - TN');
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>
        <?php // echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->fetch('meta');

    echo $this->Html->css('bootstrap');
    echo $this->Html->css('main');
    echo $this->Html->css('error');
    echo $this->fetch('css');
    ?>
    <style>
        html, body {
            /*background: #ECEDF0 none repeat scroll 0% 0%;*/
            font-family: "Open Sans", Arial, sans-serif;
            line-height: 22px;
            font-size: 13px;
            width: 100%;
        }

        label {
            font-weight: normal
        }
    </style>
    <?php
    echo $this->Html->script('libs/jquery-1.10.2.min');
    echo $this->Html->script('libs/bootstrap.min');
    echo $this->Html->script('libs/jquery.metisMenu');
    echo $this->Html->script('libs/admin');
    echo $this->Html->script('libs/error');
    echo $this->fetch('script');
    ?>
</head>

<body>

<div id="wrapper" class="full">


    <!-- Menu -->


    <img src="<?= $this->webroot ?>theme/Cakestrap/img/GB.jpg" id="bg" alt="">
    <div class="col-sm-8 hidden-xs">
        <div class="page-brand-info">
            <div class="brand">
                <h2 class="brand-text font-size-40"><?= $conf['Configuration']['admin_main_title'] ?>
                    <hr>
                </h2>
            </div>
            <p class="font-size-20">
                <?= $conf['Configuration']['admin_lead_sub_title'] ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
                    More details
                </button>

                <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body" style="color: black">
                            <?= $conf['Configuration']['admin_sub_title'] ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
    <div class="col-sm-4" style="background-color: white;     min-height: 100vh;">
        <div id="logo-central" class="text-center">
            <?php if ($conf['Configuration']['admin_display_img']) { ?>
                <img src="<?= $this->webroot ?>../img/logo.png" height="100px">
            <?php } ?>
        </div>

        <div>

            <?php echo $this->fetch('content'); ?>
        </div>
        <!-- /#content .container -->

        <!--<div id="footer" class="container">
        				<?php //Silence is golden ?>
        			</div><!-- /#footer .container -->
    </div>
</div>
<style>
    #bg {
        position: fixed;
        top: 0;
        left: 0;

        /* Preserve aspet ratio */
        min-width: 100%;
        min-height: 100%;
    }

    #logo-central {
        padding-top: 30px;
    }

    .btn-info {
        color: #fff;
        background-color: #89bc32;
        border-color: #32652b;
    }

    .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active {
        color: #fff;
        background-color: #32652b;
        border-color: #32652b;
    }

    .panel-body {
        padding-top: 0;
    }

    .brand-text {
        color: #fff;
        font-size: 40px !important;
    }

    .page-brand-info p {
        opacity: .6;
        max-width: 650px;
        font-size: 20px !important;
        color: #fff;

    }

    .modal-content p {
        opacity: .6;
        color: #000;

    }

    .page-brand-info {
        margin: 220px 100px 0 90px;
    }

</style>

</body>

</html>