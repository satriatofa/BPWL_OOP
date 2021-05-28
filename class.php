<?php
class manusia{
    var $nama;
    var $warna_kulit;

    function tampilkan_nama(){
        return $this->nama;
    }
    function warna_kulit(){
        return $this->warna_kulit;
    }
    function set_nama($nama){
        $this->nama=$nama;
    }
    function set_warna_kulit($tmp){
        $this->warna_kulit=$tmp;
    }
}
$manusia1 = new manusia();
$manusia1->set_nama("Satria Tofa Anugrah");
$manusia1->set_warna_kulit("Hitam Manis <br>");
echo $manusia1->tampilkan_nama();
echo "<br>";
echo $manusia1->warna_kulit();
echo "<br>";
$manusia2 = new manusia();
$manusia2->set_nama("Salsadilla Andara");
$manusia2->set_warna_kulit("Sawo Matang");
echo $manusia2->tampilkan_nama();
echo "<br>";
echo $manusia2->warna_kulit();
?>
