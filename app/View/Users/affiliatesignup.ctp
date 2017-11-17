<div class="col-md-6 hidden-xs">
    <div class="box same-height">
        <div id="maper" class=" clearfix same-height">

            <!-- /.panel-group -->
            <?= $blog['Post']['body'] ?>

        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="box same-height">

        <?php

        echo $this->Form->create('User', array(
            'url' => array(
                'controller' => 'users',
                'action' => 'suppsignup')), array('role' => 'form'));
        ?>

        <div class="form-group">
            <label for='pers_title' class="col-sm-4 control-label">Title: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('title', array('label' => false, 'required' => 'required', 'class' => 'form-control', 'div' => false, 'options' => array('Mr' => 'Mr', 'Miss' => 'Miss', 'Mrs' => 'Mrs'))); ?>
            </div>
        </div>
        <?php echo $this->Form->input('role', array('type' => 'hidden', 'class' => 'form-control', 'value' => 'affiliate')); ?>
        <div class="form-group">
            <label for='pers_name' class="col-sm-4 control-label">Name: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('prenom', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Name")); ?>

            </div>
        </div>
        <div class="form-group">
            <label for='pers_lastname' class="col-sm-4 control-label">Surname: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('nom', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Surname")); ?>

            </div>
        </div>
        <div class="form-group">
            <label for='pers_pass' class="col-sm-4 control-label">Company: </label>

            <div class="col-sm-8">
                <?php
                echo $this->Form->input('societe', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Company Name")); ?>
            </div>
        </div>
        <div class="form-group">
            <label for='title' class="col-sm-4 control-label">Account type: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('supplier_type', array('label' => false, 'required' => 'required', 'class' => 'form-control', 'div' => false, 'empty'=>'--- Choose ---', 'options' => array('Other' => 'Other'))); ?>
            </div>
        </div>
        <div class="form-group">
            <label for='pers_pass' class="col-sm-4 control-label">Website: </label>

            <div class="col-sm-8">
                <?php
                echo $this->Form->input('website', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "www.company-website.com")); ?>
            </div>
        </div>
        <div class="form-group">
            <label for='pers_pass' class="col-sm-4 control-label">LinkedIn: </label>

            <div class="col-sm-8">
                <?php
                echo $this->Form->input('linkedin', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "https://linkedin.com/in/company/en")); ?>
            </div>
        </div>
        <div class="form-group">
            <label for='pers_mobile' class="col-sm-4 control-label">Mobile: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('mobile', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Mobile Number")); ?>

            </div>
        </div>

        <div class="form-group">
            <label for='pers_email' class="col-sm-4 control-label">Email: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('email', array('label' => false, 'type' => 'email', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "E-mail")); ?>
            </div>
        </div>
        <div class="form-group">
            <label for='pers_email' class="col-sm-4 control-label">Build Name/Flr/No.: </label>

            <div class="col-sm-8">
                <?php echo $this->Form->input('flat', array('label' => false, 'type' => 'email', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Build Name/Flr/No.")); ?>
            </div>
        </div>

        <div id="locationField" class="form-group">

            <label for="address" class="col-sm-4 control-label">Address: </label>
            <div class="col-sm-8">
                <?php echo $this->Form->input('address', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Enter postcode. Wait few seconds to be found", 'id' => 'autocomplete')); ?>
                <p class="text-danger">Choose your postcode from the autocomplete fields.</p>
            </div>
        </div>

        <h4>Create Login</h4>
        <hr>

        <div class="form-group">
            <label for='pers_pass' class="col-sm-4 control-label">Username: </label>

            <div class="col-sm-8">
                <?php
                echo $this->Form->input('username', array('label' => false, 'type' => 'text', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Choose Username")); ?>
            </div>
        </div>
        <div class="form-group">
            <label for='pers_pass' class="col-sm-4 control-label">Password: </label>

            <div class="col-sm-8">
                <?php
                echo $this->Form->input('password', array('label' => false, 'type' => 'password', 'required' => 'required', 'class' => 'form-control', 'placeholder' => "Choose password")); ?>
            </div>
        </div>


        <table id="address" class="hidden">
            <tr>
                <td class="label">Street address</td>
                <td class="slimField"><input class="field" id="street_number"
                                             disabled="true"></td>
                <td class="wideField" colspan="2"><input class="field"
                                                         id="route"
                                                         disabled="true"></td>
            </tr>
            <tr>
                <td class="label">City</td>
                <td class="wideField" colspan="3"><input class="field"
                                                         id="locality"
                                                         disabled="true"></td>
            </tr>
            <tr>
                <td class="label">State</td>
                <td class="slimField"><input class="field"
                                             id="administrative_area_level_1"
                                             disabled="true"></td>
                <td class="label">Postcode</td>
                <td class="wideField"><input class="field" id="postal_code"
                                             disabled="true"></td>
            </tr>
            <tr>
                <td class="label">Country</td>
                <td class="wideField" colspan="3"><input class="field"
                                                         id="country"
                                                         disabled="true"></td>
            </tr>
        </table>

        <div class="form-group hidden">
            <label for="postcee" class="col-sm-4 control-label">Area
                Code</label>

            <div class="col-sm-8">
                <input type="text"
                       id="postcee" name="pc"
                       class="form-control"
                       required="" readonly/>
            </div>
        </div>

        <div class="form-group hidden">
            <label for="longitude"
                   class="col-sm-3 control-label">Longitude</label>

            <div class="col-sm-9">
                <input type="text"
                       id="longitude" name="longitude"
                       class="form-control"
                       required="" readonly/>
            </div>
        </div>


        <div class="form-group hidden">
            <label for="latitude"
                   class="col-sm-3 control-label">Latitude</label>

            <div class="col-sm-9">
                <input type="text"
                       id="latitude" name="latitude"
                       class="form-control"
                       required="" readonly/>
            </div>
        </div>


        <div class="form-group">
            <label for='pers_pass' class="col-sm-4 control-label"></label>

            <div class="col-sm-8 ">
                <label>
                    <input type="checkbox" required="">
                    Agree to
                    <a href="../../../Blog/privacy-policy" target="_blank">
                        privacy
                    </a>
                    .
                </label>
            </div>
        </div>

        <div class="clearfix"></div><br>
        <div class="col-sm-8 col-sm-offset-4">
            <div class="g-recaptcha" data-sitekey="6LcgchgTAAAAAKPdqagivciQY48vp3jv6G1XUW8S"></div>
            <script type="text/javascript"
                    src="https://www.google.com/recaptcha/api.js?hl=en">
            </script>
            <div class="clearfix"></div>
        </div>


        <div class="wrapperloading" id="wrapperloading">
            <div class="loading up"></div>
            <div class="loading down"></div>
        </div>
        <div class="overlay" id="overlay"></div>
        <?php
        echo $this->Form->end(array('Submit', 'class' => 'btn btn-primary pull-right wide'));
        ?>
        <div class="clearfix"></div>
    </div>
</div>

<div class="clearfix"></div>

