<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

abstract class AbstractCoins implements Currency
{
    //const LOGO = self::LOGO;
    //public static $dailyPrice;
    private $name;
    
    public function __construct(float $price)
    {
        static::$dailyPrice = $price;
        $this->name = (new \ReflectionClass($this))->getShortName();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return static::$dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return static::LOGO;
    }
}