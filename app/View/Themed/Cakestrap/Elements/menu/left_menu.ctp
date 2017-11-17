<nav class="navbar-default navbar-static-side navbar_fb2"
     role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav"
            id="side-menu">
            <li>
                <?php echo $this->Html->Link('Welcome ' . $this->Session->read('Auth.User.lib_role'), '#'); ?>
                <!-- /input-group -->
            </li>

            <li><a href="<?php echo $this->webroot; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <?php
            if (($this->Session->read('Auth.User.role') === 'admin') ||
                ($this->Session->read('Auth.User.role') === 'estim')
            ) {
                ?>

                <li>
                    <a href="#"><i class="fa fa-group"></i> Clients<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('p3', 'p4'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Clients/index/1" <?php if ($level == 'p3') echo "class='actual'" ?>>
                                Enabled Clients
                                <span class="badge pull-right"><?= $num_enabled_clients; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Clients/index/0" <?php if ($level == 'p4') echo "class='actual'" ?>>
                                Disabled Clients
                                <span class="badge pull-right"><?= $num_disabled_clients; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-pencil-square-o"></i> Jobs
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level  <?php if (in_array($level, array('j1', 'j2', 'j3', 'j4'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Jobs" <?php if ($level == 'j1') echo "class='actual'" ?>>
                                Active Jobs<span class="badge pull-right"><?= $num_jobs; ?></span></a></li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Jobs/index/1" <?php if ($level == 'j2') echo "class='actual'" ?>>
                                Canceled by Client<span class="badge pull-right"><?= $num_canceled_jobs; ?></span></a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Jobs/index/2" <?php if ($level == 'j3') echo "class='actual'" ?>>
                                Deleted by SysAdmin<span class="badge pull-right"><?= $num_deleted_jobs; ?></span></a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Jobs/scheduled_list" <?php if ($level == 'j4') echo "class='actual'" ?>>
                                Scheduled Jobs <span class="badge pull-right"><?= $num_schedul_jobs; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-pencil-square-o"></i> Estimations
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('e0', 'e1', 'e2', 'e3', 'e4', 'e5'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Estimations" <?php if ($level == 'e0') echo "class='actual'" ?>>
                                All Estimates
                                <span class="badge pull-right"><?= $num_estimations; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Estimations/show/0" <?php if ($level == 'e1') echo "class='actual'" ?>>
                                Draft
                                <span class="badge pull-right"><?= $num_blank_estimations; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Estimations/show/1" <?php if ($level == 'e2') echo "class='actual'" ?>>
                                Sent
                                <span class="badge pull-right"><?= $num_pend_estimations; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Estimations/show/2" <?php if ($level == 'e3') echo "class='actual'" ?>>
                                Re-Estimate
                                <span class="badge pull-right"><?= $num_revoked_estimations; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Estimations/invoiced" <?php if ($level == 'e5') echo "class='actual'" ?>>
                                Invoiced &nbsp;&nbsp;&nbsp;<i class="fa fa-circle text-success" aria-hidden="true"></i>
                                <span class="badge pull-right"><?= $num_invoices; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Estimations/show/4" <?php if ($level == 'e4') echo "class='actual'" ?>>
                                Cancelled &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-circle" aria-hidden="true" style="color: lightslategray"></i>
                                <span class="badge pull-right"><?= $num_arch_estimations; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>

            <?php } ?>
            <?php
            if (($this->Session->read('Auth.User.role') === 'admin') ||
                ($this->Session->read('Auth.User.role') === 'estim')
            ) {
                ?>
                <li>
                    <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        Invoices
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('i1', 'i2', 'i3', 'i4', 'i5'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Invoices" <?php if ($level == 'i1') echo "class='actual'" ?> >
                                All
                                <span class="badge pull-right"><?= $num_invoices; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Invoices/show/0" <?php if ($level == 'i2') echo "class='actual'" ?>>
                                Ongoing job
                                <span class="badge pull-right"><?= $num_ongoing_invoices; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Invoices/show/1" <?php if ($level == 'i3') echo "class='actual'" ?>>
                                Problem occured
                                <span class="badge pull-right"><?= $num_prob_invoices; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Invoices/assign/1" <?php if ($level == 'i4') echo "class='actual'" ?>>
                                Assigned Jobs
                                <span class="badge pull-right"><?= $num_assigned_jobs; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Invoices/assign/2" <?php if ($level == 'i5') echo "class='actual'" ?>>
                                Unassigned Jobs
                                <span class="badge pull-right"><?= $num_unassigned_jobs; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <?php
            if (($this->Session->read('Auth.User.role') === 'admin') ||
                ($this->Session->read('Auth.User.role') === 'realtor')
            ) {
                ?>
                <li>
                    <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>

                        Property ads
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('ad1', 'ad2', 'ad3', 'ad4', 'ad5'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>ProperAds" <?php if ($level == 'ad1') echo "class='actual'" ?> >
                                Active ads
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>ProperAds/approval" <?php if ($level == 'ad2') echo "class='actual'" ?> >
                                Waiting for approval
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <?php
            if (($this->Session->read('Auth.User.role') === 'admin')) {
                ?>
                <!--                <li>-->
                <!--                    <a href="#"><i class="fa fa-file-text fa-fw"></i> Tradesmen Orders<span class="fa arrow"></span></a>-->
                <!--                    <ul class="nav nav-second-level">-->
                <!--                        <li><a href="--><?php //echo $this->webroot; ?><!--TrOrders">List-->
                <!--                                Orders<span class="badge pull-right">--><? //= $num_Trorders; ?><!--</span></a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            <?php } ?>
            <?php
            if (($this->Session->read('Auth.User.role') === 'admin') ||
                ($this->Session->read('Auth.User.role') === 'estim')
            ) {
                ?>
                <li>
                    <a href="#"><i class="fa fa-group"></i> Tradesmen<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('p0', 'p1', 'p2'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Personnes/unverified/0" <?php if ($level == 'p1') echo "class='actual'" ?>>
                                Un-verified Tradesmen
                                <span class="badge pull-right"><?= $num_nactiv_personnes; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Personnes/index/1" <?php if ($level == 'p0') echo "class='actual'" ?>>
                                Verified Tradesmen
                                <span class="badge pull-right"><?= $num_personnes; ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $this->webroot; ?>Personnes/disabled/0" <?php if ($level == 'p2') echo "class='actual'" ?>>
                                Non-Active Tradesmen
                                <span class="badge pull-right"><?= $num_disabled_personnes; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>complaints" <?php if ($level == 'p1') echo "class='actual'" ?>>
                                Complaints
                                <span class="badge pull-right"><?= $num_nactiv_personnes; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>


            <?php } ?>


            <?php
            if (($this->Session->read('Auth.User.role') === 'admin') ||
            ($this->Session->read('Auth.User.role') === 'shop')) {
            ?>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart fa-fw"></i> Cart<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level <?php if (in_array($level, array('s1', 's2', 's3'))) echo "collapse in" ?>">

                    <li>
                        <a href="<?php echo $this->webroot; ?>Categories" <?php if ($level == 's1') echo "class='actual'" ?>>
                            Categories
                            <span class="badge pull-right"><?= $num_categories; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot; ?>Products" <?php if ($level == 's2') echo "class='actual'" ?>>
                            Products
                            <span class="badge pull-right"><?= $num_products; ?></span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php }; ?>



            <?php
            if (($this->Session->read('Auth.User.role') === 'admin')) {
                ?>
                <li>
                    <a href="#">
                        <i class="fa fa-building fa-fw"></i> Suppliers<span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('su1', 'su2'))) echo "collapse in" ?>">


                        <li>
                            <a href="<?php echo $this->webroot; ?>Suppliers/index/uk" <?php if ($level == 'su1') echo "class='actual'" ?>>
                                United Kingdom
                                <span class="badge pull-right"><?= $num_suppliers_uk; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Suppliers/index/world" <?php if ($level == 'su2') echo "class='actual'" ?>>
                                International
                                <span class="badge pull-right"><?= $num_suppliers; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php }; ?>


            <?php
            if (($this->Session->read('Auth.User.role') === 'admin')
            ) {
                ?>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Tool hire <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('t1', 't2'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Tools" <?php if ($level == 't1') echo "class='actual'" ?>>
                                List All
                                <span class="badge pull-right"><?= $num_tools; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Tools/show/0" <?php if ($level == 't2') echo "class='actual'" ?>>
                                Sale/Rent inquiries
                                <span class="badge pull-right"><?= $num_invalid_tools; ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>


            <?php
            if (($this->Session->read('Auth.User.role') === 'admin') ||
                ($this->Session->read('Auth.User.role') === 'mod')
            ) {
                ?>
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Blog<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level <?php if (in_array($level, array('b1', 'b2', 'b3'))) echo "collapse in" ?>">
                        <li>
                            <a href="<?php echo $this->webroot; ?>Posts" <?php if ($level == 'b1') echo "class='actual'" ?>>
                                List Posts
                                <span class="badge pull-right"><?= $num_posts; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Posts/add" <?php if ($level == 'b2') echo "class='actual'" ?>>
                                New Post
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>Tags" <?php if ($level == 'b3') echo "class='actual'" ?>>
                                Tags manager
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <li>
                <a href="<?php echo $this->webroot; ?>/../.." target="_blank">
                    <i class="fa fa-external-link-square"></i>
                    Preview Frontend
                </a>
            </li>

        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->
