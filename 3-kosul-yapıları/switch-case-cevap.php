<?php

/* 

Şimdiii sorumuzu buraya alalım


    $sayimiz = 11;

    Sayımız tek mi çift mi tek ise ekrana tek çift ise ekrana çift yazdırın.

Şimdi bir sayıyı sürekli 2 ye bölünce 0 değerini alabiliyorsak çift 1 değerini alıyorsak tektir
yani bir sayının 2 ye karşı modunu alacağız bunu 2-operatorler klasöründe aritmetik-operatorler.php 
altında anlattım.  Pekii modunu aldık bunun eşitliğini nasıl sorguluyorduk ? 2-operatorler klasöründe
karsilastirma-operatorler.php de anlattım.
eee işimizde koşul tek ise tek yazdırmak çift ise çift yazdırmak.




$sayimiz = 11;

switch($sayimiz)
{
    case $sayimiz%2 = 0:
        echo "Sayı çift";
    break;

    case $sayimiz%2 = 1:
        echo "Sayı tek";
    break;

    default:
        echo "Hata !";
}



------------------
Ekran çıktımız tabiki Sayı tek olucaktır.

*/

$sayimiz = 11;

switch($sayimiz)
    {
    case $sayimiz%2 == 0:
        echo "Sayı çift";
    break;
    case $sayimiz%2 == 1:
        echo "Sayı tek";
    break;
    default:
        echo "Hata !";
    }

?>