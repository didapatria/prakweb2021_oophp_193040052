<?php

use Produk as GlobalProduk;

class Produk
{
  // property
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

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

  // setter
  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  // getter
  public function getJudul()
  {
    return $this->judul;
  }

  // setter
  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  // getter
  public function getPenulis()
  {
    return $this->penulis;
  }

  // setter
  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  // getter
  public function getPenerbit()
  {
    return $this->penulis;
  }

  // setter
  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  // getter
  public function getDiskon()
  {
    return $this->diskon;
  }

  // setter
  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  // getter
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  // method
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
    // kegunaan this untuk mengambil isi property yang ada pada class yang bersangkutan ketika dibuat instansi
  }

  // method
  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

// inheritance
class Komik extends Produk
{
  // property
  public $jmlHalaman;

  // constructor
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  // method
  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

// inheritance
class Game extends Produk
{
  // property
  public $waktuMain;

  // constructor
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }

  // method
  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Adinda Fadhil Patria");
echo $produk1->getPenulis();
