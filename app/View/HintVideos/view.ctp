<div class="column content-column">
    <div class="fill header  topgrad hidden-print">
        <div class="list-filter">
            <a class="pagetips-title separationline pull-right" onclick="myFunction()">

                <i class="fa fa-lightbulb-o"></i>
                &nbsp;Hints
            </a>
            <div class="btn-toolbar pull-right">
                <div class="btn-group">
                    		<?php echo $this->Html->link(__('<i class="fa fa-plus"></i> New'), array('action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
                <div class="btn-group">
                    		<?php echo $this->Html->link(__('<i class="fa fa-edit"></i>'), array('action' => 'edit', $hintVideo['HintVideo']['id']), array('class' => 'btn btn-info', 'escape' => false)); ?>
		<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $hintVideo['HintVideo']['id']), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?', $hintVideo['HintVideo']['id'])); ?>
		<?php echo $this->Html->link(__('<i class="fa fa-tasks"></i>'), array('action' => 'index'), array('class' => 'btn btn-info', 'escape' => false)); ?>

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
                <?php  echo $title; ?>            </div>

        </div>
    </div>
    <div id="ember2410" class="scroll-y noscroll-x fill body scrollbox ember-view">

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Controller'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['controller']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Link'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['link']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Length'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['length']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['modified']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Active'); ?></strong></td>
		<td>
			<?php echo h($hintVideo['HintVideo']['active']); ?>
			&nbsp;
		</td>
</tr>                </tbody>
            </table><!-- /.table table-striped table-bordered -->
        </div>

            </div>
</div>

<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>
<script type="text/javascript">

    var basePath = "/";

    CKEDITOR.replace('ProductDescription', {
        filebrowserBrowseUrl: basePath + 'js/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: basePath + 'js/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: basePath + 'js/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: basePath + 'js/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: basePath + 'js/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: basePath + 'js/kcfinder/upload.php?type=flash'
    });

</script>
