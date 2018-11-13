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
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/subject.controller.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/App.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/myscript.js"></script>
<script type="text/javascript" src="http://localhost/oliraug/school/2017/js/subject.service.js"></script>

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
height: 65%;
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
height: auto;
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
height: 180%;
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
<form id="primary-school" style="display:none" ng-submit="primarySchool()" ng-show="checked">
<h2 class="ui-widget-header ui-corner-all">Subjects for Primary Schools</h2>
<input name="Subjects" type="checkbox" ng-model="checked"/>
<label for="maths">Mathematics</label>			
		<br/>
<input name="Subjects" type="checkbox" ng-model="checked"/>
<label for="English">English</label><br/>
<input name="Subjects" type="checkbox" ng-model="checked"/>
<label for="SST">Social Studies</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
<label for="Science">Science</label><br/>
<input name="Subjects" type="checkbox" ng-model="checked"/>
<label for="Swahili">Swahili</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
<label for="Luganda">Luganda</label><br/>

<a href="http://localhost/oliraug/school/2017/views/your-pages.php">Cancel</a>
    <input type="submit" name="Submit" value="Done" id="button" />
	
</form>

 <a href="#popupLogin" id="signin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">High School</a>
<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all" style="display:none" ng-show="checked">
    <form ng-submit="highSchool()">
       <h2>Subjects for High School</h2>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Mathematics</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">English</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Commerce</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Chemistry</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Biology">Biology</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Physics">Physics</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Agriculture">Agriculture</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="FN">Food and Nutrition</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Economics">Economics</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Geography">Geography</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="History">History</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Fine Art">Fine Art</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Swahili">Swahili</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="French">French</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Political">Political Education</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Enterprenuership">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Literature">Literature</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Arabic">Arabic</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Healthy">Healthy Science</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Luganda">Luganda</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="C.R.E">Christian Religious Education(C.R.E)</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
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
    <div class="accordion-header">Electrical & Electronics Engineering</div>
    <div class="accordion-content" ng-show="checked">
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Domestic & Industrial Electrical Installation</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Domestic & Appliances Repair</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Motor & Generator Rewinding</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Programmable Logic Control (PLC)/ Factory Automation</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Sequential Control System</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Refrigeration & Air Conditioning</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Renewable Energy (Solar Technology)</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Applications</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Radio,TV & Electronics Techinians Course I</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Radio,TV & Electronics Techinians Course II</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Embeded Systems/Electronics & Micro Controllers</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Power & Industrial Electronics</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">TV & Radio Repair & Servicing</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Instrumentation for Medical, Domestic</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Industrial Equipment</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">PCB Design & Fabrication</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Electronics Simulations</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Electronic Component Mounting & Soldering</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Computer Networks</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Hardware Repair & Mainteance</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Programming of Microcontrollers</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Digital Electronics for TTL & CMOs Technologies</label>
				
	</div>
    <div class="accordion-header">Tailoring, Fashion & Design</div>
    <div class="accordion-content">		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Construction & Sewing</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Designing Fabrics</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Making of Cushions, Jewellery & Patchwork</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Enterprenuership Skills</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Industrial Training</label>
	</div>

    <div class="accordion-header">Journalism and Media Studies</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Nursery Teaching</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Computer Science</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Business Computing</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Computing & Information Systems</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

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

	<div class="accordion-header">Accounting & Finance</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Carpentry & Woodwork</div>
    <div class="accordion-content" ng-show="checked">
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Furniture Production</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Furniture Design & Drawing</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Site Construction Practice</label>
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Chemistry">Wood Finishing & Coating</label>	
		<br/>		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Machine Technology</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Material Science & Application</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Roof Work</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Applications</label>			
		
	</div>

	<div class="accordion-header">Building & Construction</div>
    <div class="accordion-content" ng-show="checked">
	<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Basic Architectural Work</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Concrete Technology</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Mansory Work</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Floor & Wall tile fixing</label>	
		<br/>		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Drainage Channel Construction</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Applications</label>			
		
	</div>
	
	<div class="accordion-header">Welding & Fabrications</div>
    <div class="accordion-content" ng-show="checked">
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Oxy-acetylene/Gas Welding</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Manual Metal Arc Welding</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">MAG/MIG Welding</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">TIG Welding (Stainless steel & Aluminium Welding)</label>	
		<br/>		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Domestic/Furniture & Machinery Fabrication</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Structural Fabrication</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Material Inspection</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Applications</label>			
		
	</div>
	
	<div class="accordion-header">Plumbing & Sheet Metal</div>
    <div class="accordion-content" ng-show="checked">
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Domestic Plumbing</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Industrial Plumbing</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Sheet Metal Drawing & Development</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Pump Repair & Installation</label>	
		<br/>		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Rain Water Harvesting</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Chemistry">Computer Applications</label>			
		
	</div>

	<div class="accordion-header">Hairdressing, Beauty & Cosmetology</div>
    <div class="accordion-content" ng-show="checked">
	<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="English">Plaiting</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Handling hair disorders & Scalp</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Maicure & Pedicure</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Facial Treatment</label>	
		<br/>		
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="English">Skin Treatment</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Make up</label>
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Chemistry">Massage</label>
		<br/>		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">General Beauty Therapy</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership Skills</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Industrial Training</label>
	</div>

	<div class="accordion-header">Shoemaking & Leather Tanning</div>
    <div class="accordion-content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>

	<div class="accordion-header">Bakery & Cookery</div>
    <div class="accordion-content" ng-show="checked">
	<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Kitchen Principles</label>
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Chemistry">Preparation for Soups & Sauces</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Preparation of Traditional Dishes</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Handling Cereals in Cookery</label>	
		<br/>		
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Industrial Training</label>
	</div>

	<div class="accordion-header">Human Resource Management</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Enterprenuership & Business Management</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Public Administration & Management</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Records Keeping & Information Management</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Customs Clearing, Forwarding & Shipping Management</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Purchasing & Supplies Management</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	<div class="accordion-header">Social Work & Social Administration</div>
    <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

</div>
	   	
</div>
<form>
<!--For University -->
<a href="#university" id="university" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">University</a>
<div data-role="popup" id="higherLearning" data-theme="a" class="ui-corner-all" style="display:none">
    <form>
       <h3>University Subjects</h3>
	   <div class="accordion">
	   <div class="accordion-header">Computer Science</div>
	   <div class="accordion-content" ng-show="checked">
	   <input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Communication Skills</label>			
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Maths">Computer Literacy</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Database Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Systems Analysis & Design</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Computer Architecture</label>			
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Maths">Networks & Data Communication</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Computational Mathematics I</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Computational Mathematics II</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Research Methodology</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Information Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Principals of Programming</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Data Structures & Alogarithms</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Computer Organization & Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Principals of Computer Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Introduction to Probability for Computer Scientists</label>			
		<br/>
		
	   </div>

	   <div class="accordion-header">Information Technology</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Software Engineering</div>
	   <div class="accordion-content" ng-show="checked">
	   <input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Communication Skills</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Business Analysis and Solution Design</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">System Environments</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Programming 1</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">IT Toolbox</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Networking and Operating Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Database and UML Modelling</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Projects & their Management</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Programming 2</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Programming 3</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Dependable Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Maths">Mathematical Techniques for Computer Science</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Fundamentals of Computation</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Fundamentals of Computer Engineering</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Fundamentals of Artificial Intelligence</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Fundamentals of Computer Architecture</label>			
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Maths">Object Oriented Programming with Java 1</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Object Oriented Programming with Java 2</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Fundamentals of Distributed Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="Maths">Fundamentals of Databases</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Operating Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Algorithms and Imperative Programming</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Distributed Computing</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Logic and Modelling</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Processor Microarchitecture</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Machine Learning and Optimisation</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Symbolic AI</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Implementing System-on-Chip Designs</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Third Year Project Laboratory</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Natural Language Systems</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Chip Multiprocessors</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Verified Development</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">User Experience</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Agile Software Engineering Development</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Software Evolution</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Advanced Algorithms 1</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">AI and Games</label>			
				
	   </div>

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

	   <div class="accordion-header">Quantitative Economics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Population Studies</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Statistics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Mechanical Engineering</div>
	   <div class="accordion-content" ng-show="checked">
	   <input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Engine Overhaul & Auto Electrical</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Chassis (brake system) & Suspension</label>			
		<br/>
		<input name="Subjects" type="checkbox"ng-model="checked"/>
		<label for="English">Computer Car Diagnosis (OBD)</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Electronic Control Fuel Injection (EFI)</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Automatic Transmission Mainteance</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Radiator Repair & Vehicle Body Care</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Preventive Mainteance</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Maths">Defensive Driving for Driver</label>			
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Vehicle Inspection System</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="English">Enterprenuership</label>
		<br/>
		<input name="Subjects" type="checkbox" ng-model="checked"/>
		<label for="Chemistry">Computer Applications</label>			
		
	   </div>

	   <div class="accordion-header">Electrical & Computer Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Civil & Environmental Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Telecommunication Engineering</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Land Surveying & Geomatics</div>
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

	   <div class="accordion-header">Library & Information Science</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Records & Archives Management</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Land Economics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Construction Management</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Business Statistics</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	   <div class="accordion-header">Actuarial Sciences</div>
	   <div class="accordion-content">Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>

	 </div>  
	
</div>
<form>

                                
</body>
</html>