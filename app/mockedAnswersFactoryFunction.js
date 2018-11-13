

var buildMockedAnswers = function(){
	var _answers = [{
		answersId: 001,
		answersBody: "jasmine, karma & protractor",
		user: "Komako James",
		answerDate: "21/8/2017"
		},
	{
		answersId: 002,
		answersBody: "Single Responsibility, Open/Closed, Liskov, Interface, & Dependency inversion",
		user: "Mukama Gerald",
		answerDate: "21/8/2017"
		}
	];
	
	var getAll = function(){
		return _answers;
	};
	var getByAnswersId = function(answersId){
		return _answers[answersId];
	};
	var getByAnswersBody = function(answersBody){
		return _answers[answersBody];
	};
	var Create = function(answers){
		return _answers.push(answers);
	};
	var Update = function(answersId, answers){
		return _answers[answersId] = answers;
	};
	var Delete = function(answersId){
		return _answers.splice(answersId(answersId), 001);
	};
	var getNumberOfAnswers = function(){
		return _answers.length;
	};
	var answersId = function(answersId){
		return answersId - 1;
	};
	return {
		getAll: getAll,
		getByAnswersId: getByAnswersId,
		getByAnswersBody: getByAnswersBody,
		Create: Create,
		Update: Update,
		getNumberOfAnswers: getNumberOfAnswers,
		Delete: Delete
	};
};