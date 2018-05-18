<?php $attributes = array('id' =>'change_password_form'); ?>

<div class="content-w3ls">
    <div class="agileits-grid">
        <div class="content-top-agile">
            <h2>Change Password</h2>
        </div>
        <div class="content-bottom">
            <?php if($this->session->flashdata('change_password_error')): ?>
                <?php echo $this->session->flashdata('change_password_error'); ?>
            <?php endif; ?>
            <?php echo form_open('Admin/Admin/change_password', $attributes); ?>
                <div class="field_w3ls">
                    <div class="field-group">
                        <?php 
                            $data = array(
                                'name'=>'old_password',
                                'id'=>'old-password-field' ,
                                 'value'=>'' ,
                                 'class'=>'form-control',
                                 'placeholder'=>'Current Password' 
                                );
                        ?>
                        <?php echo form_password($data); ?>
                        <span toggle="#old-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="field-group">
                        <?php 
                            $data = array(
                                'name'=>'new_password',
                                'id'=>'new-password-field' ,
                                 'value'=>'' ,
                                 'class'=>'form-control',
                                 'placeholder'=>'New Password' 
                                );
                        ?>
                        <?php echo form_password($data); ?>
                        <span toggle="#new-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                </div>
                <div class="wthree-field">
                    <?php 
                        $data = array(
                            'id' => 'saveForm',
                            'name' => 'saveForm',
                            'value' => 'Change'
                        );
                    ?>
                    <?php echo form_submit($data); ?>
                </div>
            <?php echo form_close(); ?>
         </div>
        <!-- //content bottom -->
    </div>
</div>