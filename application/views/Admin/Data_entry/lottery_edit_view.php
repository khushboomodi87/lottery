
<h1 class="title-agile text-center" style="font-size: 25px">Enter Data</h1>

<?php $attribute = array('id' => 'edit_form', 'class' => 'form_horizontal' ); ?>

<?php echo form_open('Admin/Lottery/edit_lottery_data',$attribute); ?>
    <table class="table" style="font-size:30px;">
        <thead>
            <tr style="color:#fff">
                <th>Time</th>
                <th>Bhagyashree</th>
                <th>Super</th>
                <th>Delux</th>>
            </tr>
        </thead>
        <tbody>
            <?php  $i=0; ?>
            <?php foreach ($current_date_lottery as $list):?>
                <tr>
                     <td style='color:#fff'> <?php echo $list->timee; ?> <input name='id[]' type='hidden' value=<?php echo $list->id; ?> ></td>
                    <td>
                        <?php
                            $value = $list->a;
                            if(set_value("a[$i]")!='')
                            {
                                $value = set_value("a[$i]");
                            }
                            $data = array(
                                'id' => "a",
                                'placeholder' => 'Number',
                                'name' => 'a[]',
                                'value' => $value
                            ); 
                         ?>
                         <?php echo form_input($data); ?>
                        
                        <?php echo form_error("a[$i]","<p>"); ?>
                    </td>

                    <td>
                        <?php
                            $value = $list->b;
                            if(set_value("b[$i]")!="")
                            {
                                $value = set_value("b[$i]");
                            }
                            $data = array(
                                'id' => "b",
                                'placeholder' => 'Number',
                                'name' => 'b[]',
                                'value' => $value
                            ); 
                         ?>
                         <?php echo form_input($data); ?>
                        <?php echo form_error("b[$i]","<p>"); ?>
                    </td>
                    <td>
                        <?php
                         $value = $list->c;
                            if(set_value("c[$i]")!="")
                            {
                                $value = set_value("c[$i]");
                            }
                            $data = array(
                                'id' => "c",
                                'placeholder' => 'Number',
                                'name' => 'c[]',
                                'value' => $value
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
                'name' => 'Edit',
                'value' => 'Submit'
            );
        ?>
        <?php echo form_submit($data); ?>
        <a class="btn btn-primary pull-right" href="<?php echo base_url();?>admin" >Cancel</a>
    </div>

<?php echo form_close(); ?>