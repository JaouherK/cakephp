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
            <?php echo __('Footer manager'); ?>
        </div>


    </div>
    <div id="ember1599" class="ember-view">
        <div id="ember1600" class="ember-view">
        </div>
    </div>

    <div class="scroll-y noscroll-x fill body scrollbox list-body">
        <div id="ember1601" class="ember-view">


        </div>
        <div class="table-responsive customviews-table col-sm-12">
            <div style="background-color: #e0e0e0;">
                <div class="col-sm-3">
                    <?php foreach ($f1 as $f) { ?>
                        <?php
                        echo $this->Html->Image('/footer_modules/' . $f['label'] . '.png', array(
                            'alt' => $f['label'],
                            'class' => 'img img-responsive'
                        ));
                        ?>
                    <?php } ?>
                </div>
                <div class="col-sm-3">
                    <?php foreach ($f2 as $f) { ?>
                        <?php
                        echo $this->Html->Image('/footer_modules/' . $f['label'] . '.png', array(
                            'alt' => $f['label'],
                            'class' => 'img img-responsive'
                        ));
                        ?>
                    <?php } ?>
                </div>
                <div class="col-sm-3">
                    <?php foreach ($f3 as $f) { ?>
                        <?php
                        echo $this->Html->Image('/footer_modules/' . $f['label'] . '.png', array(
                            'alt' => $f['label'],
                            'class' => 'img img-responsive'
                        ));
                        ?>
                    <?php } ?>
                </div>
                <div class="col-sm-3">
                    <?php foreach ($f4 as $f) { ?>
                        <?php
                        echo $this->Html->Image('/footer_modules/' . $f['label'] . '.png', array(
                            'alt' => $f['label'],
                            'class' => 'img img-responsive'
                        ));
                        ?>
                    <?php } ?>
                </div>


                <div class="clearfix"></div>
            </div>
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <div class="col-sm-3">
                    <?php echo $this->Form->create('Configuration',
                        array('action' => 'gen_footer', 'role' => 'form')); ?>
                    <h4>Footer <?= $i ?></h4>
                    <?php echo $this->Form->input('id_footer',
                        array('type' => 'hidden', 'class' => 'form-control', 'value' => 'footer' . $i)); ?>
                    <?php echo $this->Form->input('id_element',
                        array('type' => 'hidden', 'class' => 'form-control', 'value' => 'mod_f' . $i)); ?>
                    <hr>
                    <?php for ($j = 1; $j <= 5; $j++) { ?>

                        <div class="form-group">
                            <?php echo $this->Form->input('footerelement-' . $j, array(
                                'class' => 'form-control',
                                'options' => $items,
                                'label' => false,
                                'empty' => 'Choose a module'
                            )); ?>
                        </div>


                    <?php } ?>
                    <?php echo $this->Form->end(array('Save', 'class' => 'btn btn-primary pull-right wide')); ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        display: none;
    }

    /* The slider */
    .slider {
        position: absolute;
    / cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>