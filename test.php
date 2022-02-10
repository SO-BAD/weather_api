
<?php
$time = ['day/', 'night/'];
$url = "https://www.cwb.gov.tw/V8/assets/img/weather_icons/weathers/svg_icon/";

for ($i = 0; $i < 2; $i++) {
    $str = $url . $time[$i];
    for ($j = 1; $j <= 42; $j++) {
        if ($j < 10) {
            $num = "0" . $j;
        } else {
            $num = $j;
        }
        // echo $str.$num.".svg"."<br>";

        $html =  file_get_contents($str . $num . ".svg");

        $myfile = fopen("./svg/".$time[$i].$num . ".svg", "w") or die("Unable to open file!");
        fwrite($myfile, $html);
        fclose($myfile);

    }
}




?>