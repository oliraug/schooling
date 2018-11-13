<!--%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="http://www.oliraug.com/"/>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="Olira" value="notranslate"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<link rel="stylesheet" href="http://localhost/oliraug/school/2017/css/groups.css" type="text/css" media="screen"/>
<link href="http://localhost/oliraug/school/2017/images/olira.png" rel="icon" type="img/png" sizes="16x16"/>

<title>Olira | Groups</title>

</head>
<body>
<div id="header" class="groups-form">
<form id="olira_groups" ng-submit="vm.group()" role="form">
	<a href="http://localhost/oliraug/school/2017/views/invite.php">Add Members</a>
	<a href="http://localhost/oliraug/school/2017/views/invite.php">Invite Members</a>
	<p>
	<h1>Create group</h1>
<div class="line clearfix" id="group-name-row"  ng-class="{'has-error': form.groupname.$dirty && form.groupname.$error.required}">
<div id="group-name-p" class="content-field">
<label for="name">
<strong><span class="label"> Group Name:</span></strong>
<input name="Group Name" type="text"  maxlength="50" class="input" ng-model='vm.groupName' placeholder="Your group name"/>
<span ng-show="form.groupname.$dirty && form.groupname.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="members-row"  ng-class="{'has-error': form.members.$dirty && form.members.$error.required}">
<div id="members-p" class="content-field">
<label for="name">
<strong><span class="label"> Members:</span></strong>
<input name="Members" type="text"  maxlength="50" class="input" ng-model='vm.members' placeholder="Add members to your group"/>
<span ng-show="form.members.$dirty && form.members.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="invite-row"  ng-class="{'has-error': form.invite.$dirty && form.invite.$error.required}">
<div id="invite-p" class="content-field">
<label for="name">
<strong><span class="label"> Invite:</span></strong>
<input name="Invite" type="text"  maxlength="50" class="input" ng-model='vm.user' placeholder="Invite members to this group"/>
<span ng-show="form.invite.$dirty && form.invite.$error.required" class="help-block"></span>

</label>
</div>
</div> 
	
<p>

  	<a href="http://localhost/oliraug/school/2017/views/your-pages.php">Cancel</a>
    <input type="submit" name="Submit2" value="Create" id="button" ng-disabled="form.$invalid || vm.dataLoading"/>
</form>

</div>

<div id="footer"> Copyright &copy; OLIRA Uganda 2017, All rights reserved
<script type="text/javascript">document.getElementById("id").innerHTML="&copy;"+new Date().getFullYear()+"Olira. All rights reserved.";</script></div>

</body>
</html>