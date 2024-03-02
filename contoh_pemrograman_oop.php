<?php

//membuat class (blueprint objek)
class produk
{
    //properti dari objek
    public $judul = 'judul',
        $penerbit = 'shounen jump',
        $harga = '20000';

    public function __construct($judul = 'judul', $penerbit = 'penerbit', $harga = 'harga')
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method (perilaku)
    public function getLabel()
    {

        //sama seperti mengambil variabel global di prosedural, tapi di oop memakai $this->
        $judul = $this->judul;
        $penerbit = $this->penerbit;
        $harga = $this->harga;
        return "$judul, $penerbit, $harga";
    }
}

//objek 3
//membuat objek baru dari blueprint (class)
$produk3 = new produk('naruto', 'shounenjump', '25000');

//objek 4
//membuat objek baru dari blueprint (class)
$produk4 = new produk('uncharted', 'neil druckman', '300000');

//objek 5
//membuat objek baru dari blueprint (class)
$produk5 = new produk('', '', '');

//munculin perilaku dari objek (method)
echo 'komik : ', $produk4->getLabel();
echo "<br>";
echo 'Game : ', $produk3->getLabel();
echo "<br>";
echo "Komik : ", $produk5->getLabel();