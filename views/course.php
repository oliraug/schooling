<!--%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<base href="http://www.oliraug.com/"/>
<meta http-equiv="Content-Type" content="text/html;>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="Olira" value="notranslate"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<link href="http://localhost/oliraug/school/2017/images/olira.png" rel="icon" type="img/png" sizes="16x16"/>
<!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/-->
<link rel="stylesheet" href="http://localhost/oliraug/school/2017/css/course.css" type="text/css" media="screen"/-->
<link href = "http://localhost/oliraug/school/2017/css/jquery-ui.theme.css" rel = "stylesheet" type="text/css" media="screen,handheld" media="screen and(min-width:40.5em)"/>
<script src = "http://localhost/oliraug/school/2017/js/jquery.min.js"></script>
<script src = "http://localhost/oliraug/school/2017/js/jquery-ui.js"></script>
<script src = "C:/node_modules/angular/angular.js"></script>

<!--link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"/>
<script src = "https://code.jquery.com/jquery.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script-->
      
<title>Olira | Course</title>

</head>
<body>
<div id="header" class="course-form">
<form id="form1 course" name="form6" ng-submit="vm.course()" role="form">
<h1>Create your Course</h1>
<div class="line clearfix" id="course-name-row" ng-class="{'has-error': form.coursename.$dirty && form.coursename.$error.required}">
<div id="course-name-p" class="content-field">
<label for="name">
<strong><span class="label"> Course Name:</span></strong>
<input name="Course Name" type="text"  maxlength="50" class="input" ng-model="vm.courseName" placeholder="Your Course name"/>
<span ng-show="form.coursename.$dirty && form.coursename.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="subject-row" ng-class="{'has-error': form.subjects.$dirty && form.subjects.$error.required}">
<div id="subject-p" class="content-field">
<label for="name">
<strong><span class="label"> Subjects:</span></strong></label>
<select name="Subjects" id="subject" required="required" ng-model="vm.subjects">
					<option value="0" selected="selected">Select ---</option>
					<option value="primary">For Primary School</option>
					<option value="High School">For High School</option>
					<option value="College">For College|Tertairy</option>
					<option value="University">For University</option>
		</select>
		<span ng-show="form.subjects.$dirty && form.subjects.$error.required" class="help-block"></span>

</div>
</div> 
		
<div class="line clearfix" id="students-row"  ng-class="{'has-error': form.students.$dirty && form.students.$error.required}">
<div id="students-p" class="content-field">
<label for="name">
<strong><span class="label"> Students:</span></strong>
<input name="students" type="text"  maxlength="50" class="input" ng-model="vm.students" placeholder="Course Members if any"/>
<span ng-show="form.students.$dirty && form.students.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="creditUnits-row"  ng-class="{'has-error': form.creditUnits.$dirty && form.creditUnits.$error.required}">
<div id="creditUnits-p" class="content-field">
<label for="name">
<strong><span class="label">Credit Units:</span></strong>
<input name="credit units" type="number"  maxlength="50" class="input" ng-model="vm.numberOfCreditUnits" placeholder="Number of credit units"/>
<span ng-show="form.creditUnits.$dirty && form.creditUnits.$error.required" class="help-block"></span>

</label>
</div>
</div> 
<div class="line clearfix" id="date-row"  ng-class="{'has-error': form.enrolledDate.$dirty && form.enrolledDate.$error.required}">
<div id="enrolled_date" class="content-field">
<label for="enrolled_date">
<strong><span class="label">Enrolled Date:</span></strong>
<input id="enrolled_date" name="Enrolled Date" type="text" class="input" placeholder="dd-MM-yyyy" ng-model="vm.enrolledDate" required />
<span ng-show="form.enrolledDate.$dirty && form.enrolledDate.$error.required" class="help-block"></span>

</label>
</div>
</div> 

  	<a href="http://localhost/oliraug/school/2017/views/your-pages.php">Cancel</a>
 	<input id="createCourse" name="Create" type="submit" value="Create" ng-disabled="form.$invalid || vm.dataLoading"/>
</form>
</div>

<!--input type="date" id="date" name="input" ng-model="enrolledDate"
       placeholder="dd-MM-yyyy" min="01-01-2013" max="31-12-2095" required />
   <div role="alert">
     <span class="error" ng-show="form.input.$error.required">
         Required!</span>
     <span class="error" ng-show="form.input.$error.date">
         Not a valid date!</span>
    </div-->

<div id="footer"> Copyright &copy; OLIRA Uganda 2017, All rights reserved
<script type="text/javascript">document.getElementById("id").innerHTML="&copy;"+new Date().getFullYear()+"Olira. All rights reserved.";</script></div>

<script type="text/javascript">
jQuery(function(){
$("#date").datepicker();
	});
</script>
<!--script type="text/javascript">
	$(function(){
	$("#subject-row").change(function(event){
		$("#subject-p").html("#subject-row").val();
	});
	});
</script-->
<script type="text/javascript">
	$(function(){
		function runSubjects(){
			var selectedSubjects = $("#subject").val();
			
		var options = {};
		if(selectedSubjects === "scale"){
			options = {percent : 50};
		} else if {selectedSubjects === "size"){
			options = { to: { width:200, height:60}};
			
			#("#subject-p").toggle(selectedSubjects, options, 500);
			};
	});
		});
</script>
<!--script type="text/javascript">
	$(function(){
		$("#").collapsible("option", "collapse", true);
	});
</script-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>