<?php

// define ('NAMA', 'Riksa Kusumah');
// echo NAMA;

// echo"<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba{
//     const NAMA = 'Riksa';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __Class__;
}

$obj = new Coba;
echo $obj->kelas;
?>