<?php

/* 

    İf else de 3 yapı vardır. İf else durumları karşılaştıramızı ve 
    programa buna göre bir işlem yaptırmamızı söyler.



    if (koşul)
    {
        koşul sağlanırsa bu alanda ki kod çalışsın.
    }
    else
    {
        hiç bir koşul sağlanmadıysa bu alanda ki  kod çalışsın.
    }

    Temel kod bloğumuz budur. 

    Örnek verelim bir değişkenimiz olsun dğişkenimizin değeri 10 olsun ve eğer 
    5 den büyük ise sayı 5 den büyük yazsın 
    5den küçük ise sayı 5 den küçük yazsın.


    $sayimiz = 10;

    if ($sayimiz > 5)
    {
        echo "sayi 5'den büyük";
    }
    else
    {
        echo "Sayı 5'den küçük";
    }

    ---------------------------------
    Ekran çıktımız doğal olarak 1. koşul sağlandığından
    sayi 5'den büyük olarak çıkacaktır.
    ---------------------------------
    ---------------------------------
    peki sayimiz 5 den küçük olsaydı ? 
    ---------------------------------

    $sayimiz = 10;

    if ($sayimiz > 5)
    {
        echo "sayi 5'den büyük";
    }
    else
    {
        echo "Sayı 5'den küçük";
    }
    ---------------------------------
    Ekran çıktımız bu seferde Sayı 5'den küçük olacaktır.
    pekii şimdiye kadar hava hoş ilk hatamızla karşılaşma zamanı !

    ---------------------------------

    $sayimiz = 5;

    if ($sayimiz > 5)
    {
        echo "sayi 5'den büyük";
    }
    else
    {
        echo "Sayı 5'den küçük";
    }
    ---------------------------------
    eee sayimiz 5 ama ekran çıktımız Sayı 5'den küçük oldu 
    5 nasıl 5 den küçük olabilir

    bu yüzden 
    else if (diğer koşul)
    {
        çalışacak kod
    }
    gibi 2. 3. 4. .... gibi gibi koşullarımızı arttırabiliyoruz yanii

    ---------------------------------
    $sayimiz = 5;

    if ($sayimiz > 5)
    {
        echo "sayi 5'den büyük";
    }
    else if ($sayimiz < 5)
    {
        echo "Sayı 5'den küçük";
    }
    else
    {
        echo "Sayı 5 ";
    }

    ---------------------------------
    Şeklinde yazarak bir koşul daha eklemiş oldukk.



    Uygulayarak giderseniz çok daha iyi olur sizlere bu aşamadan sonra ufak uygulama
    görevleri vereceğim bunları mutlaka deneyin ve benim yazdıklarımı çalmayın ! :D

    Kendiniz yazarsanız , daha iyi olur.

    $sayimiz = 11;

    Sayımız tek mi çift mi tek ise ekrana tek çift ise ekrana çift yazdırın.
    Cevabı if-else-cevap.php de yer alıyor olucak. fakat bakmadan kendiniz deneyin.
*/
// Bu satırın altında öğrendikerinizi deneyebilirsiniz.

?>