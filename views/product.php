<!DOCTYPE html>
<html lang="en">
<head>
  <title>OLIRA | Subjects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="http://localhost/oliraug/school/2017/css/subjects.css" type="text/css" media="screen"/-->
  <link rel = "stylesheet" href = "http://localhost/oliraug/school/2017/css/jquery-ui.theme.css" type="text/css" media="screen,handheld" media="screen and(min-width:40.5em)"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/angular.min.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/post.controller.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/app.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/myscript.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/user.service.js"></script>

<style>
body,html{font-family:Arial,Georgia,"Times New Roman",Times,serif; font-size:14px; color:#000000;font-weight:bold;
background-image: url("http://localhost/oliraug/school/2017/media/thumbnails/ocean.jpg"); height: 90%; background-position: center;background-repeat: no-repeat;background-size:cover;width:90%;background-attachment: fixed !important;}

#primary-school{
position: absolute;
border: 1px solid #111;
padding: 10px;
background: linear-gradient(to bottom right, #3D4258, #6670A0, #9688B4);
width: 340px;
height: 250px;
line-height:1.5;
left:20%;
}
#primary{
display: block;
border: 1px solid gray;
width: 120px;
text-align: center;
padding: 5px;
border-radius: 5px;
text-decoration: none;
margin:5% 0 0 23%;
background:#FF0000;
color:#fff;

}
input[type=submit], input[type=button]{
    background: #FF00FF;
    padding: 6px 10px 6px 10px;
    border: none;
    color: #fff;
	border-radius:5em;
	width:30%;
	margin:1% 0 0 8%;
	font-family:calibri;
}
input[type=submit]:hover,  input[type=button]:hover, select:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
#primary-school h2{font-family:Garamond;margin:-2% -3% 0 -3%; padding:5px 1px 5px 1px; color:#FFF;text-align:center;border-bottom: solid 1px #99ff66;overflow: hidden;font-size:20px;background:red}
.ui-btn a{line-height:5;}
label{color:#00FF7F;}
#popupLogin{
position:relative;
border-radius:5%;
border: 1px solid #ff00cc;
padding: 10px;
background: linear-gradient(to bottom right, #3D4258, #6670A0, #9688B4);
width: 25%;
height: 60%;
line-height:1.5;
}
.ui-btn{
display: block;
border: 1px solid #FF6943;
width: 120px;
text-align: center;
padding: 6px;
border-radius: 5em;
text-decoration: none;
margin: -5% 0 0 38%;
background:#33cc00;
color:#fff;
}
#popupLogin h2{background:#33cc00;font-family:Garamond;margin:-2% -2% 0 -1%; padding:15px 18px 15px 18px; color:#FFF;text-align:center;border-bottom: solid 1px #99ff66;border-radius:1%;font-size:20px;}
a{margin:0 0 0 10%;width:15%;background-color:#00FFCC; border-radius:5em; text-align:center; line-height:1.5;left:15%;text-decoration:none;}
#tertiary{
position:relative;
border-radius:5em;
border: 1px solid #111;
padding: 10px;
background: linear-gradient(to bottom right, #3D4258, #6670A0, #9688B4);
width: 30%;
height: 75%;
}
#college{
display: block;
border: 1px solid #FF6943;
width: 120px;
text-align: center;
padding: 6px;
border-radius: 5%;
text-decoration: none;
margin: -3% 0 0 53%;
background:#FFA500;
color:#fff;
}
#tertiary h3{color:#FF00CC; text-align:center;}
h1{text-align:center;font-style:italic; font-family:Garamond; color:blue;font-size:20px;margin:1% 0 0 2%;}

#higherLearning{
position:relative;
border-radius:5em;
border: 1px solid #111;
padding: 10px;
background: linear-gradient(to bottom right, #3D4258, #6670A0, #9688B4);
width: 30%;
height: 250%;
}
#university{
display: block;
border: 1px solid #FF6943;
width: 120px;
text-align: center;
padding: 6px;
border-radius: 5em;
text-decoration: none;
margin: -3.2% 0 0 68%;
background:#4691A4;
color:#fff;
}
#higherLearning h3{color:#FF00CC; text-align:center;font-family:Garamond;font-size:24px;}

/*html {
    min-height: 100%;
    font-family: 'Nunito', sans-serif;
    -webkit-font-smoothing: antialiased;
}

body {
    background: linear-gradient(to bottom right, #3D4258, #6670A0, #9688B4);
    line-height: 1.5;
}

h1 {
    font-weight: 200;
    font-size: 3rem;
    color: white;
    text-align: center;
}*/

.accordion {
    background: linear-gradient(to bottom right, white, #F8F8F8);
    max-width: 400px;
    background: white;
    margin: 0 auto;
  box-shadow: 0 15px 20px -15px rgba(0, 0, 0, 0.3), 0 35px 50px -25px rgba(0, 0, 0, 0.3), 0 85px 60px -25px rgba(0, 0, 0, 0.1);
}

.accordion-header {
    border-bottom: 1px solid #DDE0E7;
    color: #2a313a;
    cursor: pointer;
    font-weight: 700;
    padding: 1.5rem;
}

.accordion-header:hover {
    background: #F6F7F9;
}

.accordion-content {
    display: none;
    border-bottom: 1px solid #DDE0E7;
    background: #F6F7F9;
    padding: 1.5rem;
    color: #4a5666;
}

.accordion-header::before {
    content: '';
    vertical-align: middle;
    display: inline-block;
    width: .75rem;
    height: .75rem;
    border-radius: 50%;
    background-color: #B1B5BE;
    margin-right: .75rem;
}

.active.accordion-header::before {
    background-color: #FC6468;
}
</style>
</head>

 <body>
 <h1>Click on The Buttons Below to Select Your Subjects!</h1>
 <a href="#" id="primary" >Primary School</a>
<br />
<form id="primary-school" style="display:none" ng-submit="primarySchool()">
<h2 class="ui-widget-header ui-corner-all">Subjects for Primary Schools</h2>
<input name="Subjects" type="checkbox"/>
<label for="maths">Mathematics</label>			
		<br/>
<input name="Subjects" type="checkbox"/>
<label for="English">English</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="SST">Social Studies</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Science">Science</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Swahili">Swahili</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Luganda">Luganda</label><br/>

<a href="http://localhost/oliraug/school/2017/views/your-pages.php">Cancel</a>
    <input type="submit" name="Submit" value="Done" id="button" />
	
</form ng-submit="highSchool()">

 <a href="#popupLogin" id="signin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">High School</a>
<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all" style="display:none">
    <form>
       <h2>Subjects for High School</h2>
<input name="Subjects" type="checkbox"/>
<label for="Maths">Mathematics</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="English">English</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Chemistry">Chemistry</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Biology">Biology</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Physics">Physics</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Agriculture">Agriculture</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="FN">Food and Nutrition</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Economics">Economics</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Geography">Geography</label>
<br/>
<input name="Subjects" type="checkbox"/>
<label for="History">History</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Fine Art">Fine Art</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Swahili">Swahili</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="French">French</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Political">Political Education</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Enterprenuership">Enterprenuership</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Literature">Literature</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Arabic">Arabic</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Healthy">Healthy Science</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Luganda">Luganda</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="C.R.E">Christian Religious Education(C.R.E)</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="Islam">Islamic Religious Education</label><br/>

<a href="http://localhost/oliraug/school/2017/views/your-pages.php">Cancel</a>
    <input type="submit" name="Submit2" value="Done" id="button" />
	</div>

    </form>

<!--For College|Tertiary -->	
<a href="#college" id="college" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">College|Tertiary</a>
<div data-role="popup" id="tertiary" data-theme="a" class="ui-corner-all" style="display:none">
    <form>
    
	<h3>College|Tertiary Subjects</h3>
	  
<div class="accordion">
    <div class="accordion-header">Electrical Engineering</div>
    <div class="accordion-content">
	<input name="Subjects" type="checkbox"/>
<label for="Maths">Mathematics</label>			
		<br/>
		<input name="Subjects" type="checkbox"/>
<label for="English">English</label><br/>
<input name="Subjects" type="checkbox"/>
<label for="Chemistry">Chemistry</label>			
		<br/>
	</div>
    <div class="accordion-header">Fashion & Design</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

    <div class="accordion-header">Journalism and Media Studies</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Nursery Teaching</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Computer Science</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Information Technology</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Scretarial Studies</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Catering and Hotel Management</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">UDBS(Uganda Diploma in Business Studies</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Certificate in Accountancy</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

</div>
	   	
</div>
<form>
<!--For University -->
<a href="#university" id="university" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">University</a>
<div data-role="popup" id="higherLearning" data-theme="a" class="ui-corner-all" style="display:none">
    <form>
       <h3>University Subjects</h3>
	   <div class="accordion-header">Computer Science</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Information Technology</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Software Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Information Systems</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Commerce</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Education</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Social Science</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Social Work & Social Administration</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Business Administration</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Economics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Qualitative Economics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Population Studies</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Statistics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Mechanical Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Electrical Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Civil Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Telecommunication Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Surveying</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Food Science & Nutrition</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Agricultural Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Agriculture</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Forestry</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Mass Communication & Journalism</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Sciences</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   
	
</div>
<form>

                                
</body>
</html>