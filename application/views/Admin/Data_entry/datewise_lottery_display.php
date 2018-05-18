<?php if($lottery_data): ?>
    <table class="table" style="color:#fff; font-size:30px;">
        <thead>
            <tr>
                <th>Time</th>
                <th>Bhagyashree</th>
                <th>Super</th>
                <th>Delux</th>
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
<?php elseif($time_data && $valid_formate): ?>
    <table class="table" style="color:#fff; font-size:30px;">
        <thead>
            <tr>
                <th style="width:25%">Time</th>
                <th style="width:25%">Bhagyashree</th>
                <th style="width:25%">Super</th>
                <th style="width:25%">Delux</th>>
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