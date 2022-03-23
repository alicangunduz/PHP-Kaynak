<?php

/* 

Foreach diziler veya nesnelerin içinde gezmemize yarar.

Örneğin bir dizi oluşturalım , ve foreach ile hepsini ekrana yazdıralım.
$diziler = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];


foreach ($diziler as $dizi) {
    echo $dizi;
    echo "<br>";
}

Foreach döngüsünde index numarasınada doğrudan erişebiliriz.

$key => $val, $i => $number

İndex numarasına ve değerine verdiğiniz isimlerin bir önemi yoktur.

foreach ($diziler as $key => $val) { 
    echo $key + 1 . '. numaralı sayı = ' . $val;
}


for'dan daha kısa bir şekilde yapmış olduk :)  sıra sizde sizde mutlaka kopyalamadan yazarak deneyin
yazmanız el alışkanlığı kazanadıracaktır.



*/


?>