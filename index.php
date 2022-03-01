<?php
// jangan lupa senin libur
// test update data
require_once 'API.covid.php';

$ID_all = get_covid('provinsi');

print_r($ID_all);
