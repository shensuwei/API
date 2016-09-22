// 自定义控制器，还必须注入ngRoute模块
angular.module("controllers",["ngRoute"])
    .controller("list",function($scope,$routeParams,$http){
        $http.get("php/data.php?id="+$routeParams.id+"&"+"id1="+$routeParams.id1).success(function(e){
            $scope.data=e;
        })
    })