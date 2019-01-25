<?php

$a = file_get_contents('abook.vcf');

preg_match_all('#EMAIL\:(.*)#', $a, $b);

var_dump($b[1]);