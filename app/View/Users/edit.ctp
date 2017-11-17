<div class="column content-column" xmlns="http://www.w3.org/1999/html">

    <div class="fill header topgrad hidden-print">


        <div class="btn-toolbar pull-right">


            <a id="ember1522" class="btn btn-primary popovercontainer ember-view"
               data-original-title="" title="" href="<?= $this->webroot ?>faqs/add">
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
echo $this->Form->create('User', array('role' => 'form'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo '<div class="form-group">';
echo $this->Form->input('username', array('label' => 'Username', 'type' => 'text', 'required' => 'required', 'class' => 'form-control'));
echo $this->Form->input('password', array('label' => 'password', 'type' => 'password', 'required' => 'required', 'class' => 'form-control'));
?>
<h5><b>Professional Email</b></h5>

<?php
echo '<div class="input-group">';
echo $this->Form->input('professional_email', array('aria-describedby' => "basic-addon1", 'for' => 'Trcategortitle', 'label' => false, 'required' => 'required', 'type' => 'text', 'class' => 'form-control col-sm-8'));
echo '<span class="input-group-addon" id="basic-addon1">@Keyincentive.com</span>
</div>';
?>

<?php
echo $this->Form->input('displayable_pseudonym', array('label' => 'Name to display articles', 'type' => 'text', 'required' => 'required', 'class' => 'form-control'));

echo $this->Form->input('role', array('label' => 'User Role', 'for' => 'Userrole', 'class' => 'form-control', 'options' => array('admin' => 'Super Administrator', 'mod' => 'Moderator', 'estim' => 'Estimator', 'shop' => 'Shop Keeper')));

echo '</div>';
?>
<div class="col-md-6">
    <?php
    echo '<div class="form-group">';
    echo $this->Form->input('nom', array('label' => 'Name', 'type' => 'text', 'required' => 'required', 'class' => 'form-control'));
    echo $this->Form->input('prenom', array('label' => 'Surname', 'type' => 'text', 'class' => 'form-control'));
    echo $this->Form->input('email', array('label' => 'E-mail', 'type' => 'text', 'required' => 'required', 'class' => 'form-control'));
    echo $this->Form->input('societe', array('label' => 'Company', 'type' => 'text', 'class' => 'form-control'));
    echo '</div>';
    ?>
</div>
<div class="col-md-6">
    <?php
    echo '<div class="form-group">';
    echo $this->Form->input('mobile', array('label' => 'Mobile', 'type' => 'text', 'class' => 'form-control'));
    echo $this->Form->input('address', array('label' => 'Address', 'type' => 'text', 'class' => 'form-control'));
    echo $this->Form->input('website', array('label' => 'Website', 'type' => 'text', 'class' => 'form-control'));
    echo $this->Form->input('linkedin', array('label' => 'LinkedIn', 'type' => 'text', 'class' => 'form-control'));
    echo '</div>';
    ?>
</div>
<?php if ($user['User']['is_tech'] == 0) { ?>

    <button type='button' id='hideshow' class="btn btn-warning pull-left wide">
    <span class="fa-stack fa-lg">
    <i class="fa fa-user-secret fa-stack-2x"></i>
    </span>
        Assign to tech team
    </button>
    <button type='button' id='hideshow2' class="btn btn-warning pull-left wide" style="display: none;">
        <span class="fa-stack fa-lg">
  <i class="fa fa-user-secret fa-stack-1x"></i>
  <i class="fa fa-ban fa-stack-2x text-danger"></i>
</span>
        Delete from tech team
    </button>
<?php } else { ?>
    <button type='button' id='hideshow' class="btn btn-warning pull-left wide" style="display: none;">
        <span class="fa-stack fa-lg">
        <i class="fa fa-user-secret fa-stack-2x"></i>
        </span>
        Assign to tech team
    </button>
    <button type='button' id='hideshow2' class="btn btn-warning pull-left wide"><span class="fa-stack fa-lg">
  <i class="fa fa-user-secret fa-stack-1x"></i>
  <i class="fa fa-ban fa-stack-2x text-danger"></i>
</span>
        Delete from tech team
    </button>
<?php } ?>
<div class="clearfix"></div>
<br>
<?php if ($user['User']['is_tech'] == 0) { ?>
<div id='content' style="display: none">
    <?php } else { ?>
    <div id='content'>
        <?php } ?>

        <?php
        echo '<div class="form-group">';
        echo $this->Form->input('is_tech', array('type' => 'text', 'required' => 'required', 'class' => 'form-control'));
        echo $this->Form->input('tech_position', array('label' => 'Position', 'type' => 'text', 'class' => 'form-control'));
        echo $this->Form->input('tech_status', array('label' => 'Contract status', 'type' => 'text', 'class' => 'form-control'));
        echo $this->Form->input('tech_rate', array('label' => 'Rate/hour', 'type' => 'text', 'class' => 'form-control'));
        echo $this->Form->input('tech_sell_rate', array('label' => 'Sell Rate/hour', 'type' => 'text', 'class' => 'form-control'));
        echo $this->Form->input('tech_assign_date', array('label' => 'Start date', 'type' => 'text', 'class' => 'form-control'));
        echo '</div>';
        ?>
    </div>
    <?php
    echo $this->Form->end(array('Create user', 'class' => 'btn btn-primary pull-right wide'));
    ?>
    <a class="btn btn-default pull-left wide" href="<?php echo $this->webroot; ?>Users" role="button"><i
            class="fa fa-arrow-circle-left"></i> Cancel</a>
    </div>
    </div>
    <script>
        jQuery(document).ready(function () {
            jQuery('#hideshow').on('click', function (event) {
                jQuery('#content').toggle('show');
                jQuery("#UserIsTech").val(1);
                $('#hideshow').hide();
                $('#hideshow2').show();

            });
            jQuery('#hideshow2').on('click', function (event) {
                jQuery('#content').toggle('show');

                jQuery("#UserIsTech").val(0);
                jQuery("#UserTechPosition").val("");
                jQuery("#UserTechStatus").val("");
                jQuery("#UserTechRate").val(" ");
                jQuery("#UserTechAssignDate").val(" ");
                $('#hideshow2').hide();
                $('#hideshow').show();

            });
        });
        $( function() {
            $( "#UserTechAssignDate" ).datepicker({ dateFormat: 'dd-mm-yy' });
        } );
    </script>