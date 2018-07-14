<?php
function TCKNValidation($TCKN) {
   
   if(strlen($TCKN)!=11) // girilen TCKN nin 11 haneli olduğunun kontrolü
   {
       return false;
   }


        for ($i = 0; $i < 11; $i++) {


            $rakamlar[$i]=(int)$TCKN[$i];

        }

$Toplam1 =$rakamlar[0] + $rakamlar[2] + $rakamlar[4] + $rakamlar[6] + $rakamlar[8]; // 7 ile çarpılacak sayıları toplamı

$Toplam2 = $rakamlar[1] + $rakamlar[3] + $rakamlar[5] + $rakamlar[7]; // 7 katından çıkarılacak sayıları toplamı

$Toplam3 = $Toplam1 + $Toplam2 + $rakamlar[9];

$KontrolSayisi = $Toplam1 * 7;
$KontrolSayisi2 = $KontrolSayisi - $Toplam2;

        if($KontrolSayisi2 % 10 == $rakamlar[9] &  $Toplam3 % 10 == $rakamlar[10] ){

           return true;
        }
    
        else {
           return false;
        }
    
}
?>
