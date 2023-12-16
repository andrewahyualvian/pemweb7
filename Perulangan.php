<?php
// Perulangan For

for ($i = 0; $i < 0; $i++) {
    echo "<h2>Ini perulanagan ke-$i</h2>";
}

// Perulangan While
$ulangi = 0;

while($ulangi < 10){
    echo "\n<p>Ini adalah perulangan ke-$ulangi</p";
    $ulangi++;
}

// Perulangan Do/While
$ulangi = 10;

do {
    echo "\n<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

// Perulangan Foreach
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dengan MySQL",
    "Membuat Chat Bot dengan PHP",
];

echo "\n<h5>Judul Buku PHP:</h5>";
echo "\n<ul>";
foreach($books as $buku){
    echo "\n<li>$buku</li>";
}
echo "\n</ul>";

//Perulangan Bersarang (1)
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 10; $j++){
        echo "\nIni perulangan ke ($i, $j)<br>";
    }
}

//Perulangan Bersarang (2)
$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
        echo "\nIni perulangan ke ($i, $j)<br>";
    }
    $i++;
}
?>