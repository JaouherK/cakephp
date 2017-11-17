<div class="column content-column" xmlns="http://www.w3.org/1999/html">

    <div class="fill header topgrad hidden-print">


        <div class="btn-toolbar pull-right">

            <div class="btn-group">
                <?php echo $this->Html->link(__('<i class="fa fa-plus"></i> New'), array('action' => 'add'),
                    array('class' => 'btn btn-primary popovercontainer ember-view', 'escape' => false)); ?>
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
            <?php echo __('Hint Videos'); ?>        </div>


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
                    <th><?php echo $this->Paginator->sort('controller'); ?></th>
                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                    <th><?php echo $this->Paginator->sort('link'); ?></th>
                    <th><?php echo $this->Paginator->sort('length'); ?></th>
                    <th><?php echo $this->Paginator->sort('active'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($hintVideos as $hintVideo): ?>
                    <tr>
                        <td><?php echo h($hintVideo['HintVideo']['controller']); ?>&nbsp;</td>
                        <td><?php echo h($hintVideo['HintVideo']['title']); ?>&nbsp;</td>
                        <td><?php echo h($hintVideo['HintVideo']['link']); ?>&nbsp;</td>
                        <td><?php echo h($hintVideo['HintVideo']['length']); ?>&nbsp;</td>
                        <td><?php echo h($hintVideo['HintVideo']['active']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link('<i class="fa fa-eye"></i>',
                                array('action' => 'view', $hintVideo['HintVideo']['id']),
                                array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
                            <?php echo $this->Html->link('<i class="fa fa-pencil-square-o"></i>',
                                array('action' => 'edit', $hintVideo['HintVideo']['id']),
                                array('class' => 'btn btn-default btn-xs', 'escape' => false)); ?>
                            <?php echo $this->Form->postLink('<i class="fa fa-trash"></i>',
                                array('action' => 'delete', $hintVideo['HintVideo']['id']),
                                array('class' => 'btn btn-default btn-xs', 'escape' => false),
                                __('Are you sure you want to delete # %s?', $hintVideo['HintVideo']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <center>

                <nav class='center-block'>
                    <ul class='pagination'>


                        <?php if ($this->Paginator->hasPrev()) {
                            echo $this->Paginator->prev("<", array('tag' => 'li'));
                        }
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
                        if ($this->Paginator->hasNext()) {
                            echo $this->Paginator->next(">", array('tag' => 'li'));
                        } ?>
            </center>


        </div>
    </div>

</div>
<script>
    $('[rel="tooltip"]').tooltip('toggle');
    $('[rel="tooltip"]').tooltip('hide');
</script>


