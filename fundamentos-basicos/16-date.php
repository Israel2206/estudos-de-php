<?php
// Datas
date_default_timezone_set('America/Bahia');
echo date('d/m/Y H:i:s A');

echo"<hr>";

$date = date('Y-m-d');

$data_pagamento = mktime(15, 30, 00, 02, 15, 2026);
echo date('d/m - h:i', $data_pagamento);

$data = '2019-04-10 13:30:00';

echo '<hr>';

$data = strtotime($data);

echo date('d/m/Y');
?>
