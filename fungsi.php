<?php
// membuat fungsi
function hitungLuasLingkaran($jari){
    $phi = 3.14;
    $luas = $phi * $jari * $jari;
    return $luas;
}

// memanggil fungsi
echo hitungLuasLingkaran(5);
echo "<br>;"
echo hitungLuasLingkaran(7);
echo "<br>;"
echo hitungLuasLingkaran(9);
?>