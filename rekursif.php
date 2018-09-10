<?php 

function rekursif($kolom, $p){
  global $i;

    rekursif2($i, $kolom,$p);

    echo "<br>";

    if (--$kolom > $i){

        rekursif($kolom,$p);

    }

}
function rekursif2($j, $kolom,$print) {
	global $j;
    if ($j > $i - $kolom) {
        echo "$print";
        rekursif2($j - 1, $kolom,$print);

    }

}
$i = 0;
rekursif(5,"b");

echo "<br>/*================================================================================
==========================================================================*/<br><br>";

?>
