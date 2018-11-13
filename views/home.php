<!--%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<!--%@ page isThreadSafe="true"%>
<!--%@ page import="java.sql.*"%-->
<!-- %@ page import="com.bamkatechnologies.sn4e.FileUploadController"%-->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="http://www.oliraug.com/"/>
<meta name="Olira" value="notranslate"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"-->
<link rel="stylesheet" type="text/css" href="C:/wamp/www/oliraug/school/2017/css/home.css"  media="screen"/>
<link rel="stylesheet" href="C:/wamp/www/SpryAssets/bootstrap.min.css">
<link href="C:/wamp/www/oliraug/school/2017/images/logo.png" rel="icon" type="img/png" sizes="22x22"/>
<link href = "C:/wamp/www/oliraug/school/2017/css/jquery-ui.theme.css" rel = "stylesheet" type="text/css" media="screen,handheld" media="screen and(min-width:40.5em)"/-->
<script src = "C:/wamp/www/oliraug/school/2017/js/jquery-3.2.0.min.js"></script>
<script src = "C:/wamp/www/oliraug/school/2017/js/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.3/tinymce.min.js"></script> 
<script src = "C:/node_modules/angular/angular.js"></script>
<script src = "C:/node_modules/angular-route/angular-route.js"></script>
<script type="text/javascript" src="C:/wamp/www/oliraug/school/2017/app/App.js"></script>
<script type="text/javascript" src="C:/wamp/www/oliraug/school/2017/app/post.controller.js"></script>
<script type="text/javascript" src="C:/wamp/www/oliraug/school/2017/app/register.controller.js"></script>
<script type="text/javascript" src="C:/wamp/www/oliraug/school/2017/app/group.controller.js"></script>
<script type="text/javascript" src="C:/wamp/www/oliraug/school/2017/app/search.controller.js"></script>
<!--script type="text/javascript">
angular.element(document).ready(function(){
	angular.bootstrap(document.body, ['myPostController']);
	angular.bootstrap(document.body, ['myGroupController']);
	angular.bootstrap(document.body, ['mySearchController']);
	angular.bootstrap(document.body, ['myUserController']);
	});
</script-->
<script>
$(document).ready(function() {
    $( '.dropdown' ).hover(
        function(){
            $(this).children('.sub-menu').slideDown(200);
        },
        function(){
            $(this).children('.sub-menu').slideUp(200);
        }
    );
}); // end ready

  $(function(){
	  $(".accordion").on("click", ".accordion-header", function() {
    $(this).toggleClass("active").next().slideToggle();
 });
  });

</script> 
</head>

<body ng-app>
<nav>
    <ul>
	<div class="olira-logo"><a title="Homepage" href="http://localhost/"><img id="logo" src="C:/wamp/www/oliraug/school/2017/images/logo.png" alt="Educating the World" title="Olira Uganda Limited" align="left" width="45" height="45"/></a></div>
	    <li><a href="C:/wamp/www/oliraug/school/2017/views/home.php" data-icon="home">Home</a></li>
        <li><a href="#">Messages</a></li>
		<li><a href="#">Notifications</a>
		<li><a href="C:/wamp/www/oliraug/school/2017/views/your-pages.php">Create Page</a>
		<li class="dropdown">
            <a href="#"><img src="C:/wamp/www/oliraug/school/2017/images/olira.png" width="35" height="35" style="border-radius:50%;" data-toggle="dropdown"></a>
            <ul class="sub-menu">
                <li><a href="#"></a></li>
                ...
                <li class="dropdown">
                    <a href="#">Username</a>
					<a href="#">Fullname</a>
					<a href="#" ng-click="">Logout</a>
					<a href="#">Help</a>
					<a href="#">Send as Your Feedback</a>
                    
                </li>
            </ul>
        
		<div id="search" ng-app="mySearchController" ng-controller="SearchController">
		<li><form name="query">
                    <input type="search" ng-model="q" id="textfield" placeholder="Search all friends, Members"
																	ng-focus="focus=true"
																	ng-blur="focus-false"
																	ng-click="search(q)"
																	ng-model-options="{debounce:150}"
																	autocomplete="off"
																	aria-label="filter user"/>
                    <!--button name="submit" type="submit" value="Search"/>Search</button>
					<ul>
						<li ng-repeat="result in results"><!a href="#/detail/{{result.id}}"->{{result.name}}</a></li>
					</ul-->
                 	 
               </form></li>
		</div></li>
    </ul>
	
</nav>

<div class="toggler" ng-app='myUserController' ng-controller="RegisterController as user">
  <div id="effect" class="ui-widget-content ui-corner-all">
	<form method="post" action="/upload" enctype="multipart/form-data">
	<input type="file" name="photo"/><!--input type="submit" name="upload"/-->
	</form>
    <a href="#"><img src="C:/wamp/www/oliraug/school/2017/images/olira.png" width="65" height="50" style="border-radius:5em;" data-toggle="dropdown"></a>
	<h3></h3>
	<h3></h3>
	<h3>
	<div class="_8O9a17">
		<a aria-label="Profile of {{user.name}}" href="http://www.oliraug.com/{{user.name}}">
			<div class="_8O9aa17 img">
				<img class="_8O9ab17 img1a" src="C:/wamp/www/oliraug/school/2017/images/logo.png" alt aria-label="{{user.name}}" role="img" style="width:40px; height:40px;">
			</div>
		</a>
	</div>
	</h3>
	<h3 class="ui-widget-header ui-corner-all">Connections</h3>
	<h3 class="ui-widget-header ui-corner-all">Friends</h3>
  </div>
</div>
    
<div class="textarea" ng-app="myPostController" ng-controller="PostController as post">
<div id="post-list" ng-repeat="post in posts">
  <h4>
    {{post.postBody}}    
  </h4>	
 </div>
<form name="postForm" ng-submit="post.newPost()">
<textarea id="flow_button_view" title="Educate someone, {{user.name}}!" name="desc" class="social_text_area" ng-model="post.text" placeholder="Flow your thinking"></textarea>

 <!--div class="_8O9a17">
		<a aria-label="Profile of {{user.name}}" href="http://www.oliraug.com/{{user.name}}">
			<div class="_8O9aa17 img">
				<img class="_8O9ab17 img1a" src="C:/wamp/www/oliraug/school/2017/images/logo.png" alt aria-label="{{user.name}}" role="img" style="width:40px; height:40px;">
			</div>
		</a>
	</div-->
 
<div id="flow_info">
  <button name="Submit" type="submit" class="social_button_area" title="Share Your Flow">
    <i class="fa fa-share-alt-circle"></i>Post
  </button>
</div>
</form>
</div>

<div id="friendship" ng-app="myUserController" ng-controller="RegisterController as user">
<div ng-repeat="people in user">
  <h5><span class="label label-info">
    {{people.name}}
    </span>
  </h5>
</div>
	<form name="friendship" ng-submit="user.addPerson()">
		<input type="hidden" name="Person Name" value="{{people.name}}"/>
        <input type="hidden" name="to_remove" value="{{people.wire}}"/>
        <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Accept</button>
		<button type="submit" class="btn btn-success pull-left"><span class="glyphicon glyphicon-minus-sign"></span>Deny</button>
	</form>
</div>

<div id="groups" class="accordion" ng-app="myGroupController" ng-controller="GroupController as group">
<div ng-repeat="person in group">
  <h5>Group Suggestions<span class="label label-info">
    <br/>{{person}}
    </span>
  </h5>
</div>
	<form name="">
		<input type="hidden" name="Person Name" value="{{person.groupname}}"/>
        <input type="hidden" name="to_remove" value="{{person.OptIn}}"/>
		<button type="submit" class="btn btn-success pull-right" ng-click="group.joinGroup()"><span class="glyphicon glyphicon-plus-sign"></span>Join</button>
    </form>
</div>


<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->
<script>
var $info = $("#flow_info");

tinymce.init({
  selector: 'textarea',
  init_instance_callback: function (editor) {
    editor.on('focus', function (e) {
      $info.show();
    });
    editor.on('blur', function (e) {
      $info.hide();
    });
  }
});
</script>
</body>
</html>
<!--protractor wamp/www/oliraug/school/2017/protractor/tests/conf.js
