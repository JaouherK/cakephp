<nav class="navbar navbar-default navbar-static-top navbar_fb" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right pull-right">

        <?php if (($this->Session->read('Auth.User.role') === 'admin')) { ?>
            <li class="dropdown"><?php echo $this->Element('Notifications.NotificationIcon'); ?></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bug fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php echo $this->webroot; ?>Bugs">Bugs</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Feedbacks">Feedbacks</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-money fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php echo $this->webroot; ?>BudgetTypes">Budget Types</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wifi fa-fw fa-2x" aria-hidden="true"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php echo $this->webroot; ?>FrontBrowsers">All Frontend IP Activity</a></li>
                    <li><a href="http://www.landlordtenantrepairs.co.uk/Stats/#" target="_blank">Frontend Activity Stats</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">IP by labels</li>
                    <li><a href="<?php echo $this->webroot; ?>FrontBrowsers/index/0"><i class="fa fa-circle text-info fa-2x"></i> Not decided</a></li>
                    <li><a href="<?php echo $this->webroot; ?>FrontBrowsers/index/1"><i class="fa fa-circle text-success fa-2x"></i> Green list</a></li>
                    <li><a href="<?php echo $this->webroot; ?>FrontBrowsers/index/2"><i class="fa fa-circle  text-warning fa-2x"></i> Suspicious</a></li>
                    <li><a href="<?php echo $this->webroot; ?>FrontBrowsers/index/3"><i class="fa fa-circle text-danger fa-2x"></i> Dangerous</a></li>
                    <li><a href="<?php echo $this->webroot; ?>FrontBrowsers/index/4"><i class="fa fa-circle fa-2x"></i> Blacklist</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-users fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php  echo $this->webroot.'Users'; ?>">Backend Users</a></li>
                    <li><a href="<?php echo $this->webroot.'Users/entryClerk'; ?>">IT Team</a></li>
                    <li><a href="<?php echo $this->webroot.'Zones'; ?>">License Areas</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tty fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php echo $this->webroot; ?>Trcategors">Job Categories</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Trtypes">Job Types</a></li>
                    <li><a href="<?php echo $this->webroot; ?>TrcategTypes">Job rates</a></li>
                    <li><a href="<?php echo $this->webroot; ?>InvoiceActions">Invoice categories</a></li>
                    <li><a href="<?php echo $this->webroot; ?>InvoiceSamples">Invoice Items</a></li>


                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->webroot; ?>Bugs">
                    <i class="fa fa-wrench fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">

                    <li><a href="<?php echo $this->webroot; ?>Teams">Football Teams</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Postcodes">Postcodes</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Subscriptions">Subscriptions</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Surveys">Surveys</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Faqs">FAQ's</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Menus">Menu Manager</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Uploads">Uploads</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Ads">Ads Manager</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Rpbs">RPB/Other Membership</a></li>
                    <li><a href="<?php echo $this->webroot; ?>AboutusMembers">About Us</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-cogs fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php echo $this->webroot; ?>Configurations">Global Configuration</a></li>
                    <li><a href="<?php echo $this->webroot; ?>ChangeLogs">Changelog</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Accueils/sitemap.xml" target="_blank">Generate SitemapIndex</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Accueils/sitemap2.xml" target="_blank">Generate Sitemap for Pages</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Products/sitemap.xml" target="_blank">Generate Sitemap for Products</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Categories/sitemap.xml" target="_blank">Generate Sitemap for Categories</a></li>
                    <li><a href="<?php echo $this->webroot; ?>ProperAds/sitemap.xml" target="_blank">Generate Sitemap for Properties</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Personnes/sitemap.xml" target="_blank">Generate Sitemap for Tradesmen</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Postcodes/sitemap_index" target="_blank">Generate Sitemap Indexer for trades</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Generate Alias <span class="text-danger">(System Admin only)</span></li>
                    <li><a href="<?php echo $this->webroot; ?>Personnes/generateAlias">Personnes</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Products/generateAlias">Products</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Categories/generateAlias">Categories</a></li>
                    <li><a href="<?php echo $this->webroot; ?>ProperAds/generateAlias">Rent ads</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Posts/generateAlias">Article alias</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-files-o fa-fw fa-2x" aria-hidden="true"></i> <i class="fa fa-caret-down"></i></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li><a href="<?php echo $this->webroot; ?>Configurations/offline">Maintenance / offline</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Configurations/front">Front page Manager</a></li>
                    <li><a href="<?php echo $this->webroot; ?>Configurations/footer">Footer Manager</a></li>
                    <li><a href="<?php echo $this->webroot; ?>EmailTemplates">Email templates</a></li>
                </ul>
            </li>


        <?php } ?>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user-circle fa-fw fa-2x" aria-hidden="true"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo $this->webroot; ?>Users/display"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>
                        User
                        Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo $this->webroot; ?>Users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

</nav>
        
        
        