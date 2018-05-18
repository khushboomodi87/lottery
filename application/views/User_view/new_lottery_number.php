
<div class="wthree-info" style="border: 3px solid #fff; background-color : rgba(0,0,0,0.5);">
        <h2 class="heading" style="color : yellow;"><?php echo date("d F Y"); ?></h2>  
    	<h2 class="matter" style="color : #fff; " id='timer'></h2>
</div>

<?php if($next_lottery_at): ?>
    <div class="wthree-info" style="border: 3px solid #fff; background-color : rgba(0,0,0,0.5);">  
        <h2 class="heading" style="color : yellow;">NEXT DRAW AT</h2>
        <h2 class="matter" id="next_lottery_at" style="color : #fff;"><?php echo $next_lottery_at; ?></h2>
    </div>
    
<?php endif; ?>

<?php if($active_lottery): ?>
    <div class="wthree-info" style="border: 3px solid #fff; background-color : rgba(0,0,0,0.5); ">  
        <h2 class="heading" style="color : yellow;">TIME TO DRAW</h2>
        <h2 class="matter" id="lottery_time" style="color : #fff;"><?php echo $active_lottery->timee; ?></h2>
    </div>
	<!--new lottery number-->
	<div class="agileits-timer" style="border: 3px solid #fff; background-color : rgba(0,0,0,0.5); width:100%;"> 
		<div class="clock">
			<div class="column days ">
				<div id="odometer1" class="odometer"></div>
			</div>
			<div class="column days ">
				<div id="odometer2" class="odometer"></div>
			</div>
			<div class="column days ">
				<div id="odometer3" class="odometer"></div>
			</div>
			<div class="clear"> </div>
		</div>		 
	</div>
	<!--//new lottery number-->
<?php else: ?>
    <div class="agileits-timer" style="border: 3px solid #fff; background-color : rgba(0,0,0,0.5); width:100%;"> 
		<div class="clock">
			<div class="column days ">
				<div id="odometer1" class="odometer">100</div>
			</div>
			<div class="column days ">
				<div id="odometer2" class="odometer">100</div>
			</div>
			<div class="column days ">
				<div id="odometer3" class="odometer">100</div>
			</div>
			<div class="clear"> </div>
		</div>		 
	</div>
    
<?php endif; ?>


<script id="newLottery">
$( document ).ready(function() {
     $.getScript("<?php echo base_url();?>assets/js/odometer.js");
                    $('head').append('<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/odometer.css">');
    setTimeout(function(){
        <?php if($active_lottery): ?>
        
       //var div1 = document.getElementById("odometer1");
        var div1=<?php echo $active_lottery->a; ?>;
        if(div1<10)
            div1='10'+div1;
        else if(div1<100)
            div1='1'+div1;
        odometer1.innerHTML =div1;
        var div2 = <?php echo $active_lottery->b; ?>;
        if(div2<10)
            div2='10'+div2;
        else if(div2<100)
            div2='1'+div2;
        odometer2.innerHTML = div2;
        var div3 = <?php echo $active_lottery->c; ?>;
        if(div3<10)
            div3='10'+div3;
        else if(div3<100)
            div3='1'+div3;
        odometer3.innerHTML = div3;
        <?php else: ?>
        odometer1.innerHTML = 100;
        odometer2.innerHTML = 100;
        odometer3.innerHTML = 100;
        <?php endif; ?>
    
}, 1000);
});
</script>