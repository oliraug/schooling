
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="http://www.oliraug.com/"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="Olira" value="notranslate"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<link rel="stylesheet" href="http://localhost/oliraug/school/2017/css/invite.css" type="text/css" media="screen,handheld" media="screen and(min-width:40.5em)"/>
<link href="http://localhost/oliraug/school/2017/images/olira.png" rel="icon" type="img/png" sizes="16x16"/>
<!--[if(lt IE9)&(!IEMobile)]><link href="register.css"/><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/angular.min.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/angular.animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/user.controller.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/app.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/user.service.js"></script>

</head>
<body ng-app="app" ng-controller="userController">

<div class="invites">
{{user.length}} friends
    <nav class= "navbar navbar-default" role= "navigation" >
    <div class= "navbar-header" >
    <h1>Invite Friends</h1>
    </div>
    </nav>
        <!--table class="table table-striped table-bordered">
        <thead>
        <th>Name</th>
        
        </thead>
        <tbody>
            <tr data-ng-repeat="data in user">
                <td><input {{data.name}} type='checkbox'></td>
                
            </tr>
        </tbody>
        </table-->
    </div>

<div id="search" class="invites">
<form class="navbar-search" ng-submit="submit()" role="search">
	<li class="glyphicon glyphicon-search search-icon"></li>
<!--input type="submit" name="Search by Name"  value="Search by Name"/--><input type="search" ng-model="q" id="textfield" placeholder="Search all friends, Members"
																	ng-focus="focus=true"
																	ng-blur="focus-false"
																	ng-change="search(q)"
																	ng-model-options="{debounce:150}"
																	autocomplete="off"
																	aria-label="filter user"/>
<ul class="example-animate-container">
	<li class="animate-repeat" ng-repeat="users in user | filter:q as friends">
	<input type='checkbox'/>{{user.name}}
	</li>
	<li class="animate-repeat" ng-if="friends.length === 0">
		<strong>No friends found...</strong>
		</li>
	</ul>
</form>
<a href="http://localhost/oliraug/school/2017/views/groups.php">Cancel</a>
 <input type="submit" name="Save" value="Save" />
</div>

</body>
</html>