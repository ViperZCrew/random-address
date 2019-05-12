<?php
/*Color*/
$green = "\033[92m";
$red = "\033[91m";
$cyan = "\033[36m";
$yellow = "\033[93m";
$bold = "\033[5m";
$white = "\033[0m";
$blue ="\033[34m";
/*Form*/
$date   = date('d-M-Y H:i');
//system("clear");
echo $red . "
 _____  _____   _____                _   _  _                     ______ _____                       
/  __ \/  __ \ |  __ \              | | | |(_)                   |___  //  __ \                      
| /  \/| /  \/ | |  \/  ___  _ __   | | | | _  _ __    ___  _ __    / / | /  \/ _ __   ___ __      __
| |    | |     | | __  / _ \| '_ \  | | | || || '_ \  / _ \| '__|  / /  | |    | '__| / _ \\ \ /\ / /
| \__/\| \__/\ | |_\ \|  __/| | | | \ \_/ /| || |_) ||  __/| |   ./ /___| \__/\| |   |  __/ \ V  V / 
 \____/ \____/  \____/ \___||_| |_|  \___/ |_|| .__/  \___||_|   \_____/ \____/|_|    \___|  \_/\_/  
                                              | |                                                    
                                              |_|                                      
";
echo $blue . "==================================";
echo $bold . $green . "\nCoder   : php.Script Code
Team    : Security Script
Code    : PHP
Version : 8.9.8.0
Note: Do not type to much count. \n";
echo $bold . $green . "DMYH    : $date\n";
echo $blue . "==================================\n";
echo $bold . $cyan . "Count      : ";
$count = trim(fgets(STDIN,1024));
echo $bold . $cyan . "Delay      : ";
$sleep = trim(fgets(STDIN,1024));
for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-us/p");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);
echo $blue . "\n -+-  MORE INFORMATION -+- \n";
echo $bold . $cyan . "[name : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
                " [address : ".$matches[1][8]."]".
                " [phone : ".$matches[1][9]."]\n";
echo $red . "\n -+- CARD INFORMATION -+- \n";
echo $bold . $yellow . "[email : ".$matches[1][10]."]".
                " [card number : ".str_replace(" ", "", $matches[1][14])."]".
                " [cvv : ".$matches[1][16]."]".
                " [exp-date : ".$matches[1][15]."]\n";
        sleep($sleep);
}
?>
