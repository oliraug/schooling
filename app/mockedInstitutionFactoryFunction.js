
var buildMockedInstitutions = function(){
	var _institutions = [{
		institutionId: 001,
		institutionName: "Makerere University Kampala"
		},
	{
		institutionId: 002,
		groupName: "Busoga College Mwiri"
		}
	];
	
	var getAll = function(){
		return _institutions;
	};
	var getByInstitutionId = function(institutionId){
		return _institutions[institutionId];
	};
	var getByInstitutionName = function(institutionName){
		return _institutions[institutionName];
	};
	var Create = function(institution){
		return _institutions.push(institution);
	};
	var Update = function(institutionId, institution){
		return _institutions[institutionId] = institution;
	};
	var Delete = function(institutionId){
		return _institutions.splice(institutionId(institutionId), 001);
	};
	var getNumberOfInstitutions = function(){
		return _institutions.length;
	};
	var institutionId = function(institutionId){
		return institutionId - 1;
	};
	return {
		getAll: getAll,
		getByInstitutionId: getByInstitutionId,
		getByInstitutionName: getByInstitutionName,
		Create: Create,
		Update: Update,
		getNumberOfInstitutions: getNumberOfInstitutions,
		Delete: Delete
	};
};