
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="http://www.oliraug.com/"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="Olira" value="notranslate"/>

<!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/-->
<link rel="stylesheet" href="C:/wamp/www//oliraug/school/2017/css/institution.css" type="text/css" media="screen,handheld" media="screen and(min-width:40.5em)"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="http://localhost/oliraug/school/2017/images/olira.png" rel="icon" type="img/png" sizes="16x16"/>
<!--[if(lt IE9)&(!IEMobile)]><link href="register.css"/><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/angular.min.js"></script>
<script type="text/javascript" src="C:/wamp/www//oliraug/school/2017/app/institution.controller.js"></script>
<script type="text/javascript" src="C:/wamp/www//oliraug/school/2017/app/App.js"></script>
<script type="text/javascript" src="C:/wamp/www/oliraug/school/2017/app/institution.service.js"></script>
<script src = "C:/node_modules/angular/angular.js"></script>
<script src = "C:/node_modules/angular-route/angular-route.js"></script>
<title>Olira | Institution</title>
</head>

<body>

<div id="header" class="institution-form" ng-view>
<h1>Create Institution|College|School</h1>
<form name="institution" ng-submit="vm.submit()" role="form">
<div class="line clearfix" id="course-name-row" ng-class="{'has-error': form.name.$dirty && form.name.$error.required}">
<div id="course-name-p" class="content-field">
<label for="name">
<strong><span class="label">Institution Name:</span></strong>
<input name="Course Name" type="text"  maxlength="50" class="input" ng-model="vm.institutionName" placeholder="Enter name of your institution" required />
<span ng-show="form.name.$dirty && form.name.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="course-name-row" ng-class="{'has-error': form.departmentname.$dirty && form.departmentname.$error.required}">
<div id="course-name-p" class="content-field">
<label for="name">
<strong><span class="label">Department Name:</span></strong>
<input name="Course Name" type="text"  maxlength="50" class="input" ng-model="vm.departmentName" placeholder="Enter name of your department"/>
<span ng-show="form.departmentName.$dirty && form.departmentName.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div id="actions">
<a href="http://localhost/oliraug/school/2017/views/your-pages.php" class="btn btn-link">Cancel</a>
<input type="submit" id="btnPublish" class="btn btn-info" name="register" value="Create" ng-disabled="form.$invalid || vm.dataLoading"/>
</div>
<form>
</div>				

<div id="footer"> Copyright &copy; OLIRA Uganda 2017, All rights reserved
<script type="text/javascript">document.getElementById("id").innerHTML="&copy;"+new Date().getFullYear()+"Olira. All rights reserved.";</script></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>