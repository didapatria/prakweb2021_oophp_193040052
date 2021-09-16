<?php

class Produk
{
  // property
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // constructor
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    // kegunaan this untuk mengambil isi property yang ada pada class yang bersangkutan ketika dibuat instansi
    // sedangkan pada parameter itu function atau method merupakan variabel lokal
  }

  // method
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
    // kegunaan this untuk mengambil isi property yang ada pada class yang bersangkutan ketika dibuat instansi
  }
}

// object type
class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// membuat object instance dari class
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

// membuat object instance dari class object type
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
