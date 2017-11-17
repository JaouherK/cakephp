<div class="column content-column">
    <div class="fill header  topgrad hidden-print">
        <div class="list-filter">
            <a class="pagetips-title separationline pull-right" onclick="myFunction()">

                <i class="fa fa-lightbulb-o"></i>
                &nbsp;Hints
            </a>
            <div class="btn-toolbar pull-right">
                <div class="btn-group">
                    <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> New'), array('action' => 'add'),
                        array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
                <div class="btn-group">
                    <?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'),
                        array('action' => 'delete', $this->Form->value('HintFaq.id')),
                        array('class' => 'btn btn-danger', 'escape' => false),
                        __('Are you sure you want to delete # %s?', $this->Form->value('HintFaq.id'))); ?>
                    <?php echo $this->Html->link(__('<i class="fa fa-tasks"></i>'), array('action' => 'index'),
                        array('class' => 'btn btn-info', 'escape' => false)); ?>

                </div>

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
                <?php echo $title; ?>            </div>
        </div>
    </div>
    <div id="ember2410" class="scroll-y noscroll-x fill body scrollbox ember-view">

        <div class="hintFaqs form zb-txn-form">
            <div class="col-md-8">
                <?php echo $this->Form->create('HintFaq', array('role' => 'form')); ?>

                <fieldset>

                    <div class="form-group">
                        <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('controller',
                            array('class' => 'form-control', 'options' => $allMenus)); ?>
                        <a href="<?= $this->webroot ?>administrationMenus" class="pull-right">Manage</a>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('question', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('answer', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('active', array('class' => 'form-control')); ?>
                    </div><!-- .form-group -->

                    <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

                </fieldset>

                <?php echo $this->Form->end(); ?>
            </div>
        </div><!-- /.form -->
    </div>
</div>

<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>
<script type="text/javascript">

    var basePath = "/";

    CKEDITOR.replace('HintFaqAnswer', {
        filebrowserBrowseUrl: basePath + 'js/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: basePath + 'js/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: basePath + 'js/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: basePath + 'js/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: basePath + 'js/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: basePath + 'js/kcfinder/upload.php?type=flash'
    });

</script>