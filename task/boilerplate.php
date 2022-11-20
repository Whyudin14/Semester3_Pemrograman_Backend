<?php
// membuat class binatang
class Animals{
    // property binatang
    public $binatang;

    // method construck -> mengisi data awal
    // parameter: data binatang (array)
    public function __construct($data){
        $this->binatang = $data;
    }

    // method index -> menampilkan data binatang
    public function index(){
    // gunakan foreach untuk menampilkan data binatang (array) 
        foreach ($this->binatang as $animals){
            echo $animals. "<br>";
        }
        echo "<hr>";
    }

    // method store -> menambahkan data baru
    // parameter: binatang baru
    public function store($binatang){
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->binatang, $binatang);
    }

    // method update -> mengupdate binatang
    // parameter: index & hewan baru
    public function update($index, $binatang){
        $this->binatang[$index] = $binatang;
    }

    // method delete -> menghapus binatang
    // parameter: index
    public function destroy($index){
        // gunakan method unset atau array_splice untuk menghapus data array
        unset($this->binatang[$index]);
    }
}

// membuat objek
// mengirim data binatang (array) ke constructor
$binatang = new Animals(['Semut', 'Amoba', 'Jangkrik']);

echo "<b> Index - Menampilkan seluruh binatang </b> <br>";
$binatang->index();
echo '<br>';

echo "<b> Store - Menambahkan binatang baru </b> <br>";
$binatang->store('Kecoa');
$binatang->index();
echo '<br>';

echo "<b> Update - Mengupdate binatang </b> <br>";
$binatang->update(1, 'Koala');
$binatang->index();
echo '<br>';

echo "<b> Destroy - Menghapus binatang </b> <br>";
$binatang->destroy(0);
$binatang->index();
echo '<br>';

echo "<b>Wahyudin_NIM.0110221140_3TI06</b>";
?>