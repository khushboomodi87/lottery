
<h1 class="title-agile text-center" style="font-size: 25px">Enter Data</h1>

<?php $attribute = array('id' => 'create_form', 'class' => 'form_horizontal' ); ?>

<?php echo form_open('Admin/Lottery/add_lottery_data',$attribute); ?>
    <table class="table">
        <thead>
            <tr>
                <th><h1 class="title-agile" style="font-size: 20px; text-align:left;">Time</h1></th>
                <th><h1 class="title-agile" style="font-size: 20px; text-align:left;">Bhagyashree</h1></th>
                <th><h1 class="title-agile" style="font-size: 20px; text-align:left;">Super</h1></th>
                <th><h1 class="title-agile" style="font-size: 20px; text-align:left;">Delux</h1></th>
            </tr>
        </thead>
        <tbody>
            <?php  $i=0; ?>
            <?php foreach ($time_list as $list):?>
                <tr>
                    <?php echo "<td>" . $list->timee . "<input name='timee[]' type='hidden' value='" . $list->timee . "'></td>"; ?>
                    <td>
                        <?php
                            $data = array(
                                'id' => "a",
                                'placeholder' => 'Number',
                                'name' => 'a[]',
                                'value' => set_value("a[$i]")
                            ); 
                         ?>
                         <?php echo form_input($data); ?>
                        
                        <?php echo form_error("a[$i]","<p>"); ?>
                    </td>

                    <td>
                        <?php
                            $data = array(
                                'id' => "b",
                                'placeholder' => 'Number',
                                'name' => 'b[]',
                                'value' => set_value("b[$i]")
                            ); 
                         ?>
                         <?php echo form_input($data); ?>
                        <?php echo form_error("b[$i]","<p>"); ?>
                    </td>
                    <td>
                        <?php
                            $data = array(
                                'id' => "c",
                                'placeholder' => 'Number',
                                'name' => 'c[]',
                                'value' => set_value("c[$i]")
                            ); 
                         ?>
                         <?php echo form_input($data); ?>
                        <?php echo form_error("c[$i]","<p>"); ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            
        </tbody>
    </table>

    <div class="form-group">
        <?php 
            $data = array(
                'class' => 'btn btn-primary',
                'name' => 'submit',
                'value' => 'Submit'
            );
        ?>
        <?php echo form_submit($data); ?>
        <a class="btn btn-primary pull-right" href="<?php echo base_url();?>Admin/admin" >Cancel</a>
    </div>

<?php echo form_close(); ?>