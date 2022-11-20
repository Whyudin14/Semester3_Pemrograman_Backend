<?php
class Person{
// membuat property
    public $nama;
    public $alamat;
    public $jurusan;
// membuat method (function)
    public function setNama($data){
        $this->nama = $data;
    }

    public function getNama(){
        return $this->nama;
    }
// membuat constructor
    public function __construct($nama, $alamat, $jurusan){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;        
    }
}

$way = new Person("Wahyudin", "Bekasi", "Teknik Informatika");
$ismail = new Person("Ismail Marjuki", "Garut", "Sistem Informasi");

echo $way->getNama();
echo "<br>";
echo $ismail->getNama();

// $mahasiswa = [
//     [   
//     'nama' => 'Wahyudin', 
//     'jurusan' => 'Teknik Informatika',
//     ],
//     [   
//     'nama' => 'Ismail Marjuki', 
//     'jurusan' => 'Sistem Informasi',
//     ],
// ];

// foreach ($mahasiswa as $nama) {
// $person = new Person();
// $person->setNama($mhs['nama']);
// echo $person->getNama();
// echo "<br>";
// }

// $way = new Person();
// $way->setNama("Wahyudin");
// echo $way->getNama();
// echo "<br>";

// $ismail = new Person();
// $ismail->setNama("Ismail Marjuki");
// echo $ismail->getNama();
?>