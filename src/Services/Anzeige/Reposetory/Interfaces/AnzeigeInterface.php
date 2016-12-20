<?php
/**
 * Created by PhpStorm.
 * User: Heiset
 * Date: 29.11.2016
 * Time: 09:10
 */

namespace Class152\Projekt\Services\Anzeige\Reposetory\Interfaces;


use Class152\Projekt\Services\Anzeige\Reposetory\Entitys\AnzeigeEntity;

/**
 * Interface AnzeigeInterface
 * @package Class152\Projekt\Services\Anzeige\Reposetory\Interfaces
 */
interface AnzeigeInterface
{
    /**
     * @return array
     */
    public function getAnzeige() : array;

    /**
     * @param $line
     * @return AnzeigeEntity
     */
    public function askForSingleItem($line) : AnzeigeEntity;
}