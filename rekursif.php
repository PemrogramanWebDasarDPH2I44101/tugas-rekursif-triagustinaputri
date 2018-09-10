<?php

function rekursif($kolom){

  global $i;

    rekursif2($i, $kolom);

    echo "<br>";

    if (--$kolom > $i){

        rekursif($kolom);

    }

}

function rekursif2($j, $kolom) {

	global $i;

    if ($j > $i - $kolom) {

        echo "*";

        rekursif2($j - 1, $kolom);

    }

}
?>
