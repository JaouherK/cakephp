<div class="column list-column expanded-list-column">
    <div class="fill list-header topgrad hidden-print">
        <div class="list-filter">
            <a class="pagetips-title separationline pull-right" onclick="myFunction()">

                <i class="fa fa-lightbulb-o"></i>
                &nbsp;Hints
            </a>
            <div class="btn-toolbar pull-right">
                <div class="btn-group">
                    <?php
                    echo "\t\t<?php echo \$this->Html->link(__('<i class=\"fa fa-plus\"></i> New'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>\n";
                    ?>
                </div>
                <div class="btn-group">
                    <?php
                    echo "\t\t<?php echo \$this->Html->link(__('<i class=\"fa fa-edit\"></i>'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-info', 'escape' => false)); ?>\n";
                    echo "\t\t<?php echo \$this->Form->postLink(__('<i class=\"fa fa-trash\"></i>'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                    echo "\t\t<?php echo \$this->Html->link(__('<i class=\"fa fa-tasks\"></i>'), array('action' => 'index'), array('class' => 'btn btn-info', 'escape' => false)); ?>\n";

                    ?>

                </div>

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
                                    echo "\t\t<li ><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('class' => '')); ?> </li>\n";
                                    echo "\t\t<li ><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('class' => '')); ?> </li>\n";
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
            <div id="ember1731" class="dropdown clearfix list-title ember-view">
                <a data-toggle="dropdown" class="dropdown-toggle  ">
                    <?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?> <?= ucfirst($title) ?>
                </a>

            </div>
        </div>
    </div>
    <div id="ember2410" class="scroll-y noscroll-x fill body scrollbox ember-view">

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                <?php
                foreach ($fields as $field) {
                    $isKey = false;
                    if (!empty($associations['belongsTo'])) {
                        foreach ($associations['belongsTo'] as $alias => $details) {
                            if ($field === $details['foreignKey']) {
                                $isKey = true;
                                echo "<tr>";
                                echo "\t\t<td><strong><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></strong></td>\n";
                                echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}']), array('class' => '')); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
                                echo "</tr>";
                                break;
                            }
                        }
                    }
                    if ($isKey !== true) {
                        echo "<tr>";
                        echo "\t\t<td><strong><?php echo __('" . Inflector::humanize($field) . "'); ?></strong></td>\n";
                        echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table><!-- /.table table-striped table-bordered -->
        </div>

        <?php
        if (!empty($associations['hasOne'])) :
            foreach ($associations['hasOne'] as $alias => $details): ?>
                <div class="related">
                    <h3><?php echo "<?php echo __('Related " . Inflector::humanize($details['controller']) . "'); ?>"; ?></h3>
                    <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
                    <table class="table table-striped table-bordered">
                        <?php
                        foreach ($details['fields'] as $field) {
                            echo "<tr>";
                            echo "\t\t<td><strong><?php echo __('" . Inflector::humanize($field) . "'); ?></strong></td>\n";
                            echo "\t\t<td><strong><?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</strong></td>\n";
                            echo "</tr>";
                        }
                        ?>
                    </table><!-- /.table table-striped table-bordered -->
                    <?php echo "<?php endif; ?>\n"; ?>
                    <div class="actions">
                        <?php echo "<li><?php echo \$this->Html->link(__('<i class=\"icon-pencil icon-white\"></i> Edit " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}']), array('class' => 'btn btn-primary', 'escape' => false)); ?>\n"; ?>
                    </div><!-- /.actions -->
                </div><!-- /.related -->
                <?php
            endforeach;
        endif;

        if (empty($associations['hasMany'])) {
            $associations['hasMany'] = array();
        }
        if (empty($associations['hasAndBelongsToMany'])) {
            $associations['hasAndBelongsToMany'] = array();
        }
        $relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
        $i = 0;
        foreach ($relations as $alias => $details):
            $otherSingularVar = Inflector::variable($alias);
            $otherPluralHumanName = Inflector::humanize($details['controller']);
            ?>

            <div class="related">

                <h3><?php echo "<?php echo __('Related " . $otherPluralHumanName . "'); ?>"; ?></h3>

                <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <?php
                            foreach ($details['fields'] as $field) {
                                echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
                            }
                            ?>
                            <th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        echo "\t<?php
										\$i = 0;
										foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
                        echo "\t\t<tr>\n";
                        foreach ($details['fields'] as $field) {
                            echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
                        }

                        echo "\t\t\t<td class=\"actions\">\n";
                        echo "\t\t\t\t<?php echo \$this->Html->link(__('View'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}']), array('class' => 'btn btn-default btn-xs')); ?>\n";
                        echo "\t\t\t\t<?php echo \$this->Html->link(__('Edit'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}']), array('class' => 'btn btn-default btn-xs')); ?>\n";
                        echo "\t\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
                        echo "\t\t\t</td>\n";
                        echo "\t\t</tr>\n";

                        echo "\t<?php endforeach; ?>\n";
                        ?>
                        </tbody>
                    </table><!-- /.table table-striped table-bordered -->
                </div><!-- /.table-responsive -->

                <?php echo "<?php endif; ?>\n\n"; ?>

                <div class="actions">
                    <?php echo "<?php echo \$this->Html->link('<i class=\"icon-plus icon-white\"></i> '.__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>"; ?>
                </div><!-- /.actions -->

            </div><!-- /.related -->

        <?php endforeach; ?>
    </div>
</div>

<?php echo "<?php echo \$this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>" ?>

<script type="text/javascript">

    var basePath = "<?php echo Router::url('/'); ?>";

    CKEDITOR.replace('ProductDescription', {
        filebrowserBrowseUrl: basePath + 'js/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: basePath + 'js/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: basePath + 'js/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: basePath + 'js/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: basePath + 'js/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: basePath + 'js/kcfinder/upload.php?type=flash'
    });

</script>
