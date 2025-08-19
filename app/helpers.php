<?php

if (! function_exists('format_price')) {
    function format_price($price, $currency = 'FCFA') {
        $formatted = number_format($price, 2, ',', ' ');
        return "{$formatted} {$currency}";
    }
}
