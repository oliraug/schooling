
var buildMockedSubjects = function(){
	var _subjects = [{
		subjectId: 001,
		subjectName: "Data Structures & Algorithms",
		department: "Computer Science",
		user: "Masiga Moses",
		course: "Computer Science"
		},
	{
		subjectId: 002,
		subjectName: "principles of Economics",
		department: "Economic Research Policy",
		user: "Kirunda Gaster",
		course: "Economics"
		}
	];
	
	var getAll = function(){
		return _subjects;
	};
	var getBySubjectId = function(subjectId){
		return _subjects[subjectId];
	};
	var getBySubjectName = function(subjectName){
		return _subjects[subjectName];
	};
	var Create = function(subject){
		return _subjects.push(subject);
	};
	var Update = function(subjectId, subject){
		return _subjects[subjectId] = subject;
	};
	var Delete = function(subjectId){
		return _subjects.splice(subjectId(subjectId), 001);
	};
	var getNumberOfSubjects = function(){
		return _subjects.length;
	};
	var subjectId = function(subjectId){
		return subjectId - 1;
	};
	return {
		getAll: getAll,
		getBySubjectId: getBySubjectId,
		getBySubjectName: getBySubjectName,
		Create: Create,
		Update: Update,
		getNumberOfSubjects: getNumberOfSubjects,
		Delete: Delete
	};
};