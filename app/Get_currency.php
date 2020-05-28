<?php

namespace App;


class Get_currency
{
    public function show_currency(){
        $currency = json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5'), true);
        foreach ($currency as $curr) {
            if($curr['ccy'] == 'RUR') continue;
            echo '<li><p>'.$curr['ccy'].' - '.round($curr['buy'],2).' - '.round($curr['sale'],2).'</p></li>';
        }

    }
}
