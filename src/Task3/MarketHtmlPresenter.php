<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $maxPrice = $market->maxPrice();

        $presentation = '<div class="container">
                            <table border="1" cellspacing="0" cellpadding="10">
                                <caption><b>Coin Market</b>, <b style="color:#ff989d">max price</b></caption> 
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Name: Price</th>
                                    </tr>
                                </thead>
                                <tbody>';        
        foreach ($market->getCurrencies() as $currency) {
            if ($currency->getDailyPrice() == $maxPrice) {
                $colorRow = ' bgcolor="#ff989d"'; //fill row with max price
            } else {
                $colorRow = '';
            }
            $presentation .= '<tr' . $colorRow . '><td><img src="' . $currency->getLogoUrl() . '"></td><td>' . $currency->getName() . ': ' . $currency->getDailyPrice() . '</td></tr>';
        }
        $presentation .= '</tbody></table></div>';
        return $presentation;
    }
}