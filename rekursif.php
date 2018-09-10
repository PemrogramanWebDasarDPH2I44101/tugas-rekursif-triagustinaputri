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

echo "<br>/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/<br><br>";

function Perulangan($p){
 	echo "$p";
 	if ($p < 1) {
 		$p++;
 		 	Perulangan($p);
 	}

}
function Perulangan2($y){
	echo "$y";
 	if ($y < 2) {
 		$y++;
 			Perulangan2($y);
 	}
}
function Perulangan3($w){
	echo "$w";
 	if ($w < 3) {
 		$w++;
 			Perulangan3($w);
 	}
}
function Perulangan4($x){
	echo "$x";
 	if ($x < 4) {
 		$x++;
 			Perulangan4($x);
 	}
}
function Perulangan5($m){
	echo "$m";
 	if ($m < 5) {
 		$m++;
 			Perulangan5($m);
 	}
}
function Gabungan(){
echo Perulangan(1);
echo "<br>";
echo Perulangan2(1);
echo "<br>";
echo Perulangan3(1);
echo "<br>";
echo Perulangan4(1);
echo "<br>";
echo Perulangan5(1);
}

echo Gabungan();
?>
