<div class="column content-column" xmlns="http://www.w3.org/1999/html">

    <div class="fill header topgrad hidden-print">


        <div class="btn-toolbar pull-right">


            <button id="ember1522" class="btn btn-default popovercontainer ember-view disabled"
                    data-original-title="" title="">
                    <span>
                        <i class="fa fa-cog"></i>
                    </span>
            </button>
            <div class="btn-group list-sorter">
                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li class="divider"></li>
                    <li class="disabled">
                        <a>
                            <i class="fa fa-download"></i>
                            &nbsp;&nbsp;Import
                        </a>
                    </li>
                    <li class="disabled">
                        <a>
                            <i class="fa fa-upload"></i>
                            &nbsp;&nbsp;Export
                        </a>
                    </li>

                    <li class="divider"></li>
                    <li class="disabled">
                        <a>
                            <i class="fa fa-refresh"></i>
                            &nbsp;&nbsp;Refresh
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="pagetips-dropdown">
                        <a onclick="myFunction()">
                            <i class="fa fa-lightbulb-o"></i>
                            &nbsp;&nbsp;
                            Hints
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="btn-toolbar over-flow text-muted font-xlarge">
            <?php echo __('Server details'); ?>
        </div>


    </div>
    <div id="ember1599" class="ember-view">
        <div id="ember1600" class="ember-view">
        </div>
    </div>

    <div class="scroll-y noscroll-x fill body scrollbox list-body">
        <div class="col-sm-4">
            <?php
            // cakephp version
            //            $minCakeVersion = '2.5.4';
            $cakeVersion = Configure::version();

            //        if (version_compare($cakeVersion, $minCakeVersion, $operator)) {
            //            echo '<p class="success">' .
            //                __('CakePhp version %s %s %s', $cakeVersion, $operator, $minCakeVersion) . '</p>';
            //        } else {
            //            $check = false;
            //            echo '<p class="error">' . __('CakePHP version %s < %s', $cakeVersion, $minCakeVersion) . '</p>';
            //        }

            echo '<p class="success">' .
                __('CakePhp version <label class="text-info">%s</label> <br>
            PHP version <label class="text-info">%s</label> <br>
            Type of interface between web server and PHP <label class="text-info">%s</label> <br>

            ', $cakeVersion, phpversion(), php_sapi_name()) . '</p>';


            // tmp is writable
            if (is_writable(TMP)) {
                echo '<p class="success">' . __('Your tmp directory is <label class="text-info">writable</label>.') . '</p>';
            } else {
                $check = false;
                echo '<p class="error">' . __('Your tmp directory is <label class="text-info">NOT writable</label>.') . '</p>';
            }

            // config is writable
            if (is_writable(APP . 'Config')) {
                echo '<p class="success">' . __('Your config directory is <label class="text-info">writable</label>.') . '</p>';
            } else {
                $check = false;
                echo '<p class="error">' . __('Your config directory is <label class="text-info">NOT writable</label>.') . '</p>';
            }


            echo '<p class="success">' .
                sprintf(__('Absolute path to APP <label class="text-info">%s</label>'), APP) . '</p>';
            echo '<p class="success">' .
                sprintf(__('Full URL prefix  <label class="text-info">%s</label>'), FULL_BASE_URL) . '</p>';
            echo '<p class="success">' .
                sprintf(__('Path to the public images directory  <label class="text-info">%s</label>'),
                    IMAGES) . '</p>';
            ?>

        </div>
        <div class="col-sm-8" id="phpinfo">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <!--                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>-->
                    </div>

                    <h2 class="panel-title">Server Infos</h2>
                </header>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Server Name</dt>
                        <dd><?= $info['Server']['name'] ?></dd>
                        <dt>Server OS</dt>
                        <dd><?= $info['Server']['os'] ?></dd>
                        <dt>OS Type</dt>
                        <dd><?= $info['Server']['type'] ?></dd>
                        <dt>OS Version</dt>
                        <dd><?= $info['Server']['version'] ?></dd>
                        <dt>OS Release</dt>
                        <dd><?= $info['Server']['release'] ?></dd>
                        <dt>PHP Version</dt>
                        <dd><?= $info['Php']['version'] ?></dd>
                        <dt>Memory limit</dt>
                        <dd><?= $info['Php']['memory_limit'] ?></dd>
                        <dt>SAPI</dt>
                        <dd><?= $info['Php']['sapi'] ?></dd>
                    </dl>
                </div>
            </section>

            <div class="col-md-6">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            <!--                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>-->
                        </div>

                        <h2 class="panel-title">Memory</h2>
                        <p class="panel-subtitle">usage</p>
                    </header>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>Curent usage</dt>
                            <dd><?= $memory['current_usage'] ?></dd>
                            <dt>True Curent usage</dt>
                            <dd><?= $memory['current_usage_true'] ?></dd>
                            <dt>Usage Peak</dt>
                            <dd><?= $memory['peak_usage'] ?></dd>
                            <dt>True Usage Peak</dt>
                            <dd><?= $memory['peak_usage_true'] ?></dd>
                            <dt>Memory limit</dt>
                            <dd><?= $memory['memory_limit'] ?></dd>

                        </dl>
                    </div>
                </section>
            </div>

            <div class="col-md-6">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            <!--                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>-->
                        </div>

                        <h2 class="panel-title">Disk usage</h2>
                        <p class="panel-subtitle">Total space <label
                                class="text-danger"><?= $usage['files']['total'] ?></label></p>
                        <p class="panel-subtitle">Available <label
                                class="text-danger"><?= $usage['files']['available'] ?></label></p>
                    </header>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>APP used</dt>
                            <dd><?= $usage['assets']['used'] ?></dd>
                            <dt>Cache used</dt>
                            <dd><?= $usage['files']['used'] ?></dd>
                        </dl>
                    </div>
                    <div class="panel-footer">
                        <dl class="dl-horizontal">
                            <dt>Database</dt>
                            <dd><?= $usage['files']['used'] ?></dd>
                            <dt>Cache available</dt>
                            <dd><?= $usage['files']['available'] ?></dd>
                        </dl>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>
</div>
