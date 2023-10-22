<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Baris dan Kolom</title>
    <style>
        .box {
           
            margin: 1px;
            padding: 1px;
            display: flex;
        }

        .column {
            border: 1px solid gray;
            padding: 8px;
            margin: 1px;
        }
    </style>
</head>
<body>

<?php
// Jumlah baris
$jumlahBaris = 5;
// Looping untuk membuat baris
for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
    echo "<div class='box'>";
    // Looping untuk membuat kolom
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        echo "<div class='column'>$kolom</div>";
    }

    echo "</div>";
}
?>

</body>
</html>