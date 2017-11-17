<div class="column content-column" xmlns="http://www.w3.org/1999/html">

    <div class="fill header topgrad hidden-print">


        <div class="btn-toolbar pull-right">


            <a id="ember1522" class="btn btn-primary popovercontainer ember-view"
               data-original-title="" title="" href="<?= $this->webroot ?>users/add">
                    <span>
                        <i class="fa fa-plus"></i> New
                    </span>
            </a>
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
            <?php echo $title; ?>
        </div>


    </div>
    <div id="ember1599" class="ember-view">
        <div id="ember1600" class="ember-view">
        </div>
    </div>

    <div class="scroll-y noscroll-x fill body scrollbox list-body">
        <div id="ember1601" class="ember-view">
            <div id="ember1600" class="ember-view">
                <?php
                $type = $this->Paginator->sortDir() === 'asc' ? 'up' : 'down';
                $icon = " <i class='fa fa-sort-" . $type . "'></i>";
                ?>
            </div>

        </div>
        <div class="table-responsive customviews-table">
            <?php

            /**
             * @author Webdev tips & tutorials
             * @site www.webdevtito.com
             * @creation-time  12:5
             * @copyright 3/2014
             */

            ?>
            <dl class="dl-horizontal">

                <?php echo $this->Html->Link('<i class="fa fa-edit"></i> Update',
                    array('action' => 'edit', $user['User']['id']),
                    array('class' => 'btn btn-warning pull-right', 'escape' => false)); ?>

                <div class=" col-sm-5">
                    <dt>Username</dt>
                    <dd><?php echo ucfirst($user['User']['username']); ?> </dd>
                    <dt>Name</dt>
                    <dd><?php echo ucfirst($user['User']['nom']); ?> </dd>
                    <dt>Surname</dt>
                    <dd><?php echo ucfirst($user['User']['prenom']); ?> </dd>
                    <dt>Role</dt>
                    <dd><?php echo ucfirst($user['User']['lib_role']); ?> </dd>
                    <dt>Company</dt>
                    <dd><?php echo ucfirst($user['User']['societe']); ?> </dd>
                    <dt>Website</dt>
                    <dd><?php echo ucfirst($user['User']['website']); ?> </dd>
                    <dt>LinkedIn</dt>
                    <dd><?php echo ucfirst($user['User']['linkedin']); ?> </dd>
                    <dt>Joined</dt>
                    <dd><?php echo date("d-m-Y", strtotime($user['User']['created'])); ?></dd>
                    <dt>Modified</dt>
                    <dd><?php echo date("d-m-Y", strtotime($user['User']['modified'])); ?></dd>
                    <dt>Email</dt>
                    <dd><?php echo $user['User']['email']; ?> </dd>
                    <dt>Mobile</dt>
                    <dd><?php echo $user['User']['mobile']; ?> </dd>
                    <dt>Address</dt>
                    <dd><?php echo ucfirst($user['User']['address']); ?> </dd>
                </div>
            </dl>


            <div class="col-sm-7" id="">

                <?php $i = 0;
                $icon = " <i class='fa fa-sort'></i>";
                ?>
                <div class="alert alert-info" role="alert">Duplicate IPs means the usage of different browsers to
                    discover the system
                </div>

                <table class="table table-responsive table-striped">
                    <thead>
                    <th class='tableur'></th>
                    <th>IP</th>
                    <th>Note</th>
                    <th>Action</th>

                    </thead>
                    <?php
                    foreach ($ips as $login) { ?>
                        <tr>
                            <td>
                                <?php if (($login['Visit']['state'] == 0))       //normal
                                {
                                    echo '<i class="fa fa-circle text-info fa-2x"></i>';
                                } else {
                                    if ($login['Visit']['state'] == 1)          //ok
                                    {
                                        echo '<i class="fa fa-circle text-success fa-2x"></i>';
                                    } else {
                                        if (($login['Visit']['state'] == 2))        //suspecious
                                        {
                                            echo '<i class="fa fa-circle  text-warning fa-2x"></i>';
                                        } else {
                                            if (($login['Visit']['state'] == 3))        //Dangerous
                                            {
                                                echo '<i class="fa fa-circle text-danger fa-2x"></i>';
                                            } else {
                                                if (($login['Visit']['state'] == 4))        //Blacklist
                                                {
                                                    echo '<i class="fa fa-circle fa-2x"></i>';
                                                } else {
                                                    echo '<i class="fa fa-question fa-2x"></i>';
                                                }
                                            }
                                        }
                                    }
                                }             //unknown
                                ?>
                            </td>
                            <td>
                                <a href="<?php echo $this->webroot; ?>/../../IP2Locat/master/index.php?ip=<?= $login['Visit']['user_ip'] ?>"
                                   target="_blank" class="text-primary">
                                    <?= $login['Visit']['user_ip'] ?>
                                </a>
                            </td>
                            <td>
                                <?php
                                echo substr($login['Visit']['notes'], 0, 30);
                                if (strlen($login['Visit']['notes']) > 30) {
                                    ?>
                                    <a onclick="document.getElementById('col<?= $login['Visit']['user_ip'] ?>').className = '';this.className='hidden';"><i
                                            class="fa fa-plus"></i></a>
                                    <span id="col<?= $login['Visit']['user_ip'] ?>" class="hidden">
                                                    <?= substr($login['Visit']['notes'], 30) ?>
                                                </span>
                                <?php } ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#m<?= $i ?>">
                                    <i class="fa fa-question"></i>
                                </button>
                                <div class="modal fade" id="m<?= $i++ ?>" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <h4><?= $login['Visit']['user_ip'] ?></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo $this->Form->create('Visit', array(
                                                    'url' => array(
                                                        'controller' => 'visits',
                                                        'action' => 'add'
                                                    )
                                                )); ?>
                                                <?php
                                                echo $this->Form->input('user_ip', array(
                                                    'type' => 'hidden',
                                                    'value' => $login['Visit']['user_ip']
                                                )); ?>
                                                <?php
                                                $state = array(
                                                    '0' => "Not decided",
                                                    '1' => "Green list",
                                                    '2' => "Suspicious",
                                                    '3' => "Dangerous",
                                                    '4' => "Blacklisted"
                                                );
                                                ?>
                                                <?php echo $this->Form->input('state',
                                                    array('class' => 'form-control', 'options' => $state)); ?>
                                                <br/>
                                                <?php echo $this->Form->input('notes',
                                                    array('class' => 'form-control ckeditor')); ?>
                                                <br/>
                                                <?php echo $this->Form->button('Submit',
                                                    array('class' => 'btn btn-primary pull-right')); ?>
                                                <?php echo $this->Form->end(); ?>
                                                <b>User browser</b><br>
                                                <?= $login['Visit']['user_browser'] ?><br>
                                                <b>Status</b><br>
                                                <?php if (($login['Visit']['state'] == 0))       //normal
                                                {
                                                    echo 'Blank';
                                                } else {
                                                    if ($login['Visit']['state'] == 1)          //ok
                                                    {
                                                        echo 'Green list';
                                                    } else {
                                                        if (($login['Visit']['state'] == 2))        //suspecious
                                                        {
                                                            echo 'Suspicious';
                                                        } else {
                                                            if (($login['Visit']['state'] == 3))        //Dangerous
                                                            {
                                                                echo 'Dangerous';
                                                            } else {
                                                                if (($login['Visit']['state'] == 4))        //Blacklist
                                                                {
                                                                    echo '<i class="fa fa-circle"></i>';
                                                                } else {
                                                                    echo '<i class="fa fa-question"></i>';
                                                                }
                                                            }
                                                        }
                                                    }
                                                }             //unknown
                                                ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    <?php } ?>
                </table>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <?php if (!empty($user['HisZone'])) { ?>
                    <div class="col-md-12">
                        <h2>Associated licence area</h2>
                        <table class="table table-striped table-hover">
                            <th class='tableur text-center'>n&deg;</th>
                            <th class='tableur text-center'>Area</th>
                            <?php
                            $n = 1;
                            foreach ($user['HisZone'] as $jobe['Visit']) {
                                echo '<tr><td class="text-center">';
                                echo $n++;
                                echo '</td><td class="text-center">';
                                echo $jobe['Visit']['zone'];
                                echo '</td></tr>';
                            }
                            unset($jobe['Visit']);
                            ?>
                        </table>
                    </div>
                <?php } ?>
                <?php if (!empty($user['HisVisits'])) { ?>
                    <div class="col-md-12">
                        <h2>Latest actions</h2>
                        <table class="table table-striped table-hover">
                            <th class='tableur text-center'>Date Time</th>
                            <th class='tableur text-center'>Browser</th>
                            <th class='tableur text-center'>IP</th>
                            <th class='tableur text-center'>Target</th>
                            <th class='tableur text-center'>Source</th>
                            <?php
                            $n = 1;
                            foreach ($ipd as $jobe) {
                                echo '<tr><td class="text-center">';
                                echo $this->Time->nice($jobe['Visit']['created']);
                                echo '</td><td class="text-center">';

                                echo substr($jobe['Visit']['user_browser'], 0, 30);
                                if (strlen($jobe['Visit']['user_browser']) > 30) {
                                    ?>
                                    <a onclick="document.getElementById('colo<?= $jobe['Visit']['user_ip'] ?>').className = '';this.className='hidden';"><i
                                            class="fa fa-plus"></i></a>
                                    <span id="colo<?= $jobe['Visit']['user_ip'] ?>" class="hidden">
                                                    <?= substr($jobe['Visit']['user_browser'], 30) ?>
                                                </span>
                                <?php }

                                echo '</td><td class="text-center">';
                                echo $jobe['Visit']['user_ip'];
                                echo '</td><td class="text-center">';
                                echo $jobe['Visit']['model'];
                                echo "->" . $jobe['Visit']['action'];
                                if ($jobe['Visit']['params'] != "") {
                                    echo "->" . $jobe['Visit']['params'];
                                }
                                echo '</td><td class="text-center">';
                                echo substr($jobe['Visit']['clicked_from'], 0, 30);
                                if (strlen($jobe['Visit']['clicked_from']) > 30) {
                                    ?>
                                    <a onclick="document.getElementById('coloo<?= $jobe['Visit']['user_ip'] ?>').className = '';this.className='hidden';"><i
                                            class="fa fa-plus"></i></a>
                                    <span id="coloo<?= $jobe['Visit']['user_ip'] ?>" class="hidden">
                                                    <?= substr($jobe['Visit']['clicked_from'], 30) ?>
                                                </span>
                                <?php }
                                echo '</td></tr>';
                            }
                            unset($jobe['Visit']);
                            ?>
                        </table>
                    </div>
                <?php } ?>
            </div>
            <a class="btn btn-default pull-right wide" href="<?php echo $this->webroot; ?>Users" role="button"><i
                    class="fa fa-arrow-circle-left"></i>Back</a>
            <br/><br/>

        </div>
    </div>
</div>