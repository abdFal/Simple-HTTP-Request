<?php
// filename: greeting.php

// Ambil nilai dari parameter nama dan class yang dikirim melalui URL
$nama = filter_input(INPUT_GET, 'nama', FILTER_SANITIZE_STRING);
$class = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING);

// Buat array untuk menyimpan data siswa
$data = array(
    'nama' => $nama,
    'class' => $class
);

// Cek apakah data siswa sudah benar
if (!empty($data['nama']) && !empty($data['class'])) {
    // Kirimkan response sebagai output biasa
    echo "Nama: " . $data['nama'] . "<br>";
    echo "Kelas: " . $data['class'];

} else {
    // Kirimkan response error jika data siswa tidak benar
    header('HTTP/1.1 400 Bad Request');
    echo 'Data siswa tidak benar';
}

?>
