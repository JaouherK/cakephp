<script>
    $(document).ready(function () {
        $('#tester').on('click', function (e) {
            $('#loaders').removeClass('hidden');
            $('#targets').html("");

        });
    });
</script>



<div class="column content-column">
    <div class="fill header">
        <div class="btn-toolbar pull-right">
            <button id="ember1174" class="btn btn-link ember-view" onclick="myFunction()">
                <i class="fa fa-play-circle"></i>
                &nbsp;
                <?php echo __('Getting started') ?>
            </button>

        </div>
        <h3><?= __('Dashboard') ?></h3>
    </div>
    <div class="scroll-y noscroll-x fill body scrollbox dashboard-page">
        <?php echo $this->element('menu/dashboard_footer'); ?>


    </div>
</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>


