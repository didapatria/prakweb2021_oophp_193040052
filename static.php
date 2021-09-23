<?php

// class ContohStatic
// {
//   // property
//   public static $angka = 1;

//   // method
//   public static function halo()
//   {
//     return "Halo " . self::$angka++ . " kali.";
//   }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
  // property
  public static $angka = 1;

  //method
  public function halo()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}

// membuat object instance dari class
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
