<?php
// Belajar Array Pada PHP
//  array adalah Tipe data dasar spserti integer atau booelan yang terdiri dari bentukan kumpulan tipe data lainnya.
// contoh pengunaan array
// $nama0 = "Ali";
// $nama1 = "Fajar";
// $nama2 = "adzan";
// $nama3 = "fahri";
// $nama4 = "Jus";

// echo $nama0;
// echo "<br>";
// echo $nama1;
// $siswa = ["ali", "fajar", "fahri", "jus"];



// $siswa = array("ali", "fajar", "fahri", "jus");
// $murid = ["ali", "fajar", "fahri", "jus", true, 9.8, 100];

// $siswa[6] = "uu";
// $siswa[7] = "david";
// $siswa[100] = "lolo";
// $siswa[] = "saya";

// unset($siswa[100]);

// echo "<pre>";
// print_r($siswa);
// echo "<pre>";



// $siswafix = ["bahtiar", "junaedi", ...$siswa, "holybalay"];
// echo "<pre>";
// // var_dump($siswa);
// print_r($siswafix);
// echo "<pre>";



// CARA MEMBUAT ARRAY
// penulisan yang pertama itu memakai keyword array
// $siswa = array("Ali", "Fajar", "adzan", "fahri", "jus");
// penulisan array ke 2 dengan short syntax array, yakni ,menggunakan tanda kurung siku tanpa keyword array
// $siswa = ["ali", "fajar", "adzan", "fahir", "joko", 100];

// echo "<pre>";
// var_dump($siswa);
// echo "<pre>";

// echo "<pre>";
// print_r($siswa);
// echo "<pre>";


// CARA MENGAKSES ELEMEN ARRAY
// Untuk mengakses elemen array, dilakukan dengan cara menulis nama variabel kemudian diikuti nomor index di dalam kurung siku, contohnya sebagai berikut :
// $siswa = ["ali", false, "adzan", "fahir", "joko"];

// echo $siswa[2];
// echo "<br>";
// echo "siswa itu bernama $siswa[0]";

// MENAMBAH ELEMEN ARRAY
// setelah membuat sebuah array yang sudah di definisikan, kita bisa mnambahkan elemen  baru kedalam array tersebut, contohnya :
// $siswa = ["ali", "fajar", "adzan", "fahir", "joko"];


// unset($siswa[6]);
// echo "<pre>";
// print_r($siswa);
// echo "<pre>";

// MENGHAPUS ELEMEN ARRAY
// Untuk menghapus eement pada array, kita bisa menggunakan fungsi unset(), contohnya sebagai berikut :
$siswa = array("ali", "fajar", "adzan", "fahir", "joko");
$siswa[] = "Arif";
$siswa[] = "Lulu";

// unset($siswa[0]);
// unset($siswa[2]);
$siswa = array_diff($siswa, array("ali", "adzan"));

echo "<pre>";
print_r($siswa);
echo "<pre>";


// ARRAY MULTI DIMENSI 
// Adalah suatu istilah untuk sebuah array dimana ia memiliki item berupa array yang lain, contohnya array 2 dimensi:

// $siswa = array(
//     array("arif", "furqan", "dika", "elzayn", "arya"),
//     array(7, 9),
//     array(6, 10),
//     array("ucup", "lilis", "ahgoda", "blibli", "coding")
// );
// echo "<pre>";
// print_r($siswa[3][4]);
// echo "<pre>";
// $siswa = [
//     ["nol", "dua", "tiga"], [100, 101, 1002], // index 0
//     [4, 5], [43, 44], // index 1
//     [8, 2], [34, 21], // index 2
//     [99, 6], [56, 90] // index 3
// ];

// echo "<pre>";
// print_r($siswa);
// echo "<pre>";

// contoh array 3 dimensi :
// $siswa = [
//     [
//         ["A", "B"], ["T", "O"], ["jaka", "febri", 5, 100, 123, 234, 1000],
//     ],
//     [
//         [1, 2], [3, 4], ["uu", 7, 12], ["rt", "rw"], ["judika"],
//     ],
//     [
//         ["ty", 89.0], ["iyu", "tus"], ["pakistan", "parakanmuncang", "jakarta", "bombai", "ciparay"], ["remedial", "lulus", "ngagntung"], ["Putus", "nikah", "balikan", "TTM", "TTS"],
//     ],
//     [
//         ["fadil", "zevaldo", "sarah", "sakti", "dzaki"],
//     ],

// ];


// echo "<pre>";
// print_r($siswa[2][4][2]);
// echo "<pre>";

// ASSOCIATIVE ARRAY
// $siswa = array(
//     "satu" => "arif",
//     "dua" => "adli",
//     "tiga" => "fadlan"
// );

// echo "<pre>";
// print_r($siswa["tiga"]);
