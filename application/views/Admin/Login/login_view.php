<?php $attributes = array('id' =>'login_form'); ?>

<div class="content-w3ls">
    <div class="agileits-grid">
        <div class="content-top-agile">
            <h2>Login</h2>
        </div>
        <div class="content-bottom">
            <?php if($this->session->flashdata('error')): ?>
                <?php echo $this->session->flashdata('error'); ?>
            <?php endif; ?>
            <?php echo form_open('Admin/Admin/login', $attributes); ?>
                <div class="field_w3ls">
                    <div class="field-group">
                        <?php 
                            $data = array(
                                'name'=>'name',
                                'id'=>'text1' ,
                                 'value'=>'' ,
                                 'placeholder'=>'username' 
                                );
                        ?>
                        <?php echo form_input($data); ?>
                    </div>
                    <div class="field-group">
                        <?php 
                            $data = array(
                                'name'=>'password',
                                'id'=>'password-field' ,
                                 'value'=>'' ,
                                 'class'=>'form-control',
                                 'placeholder'=>'Password' 
                                );
                        ?>
                        <?php echo form_password($data); ?>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                </div>
                <div class="wthree-field">
                    <?php 
                        $data = array(
                            'id' => 'saveForm',
                            'name' => 'saveForm',
                            'value' => 'Login'
                        );
                    ?>
                    <?php echo form_submit($data); ?>
                </div>
            <?php echo form_close(); ?>
         </div>
        <!-- //content bottom -->
    </div>
</div>