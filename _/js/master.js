var app = angular.module('TylerButh', []);

/** Directive: currentTime
  * Adds the current time in Bangkok and updates it every 5 seconds
  */
function currentTime ($interval, dateFilter) {
	return function(scope, element, attrs) {
		element.text(dateFilter(new Date(), 'EEEE, h:mm a', '+0700'));
		$interval(function () { element.text(dateFilter(new Date(), 'EEEE, h:mm a', '+0700')); }, 5000);
    };
}
currentTime.$inject = ['$interval','dateFilter'];
app.directive('currentTime',currentTime);

/** Function: compareSkills
  * Compares the skills array
  */
function compareSkills(a,b) {
	if (a.level < b.level) {
		return -1;
	} else if (a.level > b.level){
		return 1;
	} else {
		if (a.name < b.name)
			return -1;
		if (a.name > b.name)
			return 1;
			return 0;
  	}
}

/** Controller: iController
  * Manages the skills and portfolio
  */

function iController($http, $scope) {
	// get a list of projects
	$http.get('/rest/get_portfolio.php').
	  success(function(data) {
		$scope.portfolio = data;
	  }).
	  error(function(data) { });

	// get a list of skills
	$http.get('/rest/get_skills.php').
  	  success(function(data) {
		$scope.skills = data.sort(compareSkills);
		$scope.curSkillKey = 0;
		$scope.curSkill = $scope.skills[0].name ? $scope.skills[0].name.toLowerCase() : '';
		$scope.curSkillDesc = $scope.skills[0].description;
  	  }).
  	  error(function(data) { });

	// selects a global skill to show all descriptions and filter the portfolio
	$scope.selectSkill = function(key) {
		if ($scope.curSkillKey === key) {
			key = 0;
		}
		// change current skill
		$scope.curSkillKey = key;
		$scope.curSkill = $scope.skills[key].name ? $scope.skills[key].name.toLowerCase() : '';
		$scope.curSkillDesc = $scope.skills[key].description;

		// remove all project based skill selections
		for (var i=0;i<$scope.portfolio.length;i++) {
			$scope.portfolio[i].selectedSkill = '';
		}
	}

	// shows the skill description for the selected skill on the individual project
	$scope.changeProjectSkill = function(key, skill) {
		if ($scope.portfolio[key].selectedSkill == skill) {
			$scope.portfolio[key].selectedSkill = '';
		} else {
			$scope.portfolio[key].selectedSkill = skill;
		}
	}
}
iController.$inject = ['$http', '$scope'];
app.controller('iController',iController);
