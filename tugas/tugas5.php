<?php
// Membuat associative array dengan data penemu-penemu terkenal di dunia
$penemuTerkenal = array(
    "Penemu 1" => array(
        "Nama" => "Thomas Edison",
        "Deskripsi" => "Thomas Edison adalah seorang penemu terkenal yang dikenal karena penemuan lampu pijar. Penemuan ini mengubah cara kita menggunakan pencahayaan.",
        "Bidang Penemuan" => "Penyinaran",
        "Tahun Penemuan" => "1879",
        "Gambar" => "thomas-edison.jpg"
    ),
    "Penemu 2" => array(
        "Nama" => "Alexander Graham Bell",
        "Deskripsi" => "Alexander Graham Bell adalah penemu telepon, sebuah penemuan yang membawa revolusi dalam komunikasi jarak jauh.",
        "Bidang Penemuan" => "Komunikasi",
        "Tahun Penemuan" => "1876",
        "Gambar" => "alexander-graham-bell.jpg"
    ),
    "Penemu 3" => array(
        "Nama" => "Marie Curie",
        "Deskripsi" => "Marie Curie adalah penemu radium dan polonium, serta salah satu ilmuwan paling terkenal dalam sejarah.",
        "Bidang Penemuan" => "Ilmu Kimia",
        "Tahun Penemuan" => "1898",
        "Gambar" => "marie-curie.jpg"
    ),
    "Penemu 4" => array(
        "Nama" => "Albert Einstein",
        "Deskripsi" => "Albert Einstein adalah ilmuwan fisika teoretis terkemuka yang dikenal karena teori relativitas khusus dan umum.",
        "Bidang Penemuan" => "Fisika",
        "Tahun Penemuan" => "1905",
        "Gambar" => "albert-einstein.jpg"
    ),
    "Penemu 5" => array(
        "Nama" => "Nikola Tesla",
        "Deskripsi" => "Nikola Tesla adalah penemu yang berkontribusi pada perkembangan teknologi listrik, termasuk aliran listrik tiga fase.",
        "Bidang Penemuan" => "Teknologi Listrik",
        "Tahun Penemuan" => "1887",
        "Gambar" => "nikola-tesla.jpg"
    ),
    "Penemu 6" => array(
        "Nama" => "Isaac Newton",
        "Deskripsi" => "Isaac Newton adalah seorang ilmuwan yang terkenal karena hukum gravitasi Newton dan kontribusinya pada matematika dan fisika.",
        "Bidang Penemuan" => "Fisika dan Matematika",
        "Tahun Penemuan" => "1687",
        "Gambar" => "isaac-newton.jpg"
    ),
    "Penemu 7" => array(
        "Nama" => "Leonardo da Vinci",
        "Deskripsi" => "Leonardo da Vinci adalah seorang jenius multitalenta dengan penemuan dalam berbagai bidang, termasuk ilmu pengetahuan dan seni.",
        "Bidang Penemuan" => "Beragam",
        "Tahun Penemuan" => "Abad ke-15 dan 16",
        "Gambar" => "leonardo-da-vinci.jpg"
    ),
    "Penemu 8" => array(
        "Nama" => "Guglielmo Marconi",
        "Deskripsi" => "Guglielmo Marconi adalah penemu radio dan salah satu pelopor dalam komunikasi nirkabel.",
        "Bidang Penemuan" => "Komunikasi Nirkabel",
        "Tahun Penemuan" => "1895",
        "Gambar" => "guglielmo-marconi.jpg"
    ),
    "Penemu 9" => array(
        "Nama" => "James Watt",
        "Deskripsi" => "James Watt adalah penemu mesin uap yang memainkan peran penting dalam Revolusi Industri.",
        "Bidang Penemuan" => "Mesin Uap",
        "Tahun Penemuan" => "1769",
        "Gambar" => "james-watt.jpg"
    ),
    "Penemu 10" => array(
        "Nama" => "Antonie van Leeuwenhoek",
        "Deskripsi" => "Antonie van Leeuwenhoek adalah penemu mikroskop yang membantu mengembangkan ilmu mikrobiologi.",
        "Bidang Penemuan" => "Mikroskopi",
        "Tahun Penemuan" => "Abad ke-17",
        "Gambar" => "antonie-van-leeuwenhoek.jpg"
    ),
);

// Mencetak tabel
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Deskripsi</th><th>Bidang Penemuan</th><th>Tahun Penemuan</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($penemuTerkenal as $penemu) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $penemu["Nama"] . "</td>";
    echo "<td>" . $penemu["Deskripsi"] . "</td>";
    echo "<td>" . $penemu["Bidang Penemuan"] . "</td>";
    echo "<td>" . $penemu["Tahun Penemuan"] . "</td>";
    echo "<td><img src='" . $penemu["Gambar"] . "' alt='" . $penemu["Nama"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo"</table>";
?>