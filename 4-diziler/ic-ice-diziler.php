<?php

/* 
        İç içe diziler

        Peki dizi içinde dizi olur mu ????

        Neden olmasın örneğin adres bilgisinin İl İlçe Mahalle şeklinde depolamak istiyoruz ama
        adreside kişi bilgilerinde tutmak istiyoruz. hadi bunu yapalım



        $kisiBilgileri  = array (

                "isim" => "Ali Can",
                "numara" => "0551 034 6776",

                "adres" => [
                        "il" => "İzmir",
                        "ilce" => "Bornova",
                        "Mahalle" => "Atatürk"
                ]

                !!!!!! Önemli son dizi diye virgül koymadım sonradan 
                dizi gelecekse ], şekilde kapanması gerekiyordu !!!!!!

        );


       echo $kisiBilgileri['adres']['Mahalle'];


        ekran çıktısı

        Atatürk 

        olacaktır.


*/


?>