<?php 
class CustomerController extends Controller
{
   
    public function index()
    {
        //it will show listing
        $tittle = "Customer Lisitng";
        $data="this is my data";
       
        $this->view("customer.index",compact('data','tittle') );
    }

    public function create()
    {
        //it will be used to create form
        echo"this is create of customer";
    }

    public function store()
    {
        //it will storecustomer in db
        echo"this is store";
    }

    public function edit($id)
    {
        //it will editcustomer 
        echo"this is edit of customer";
    }

    public function update($id)
    {
        //it will updatecustomer in db
        echo"this is udate of customer";
    }

    public function show($id)
    {
        //it will show customer in db
        echo"this is show of customer";
    }

    public function destory()
    {
        //it will deltecustomer in db
        echo"this will delete record";
    }
}
?> 