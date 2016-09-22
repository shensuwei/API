angular.module("myapp",["ngAnimate","directives","ngRoute","controllers"])
        // 写配置文件
        .config(["$routeProvider",function($route){
            $route.when("/",{
                templateUrl:"tpl/list.html",
            }).when("/list/:id/:id1",{
                templateUrl:"tpl/list.html",
                // 自定义控制器
                controller:"list"
            }).otherwise("/")
        }])