<?php
//Datas
date_default_timezone_set('America/Sao_Paulo');
//echo date('d/m/Y H:i:s');

$date = date('Y-m-d'); //Date
$datetime = date('d/m/Y H:i:s'); //Datetime
//echo $datetime;

//Time
$time = time();
//echo date('d/m/y', $time);

//MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
//echo date('d/m/y - h:i', $data_pagamento);

//strtotime
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date ('d/m/y', $data);