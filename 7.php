<?php
function bandingkanNama($nama1, $nama2)
{
    $Nama1 = strlen($nama1);
    $Nama2 = strlen($nama2);


    if ($Nama1 > $Nama2) {
        $selisih = $Nama1 - $Nama2;
        echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 dengan selisih $selisih karakter\n";
    } elseif ($Nama2 > $Nama1) {
        $selisih = $Nama2 - $Nama1;
        echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 dengan selisih $selisih karakter\n";
    } else {
        echo "$nama1 dan $nama2 memiliki jumlah karakter yang sama.\n";
    }
}

bandingkanNama("Fema Flamelina Putri", "Artasya Legina");