<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY 2 DIMENSI</title>
</head>

<body>
    <h1>Contoh Penggunaan Array 2 Dimensi</h1>

    <!-- <table border="1">
        <!-- UNTUK MEMBUAT SEBUAH TAVEL -->
    <!-- <tr>
        <th>Nama</th>
        <td>Jurusan</td>
        <td>Jenis Kelamin</td>
        <td>Usia</td>
    </tr> -->


    <?php

    $menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Olahraga",
                    "subMenu" => [
                        [
                            "nama" => "Bola"
                        ],
                        [
                            "nama" => "Bulu Tangkis"
                        ]
                    ]
                ],
                [
                    "nama" => "Politik"
                ],
                [
                    "nama" => "Manca Negara"
                ]
            ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ],
    ];
    // echo "<pre>";
    // print_r($menu);
    // echo "<pre>";
    function tampilkanMenuBertingkat(array $menu)
    {
        echo "<ul>";
        foreach ($menu as $key => $item) {
            echo "<li>{$item['nama']}</li>";
            if (@$item['subMenu'] && count($item['subMenu'])) {
                tampilkanMenuBertingkat($item['subMenu']);
            }
        }
        echo "</ul>";
    }
    // tampilkanMenuBertingkat($menu);

    // $siswa = array(
    //     array("Dika", "RPL", "laki-laki", 17),
    //     array("Juned", "TKRO", "laki-laki", 18),
    //     array("Rosa", "DPIB", "perempuan", 17),
    //     array("Langi", "RPL", "laki-laki", 20),
    //     array("Keysa", "RPL", "laki-laki", 20)
    // );

    // for ($i = 0; $i < 5; $i++) {
    //     echo "<tr>";
    //     for ($a = 0; $a < 4; $a++) {
    //         echo "<td>" . $siswa[$i][$a] . "</td>";
    //     }
    //     echo "</tr>";
    // }
    ?>
    <!-- </table> -->
</body>

</html>