<?php

/* 
        Sorumuzu buraya alalım 

            1-) Değeri 10 olan bir değişkeni 1er azaltarak 0'a kadar 10 ile 0 dahil olucak şekilde alt alta ekrana yazdıralım.
                Soru 1  Değerimiz 10 imiş ozaman şöyle yapalım.


               for($deger=10; $deger >= 0; $deger--)
                {
                  echo $deger;
               }


            2-) Bir dizi oluşturalım ve for ile hepsini ekrana yazdıralım.

            $dizi = ["Dizi Elemanım 1","Dizi Elemanım 2","Dizi elemanım 3","abarmıyorum daha fazla son eleman bu"];

            for($deger=0; $deger < count($dizi); $deger++)
            {
               echo  "$dizi[$deger]";
               echo "<br>";
            }
         


*/
echo "<h2>Soru 1</h2>";


for ($deger = 10; $deger >= 0; $deger--) {
   echo $deger;
   echo "<br>";
}


echo "<br> <h2>Soru 2</h2>";

$dizi = ["Dizi Elemanım 1","Dizi Elemanım 2","Dizi elemanım 3","abarmıyorum daha fazla son eleman bu"];

for($deger=0; $deger < count($dizi); $deger++)
{
   echo  "$dizi[$deger]";
   echo "<br>";
}

?>
