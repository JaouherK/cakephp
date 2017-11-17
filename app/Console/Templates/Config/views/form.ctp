<div class="column content-column">
    <div class="fill header  topgrad hidden-print">
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
                    if (strpos($action, 'add') === false) {
                        echo "\t\t<?php echo \$this->Form->postLink(__('<i class=\"fa fa-trash\"></i>'), array('action' => 'delete',  \$this->Form->value('{$modelClass}.{$primaryKey}')), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?',  \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>\n";
                    }
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
            <div class="btn-toolbar over-flow text-muted font-xlarge">
                <?php echo "<?php  echo \$title; ?>"; ?>
            </div>
        </div>
    </div>
    <div id="ember2410" class="scroll-y noscroll-x fill body scrollbox ember-view">

        <div class="<?php echo $pluralVar; ?> form zb-txn-form">
            <div class="col-md-8">
                <?php echo "<?php echo \$this->Form->create('{$modelClass}', array('role' => 'form')); ?>\n"; ?>

                <fieldset>

                    <?php
                    foreach ($fields as $field) {
                        if (strpos($action, 'add') !== false && $field == $primaryKey) {
                            continue;
                        } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                            echo "\t\t\t\t\t<div class=\"form-group\">\n";
                            echo "\t\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array('class' => 'form-control')); ?>\n";
                            echo "\t\t\t\t\t</div><!-- .form-group -->\n";
                        }
                    }
                    if (!empty($associations['hasAndBelongsToMany'])) {
                        foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                            echo "\t\t\t\t\t<div class=\"form-group\">\n";
                            echo "\t\t\t\t\t\t\t<?php echo \$this->Form->input('{$assocName}');?>\n";
                            echo "\t\t\t\t\t</div><!-- .form-group -->\n";
                        }
                    }
                    echo "\n";
                    echo "\t\t\t\t\t<?php echo \$this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>\n";
                    ?>

                </fieldset>

                <?php echo "\t\t\t<?php echo \$this->Form->end(); ?>\n"; ?>
            </div>
        </div><!-- /.form -->
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