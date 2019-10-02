<?php
// Boot datei
require_once 'inc/boot.inc.php';
require_once 'inc/config.inc.php';


printf("env.php Page" . "\r\n");
printf("by Walter Gnadenberger\r\n");
printf("\n");
printf("------------------Environment--------------------\n");
printf("DB_DSN=%s\n",$DB_DSN);
$VAR1 = getenv("VAR1");

printf("TEST_VARIABLE=%s\n",$VAR1);


echo "\r\n";
echo "-------------------------------------------------------\r\n";
$everything = get_defined_vars();
//printf("%s",$everything);
$a = print_r(var_dump($GLOBALS),1);
echo '<pre>';
echo htmlspecialchars($a);
echo '</pre>';

?>
