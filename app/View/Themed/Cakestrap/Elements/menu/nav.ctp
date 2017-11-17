<div
    class="<?php if ($this->Session->read('User.collapsed') == '1') {
        echo "tab-column-collapsed";
    } ?>   noscroll-x column tab-column main-tab-column hidden-print ember-view"
    id="menu">
    <ul class="nav nav-pills nav-stacked fill nav-bottom-spacing zi-main-tab">

        <li class="<?php if ($level == 'p1') echo "active" ?> ember-view">
            <a href="<?php echo $this->webroot; ?>"
               class="<?php if ($level == 'p1') echo "active" ?> ember-view">
                <i class="spaced fa fa-tachometer"></i> <?= __('Dashboard'); ?>
            </a>
        </li>


        <li class="divider-md"></li>


    </ul>
    <span class="collapse-expand" data-ember-action="" data-ember-action-1169="1169" onclick="toggler()"></span>
    <a class="expand-sidebar <?php if ($this->Session->read('User.collapsed') == '1') echo "shrink-sidebar" ?>"
       data-ember-action="" data-ember-action-1170="1170" id="shrink" onclick="toggler()">
        <i class="fa fa-chevron-circle-left icon-lpanel fa-lg <?php if ($this->Session->read('User.collapsed') == '1') echo 'hidden' ?>"
           aria-hidden="true" id="lefter"></i>
        <i class="fa fa-chevron-circle-right icon-lpanel fa-lg <?php if ($this->Session->read('User.collapsed') == '0') echo 'hidden' ?>"
           aria-hidden="true" id="righter"></i>
    </a>
    <div id="ember1179" class="ember-view"></div>
</div>

<script>
    function toggler() {
        var x = document.getElementById('menu');
        x.classList.toggle("tab-column-collapsed");
        var y = document.getElementById('shrink');
        y.classList.toggle("shrink-sidebar");
        var z = document.getElementsByClassName('column');
        z[1].classList.toggle("content-column-elapsed");
        z[2].classList.toggle("content-column-elapsed2");

        var h = document.getElementsByClassName('icon-lpanel');
        h[0].classList.toggle("hidden");
        h[1].classList.toggle("hidden");

        $.ajax({
            type: 'get',
            url: '<?php echo $this->Html->url(array(
                'controller' => 'accueils',
                'action' => 'stateSession',
                'ext' => 'json'
            )); ?>',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function (response) {
                if (response.error) {
                    alert(response.error);
                    console.log(response.error);
                }
                if (response.content) {

                }
            },
            error: function (e) {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }
    <?php if ($this->Session->read('User.collapsed') == '1') {?>
    $(document).ready(function () {
        var x = document.getElementsByClassName('column');
        x[1].classList.toggle("content-column-elapsed");
        x[2].classList.toggle("content-column-elapsed2");

    });
    <?php } ?>
</script>
<style>
    .content-column-elapsed {
        left: 40px !important;
        transition: left .3s ease-in-out;
    }

    .content-column-elapsed2 {
        left: 430px !important;
        transition: left .3s ease-in-out;
    }

    i.spaced {
        padding-right: 15px;
    }


</style>
