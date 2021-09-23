<?php

// define('NAMA', 'Adinda Fadhil Patria');
// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;

// class Coba
// {
//   const NAMA = 'Adinda';
// }

// echo Coba::NAMA;

// define() tidak bisa disimpan di dalamclass
// sedangkan,
// const bisa disimpan di dalam class

// echo __FILE__;

// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
