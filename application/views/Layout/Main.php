
<!DOCTYPE HTML>
<html>
<head>
<title>Try Your Luck</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="keywords" content="">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/odometer.js"></script>
<!-- Custom Theme files -->

<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.countdown.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/odometer-theme-car.css" />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//fonts--> 
</head>
<body >
    <div class="agile">
     	<div class="container">
			<?php 
				$this->load->view('Layout/header');
			 ?>
			<div >
			<?php 
				$this->load->view('User_view/new_lottery_number');
			 ?>
			 </div>
			 <div style="display:none" id="lottery-number"></div>
			<?php 
				$this->load->view('User_view/previous_lottery_list');
			 ?>
			<?php 
				$this->load->view('Layout/footer');
			 ?>
        </div>
   </div>
<!--scripts--> 

	
	<script type="text/javascript">
$( document ).ready(function() {
    setInterval(function(){reloadPage2(); }, 1000)
});
// function startTime() {
//     setInterval(function(){reloadPage2(); }, 1000)
    
// }
function reloadPage2() {
    //alert("hi");
   var d= new Date();
   var hours = d.getHours();
   var minutes = d.getMinutes();
   var seconds = d.getSeconds();
   if (d.getHours() < 10) {
       hours= '0' + d.getHours();
   }
   if (d.getMinutes() < 10) {
       minutes= '0' + d.getMinutes();
   }
   if (d.getSeconds() < 10) {
       seconds= '0' + d.getSeconds();
   }
    var formattedTime = hours+':'+minutes+':'+seconds;
   //var formattedTime = hours+':'+minutes;
   switch(formattedTime){
       case '08:59:04':
       case '09:14:04':
       case '09:29:04':
       case '09:44:04':
       case '09:59:04':
       case '10:14:04':
       case '10:29:04':
       case '10:44:04':
       case '10:59:04':
       case '11:14:04':
       case '11:29:04':
       case '11:44:04':
       case '11:59:04':
       case '12:14:04':
       case '12:29:04':
       case '12:44:04':
       case '12:59:04':
       case '13:14:04':
       case '13:29:04':
       case '13:44:04':
       case '13:59:04':
       case '14:14:04':
       case '14:29:04':
       case '14:44:04':
       case '14:59:04':
       case '15:14:04':
       case '15:29:04':
       case '15:44:04':
       case '15:59:04':
       case '16:14:04':
       case '16:29:04':
       case '16:44:04':
       case '16:59:04':
       case '17:14:04':
       case '17:29:04':
       case '17:44:04':
       case '17:59:04':
       case '18:14:04':
       case '18:29:04':
       case '18:44:04':
       case '18:59:04':
       case '19:14:04':
       case '19:29:04':
       case '19:44:04':
       case '19:59:04':
       case '20:14:04':
       case '20:29:04':
       case '20:45:04':
       case '20:59:04':
       case '23:59:04':
       //case '23:02:40' :
                   
            var t = setInterval(function()
            {
                //alert("hi");
                var div1=Math.floor(Math.random() * 90 + 10);
                div1='1'+div1;
                odometer1.innerHTML =div1;
                var div2 =Math.floor(Math.random() * 90 + 10);
                div2='1'+div2;
                odometer2.innerHTML = div2;
                var div3 = Math.floor(Math.random() * 90 + 10);
                div3='1'+div3;
                odometer3.innerHTML = div3;
                var d1= new Date();
                var second=d1.getSeconds();
                var minut=d1.getMinutes();
                if(second==3)
                {
                    clearInterval(t);
                       // alert("hello");
                        $.ajax({
                           
                          url:"<?php echo base_url(); ?>" + "index.php/Home/get_new_lottery",
                          type:'POST',
                          success: function(e){
                              
                              $('#lottery-number').html(e);
                              $.getScript("<?php echo base_url();?>assets/js/odometer.js");
                                $('head').append('<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/odometer.css">');
                          
                                <?php if($active_lottery): ?>
                                    var next_lottery_at=$('#next_lottery_at_refresh').html();
                                    
                                    $('#next_lottery_at').html(next_lottery_at);
                                     var lottery_time=$('#active_lottery_refresh').html();
                                     
                                    $('#lottery_time').html(lottery_time);
                                    var div1=$('#odometerl').html();
                                    if(div1<10)
                                        div1='10'+div1;
                                    else if(div1<100)
                                        div1='1'+div1;
                                    //alert(div1);
                                    odometer1.innerHTML =div1;
                                    var div2 =$('#odometerm').html();
                                    if(div2<10)
                                        div2='10'+div2;
                                    else if(div2<100)
                                        div2='1'+div2;
                                    odometer2.innerHTML = div2;
                                    var div3 = $('#odometern').html();
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
                          }
                        });
                         $.ajax({
            
                              url:"<?php echo base_url(); ?>" + "index.php/Home/refresh_lottery_list",
                              type:'POST',
                              success: function(e){
                                  $('#lottery-number1').html(e);
                              }
                            });
                        
                    
                }
                
                            
            }, 500);
           
       
   }
}
function get_random_number()
{
    var div1=Math.floor(Math.random() * 90 + 10);
    odometer1.innerHTML =div1;
    var div2 =Math.floor(Math.random() * 90 + 10);
    odometer2.innerHTML = div2;
    var div3 = Math.floor(Math.random() * 90 + 10);
    odometer3.innerHTML = div3;
    var d= new Date();
    var seconds=d.getSeconds();
    if(seconds==59)
    {
        
            var next_lottery_at=$('#next_lottery_at_refresh').html();
            $('#next_lottery_at').html(next_lottery_at);
             var lottery_time=$('#active_lottery_refresh').html();
            $('#lottery_time').html(lottery_time);
            var div1=$('#odometerl').html();
            alert(div1);
            odometer1.innerHTML =div1;
            var div2 =$('#odometerm').html();
            odometer2.innerHTML = div2;
            var div3 = $('#odometern').html();
            odometer3.innerHTML = div3;
        
    }
    else
    {
        var t = setTimeout(function(){ get_random_number() }, 500);
        
        
    }
        
}
</script>
<script>
var myVar = setInterval(function(){ myTimer() }, 1000);

function myTimer() {
    var d = new Date();

    var hr = d.getHours();
    var min = d.getMinutes();
    var sec = d.getSeconds();
    if (min < 10) {
        min = "0" + min;
    }
    if (sec < 10) {
        sec = "0" + sec;
    }
    var ampm = "AM";
    if( hr >= 12 ) {
        hr -= 12;
        if(hr==0)
            hr=12;
        ampm = "PM";
    }
    
    var t = hr + ":" + min + ":" + sec+ " " + ampm ;
    document.getElementById("timer").innerHTML = t;
}
</script>
<!--//scripts--> 
</body>
</html>	