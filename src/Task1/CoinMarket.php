<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $currencies = [];

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        $maxPrice = 0;
        foreach ($this->currencies as $currency) {
            if ($currency->getDailyPrice()>$maxPrice) {
                $maxPrice = $currency->getDailyPrice();
            }
        }
        return $maxPrice;    
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}