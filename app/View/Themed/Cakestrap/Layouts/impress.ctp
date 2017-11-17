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

$cakeDescription = __d('cake_dev', 'TN Manager');
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        tnPanel
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->fetch('meta');

    echo $this->Html->css('bootstrap');

    echo $this->Html->css('main');
    echo $this->Html->css('style1');
    echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    echo $this->fetch('css');
    ?>
    <?php
    echo $this->Html->script('libs/modernizr');
    echo $this->Html->script('libs/jquery-1.10.2.min');
    echo $this->Html->script('libs/bootstrap.min');

    echo $this->Html->script('libs/jquery.metisMenu');
    echo $this->Html->script('libs/nanoscroller');

    echo $this->Html->script('libs/admin');



    echo $this->fetch('script');
    ?>

</head>

<body>


    <div id="page-wrapper" style="margin-left: 20px">
        <div class="row">
            <br>

            <div class="col-lg-12">
                <div>
<!--                    --><?php //echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
                <!-- /#content .container -->

                <!--<div id="footer" class="container">
        				<?php //Silence is golden ?>
        			</div><!-- /#footer .container -->
            </div>
        </div>

    </div>


</body>

</html>