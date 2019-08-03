app.controller("jsonoutput",function($scope,$http)
{
	$http.get("project.php").then(function(response)
	{
		$scope.details = response.data.record;
	});
});