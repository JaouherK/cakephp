<div class="top-band hidden-print">
    <div class="dropdown  zf-products hidden-xs">
        <a href="<?php echo $this->webroot; ?>accueils" class=" dropdown-toggle text-center">
            <?php echo $this->Html->image('log.png', array('class' => 'img', 'border' => '0', 'height' => '50px')) ?>
        </a>
    </div>

    <div class="quik-add multi-col-dropdown dropdown pull-left hidden-xs">
        <div data-toggle="dropdown"
             class="dropdown-toggle add-new circle-box cursor-pointer popovercontainer ember-view"
             title="">
            <i class="fa fa-plus fa-3x" style="color: white"></i>
        </div>
        <div class="dropdown-menu">
            <ul class="list-inline">
                <li>
                    <ul class="list-unstyled">
                        <li class="header">
                            &nbsp;&nbsp;<?= __('Fast input') ?>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>customers/add">
                                <i class="fa fa-user-plus"></i>
                                Contact
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>



    <div class="dropdown orglist-topband pull-right top-item-fixed-width ember-view" onclick="myFunction3()">
        <?php if ($this->Session->read('Auth.User.fb_img') != '') { ?>
            <img src="<?= $this->Session->read('Auth.User.fb_img') ?>" class="cp-pic">
        <?php } else { ?>
            <img
                src="https://api.adorable.io/avatars/100/<?= md5(strtolower(trim($this->Session->read('Auth.User.id')))) ?>.png"
                class="cp-pic">
        <?php } ?>
    </div>
    <div id="ember836" class="pull-right dropdown top-item user-notification ember-view hidden-xs"
         onclick="myFunction2()">
        <span class="cursor-pointer pull-right">
            <div id="ember838" class="popovercontainer ember-view" title="">
                <span class="badge-notification">1</span>
                <span class="top-icon"><i class="fa fa-bell-o fa-bigger"></i></span>
            </div>
        </span>
    </div>
    <a href="<?= $this->webroot ?>configurations" id="ember836"
       class="pull-right dropdown top-item user-notification ember-view hidden-xs" style="color: white !important;">
        <span class="cursor-pointer pull-right">
            <div id="ember838" class="popovercontainer ember-view" title="">
                <span class="top-icon"><i class="fa fa-cog fa-bigger"></i></span>
            </div>
        </span>
    </a>
</div>
<div id="flyout-with-topbar">

    <div class="hidden" id="notif">
        <div id="ember4370" class="flyout-sm  flyout ember-view">
            <div class="flyout-header clearfix">
                <div class="section aliceblue-bg notification-header">
                    <h5>
                    <span class="pull-right text-muted cursor-pointer font-xs" onclick="myFunction2()">
                    <svg class="icon icon-xs text-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
                    </svg>
                    </span>
                        <div class="font-large">Notifications</div>
                    </h5>
                </div>
            </div>
            <div class="notification-list flyout-body">

                <?php echo $this->Session->flash(); ?>
            </div>

        </div>
    </div>

    <div class="hidden" id="lama">
        <div id="ember4370" class="flyout-sm  flyout ember-view">
            <div class="flyout-header clearfix">
                <div class="section aliceblue-bg notification-header">
                    <h5>
                    <span class="pull-right text-muted cursor-pointer font-xs" onclick="myFunction()">
                    <svg class="icon icon-xs text-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
                    </svg>
                    </span>
                        <div class="font-large"><?= __('Page tips') ?></div>
                    </h5>
                </div>
            </div>
            <div class="flyout-body sidebar-body">

                <div id="ember3120" class="ember-view">
                    <div class="sub-section video-section clearfix">
                        <p class="text-uppercase">
                            <b><?= __('Videos') ?></b>
                        </p>
                        <?php
                        if (!empty($hint['videos'])) {
                            foreach ($hint['videos'] as $video) {
                                ?>
                                <a href="<?= $video['HintVideo']['link'] ?>">
                                    <div class="video-thumb-nail pull-left">
                                        <img src="<?= $this->webroot ?>img/astuce.png"
                                             title="<?= $video['HintVideo']['title'] ?>"
                                             alt="<?= $video['HintVideo']['title'] ?>">
                                    </div>
                                    <span class="f16"><?= $video['HintVideo']['title'] ?></span>
                                    <span class="label label-default"><?= $video['HintVideo']['length'] ?></span>
                                </a>
                            <?php }
                        } ?>
                        <?php if (empty($hint['videos'])) { ?>
                            <div class="alert alert-info">
                                No videos available yet for this section
                                <?php if ($_SESSION['Auth']['User']['role'] == 'admin') { ?>
                                    <a href="<?= $this->webroot ?>hintVideos/add/<?= $control ?>"
                                       class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-circle"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>


                <div id="ember3122" class="sub-section ember-view">
                    <p class="text-uppercase">
                        <b><?= __('FAQs') ?></b>
                    </p>
                    <?php if (!empty($hint['faqs'])) { ?>
                        <ul class="faq-list font-small">
                            <?php
                            foreach ($hint['faqs'] as $faq) {
                                ?>
                                <li>
                                    <a href="<?= $this->webroot?>hintFaqs/preview/<?= $faq['HintFaq']['id'] ?>" target="_blank" rel="noreferrer noopener">
                                        <?= $faq['HintFaq']['question'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <?php if (empty($hint['faqs'])) { ?>
                        <div class="alert alert-info">
                            No Faqs available yet for this menu
                            <?php if ($_SESSION['Auth']['User']['role'] == 'admin') { ?>
                                <a href="<?= $this->webroot ?>hintFaqs/add/<?= $control ?>"
                                   class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus-circle"></i>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>

                </div>


            </div>

        </div>
    </div>

    <div class="hidden" id="profile">
        <div id="ember8151" class="flyout-sm  flyout ember-view">
            <div class="flyout-header">
                <div style="border-bottom: 1px solid #EDEDED;" class="section aliceblue-bg">
                    <span class="close-details"
                          onclick="myFunction3()">
                        <svg
                            class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
                        </svg></span>
                    <div class="user-pro clearfix text-center">
                        <h3>
                            <?php if ($this->Session->read('Auth.User.fb_img') != '') { ?>
                                <img src="<?= $this->Session->read('Auth.User.fb_img') ?>" class="profile-pic">
                            <?php } else { ?>
                                <img
                                    src="https://api.adorable.io/avatars/285/<?= md5(strtolower(trim($this->Session->read('Auth.User.id')))) ?>.png"
                                    class="profile-pic">
                            <?php } ?>
                        </h3>
                        <div class="text-muted font-xxs user-id"> User
                            ID: <?= md5($this->Session->read('Auth.User.id')) ?></div>
                        <p>
                            <small class="text-muted over-flow"><?= $loguser['email'] ?></small>
                        </p>
                        <p class="profile-accounts">
                            <a href="<?php echo $this->webroot; ?>users/logout"
                               class="signout"><?= __('SIGN OUT') ?></a><br>
                            <a href="<?php echo $this->webroot; ?>representants/view"
                               class="My Profile"><?= __('View profile') ?></a>
                        </p>
                        <p class="profile-accounts">
                            <a href="https://goo.gl/82v8ko" class="Gravatar"
                               target="_blank"><?= __('Create your avatar') ?></a>
                        </p>
                        <div class="fb-login-button" data-max-rows="1" data-size="large"
                             data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false"
                             data-use-continue-as="true" id="authFB"></div>

                        <div id="status">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById('lama');
        x.classList.toggle("hidden");
    }
    function myFunction2() {
        var x = document.getElementById('notif');
        x.classList.toggle("hidden");
    }
    function myFunction3() {
        var x = document.getElementById('profile');
        x.classList.toggle("hidden");
    }
</script>

