<?php
//fungsi vardump($) = menampilkan ke website
$array = ['Rafi', 'Zulfikar', ' kelas', 'b'];

//var_dump($array);

foreach ($array as $value) {
   echo $value . " ";
}
//menggunakan echo harus diberi vardump

<br/>
for ($i=0 ; $i < count($array) ; $i++ ) { 
   echo $array[$i] . " ";
}
?>