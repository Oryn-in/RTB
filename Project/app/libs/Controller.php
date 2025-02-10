<?php
class Controller{
    public function __construct(){
        // echo"this is base controller";
    }
    public function view($viewname,$viewdata=[],$h=true)
    {
        extract($viewdata);
        $viewname= str_replace('.','/',$viewname);
        if($h)
            include_once "app/views/header.php";
        include "app/views/$viewname.php";
        if($h)
            include_once "app/views/footer.php";
    }
    public function model($modelname){
        $path="app/models/$modelname.php";
        if(file_exists($path))
        {
            include_once $path;
            return new $modelname($modelname);
        }
        return null;
    }
 }
?>