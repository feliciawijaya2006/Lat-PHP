<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicia - Introduction to PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        h1 {
            font-size: 1.5em;
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        div {
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            h1 {
                font-size: 1.2em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <div>
            <?php
            // 1. Tampilkan text "Hello World"
            echo "Hello World";
            ?>
        </div>

        <h1>10 Baris Hello World</h1>
        <div>
            <?php
            // 2. Tampilkan 10 baris text "Hello World"
            for ($i = 0; $i < 10; $i++) {
                echo "Hello World<br>";
            }
            ?>
        </div>

        <h1>10 Baris Hello World dengan Baris Genap Spesial</h1>
        <div>
            <?php
            // 3. Tampilkan 10 baris text "Hello World", tapi setiap baris genap ditambah text "Hello World - [no baris]"
            for ($i = 1; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo "Hello World - $i<br>";
                } else {
                    echo "Hello World<br>";
                }
            }
            ?>
        </div>

        <h1>Nama Bulan</h1>
        <div>
            <?php
            // 4. Buat array berisi nama bulan dari Januari hingga Desember, dan tampilkan
            $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            foreach ($months as $month) {
                echo "$month<br>";
            }
            ?>
        </div>

        <h1>Nama Bulan dan Hari Libur Nasional</h1>
        <div>
            <?php
            // 5. Buat array 2 dimensi, dimana index pertama menyimpan nama bulan dan index kedua menyimpan hari libur nasional di bulan tersebut
            $monthsHolidays = [
                ["Januari", "Tahun Baru"],
                ["Februari", "Imlek"],
                ["Maret", "Nyepi"],
                ["April", "Paskah"],
                ["Mei", "Hari Buruh"],
                ["Juni", "Waisak"],
                ["Juli", "Idul Adha"],
                ["Agustus", "Hari Kemerdekaan"],
                ["September", "Tahun Baru Islam"],
                ["Oktober", "Maulid Nabi"],
                ["November", "Tidak Ada Libur Nasional"],
                ["Desember", "Natal"]
            ];

            foreach ($monthsHolidays as $monthHoliday) {
                echo "{$monthHoliday[0]} - {$monthHoliday[1]}<br>";
            }
            ?>
        </div>

        <h1>Operasi Aritmatika</h1>
        <div>
            <?php
            // 6. Buat 4 functions untuk membuat pengurangan, perkalian, pembagian dan penjumlahan
            function penjumlahan($a, $b) {
                return $a + $b;
            }

            function pengurangan($a, $b) {
                return $a - $b;
            }

            function perkalian($a, $b) {
                return $a * $b;
            }

            function pembagian($a, $b) {
                if ($b == 0) {
                    return "Tidak dapat dibagi dengan 0";
                }
                return $a / $b;
            }

            $a = 23;
            $b = 2;
            echo "Hasil penjumlahan $a dan $b adalah " . penjumlahan($a, $b) . "<br>";
            echo "Hasil pengurangan $a dan $b adalah " . pengurangan($a, $b) . "<br>";
            echo "Hasil perkalian $a dan $b adalah " . perkalian($a, $b) . "<br>";
            echo "Hasil pembagian $a dan $b adalah " . pembagian($a, $b);
            ?>
        </div>
    </div>
</body>
</html>
