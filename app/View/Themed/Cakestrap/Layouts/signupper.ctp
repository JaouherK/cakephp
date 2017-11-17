<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'KI Manager');
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php
        if (isset($title)) echo strtoupper($title); else echo "KI Panel";
        ?>

    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->fetch('meta');

    echo $this->Html->css('bootstrap');
    echo $this->Html->css('signer');
    echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css');
    echo $this->fetch('css');
    ?>
    <?php
    echo $this->Html->script('libs/modernizr');
    echo $this->Html->script('libs/jquery-1.10.2.min');
    echo $this->Html->script('libs/bootstrap.min');

    echo $this->Html->script('libs/jquery.metisMenu');
    echo $this->Html->script('libs/nanoscroller');

    echo $this->Html->script('libs/admin');

    echo $this->Html->css('/notifications/css/notifications');
    echo $this->Html->script('/notifications/js/notifications');

    echo $this->fetch('script');
    ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpJQwulGd7ypHokqfUSKuMz_Mqx6bqYls&libraries=places" async defer></script>
    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initialize() {
            // Create the autocomplete object, restricting the search
            // to geographical location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                {
                    types: ['geocode'],
                    componentRestrictions: {country: "uk"}
                });
            // When the user selects an address from the dropdown,
            // populate the address fields in the form.
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                fillInAddress();
            });
        }

        // [START region_fillform]
        function fillInAddress() {
            // Get the place details from the autocomplete object.
            document.getElementById('maper').className = "hidden";
            document.getElementById('postcee').value = '';
            var place = autocomplete.getPlace();


            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    if (addressType == 'postal_code') {
                        var res = val.split(" ");
                        document.getElementById('postcee').value = res[0];
                        document.getElementById('latitude').value = place.geometry.location.lat();
                        document.getElementById('longitude').value = place.geometry.location.lng();

                        document.getElementById('postcee').innerHTML = res[0];
                        document.getElementById('latitude').innerHTML = place.geometry.location.lat();
                        document.getElementById('longitude').innerHTML = place.geometry.location.lng();

                        var myLatLng = {lat: place.geometry.location.lat(), lng: place.geometry.location.lng()};
                        document.getElementById('maper').className = "";
                        var map = new google.maps.Map(document.getElementById('maper'), {
                            zoom: 16,
                            center: myLatLng
                        });

                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: 'Hello World!'
                        });
                    }
                    else {
                        document.getElementById('maper').className = "";
                        document.getElementById('maper').innerHTML = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Wrong Postcode!</strong>Check you enter your postcode correctly and selected the Google address from autocomplete field.</div>';
                    }
                }
            }
        }


    </script>
    <style>

        .label {
            text-align: right;
            font-weight: bold;
            width: 100px;
            color: #303030;
        }

        #address {
            border: 1px solid #000090;
            background-color: #f0f0ff;
            width: 480px;
            padding-right: 2px;
        }

        #address td {
            font-size: 10pt;
        }

        .field {
            width: 99%;
        }

        .slimField {
            width: 80px;
        }

        .wideField {
            width: 200px;
        }

    </style>
</head>



<body class="signer" onload="initialize()">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWQ9HL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<h1 class="hidden">Supplier signup - Landlord Tenant Repairs </h1>

<h2 class="hidden">Contact us for further information or asiistance. Landlord Tenant Repairs, Book tradespeople on-demand, buy products, estimates, invoices, property management, find jobs, manage tenat repairs</h2>
<!-- *** TOPBAR *** -->


<div id="top">
    <div class="container">

        <div class="col-md-12 pull-right" data-animate="fadeInDown">

            <ul class="menu">
                <li>
                    <a title="Login" href="/manager-trades-login"> Login </a>
                </li>
                <li><a title="Join as Manager" href="/manager-signup">Join as Manager</a></li>
                <li><a title="Join as Trades" href="/trades-signup">Join as Trades</a></li>
                <!--                        <li><a title="" href="Logout">Logout</a></li>-->


                <li><a title="Contact" href="/Contact">Contact</a>
                </li>

            </ul>
        </div>
    </div>


</div><!-- *** TOP BAR END *** -->

<!-- *** NAVBAR *** -->

<div class="navbar navbar-default yamm" role="navigation" id="navbarer">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" title="Home page" href="/Home" data-animate-hover="bounce">
                <img src="<?= $logo ?>" alt="Landlord Tenant Repairs" height="50px"><span class="sr-only">Landlord Tenant Repairs</span>
            </a>

            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a title="Home page" href="/Home"><i class="fa fa-home"></i></a>
                </li>
                <li class="dropdown yamm-fw">
                    <a title="menu item: Buy Products" href="/browse-product-categories">Buy Products</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a title="menu item: Book tradesperson" href="/get-estimate-and-book-tradesperson">Book tradesperson</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a title="menu item: Tenant repairs" href="/tenant-repair-propsal-to-landlord">Tenant repairs</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a title="menu item: Find a property" href="/find-property-for-rent">Find a property</a>
                </li>
            </ul>
        </div>

    </div>


    <!--/.nav-collapse -->

    <div class="navbar-buttons">

    </div>

    <div class="collapse clearfix" id="search">

        <form class="navbar-form" role="search" action="/Search" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for products" name="searcher">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
            </div>
        </form>

        <form class="navbar-form" role="search" action="/SearchTradesmen" method="get">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for tradesmen" name="searcher">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
            </div>
        </form>


    </div>
</div>
<!-- *** NAVBAR END *** -->




<div id="wrapper">

    <div id="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="/Home">Home</a></li>
                    <li><?= $typo?> signup</li>
                </ul>

            </div>
<div class="clearfix"></div>
            <div class="same-height-row">


                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
"


            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


    <!-- *** FOOTER *** -->
<div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="">

            <!--Prperty owner + tradesmen section-->
            <div class="col-md-3 col-sm-6">
                <h4>Users</h4>

                <ul>
                    <li>
                        <a title="Login" href="/manager-trades-login"> Login </a>
                    </li>
                    <li><a title="Signup/Join" href="/manager-signup">Signup</a></li>
                </ul><hr class="hidden-md hidden-lg hidden-sm"><h4>Trades</h4>
                <ul>
                    <li>
                        <a title="Login" href="/manager-trades-login"> Login </a>
                    </li>
                    <li><a title="Trades Signup/Join" href="/trades-signup">Signup</a></li>

                </ul>
                <hr class="hidden-md hidden-lg hidden-sm"><h4>Suppliers</h4>
                <ul>
                    <li><a title="Suppliers Login" href="/administration">Login</a></li>
                    <li><a title="Suppliers Signup" href="/administration/users/suppsignup">Signup</a></li>
                </ul><hr class="hidden-md hidden-lg hidden-sm">            </div>
            <!-- /.col-md-3 -->

            <!--Pages : about/how it works/etc-->
            <div class="col-md-3 col-sm-6">
                <h4>Licensee</h4>
                <ul>
                    <li><a title="Licensee Login/Signup" href="/administration">Login</a></li>
                    <li>
                        <a title="Area Licenses" href="/area-license">Signup</a>
                    </li>
                </ul><hr class="hidden-md hidden-lg hidden-sm"><h4>Affiliates</h4>
                <ul>
                    <li><a title="Affiliates Login" href="/administration">Login</a></li>
                    <li><a title="Affiliates Signup" href="/administration/users/affiliatesignup">Signup</a></li>
                </ul><hr class="hidden-md hidden-lg hidden-sm"><h4>Investors</h4>
                <ul>
                    <li><a title="Realtor Login" href="/administration">Login</a></li>
                    <li><a title="Realtor Signup" href="/administration/users/realtorsignup">Signup</a></li>
                </ul><hr class="hidden-md hidden-lg hidden-sm">            </div>
            <!-- /.col-md-3 -->

            <!--Where to find us: address-->
            <div class="col-md-3 col-sm-6">

                <h4>Pages</h4>

                <ul>
                    <li>
                        <a title="About" href="/Blog/about-us">About</a>
                    </li>
                    <li>
                        <a title="How it works" href="/Blog/how-it-works">How it works</a>
                    </li>
                    <!--                    <li>-->
                    <!--                        <a title="Labour rates" href="/labour-rates">Labour rates</a>-->
                    <!--                    </li>-->
                    <li>
                        <a title="Contact us" href="/Contact">Contact us</a>
                    </li>


                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <!-- /.col-md-3 -->

            <!--Get the news mail insertion-->
            <div class="col-md-3 col-sm-6">
                <h4>Get the news</h4>

                <p class="text-muted hidden">Key Incentive is a supportive network for tradesman that offers on
                    demand labour booking.</p>

                <div class="subscriber">
                    <div class=" dropdown-menu-former">

                        <div class="input-group">

                            <input type="email" class="form-control" name="myEmail" id="myEmail">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button" onclick="subscribe()">Subscribe!</button>

			</span>

                        </div>
                        <!-- /input-group -->

                    </div>
                </div><hr class="hidden-md hidden-lg hidden-sm"><h4>Stay in touch</h4>

                <p class="social">


                    <a title="linkedin" href="https://www.linkedin.com/in/key-incentive-b81547140/" class="linkedin external" data-animate-hover="shake">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a title="twitter" href="https://twitter.com/keyincentive" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a title="Google plus" href="https://plus.google.com/u/0/101570220602626547584" class="gplus external" data-animate-hover="shake">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                </p><hr class="hidden-md hidden-lg hidden-sm">            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
    <div class="feedback right" id="bugger">
        <div class="tooltips">
            <div class="btn-group dropup">
                <button type="button" class="btn btn-primary dropdown-toggle btn-circle btn-lg" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bug fa-2x" title="Report Bug" id="unstyled"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-form">
                    <li>
                        <div class="report">
                            <h4 class="text-center">Report Bug</h4>

                            <form class="doo" method="post" action="/report.php">
                                <div class="col-sm-12">
                                <textarea required name="comment" class="form-control"
                                          placeholder="Please tell us what bug or issue you've found, provide as much detail as possible."></textarea>
                                    <input name="screenshot" type="hidden" class="screen-uri">
                                <span class="screenshot pull-right btn btn-info"><i class="fa fa-camera cam"
                                                                                    title="Take Screenshot"></i> Take "screenshot" of current page </span>
                                </div>
                                <div class="col-sm-12 clearfix">
                                    <button class="btn btn-primary btn-block">Submit Report</button>
                                </div>
                            </form>
                        </div>
                        <div class="loading text-center hideme">
                            <h4>Please wait...</h4>

                            <h4><i class="fa fa-refresh fa-spin"></i></h4>
                        </div>
                        <div class="reported text-center hideme">
                            <h4>Thank you!</h4>

                            <p>Your submission has been received, we will review it shortly.</p>

                            <div class="col-sm-12 clearfix">
                                <button class="btn btn-success btn-block do-close">Close</button>
                            </div>
                        </div>
                        <div class="failed text-center hideme">
                            <h4>Oh no!</h4>

                            <p>It looks like your submission was not sent.<br><br><a title="mail to" href="mailto:">Try contacting us by the
                                    old method.</a></p>

                            <div class="col-sm-12 clearfix">
                                <button class="btn btn-danger btn-block do-close">Close</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         id="myModal987">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                This feature is under construction
            </div>
        </div>
    </div>    <!-- *** FOOTER END *** -->

    <!-- *** FOOTER END *** -->


    <!-- *** COPYRIGHT ***-->
    <div id="copyright">
        <div class="container text-center">
            <div class="col-md-12 text-center">
                © 2010 - 2017 (BETA v3.2.1 ) SIC: 63120 - Web Portal
            </div>
            <div class="clearfix">  </div>

            <div class="col-md-12 text-center">
                <a title="Privacy Policy" href="/Blog/privacy-policy">Privacy Policy</a> | <a title="Terms of Use" href="/Blog/website-terms">Terms of Use</a>
            </div>
        </div>
    </div>    <!-- *** COPYRIGHT END *** -->


</div>
<!-- /#all -->

<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c234ae101e9556"></script>-->


</body>

</html>
