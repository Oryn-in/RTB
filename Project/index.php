<?php
require_once "config.php";
spl_autoload_register(function($clsname){
    $path=include_once "app/libs/$clsname.php";
    if(file_exists($path))
        require_once $path;
});
$controller = "CustomerController";
$method="index";
$id="";
if(isset($_GET['url'])){
    $url=explode('/' ,rtrim($_GET['url'],'/'));
   $controller = ucfirst(strtolower($url[0]))."Controller";
    $method = $url[1]??"index";
    $id=$url[2]??'';
}
$path="app/controllers/$controller.php";
if(file_exists($path)){
    include_once "$path" ;
    $obj=new $controller();
    if(method_exists($obj,$method))
         $obj->$method($id);
    else{
        echo"4_0_4 not found";
    }
}else{
    echo"40d4 not found";
}

?>