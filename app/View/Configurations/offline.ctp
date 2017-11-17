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
            <?php echo __('Maintenance/ offline'); ?>
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
            <?php

            echo $this->Form->create('Configuration', array('action' => 'gen_config', 'role' => 'form'));
            echo '<div class="form-group">';
            foreach ($off as $tem) {

                if (($tem[0] == 'offline') || ($tem[0] == 'display_offline_message')) {
                    echo '<hr><h4 class="col-sm-4">' . ucfirst(implode(" ", explode('_', $tem[0]))) . '</h4>';
                    echo '<label class="switch col-sm-8">';
                    if ($tem[1] == 1) {
                        echo $this->Form->input($tem[0],
                            array('label' => false, 'type' => 'checkbox', 'checked' => 'checked', 'div' => false));
                    } else {
                        echo $this->Form->input($tem[0],
                            array('label' => false, 'type' => 'checkbox', 'div' => false));
                    }

                    echo '<div class="slider"></div></label><div class="clearfix"></div><hr>';
                } else {
                    echo $this->Form->input($tem[0],
                        array(
                            'label' => ucfirst(implode(" ", explode('_', $tem[0]))),
                            'type' => 'text',
                            'value' => $tem[1],
                            'class' => 'form-control'
                        ));
                }


            }
            echo '</div>';

            echo $this->Form->end(array('Save', 'class' => 'btn btn-primary pull-right wide'));
            ?>
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