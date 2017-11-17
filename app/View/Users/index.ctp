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

            <table class='col-sm-12 table table-condensed table-striped'>
                <thead>
                <th class='tableur '><?php echo $this->Paginator->sort('username', 'Login'); ?></th>
                <th class='tableur '><?php echo $this->Paginator->sort('professional_email', 'KI-email'); ?></th>
                <th class='tableur '><?php echo $this->Paginator->sort('nom', 'Name'); ?></th>
                <th class='tableur '><?php echo $this->Paginator->sort('lib_role', 'Role'); ?></th>
                <th class='tableur'>Created</th>
                <th class='tableur'>Active</th>
                <th class='tableur '>Edit</th>
                <th class='tableur '>Delete</th>
                </thead>
                <!-- Here is where we loop through our $posts array, printing out post info -->
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?php echo $this->Html->link($user['User']['username'],
                                array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
                        </td>
                        <td><?php echo $user['User']['professional_email']; ?></td>
                        <td><?php echo $user['User']['nom'] . " " . $user['User']['prenom']; ?></td>
                        <td><?php echo $user['User']['lib_role']; ?></td>
                        <td>
                            <?php echo date("d-m-Y", strtotime($user['User']['created'])); ?>
                        </td>
                        <td>
                            <?php
                            if ($user['User']['active'] == true) {
                                echo $this->Form->postLink('<i class="fa fa-thumbs-o-up text-success"></i>', array(
                                    'action' => 'update',
                                    $user['User']['id'],
                                    '0'
                                ), array('escape' => false));
                            } else {
                                echo $this->Form->postLink('<i class="fa fa-thumbs-down"></i>', array(
                                    'action' => 'update',
                                    $user['User']['id'],
                                    '1'
                                ), array('escape' => false));
                            }
                            ?></td>
                        <td>
                            <?php
                            echo $this->Html->link(
                                '<i class="fa fa-edit"></i>',
                                array('action' => 'edit', $user['User']['id']),
                                array('escape' => false)
                            );
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Form->postLink(
                                '<i class="fa fa-trash"></i>',
                                array('action' => 'delete', $user['User']['id']),
                                array('confirm' => 'Are you sure?', 'escape' => false)
                            );
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php unset($user); ?>
            </table>
            <center>
                <?php
                // pagination section
                echo "<nav class='center-block'><ul class='pagination'>";


                // 'prev' page button,
                // we can check using the paginator hasPrev() method if there's a previous page
                // save with the 'next' page button
                if ($this->Paginator->hasPrev()) {
                    echo $this->Paginator->prev("<", array('tag' => 'li'));
                }

                // the 'number' page buttons
                echo $this->Paginator->numbers(array(
                    'modulus' => 6,
                    'currentClass' => 'active',
                    'currentTag' => 'a',
                    'tag' => 'li',
                    'separator' => '',
                    'first' => 1,
                    'last' => 1,
                    'ellipsis' => '<li class="disabled"><a>..</a></li>'
                ));

                // for the 'next' button
                if ($this->Paginator->hasNext()) {
                    echo $this->Paginator->next(">", array('tag' => 'li'));
                }


                echo "</nav>";
                ?>
            </center>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>