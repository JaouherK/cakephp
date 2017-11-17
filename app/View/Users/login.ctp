<div class="">
    <div class="row">
        <div class="">
            <div class="">
                <div class="">

                    <?php // echo $this->Html->image('logo.png', array('class' => 'img-responsive', 'alt' => 'TradesmansNetwork')); ?>
                </div>
                <div class="panel-body">
                    <h2>Authentication</h2>
                    <hr>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Form->create('User'); ?>

                    <fieldset>
                        <?php
                        echo ' <div class="form-group mb-lg"><div class="input-group input-group-icon">';
                        echo $this->Form->input('username',
                            array('type' => 'text', 'label' => false,
                                'class' => 'form-control input-lg', 'autofocus'=>'autofocus', 'placeholder' => 'Username'));
                        echo '<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div></div>';
                        ?>
                        <?php
                        echo ' <div class="form-group mb-lg"><div class="input-group input-group-icon">';
                        echo $this->Form->input('password',
                            array('type' => 'password', 'label' => false,
                                'class' => 'form-control input-lg', 'autofocus'=>'autofocus', 'placeholder' => 'Password'));
                        echo '<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                        </div></div>';
                        ?>
                    </fieldset>
                    <?php
                    //                    echo '<div class="form-group"><div class="text-center"><img src="https://dummyimage.com/200x50/000/fff.gif&text='.$string.'" class="centered">
                    //
                    //                    </div>';
                    echo "<div class='form-group'>";
                    echo '<div id="containerer" class="text-center">
                        <div id="navi " class=""><p class="captcha text-center">'.$string.'</p></div>
                        <div id="infoi" class="">
                        '.$this->Html->image('scratches-opt2.png', array('width'=> "100%", 'height' => '50px')).'
                        </div>
                    </div>';

                    echo $this->Form->input('captchaText',
                        array('type' => 'number', 'label' => 'Enter Captcha value here',
                            'class' => 'form-control input-lg', 'autofocus' => 'autofocus', 'autocomplete'=> 'off'));
                    echo "</div> ";
                    echo $this->Form->end(array('label'=>'Login', 'class' => 'btn btn-lg btn-info btn-block',
                        'escape' => false));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
