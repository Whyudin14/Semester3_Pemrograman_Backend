<?php
for($i = 0; $i < 10; $i++){
    echo "Looping ke $i <br>";
}

$animals = ["cat", "dog", "fish"];
foreach ($animals as $animal){
    echo "$animal <br>";
}

// membuat array asosiatif
$data_user = [
    'nama' => 'Wahyudin',
    'jurusan' => 'Teknik Informatika',
    'ipk' => 3.91
];

foreach ($data_user as $key => $value) {
    echo "$value <br>";
}
?>