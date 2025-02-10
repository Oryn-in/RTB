<?php
class Model extends mysqli {
    protected $tabel , $key="id";
    public function __construct($tabel)
    {
        parent::__construct (HOSTNAME,USERNAME,PASSWORD,DBNAME);
        if (isset($this->tabel)){
            $this->tabel=$tabel;
        }
    }
    public function createorupdate(array $data,$id=null){
        $sql="insert into $this->tabel set";
        $where="";
        if ($id){
            $sql= "update $this->tabel set";
            $where=" where $this->key = $id";
        }
        foreach($data as $colname=>$colvalue){
            $sql.="$colname='".addslashes( $colvalue)."',";
        }
    $sql = substr($sql , 0,-1).$where;
    if($this->query($sql)){
        return ($id) ?$id:$this->insert_id;
    }
    return null;
    }

}
?>