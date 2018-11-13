
var buildMockedGroups = function(){
	var _groups = [{
		groupId: 001,
		groupName: "Software Engineering",
		groups: "Maths, Computer Science, Agriculture",
		user: "Masiga Moses"
		},
	{
		groupId: 002,
		groupName: "Accounts & Finance",
		groups: "Procurement, Hair Dressing",
		user: "Nabwire Cathy"
		}
	];
	
	var getAll = function(){
		return _groups;
	};
	var getByGroupId = function(groupId){
		return _groups[groupId];
	};
	var getByGroupname = function(groupname){
		return _groups[groupname];
	};
	var Create = function(group){
		return _groups.push(group);
	};
	var Update = function(groupId, group){
		return _groups[groupId] = group;
	};
	var Delete = function(groupId){
		return _groups.splice(groupId(groupId), 001);
	};
	var getNumberOfGroups = function(){
		return _groups.length;
	};
	var groupId = function(groupId){
		return groupId - 1;
	};
	return {
		getAll: getAll,
		getByGroupId: getByGroupId,
		getByGroupname: getByGroupname,
		Create: Create,
		Update: Update,
		getNumberOfGroups: getNumberOfGroups,
		Delete: Delete
	};
};