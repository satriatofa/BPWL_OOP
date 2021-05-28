<?php
class database{
    
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "bpwl_oop";
    var $con ;
    function __construct(){

        $this->con=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con,"select * from oop_bpwl");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    
    function input ($nama,$alamat,$usia){
        mysqli_query($this->con,"insert into oop_bpwl values('','$nama','$alamat','$usia')");
    }
    function hapus ($id){
        mysqli_query($this->con,"delete from oop_bpwl where id='$id'");
    }
    function edit($id,$nama,$alamat,$usia){
        mysqli_query($this->con,"update oop_bpwl set nama ='$nama', alamat='$alamat', usia='$usia' where id='$id'");
    }
}
?>

