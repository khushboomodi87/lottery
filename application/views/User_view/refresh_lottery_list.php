<!--Lotter List-->
    <?php if($time_list): ?>
        <table class="table">
            <thead>
                
               
                    <tr>
                        <th style="width:25%">Time</th>
                        <th style="width:25%">Bhagyashree</th>
                        <th style="width:25%">Super</th>
                        <th style="width:25%">Delux</th>
                    </tr>
            </thead>
            <tbody>
                
                <?php foreach ($time_list as $key=>$list):?>
                    <tr>
                        <?php echo "<td>" . $list->timee . "</td>"; ?>
                        <?php if($today_till_now_lottery_list): ?>
                        <?php if(array_key_exists($key,$today_till_now_lottery_list)): ?>
                            <?php $a=$today_till_now_lottery_list[$key]->a; ?>
                                <?php if($a<10): ?>
                                    <?php $a= '0'. $a; ?>
                                <?php endif; ?>
                                <?php echo "<td>" . $a . "</td>"; ?>
                                <?php $b=$today_till_now_lottery_list[$key]->b; ?>
                                <?php if($b<10): ?>
                                    <?php $b= '0'. $b; ?>
                                <?php endif; ?>
                                <?php echo "<td>" . $b . "</td>"; ?>
                                <?php $c=$today_till_now_lottery_list[$key]->c; ?>
                                <?php if($c<10): ?>
                                    <?php $c= '0'. $c; ?>
                                <?php endif; ?>
                                <?php echo "<td>" . $c . "</td>"; ?>
                        <?php else: ?>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        <?php endif; ?>
                        <?php else: ?>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    <?php endif; ?>
<!--//Lottery List-->