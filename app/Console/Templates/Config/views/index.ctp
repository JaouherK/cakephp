<div class="column content-column" xmlns="http://www.w3.org/1999/html">

    <div class="fill header topgrad hidden-print">


        <div class="btn-toolbar pull-right">

            <div class="btn-group">
                <?php echo "<?php echo \$this->Html->link(__('<i class=\"fa fa-plus\"></i> New'), array('action' => 'add'), array('class' => 'btn btn-primary popovercontainer ember-view', 'escape'=> false)); ?>"; ?>

            </div>


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
                    <?php
                    $done = array();
                    foreach ($associations as $type => $data) {
                        foreach ($data as $alias => $details) {
                            if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                                echo "\t\t\t\t<li ><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('class' => '')); ?></li> \n";
                                echo "\t\t\t\t<li ><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('class' => '')); ?></li> \n";
                                $done[] = $details['controller'];
                            }
                        }
                    }
                    ?>
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
            <?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?>
        </div>


    </div>
    <div id="ember1599" class="ember-view">
        <div id="ember1600" class="ember-view">
        </div>
    </div>

    <div class="scroll-y noscroll-x fill body scrollbox list-body">
        <div id="ember1601" class="ember-view">


        </div>
        <div class="table-responsive customviews-table ">


            <table class="table-striped table-bordered table-condensed table-hover col-sm-12">
                <thead>
                <tr>
                    <?php foreach ($fields as $field): ?>
                        <th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
                    <?php endforeach; ?>
                    <th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
                </tr>
                </thead>
                <tbody>
                <?php
                echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
                echo "\t<tr>\n";
                foreach ($fields as $field) {
                    $isKey = false;
                    if (!empty($associations['belongsTo'])) {
                        foreach ($associations['belongsTo'] as $alias => $details) {
                            if ($field === $details['foreignKey']) {
                                $isKey = true;
                                echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
                                break;
                            }
                        }
                    }
                    if ($isKey !== true) {
                        echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
                    }
                }

                echo "\t\t<td class=\"actions\">\n";
                echo "\t\t\t<?php echo \$this->Html->link('<i class=\"fa fa-eye\"></i>', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-default btn-xs', 'escape'=>false)); ?>\n";
                echo "\t\t\t<?php echo \$this->Html->link('<i class=\"fa fa-pencil-square-o\"></i>', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-default btn-xs', 'escape'=>false)); ?>\n";
                echo "\t\t\t<?php echo \$this->Form->postLink('<i class=\"fa fa-trash\"></i>', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-default btn-xs', 'escape'=>false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                echo "\t\t</td>\n";
                echo "\t</tr>\n";

                echo "<?php endforeach; ?>\n";
                ?>
                </tbody>
            </table>
            <center>

                <nav class='center-block'>
                    <ul class='pagination'>


                        <?php
                        echo "<?php if (\$this->Paginator->hasPrev()) {
                    echo \$this->Paginator->prev(\"<\", array('tag' => 'li'));
                }";

                        echo "echo \$this->Paginator->numbers(array(
                    'modulus' => 6,
                    'currentClass' => 'active',
                    'currentTag' => 'a',
                    'tag' => 'li',
                    'separator' => '',
                    'first' => 1,
                    'last' => 1,
                    'ellipsis' => '<li class=\"disabled\"><a>..</a></li>'));";

                        echo " if (\$this->Paginator->hasNext()) {
                    echo \$this->Paginator->next(\">\", array('tag' => 'li'));
                } ?>";


                        ?>
            </center>


        </div>
    </div>

</div>
<script>
    $('[rel="tooltip"]').tooltip('toggle');
    $('[rel="tooltip"]').tooltip('hide');
</script>


