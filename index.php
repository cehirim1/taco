<?php
//code seen on the slide
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require that autoload file
//The require_once expression is identical to
// require except PHP will check if the file has
// already been included, and if so, not include (require) it again.
//"require" and "require_once"  throw a fatal error
// if the file is not existing  and stop the script execution


//In order to avoid having to include all your
// classes into your project, Fat Free allows you
// to use the autoloading feature, which is a way
// to include classes only at the time you really
// need them. So, to invoke all our classes, we only need to type:
require_once ('vendor/autoload.php'); //every other class we need is stored in the vendor

//create an instance of the Base Class -
// instantiating Base class and call instance function, then store it in a variable $f3
$f3 = Base:: instance();


//Tutorials - create a class to reduce redundancy of routes and have our
//route definition with the class signature instead of set and get or view etc
//class Main{
//
//
//    function render(){
//        echo 'Hello, world! - From custom class Main';
//    }
//    function  sayHello(){
//        echo 'Hello, babe!';
//    }
//}

//define a default route - this step is done before we invoke the run method
// a single slash after get is the route directory of my project
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/home.html');
});


//set a global variable from the base class, we can also get variables from base class
//$f3->set('message', 'Hello, world!');//takes a variable and a value

//route maps a url to a web page/ Here, our index file is serving as the controller
// grabbing the request and returning as response as the view page
//$f3->route('GET /', 'Main->render'//function($f3){
//Tutorial - providing access to variable in line 38 by passing it to the function to get message
//1a. $view = new Template();//a class that lives in F3 used to display view pages, instantiating temp obj here
//1b. echo $view->render('views/home.html');
//1c. I can type https://cehirim.greenriverdev.com/sdev328/MVC_F3-practice/views/home.html
// and bypass controller, but we don't want that happening for security reasons and we will look at it nextweek
//2. echo $f3->get('message');
//3. replace function definition with the custom function we created

//}
//);

//$f3->route('GET /', 'Main->sayHello');
//run fat free ->invokes run method like dot in Java
$f3->run();

