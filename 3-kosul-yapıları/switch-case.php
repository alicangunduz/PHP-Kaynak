<?php

/* 

    Switch-case , if else ile benzer mantıkta çalışan bir koşul yapısıdır.


    Örnek yapısını vermemiz gerekirse

    switch(kontrol edeceğimiz değer)
    {
        case değer:
            echo "vermek istediğimiz ekran çıktısı";
        break;

        case değer2:
            echo "vermek istediğimiz ekran çıktısı";
        break;

        default:
         echo "Koşullar sağlanmaz ise vericeğimiz çıktı";
        break;
        
    }


    Şeklindedir case arttırılabilinir.

    break ilede işlemi orda bitiriyoruz.

-----------------------------
    Örnek yapalım
-----------------------------

    $sayi = 20;

    switch($sayi)
    {
        case 10 > $sayi:
            echo "Sayı 10'dan küçüktür.";
        break;

        case 10 < $sayi:
            echo "Sayı 10'dan büyüktür.";
        break;

        default:
            echo "Sayı 10";
    }


    -------------------------------

    Ekran çıktımız  

    Sayı 10'dan büyüktür. olucaktır.


    İf else sorumuzu burada uygulayalım hadi  (Kesinlikle soru yaratmaya üşenmedim saçmalamayın ! :) )

    $sayimiz = 11;

    Sayımız tek mi çift mi tek ise ekrana tek çift ise ekrana çift yazdırın.
    Cevabı switch-case-cevap.php de yer alıyor olucak. fakat bakmadan kendiniz deneyin.


*/


?>