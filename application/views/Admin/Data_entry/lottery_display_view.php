<input type="date" id="lottery_date" max="<?php echo date('Y-m-d'); ?>" >

<h1 class="title-agile text-center" style="font-size: 25px">
    <?php if($this->session->flashdata('Lottery_already_created')): ?>
        <?php echo $this->session->flashdata('Lottery_already_created'); ?>
    <?php endif; ?>
</h1> &nbsp;&nbsp;&nbsp;
<?php if($lottery_data): ?>
    <a class="btn btn-primary pull-right" href="<?php echo base_url();?>Admin/Lottery/edit_lottery_data" >Edit</a>
<?php endif; ?>

<?php $datestring = '%H:%i'; ?>
<?php $time = time(); ?>
<?php $current_time = mdate($datestring, $time); ?>
<?php  $initial_time=date('H:i', strtotime("9:00AM")); ?>
<?php if($current_time < $initial_time): ?>
    <a class="btn btn-primary pull-right" href="<?php echo base_url();?>Admin/lottery/add_lottery_data" >Add New</a>
<?php endif; ?>
<div id='display' name='display'>
    <?php if($lottery_data): ?>
        <table class="table" style="color:#fff; font-size:30px;">
            <thead>
                <tr>
                    <th style="width:25%">Time</th>
                    <th style="width:25%">Bhagyashree</th>
                    <th style="width:25%">Super</th>
                    <th style="width:25%">Delux</th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($lottery_data as $lottery):?>
                    <tr>
                        <?php echo "<td>" . $lottery->timee . "</td>"; ?>
                        <?php $a= $lottery->a; ?>
                        <?php if($a<10): ?>
                            <?php $a= '0' . $a; ?>
                        <?php endif; ?>
                        <?php echo "<td>" . $a . "</td>"; ?>
                        <?php $b= $lottery->b; ?>
                        <?php if($b<10): ?>
                            <?php $b= '0' . $b; ?>
                        <?php endif; ?>
                        <?php echo "<td>" . $b . "</td>"; ?>
                        <?php $c= $lottery->c; ?>
                        <?php if($c<10): ?>
                            <?php $c= '0' . $c; ?>
                        <?php endif; ?>
                        <?php echo "<td>" . $c . "</td>"; ?>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    <?php elseif($time_data): ?>
        <table class="table" style="color:#fff; font-size:30px;">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Bhagyashree</th>
                    <th>Super</th>
                    <th>Delux</th>>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($time_data as $timee):?>
                    <tr>
                        <?php echo "<td>" . $timee->timee . "</td>"; ?>
                        <?php echo "<td>-</td>"; ?>
                        <?php echo "<td>-</td>"; ?>
                        <?php echo "<td>-</td>"; ?>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    <?php else: ?>
        <h1 class="title-agile text-center">Enter Valid Date</h1>
    <?php endif; ?>
</div>

<script>
    var date_input = document.getElementById('lottery_date');
    date_input.valueAsDate = new Date();

    date_input.onchange = function(){
        $.ajax({
              url:"<?php echo base_url(); ?>" + "index.php/Admin/Admin/refresh_lottery_list",
              type:'POST',
              data: 'datee='+this.value,
              success: function(e){
                  $('#display').html(e);
              }
            });
    }
</script>
