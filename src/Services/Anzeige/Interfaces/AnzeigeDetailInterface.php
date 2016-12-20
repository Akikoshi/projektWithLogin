<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:09
 */

namespace Class152\Projekt\Services\Anzeige\Interfaces;


/**
 * Interface AnzeigeListInterface
 * @package Class152\Projekt\Services\Anzeige\Interfaces
 */
interface AnzeigeListInterface
{
    /**
     * @return string
     */
    public function getStrasse() : string;

    /**
     * @return string
     */
    public function getHausnummer(): string;

    /**
     * @return string
     */
    public function getPostleitzahl() : string;
}