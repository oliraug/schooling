<!DOCTYPE html>
<html ng-app="app">
<head>
<base href="http://www.oliraug.com/" target="_top"/>
<!--Meta tag to ensure proper rendering and touch zooming-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" chrome="1" charset="utf-8">
<meta name="Olira UG" value="notranslate">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="Educating the World"/>

<!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/-->
<link href="http://localhost/oliraug/school/2017/css/style.css" rel="stylesheet" type="text/css">
<link href="http://localhost/oliraug/school/2017/images/olira.png" rel="icon" type="img/png" sizes="16x16"/>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<!--script type="text/javascript" src="http://localhost/oliraug/school/2017/js/angular.min.js"></script-->
<script type="text/javascript" src="http://localhost/oliraug/school/2017/app/login.controller.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/app/register.controller.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/app/App.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/app/user.service.js"></script>
<script src = "C:/node_modules/angular/angular.js"></script>
<script src = "C:/node_modules/angular-route/angular-route.js"></script>


<title>Olira-Login</title>

<script>
function updateTime() { // Update the SVG clock graphic to show current time
var now = new Date(); // Current time
var min = now.getMinutes(); // Minutes
var hour = (now.getHours() % 12) + min/60; // Fractional hours
var minangle = min*6; // 6 degrees per minute
var hourangle = hour*30; // 30 degrees per hour
// Get SVG elements for the hands of the clock
var minhand = document.getElementById("minutehand");
var hourhand = document.getElementById("hourhand");
// Set an SVG attribute on them to move them around the clock face
minhand.setAttribute("transform", "rotate(" + minangle + ",50,50)");
hourhand.setAttribute("transform", "rotate(" + hourangle + ",50,50)");
// Update the clock again in 1 minute
setTimeout(updateTime, 60000);
}
</script>

</head>
<body onload="updateTime()">

<div id="clock">
<!-- viewBox is coordinate system, width and height are on-screen size -->
<svg id="clock" viewBox="0 0 100 100" width="200" height="200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs> <!-- Define a filter for drop-shadows -->
<filter id="shadow" x="-50%" y="-50%" width="200%" height="200%">
<feGaussianBlur in="SourceAlpha" stdDeviation="1" result="blur" />
<feOffset in="blur" dx="1" dy="1" result="shadow" />
<feMerge>
<feMergeNode in="SourceGraphic"/><feMergeNode in="shadow"/>
</feMerge>
</filter>
</defs>
<circle id="face" cx="50" cy="50" r="45"/> <!-- the clock face -->
<g id="ticks"> <!-- 12 hour tick marks -->
<line x1='50' y1='5.000' x2='50.00' y2='10.00'/>
<line x1='72.50' y1='11.03' x2='70.00' y2='15.36'/>
<line x1='88.97' y1='27.50' x2='84.64' y2='30.00'/>
<line x1='95.00' y1='50.00' x2='90.00' y2='50.00'/>
<line x1='88.97' y1='72.50' x2='84.64' y2='70.00'/>
<line x1='72.50' y1='88.97' x2='70.00' y2='84.64'/>
<line x1='50.00' y1='95.00' x2='50.00' y2='90.00'/>
<line x1='27.50' y1='88.97' x2='30.00' y2='84.64'/>
<line x1='11.03' y1='72.50' x2='15.36' y2='70.00'/>
<line x1='5.000' y1='50.00' x2='10.00' y2='50.00'/>
<line x1='11.03' y1='27.50' x2='15.36' y2='30.00'/>
<line x1='27.50' y1='11.03' x2='30.00' y2='15.36'/>
</g>
<g id="numbers"> <!-- Number the cardinal directions<text x="82" y="70">4</text>-->
<text x="50" y="18">12</text><text x="85" y="53">3</text>
<text x="50" y="88">6</text><text x="15" y="53">9</text>
</g>
<!-- Draw hands pointing straight up. We rotate them in the code. -->
<g id="hands" filter="url(#shadow)"> <!-- Add shadows to the hands -->
<line id="hourhand" x1="50" y1="50" x2="50" y2="24"/>
<line id="minutehand" x1="50" y1="50" x2="50" y2="20"/>
</g>
</svg>
</div>

<h3>Ask questions, share knowledge, explore ideas, and educate the world!</h3>
<div id="main" ng-controller="LoginController">
<div id="login" ng-view>
<div id="logo"><img id="Logo"/></div>
<form name="loginForm" ng-submit="vm.login()" role="form">
<div class="form-group" ng-class="{'has-error': loginForm.username.$dirty && loginForm.username.$error.required}">
<label for="username">Username :</label>
<input id="username" name="username" placeholder="username" type="text" ng-model="vm.username" required />
<span ng-show="loginForm.username.$dirty && loginForm.username.$error.required" class="help-block"></span>
</div>
<div class="form-group" ng-class="{'has-error': loginForm.password.$dirty && loginForm.password.$error.required}">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password" ng-model="vm.password" required />
<span ng-show="loginForm.password.$dirty && loginForm.password.$error.required" class="help-block"></span>
</div>
<p></p>
<input id="login" name="submit" type="submit" value="Login">

</form>

</div>
</div>
<div id="register">
<a href="C:/wamp/www/oliraug/index.php">Register</a>
</div>

<div id="footer"> Copyright &copy; OLIRA Uganda 2017, All rights reserved
<script type="text/javascript">document.getElementById("id").innerHTML="&copy;"+new Date().getFullYear()+"Olira. All rights reserved.";</script></div>

</body>
</html>
