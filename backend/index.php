<?php
require_once 'vendor/autoload.php';

use App\Exchanges\DollarExchange;
use App\Exchanges\EuroExchange;
use App\Exchanges\PoundExchange;

$jp_yen = 1000;

$dollar = new DollarExchange($jp_yen);
$euro = new EuroExchange($jp_yen);
$pond = new PoundExchange($jp_yen);

echo sprintf('JPY %d<br>↓', $jp_yen);
echo '<br>';
echo $dollar->symbol($dollar->currencyConversion());
echo '<br>';
echo $euro->symbol($euro->currencyConversion());
echo '<br>';
echo $pond->symbol($pond->currencyConversion());
echo '<br>';