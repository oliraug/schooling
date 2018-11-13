

var buildMockedDiscussions = function(){
	var _discussions = [{
		discussionId: 001,
		discussionBody: "How to test angular scripts?",
		user: "Komako James",
		discussionDate: "21/8/2017"
		},
	{
		discussionId: 002,
		discussionBody: "What are the SOLID Principles of software development?",
		user: "Mukama Gerald",
		discussionDate: "21/8/2017"
		}
	];
	
	var getAll = function(){
		return _discussions;
	};
	var getByDiscussionId = function(discussionId){
		return _discussions[discussionId];
	};
	var getByDiscussionBody = function(discussionBody){
		return _discussions[discussionBody];
	};
	var Create = function(discussion){
		return _discussions.push(discussion);
	};
	var Update = function(discussionId, discussion){
		return _discussions[discussionId] = discussion;
	};
	var Delete = function(discussionId){
		return _discussions.splice(discussionId(discussionId), 001);
	};
	var getNumberOfDiscussions = function(){
		return _discussions.length;
	};
	var discussionId = function(discussionId){
		return discussionId - 1;
	};
	return {
		getAll: getAll,
		getByDiscussionId: getByDiscussionId,
		getByDiscussionBody: getByDiscussionBody,
		Create: Create,
		Update: Update,
		getNumberOfDiscussions: getNumberOfDiscussions,
		Delete: Delete
	};
};