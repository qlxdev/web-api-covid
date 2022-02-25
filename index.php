<?php
// jangan lupa senin libur
require_once 'API.covid.php';

$ID_all = get_covid('provinsi');

print_r($ID_all);
