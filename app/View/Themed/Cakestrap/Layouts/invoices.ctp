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
        <?= strtoupper($title) ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->fetch('meta');

    echo $this->Html->css('bootstrap');
    echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css');
    echo $this->Html->css('vendor');
    echo $this->fetch('css');
    ?>
    <link rel="stylesheet" type="text/css" href="/administration/theme/Cakestrap/css/print.css" media="print" />
    <?php
    echo $this->Html->script('libs/modernizr');
    echo $this->Html->script('libs/jquery-1.10.2.min');
    echo $this->Html->script('libs/bootstrap.min');
    echo $this->fetch('script');
    ?>

</head>

<body>
<div id="wrapper">


    <div id="page-wrapper">

        <div class="col-lg-8 col-sm-12 col-lg-offset-2">
            <div>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>


    </div>


</div>


</body>

</html>