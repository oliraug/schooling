<!--%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<!--%@ page import="java.sql.*, java.io.*, java.util.*"%>
<!--%@ page import="javax.servlet.http.*,javax.servlet.*" %>
<!--%@ page import="com.bamkatechnologies.sn4e.*" %>
<!--%@ page errorPage="Error.jsp" %-->
<!--%@ page isThreadSafe="true" %-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="http://www.oliraug.com/"/>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="Olira" value="notranslate"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<link href="http://localhost/oliraug/school/2017/images/olira.png" rel="icon" type="img/png" sizes="16x16"/>
<!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/-->
<link rel="stylesheet" href="http://localhost/oliraug/school/2017/css/events.css" type="text/css" media="screen"/>
<link href = "http://localhost/oliraug/school/2017/css/jquery-ui.theme.css" rel = "stylesheet" type="text/css" media="screen,handheld" media="screen and(min-width:40.5em)"/>
<script src = "http://localhost/oliraug/school/2017/js/jquery.min.js"></script>
<script src = "http://localhost/oliraug/school/2017/js/jquery-ui.js"></script>
<title>OLIRA | Events</title>

</head>
<body>

<div id="header" class="events-form">
	<h1>Create an Event:</h1>
<form name="events" ng-submit="vm.event()" role="form">	
<div class="line clearfix" id="event-name-row" ng-class="{'has-error': form.eventname.$dirty && form.eventname.$error.required}">
<div id="event-name-p" class="content-field">
<label for="name">
<span class="label">Name:</span>
<input name="Event Name" type="text"  maxlength="50" class="input" placeholder="Name of Event, e.g. Seminar, Tour" ng-model="eventname"/>
<span ng-show="form.eventname.$dirty && form.eventname.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="details-row" ng-class="{'has-error': form.details.$dirty && form.details.$error.required}">
<div id="details-p" class="content-field">
<label for="details">
<span class="label"> Details:</span>
<input name="Details" type="text"  maxlength="50" class="input" placeholder="What's happening" ng-model="details"/>
<span ng-show="form.details.$dirty && form.details.$error.required" class="help-block"></span>

</label>
</div>
</div>
<div class="line clearfix" id="where-row" ng-class="{'has-error': form.where.$dirty && form.where.$error.required}">
<div id="where-p" class="content-field">
<label for="where">
<span class="label"> Where:</span>
<input name="Location" type="text"  maxlength="50" class="input" placeholder="Events's happening location" ng-model="where"/>
<span ng-show="form.where.$dirty && form.where.$error.required" class="help-block"></span>

</label>
</div>
</div>
<div class="line clearfix" id="when-row" ng-class="{'has-error': form.when.$dirty && form.when.$error.required}">
<div id="when-p" class="content-field">
<label for="when">
<span class="label"> When:</span>
<input name="When" type="text" id="when" placeholder="Event's happening date" ng-model="when"/>
<span ng-show="form.when.$dirty && form.when.$error.required" class="help-block"></span>

<div ng-class="{'has-error': form.time.$dirty && form.time.$error.required}"
</label>
<label for="time">
<span class="label"> Time:</span>
<input type="time" name="Location" id="time" ng-model="time"/>
<span ng-show="form.time.$dirty && form.time.$error.required" class="help-block"></span>

</label>
</div>
</div>
</div>
<p>

<a href="http://localhost/oliraug/school/2017/views/your-pages.php">Cancel</a>
<input type="submit" name="Create" value="Add Event" ng-disabled="form.$invalid || vm.dataLoading"/>
</form>

<p><a href="http://localhost/oliraug/school/2017/views/invite.php">
<span class="glyphicon glyphicon-comment">Invite Friends</span></a></p>

</div>
<script type="text/javascript">
jQuery(function(){
	$("#when").datepicker();
	});
</script>
<div id="footer"> Copyright &copy; OLIRA Uganda 2017, All rights reserved
<script type="text/javascript">document.getElementById("id").innerHTML="&copy;"+new Date().getFullYear()+"Olira. All rights reserved.";</script></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>