<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>
    <h1>Data Kategori</h1>
    <?php
    // Mendapatkan tiga digit terakhir NRP (gantilah dengan NRP Anda)
    $nrp = "123456723"; // Ganti dengan NRP Anda
    $threeDigit = substr($nrp, -3);

    // Membuat associative array dengan 10 data
    $data = array(
        array(
            "Nama" => "Budaya 1",
            "Deskripsi" => "Deskripsi Budaya 1",
            "Gambar" => "budaya1.jpg",
            "Kategori" => "Budaya Daerah di Indonesia"
        ),
        array(
            "Nama" => "Penemu 1",
            "Deskripsi" => "Deskripsi Penemu 1",
            "Gambar" => "penemu1.jpg",
            "Kategori" => "Penemu-penemu terkenal di dunia"
        ),
        array(
            "Nama" => "Flora Fauna 1",
            "Deskripsi" => "Deskripsi Flora Fauna 1",
            "Gambar" => "flora_fauna1.jpg",
            "Kategori" => "Flora dan Fauna terancam punah"
        ),
        array(
            "Nama" => "Pahlawan 1",
            "Deskripsi" => "Deskripsi Pahlawan 1",
            "Gambar" => "pahlawan1.jpg",
            "Kategori" => "Pahlawan Nasional Indonesia"
        ),
        array(
            "Nama" => "Perusahaan 1",
            "Deskripsi" => "Deskripsi Perusahaan 1",
            "Gambar" => "perusahaan1.jpg",
            "Kategori" => "Perusahaan Teknologi"
        ),
        // Tambahkan data lain sesuai kebutuhan Anda
    );

    // Menentukan kategori berdasarkan tiga digit terakhir NRP
    $kategori = "";
    switch ($threeDigit % 5) {
        case 1:
            $kategori = "Budaya Daerah di Indonesia";
            break;
        case 2:
            $kategori = "Penemu-penemu terkenal di dunia";
            break;
        case 3:
            $kategori = "Flora dan Fauna terancam punah";
            break;
        case 4:
            $kategori = "Pahlawan Nasional Indonesia";
            break;
        case 0:
            $kategori = "Perusahaan Teknologi";
            break;
        default:
            $kategori = "Kategori Lainnya";
            break;
    }

    // Membuat tabel untuk menampilkan data dengan kategori yang sesuai
    echo '<table border="1">';
    echo '<tr><th>Nama</th><th>Deskripsi</th><th>Gambar</th><th>Kategori</th></tr>';
    foreach ($data as $item) {
        $item["Kategori"] = $kategori;
        echo '<tr>';
        echo '<td>' . $item['Nama'] . '</td>';
        echo '<td>' . $item['Deskripsi'] . '</td>';
        echo '<td><img src="' . $item['Gambar'] . '" width="100" height="100"></td>';
        echo '<td>' . $item['Kategori'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>
