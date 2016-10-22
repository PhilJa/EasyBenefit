<?php
  $kinder = 208.19; $zielkinder = 1000; $prokinder = $kinder / $zielkinder * 100;
  $senioren = 21.32; $zielsenioren = 1000; $prosenioren = $senioren / $zielsenioren * 100;
  $tiere = 99.63; $zieltiere = 1000; $protiere = $tiere / $zieltiere * 100;
  $natur = 26.33; $zielnatur = 1000; $pronatur = $natur / $zielnatur * 100;
  $entwicklung = 30.14; $zielentwicklung = 1000; $proentwicklung = $entwicklung / $zielentwicklung * 100;
  $gesundheit = 70.38; $zielgesundheit = 1000; $progesundheit = $gesundheit / $zielgesundheit * 100;
  $bildung = 55.76; $zielbildung = 1000; $probildung = $bildung / $zielbildung * 100;
  $armut = 66.20; $zielarmut = 1000; $proarmut = $armut / $zielarmut * 100;
  $sport = 29.23; $zielsport = 1000; $prosport = $sport / $zielsport * 100;
  $gesamt = $kinder + $senioren + $tiere + $natur + $gesundheit + $bildung + $entwicklung + $armut + $sport;
  $artikel = 433;
  $durchschnitt = $gesamt / $artikel;
  $datum = "22.10.2016";
?>
