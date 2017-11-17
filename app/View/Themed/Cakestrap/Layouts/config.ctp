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
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?> - <?= isset($titl) ? $titl : $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');
    echo $this->Html->css('vendor');
    echo $this->Html->css('styler');
    echo $this->fetch('css');
    echo $this->Html->script('dropdowns');
    echo $this->fetch('script');
    ?>

</head>
<body data-gr-c-s-loaded="true" class="ember-application">

<div class="ember-view">
    <div class="ember-view">
        <div class="product ">
            <?php echo $this->element('menu/top'); ?>
            <?php echo $this->element('menu/nav-general'); ?>
            <?php echo $this->element('menu/general'); ?>


                <?php echo $this->fetch('content'); ?>


        </div>
    </div>

</div>
<?php
echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

echo $this->fetch('css');
echo $this->Html->script('st1');

echo $this->fetch('script');
?>
<div id="fb-root"></div>
</body>
</html>
