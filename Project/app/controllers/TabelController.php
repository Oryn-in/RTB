<?php 
class TabelController extends Controller{
    public function index()
    {
        $this->view("customer.index"); 
        echo"this is listing";
    }

    public function create()
    {
        //it will be used to create form
        echo"this is create of tabel";
    }

    public function store()
    {
        $cs = $this->model('Rtable');
        $info=[
            'table_code'=>'2251',
            'table_no'=>'101'
        ];
        $cs->createorupdate($info);
        exit;
    }

    public function edit($id)
    {
        //it will edit tabel 
        echo"this is edit of tabel";
    }

    public function update($id)
    {
        //it will update tabel in db
        echo"this is udate of tabel";
    }

    public function show($id)
    {
        //it will show  tabel in db
        echo"this is show of tabel";
    }

    public function destory()
    {
        //it will delte tabel in db
        echo"this will delete record";
    }
}
?>