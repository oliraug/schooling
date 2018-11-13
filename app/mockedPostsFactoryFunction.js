
var buildMockedPosts = function(){
	var _posts = [{
		postId: 001,
		postBody: "How to test angular scripts?",
		user: "Masiga Moses",
		postDate: "21/8/2017"
		},
	{
		postId: 002,
		postBody: "What are the SOLID Principles of software development?",
		user: "Nabwire Cathy",
		postDate: "21/8/2017"
		}
	];
	
	var getAll = function(){
		return _posts;
	};
	var getByPostId = function(postId){
		return _posts[postId];
	};
	var getByPostBody = function(postBody){
		return _posts[postBody];
	};
	var Create = function(post){
		return _posts.push(post);
	};
	var Update = function(postId, post){
		return _posts[postId] = post;
	};
	var Delete = function(postId){
		return _posts.splice(postId(postId), 001);
	};
	var getNumberOfPosts = function(){
		return _posts.length;
	};
	var postId = function(postId){
		return postId - 1;
	};
	return {
		getAll: getAll,
		getByPostId: getByPostId,
		getByPostBody: getByPostBody,
		Create: Create,
		Update: Update,
		getNumberOfPosts: getNumberOfPosts,
		Delete: Delete
	};
};