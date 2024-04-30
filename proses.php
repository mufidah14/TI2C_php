<?php
// Mengambil koneksi ke database
include "koneksi.php";

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $name = $_POST["name"];
    $address = $_POST["address"];
    $placebirth = $_POST["placebirth"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO siswa (Nama, ALamat, TTL, Jenis_kelamin, Usia) VALUES ('$name', '$address', '$placebirth', '$gender', '$age')";

    if (mysqli_query($db, $sql)) {
        echo "Data berhasil disimpan.<br>";

       // Menampilkan data yang baru saja disimpan
       echo "<h2>Data yang baru saja disimpan:</h2>";
       echo "<table border='1'>";
       echo "<tr><th>Nama</th><th>Alamat</th><th>TTL</th><th>Jenis Kelamin</th><th>Usia</th></tr>";
       echo "<tr><td>$name</td><td>$address</td><td>$placebirth</td><td>$gender</td><td>$age</td></tr>";
       echo "</table>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    // Menutup koneksi database
    mysqli_close($db);
}
?>