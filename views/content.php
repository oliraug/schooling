<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://localhost/" target="_top"/>
<!--Meta tag to ensure proper rendering and touch zooming-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" chrome="1">
<meta name="OLIRAUG" value="notranslate">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="Olira Limited"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="http://localhost/oliraug/school/2017/css/SpryAccordion.css"/>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>

<script src="SpryAccordion.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<title>Content Feeds</title>

</head>

<body>
<div id="Accordion1" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Photo  Full Name Post Time</div>
    <div class="AccordionPanelContent">Content</div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">
		<div class="content-field">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					
				<div id="collapse2" class="panel-collapse collapse out">
	
	<a data-toggle="collapse" title="Comment on this question" data-parent="#accordion" href="#collapse1" class="btn btn-info">Discuss</a>
    <a data-toggle="collapse" title="Comment on this question" data-parent="#accordion" href="#collapse1" class="btn btn-info"><span class="glyphicon glyphicon-comment">Answers</span></a>
	<a data-toggle="collapse" title="Help us improve this answer" data-parent="#accordion" href="#collapse1" class="btn btn-info"><span class="glyphicon glyphicon-comment">Improve this answer</span></a>
            	
	</div>
   </div>
   </div>
   </div>
   </div>
   </div>
  
   <div class="content-field">
      <div class="panel-group" id="accordion">
          <div class="panel-heading">
            <div id="collapse1" class="panel-collapse collapse out">
            <div class="fields"><textarea cols="30" rows="0" id="text" placeholder ="Join the discussion ..." autofocus="autofocus"></textarea>
			<input type="button" id="btnPublish" class="btn btn-info " value="Post" ng-click=""/>
            </div>
          </div>
          </div>
          </div>
        </div>
</div></div>
 <div class="container">
  <!--h3>Discussions</h3-->
  <a href="#discuss" data-toggle="popover" title="Discussions" data-placement="bottom" data-content="Some content inside the popover, Uganda is a land locked country">Discuss</a>
  <!--textarea data-toggle="popover" data-content></textarea-->
</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<!--the jquery library-->
<script src="http://code.jquery.com/jquery-1.11.3.min.min.js"></script>
<!--jquery mobile library-->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("div.panel-heading").Accordion({
		collapsible: true,
    active: false,
    heightStyle: 'content'
	});
	
});
</script>
</body>
</html>
