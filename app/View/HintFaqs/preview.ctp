<div class="column content-column">
    <div class="fill header  topgrad hidden-print">
        <div class="list-filter">
            <a class="pagetips-title separationline pull-right" onclick="myFunction()">

                <i class="fa fa-lightbulb-o"></i>
                &nbsp;Hints
            </a>
            <div class="btn-toolbar over-flow text-muted font-xlarge">
                <?php echo $title; ?>
            </div>

        </div>
    </div>
    <div id="ember2410" class="scroll-y noscroll-x fill body scrollbox ember-view">

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td><strong><?php echo __('Last modified'); ?></strong></td>
                    <td>
                        <?php echo h($hintFaq['HintFaq']['modified']); ?>
                        &nbsp;
                    </td>
                </tr>
                </tbody>

            </table><!-- /.table table-striped table-bordered -->
            <div class="col-sm-10 col-sm-offset-1">
                <?php echo $hintFaq['HintFaq']['answer']; ?>
            </div>
        </div>

    </div>
</div>
