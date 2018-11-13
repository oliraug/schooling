
var buildMockedUsers = function(){
	var _users = [{
		userId: 001,
		name: "Masiga Moses",
		username: "emacsone",
		password: "P@ssword",
		bithDate: "9/2/1990",
		institution: "MAK",
		iama: "Student"
	},
	{
		userId: 002,
		name: "Nabwire Cathy",
		username: "cathy.nabwire",
		password: "P@ssword",
		bithDate: "30/12/1990",
		institution: "YMCA",
		iama: "Student"
	}
	];
	
	var getAll = function(){
		return _users;
	};
	var getByUserId = function(userId){
		return _users[userId];
	};
	var getByUsername = function(username){
		return _users[username];
	};
	var Create = function(user){
		return _users.push(user);
	};
	var Update = function(userId, user){
		return _users[userId] = user;
	};
	var Delete = function(userId){
		return _users.splice(userId(userId), 001);
	};
	var getNumberOfUsers = function(){
		return _users.length;
	};
	var userId = function(userId){
		return userId - 1;
	};
	return {
		getAll: getAll,
		getByUserId: getByUserId,
		getByUsername: getByUsername,
		Create: Create,
		Update: Update,
		getNumberOfUsers: getNumberOfUsers,
		Delete: Delete
	};
};