<?php
// Boot datei
require_once 'inc/boot.inc.php';
require_once 'inc/config.inc.php';


printf("env.php Page" . "\n");
printf("by Walter Gnadenberger\n");
printf("\n");
printf("------------------Environment--------------------\n");
printf("DB_DSN=%s\n",$DB_DSN);
$VAR1 = getenv("VAR1");

printf("TEST_VARIABLE=%s\n",$VAR1);

?>
