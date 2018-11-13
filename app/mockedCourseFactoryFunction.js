
var buildMockedCourses = function(){
	var _courses = [{
		courseId: 001,
		courseName: "Education",
		subject: "Elementary Math, physics",
		user: "Masiga Moses",
		numberOfStudents: 500,
		numberOfCredits: 24,
		enrolledDate: "21/8/2017"
		},
	{
		courseId: 002,
		courseName: "Law",
		subject: "Land law, communication skills",
		user: "Kirunda Gaster",
		numberOfStudents: 250,
		numberOfCredits: 24,
		enrolledDate: "21/8/2017"
		}
	];
	
	var getAll = function(){
		return _courses;
	};
	var getByCourseId = function(courseId){
		return _courses[courseId];
	};
	var getByCourseName = function(postBody){
		return _courses[postBody];
	};
	var Create = function(post){
		return _courses.push(post);
	};
	var Update = function(courseId, post){
		return _courses[courseId] = post;
	};
	var Delete = function(courseId){
		return _courses.splice(courseId(courseId), 001);
	};
	var getNumberOfCourses = function(){
		return _courses.length;
	};
	var courseId = function(courseId){
		return courseId - 1;
	};
	return {
		getAll: getAll,
		getByCourseId: getByCourseId,
		getByCourseName: getByCourseName,
		Create: Create,
		Update: Update,
		getNumberOfCourses: getNumberOfCourses,
		Delete: Delete
	};
};