<?php

    // untuk membuat timestamp UNIX berdasarkan parameter tanggal dan waktu yang diberikan
    // mktime(Jam, Menit, Detik, Bulan, Tanggal, Tahun);
    echo date("l", mktime(0, 0, 0, 8, 9, 2007));
?>