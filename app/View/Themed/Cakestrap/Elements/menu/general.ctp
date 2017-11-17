<div class="column list-column hidden-print column-small">
    <div style="border:0;padding-top:0" class="fill header zerotop">
        <h3>Manager</h3>
    </div>
    <div class="scroll-y noscroll-x fill body scrollbox">
        <div class="lpane-grp">
            <ul class="nav nav-pills nav-stacked">
                <?php if (in_array($level_config, array('conf1','HintVideo', 'HintFaq'))) { ?>
                    <li>
                        <a>
                            <span class="text-muted uppercase font-small">
                                <i class="fa fa-briefcase"></i> Configurations
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot; ?>configurations" id="ember2155"
                           class="<?php if ($level_config == 'conf1') echo 'active' ?> ember-view">
                            Global configuration
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot; ?>hintVideos" id="ember2155"
                           class="ember-view <?php if ($level_config == 'HintVideo') echo 'active' ?>">
                            Backend Videos
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot; ?>hintFaqs" id="ember2155"
                           class="ember-view <?php if ($level_config == 'HintFaq') echo 'active' ?>">
                            Backend FAQs
                        </a>
                    </li>

                <?php } ?>


            </ul>
        </div>
    </div>
</div>
