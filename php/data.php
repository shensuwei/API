<?php
$id=$_GET["id"];
$id1=$_GET["id1"];
$data=array(
    array(
        array(
            "title"=>"angular.bind",
            "ex"=>"Returns a function which calls function fn bound to self (self becomes the this for fn). You can supply optional args that are prebound to the function. This feature is also known as partial application, as distinguished from function currying."
        ),
        array(
            "title"=>"angular.bootstrap",
            "ex"=>"Angular will detect if it has been loaded into the browser more than once and only allow the first loaded script to be bootstrapped and will report a warning to the browser console for each of the subsequent scripts. This prevents strange results in applications, where otherwise multiple instances of Angular try to work on the DOM."
        ),
    ),
    array(
        array(
            "title"=>"a",
            "ex"=>"Modifies the default behavior of the html A tag so that the default action is prevented when the href attribute is empty."
        ),
        array(
            "title"=>"form",
            "ex"=>"In Angular, forms can be nested. This means that the outer form is valid when all of the child forms are valid as well. However, browsers do not allow nesting of <form> elements, so Angular provides the ngForm directive, which behaves identically to form but can be nested. Nested forms can be useful, for example, if the validity of a sub-group of controls needs to be determined."
        ),

    ),
    array(
        array(
            "title"=>"angular.version",
            "ex"=>"An object that contains information about the current AngularJS version."
        )
    ),
    array(
        array(
            "title"=>"cacheFactory.Cache",
            "ex"=>"41"
        ),
        array(
            "title"=>"compile.directive.Attributes",
            "ex"=>"42"
        )

    )
    
);
echo json_encode($data[$id][$id1])
?>