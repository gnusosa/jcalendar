<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>
<?php echo $title; ?>
</title>
<link rel='stylesheet' type='text/css' href="<?php echo base_url("asset_fullcalendar/fullcalendar/fullcalendar.css"); ?>" />
<link rel='stylesheet' type='text/css' href="<?php echo base_url("asset_fullcalendar/css/jquery-ui-1.8.16.custom.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("asset_fullcalendar/jquery/jquery-1.6.2.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("asset_fullcalendar/jquery/jquery-ui-1.8.16.custom.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("asset_fullcalendar/fullcalendar/fullcalendar.min.js"); ?>"></script>

<script type='text/javascript'>

$(document).ready(function() {
		$('#calendar').fullCalendar({
header: {
left: 'prev,next today',
center: 'title',
right: 'month,agendaWeek,agendaDay'
},

editable: true,

eventSources: [<?php foreach($db_users as $key){ ?>
				{
					url: '<?php echo base_url("welcome/get_schedule_db/$key->user"); ?>',
					color: '<?php echo $key->color; ?>',
					textColor: '<?php echo $key->text_color; ?>' 
				},
			   <?php } ?> ],


eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
if (dayDelta>=0) {
dayDelta = "+"+dayDelta;
}
if (minuteDelta>=0) {
minuteDelta="+"+minuteDelta;
}

var dataString = 'schedule_id='+ event.id +'&dayDelta=' +dayDelta+ '&minuteDelta=' +minuteDelta+ '&allday=' +allDay + '&type=drop';
$.ajax({
	    type:"POST",
	    url:"<?php echo base_url("/welcome/update_schedule"); ?>",
	    data: dataString,
});

},
eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
	if (dayDelta>=0) {
		dayDelta = "+"+dayDelta;
	}
	if (minuteDelta>=0) {
		minuteDelta="+"+minuteDelta;
	}

var dataString = 'schedule_id='+ event.id +'&dayDelta=' +dayDelta+ '&minuteDelta=' +minuteDelta+ '&type=resize';
$.ajax({
	    type:"POST",
	    url:"<?php echo base_url("/welcome/update_schedule"); ?>",
	    data: dataString,
});
},

loading: function(bool) {
if (bool) $('#loading').show();
else $('#loading').hide();
}

});
	$('#datepicker').datepicker({
        inline: true,
        onSelect: function(dateText, inst) {
            var d = new Date(dateText);
			$('#calendar').fullCalendar( 'changeView', 'agendaDay' );
            $('#calendar').fullCalendar('gotoDate', d);
        }
	});

});

</script>
<style type='text/css'>

body {
	margin-top: 40px;
	text-align: center;
	font-size: 14px;
	font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
}

#loading {
position: absolute;
top: 5px;
right: 5px;
}

#calendar {
width: 900px;
margin: 0 auto;
}

</style>
</head>
<body>
<div id='loading' style='display:none'>loading...</div>
<div id='datepicker'></div>
<div id='calendar'></div>
</body>
</html>
