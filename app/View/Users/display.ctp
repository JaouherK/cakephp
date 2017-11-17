<?php

/**
 * @author Webdev tips & tutorials
 * @site www.webdevtito.com
 * @creation-time  12:5
 * @copyright 3/2014
 */

?>


<div class="page-header">
    <h1>
        User name: <?php echo h($user[0]['User']['username']); ?>
        <small><small>(<span class="red"><?php echo strtoupper(h($user[0]['User']['lib_role'])); ?>)<br />
    Creation Time: <span class="red"><?php echo strtoupper(h($user[0]['User']['created'])); ?></span> -
    Last modified: <span class="red"><?php echo strtoupper(h($user[0]['User']['modified'])); ?></span> </small></small>
    </h1>
</div>
<div class="clearfix"></div>
<div class="row">
    <?php if (!empty($user[0]['HisZone'])) { ?>
        <div class="col-md-12">
            <h2>Associated licence area</h2>
            <table class="table table-striped table-hover">
                <th class='tableur text-center'>n&deg;</th>
                <th class='tableur text-center'>Area</th>
                <?php
                $n = 1;
                foreach ($user[0]['HisZone'] as $jobe) {
                    echo '<tr><td class="text-center">';
                    echo $n++ ;
                    echo '</td><td class="text-center">';
                    echo $jobe['zone'];
                    echo '</td></tr>';
                }
                unset($jobe);
                ?>
            </table>
        </div>
    <?php } ?>
    <?php if (!empty($user[0]['HisVisits'])) { ?>
        <div class="col-md-12">
            <h2>Associated licence area</h2>
            <table class="table table-striped table-hover">
                <th class='tableur text-center'>Date Time</th>
                <th class='tableur text-center'>Browser</th>
                <th class='tableur text-center'>IP</th>
                <th class='tableur text-center'>Target</th>
                <th class='tableur text-center'>Source</th>
                <?php
                $n = 1;
                foreach ($user[0]['HisVisits'] as $jobe) {
                    echo '<tr><td class="text-center">';
                    echo $this->Time->nice($jobe['created']);
                    echo '</td><td class="text-center">';
                    echo $jobe['user_browser'];
                    echo '</td><td class="text-center">';
                    echo $jobe['user_ip'];
                    echo '</td><td class="text-center">';
                    echo $jobe['model'];
                    echo "->".$jobe['action'];
                    if ($jobe['params']!="")
                        echo "->".$jobe['params'];
                    echo '</td><td class="text-center">';
                    echo $jobe['clicked_from'];
                    echo '</td></tr>';
                }
                unset($jobe);
                ?>
            </table>
        </div>
    <?php } ?>
</div>
<a class="btn btn-default pull-right wide" href="<?php echo $this->webroot; ?>Users" role="button"><i class="fa fa-arrow-circle-left"></i>Back</a>
<br /><br />