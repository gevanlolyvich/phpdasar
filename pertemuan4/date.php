<?php
    // date
    // echo date("l, d-M-Y");

    //time
    //unix timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();

    // echo date("l", time()+ 60*60*24*2);

    //mktime
    // membuat detik sendiri
    // format mktime(0,0,0,0,0,0)
    // jam. menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,07,25,2001));

    // strtotime
    echo date("l", strtotime("25 july 2001"));


?>